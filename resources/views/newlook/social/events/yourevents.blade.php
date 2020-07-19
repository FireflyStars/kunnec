@extends('layouts.newheader.header')
@section('title', 'Your Events')
@section('content')
<div class="card">
            <div class="card-header d-flex justify-content-between" style="background-color:#009900;">
              <h5 class="mb-0" style="color:#FFFFFF;">
                  <img src="{{ asset('newlook/images/logos/K_Logo6.png') }}" height="40px" width="60px"/> My Events
              </h5>
            </div>
            <div class="card-body fs--1">
              <div class="row">
                  @foreach($events as $event)
                    <a href="{{ route('event.show', $event->id) }}">
                      <div class="col-md-6 h-100">
                        <div class="media btn-reveal-trigger">
                              <div class="calendar">
                                  <span class="calendar-month">
                                      @php
                                         $mo = Carbon\Carbon::parse($event->start_date)->format('m') 
                                      @endphp
                                      {{ date("F", mktime(0, 0, 0, $mo, 1)) }}
                                  </span>
                                  <span class="calendar-day">
                                    {{ Carbon\Carbon::parse($event->start_date)->format('d') }}
                                  </span>
                              </div>
                              <div class="media-body position-relative pl-3">
                                <h6 class="fs-0 mb-0">
                                      <a href="{{ route('event.show', $event->id) }}"> 
                                          {{ $event->title }}
                                          <span class="badge badge-soft-success rounded-capsule">
                                            {{ ucfirst($event->ticket_type) }}
                                          </span>
                                      </a>
                                </h6>
                                <p class="mb-1">Organized by <a href="#!" class="text-700">{{ $event-> organizer }}</a></p>
                                <p class="text-1000 mb-0">Time: {{ $event->start_time }}</p>
                                <p class="text-1000 mb-0">Duration: 
                                  {{ $event->start_date }} - {{ $event->end }}
                                </p>
                                {{ $event->address }}
                                <hr class="border-dashed border-bottom-0" />
                              </div>
                        </div>
                      </div>
                    </a>
                  @endforeach
              </div>
            </div>
        </div>
@endsection