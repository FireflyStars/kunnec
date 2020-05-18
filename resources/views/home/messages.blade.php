@extends('layouts.header')
@section('content')
  <div id="app">
    <div class="app-content content">
      <br />
      <div class="sidebar-left sidebar-fixed">
        <div class="sidebar">
          <div class="sidebar-content card d-none d-lg-block">
            <div class="card-body chat-fixed-search">
              <fieldset class="form-group position-relative has-icon-left m-0">
                <input type="text" class="form-control" id="iconLeft4" placeholder="Search user">
                <div class="form-control-position">
                  <i class="ft-search"></i>
                </div>
              </fieldset>
            </div>
            <div id="users-list" class="list-group position-relative">
              <div class="users-list-padding media-list">
                      <!-- Friends list start -->
                      <a href="{{ Url('/messages') }}" class="media border-0">
                        <div class="media-left pr-1">
                          <span class="avatar avatar-md avatar-online">
                            <img class="media-object rounded-circle" src="{{ asset('images/2u.png') }}">
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body w-100">
                          <h6 class="list-group-item-heading"> Asad Mukhtar
                            <span class="font-small-3 float-right primary">4:14 AM</span>
                          </h6>
                          <p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Okay
                            <span class="float-right primary"><i class="font-medium-1 icon-pin blue-grey lighten-3"></i></span>
                          </p>
                        </div>
                      </a>
                      <a href="{{ Url('/messages') }}" class="media border-0">
                        <div class="media-left pr-1">
                          <span class="avatar avatar-md avatar-online">
                            <img class="media-object rounded-circle" src="{{ asset('images/2u.png') }}">
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body w-100">
                          <h6 class="list-group-item-heading"> Asad Mukhtar
                            <span class="font-small-3 float-right primary">4:14 AM</span>
                          </h6>
                          <p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Okay
                            <span class="float-right primary"><i class="font-medium-1 icon-pin blue-grey lighten-3"></i></span>
                          </p>
                        </div>
                      </a>
                      <a href="{{ Url('/messages') }}" class="media border-0">
                        <div class="media-left pr-1">
                          <span class="avatar avatar-md avatar-online">
                            <img class="media-object rounded-circle" src="{{ asset('images/2u.png') }}">
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body w-100">
                          <h6 class="list-group-item-heading"> Asad Mukhtar
                            <span class="font-small-3 float-right primary">4:14 AM</span>
                          </h6>
                          <p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Okay
                            <span class="float-right primary"><i class="font-medium-1 icon-pin blue-grey lighten-3"></i></span>
                          </p>
                        </div>
                      </a>
                      <a href="{{ Url('/messages') }}" class="media border-0">
                        <div class="media-left pr-1">
                          <span class="avatar avatar-md avatar-online">
                            <img class="media-object rounded-circle" src="{{ asset('images/2u.png') }}">
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body w-100">
                          <h6 class="list-group-item-heading"> Asad Mukhtar
                            <span class="font-small-3 float-right primary">4:14 AM</span>
                          </h6>
                          <p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Okay
                            <span class="float-right primary"><i class="font-medium-1 icon-pin blue-grey lighten-3"></i></span>
                          </p>
                        </div>
                      </a>
                      <a href="{{ Url('/messages') }}" class="media border-0">
                        <div class="media-left pr-1">
                          <span class="avatar avatar-md avatar-online">
                            <img class="media-object rounded-circle" src="{{ asset('images/2u.png') }}">
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body w-100">
                          <h6 class="list-group-item-heading"> Asad Mukhtar
                            <span class="font-small-3 float-right primary">4:14 AM</span>
                          </h6>
                          <p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Okay
                            <span class="float-right primary"><i class="font-medium-1 icon-pin blue-grey lighten-3"></i></span>
                          </p>
                        </div>
                      </a>
                      <a href="{{ Url('/messages') }}" class="media border-0">
                        <div class="media-left pr-1">
                          <span class="avatar avatar-md avatar-online">
                            <img class="media-object rounded-circle" src="{{ asset('images/2u.png') }}">
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body w-100">
                          <h6 class="list-group-item-heading"> Asad Mukhtar
                            <span class="font-small-3 float-right primary">4:14 AM</span>
                          </h6>
                          <p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Okay
                            <span class="float-right primary"><i class="font-medium-1 icon-pin blue-grey lighten-3"></i></span>
                          </p>
                        </div>
                      </a>
                      <a href="{{ Url('/messages') }}" class="media border-0">
                        <div class="media-left pr-1">
                          <span class="avatar avatar-md avatar-online">
                            <img class="media-object rounded-circle" src="{{ asset('images/2u.png') }}">
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body w-100">
                          <h6 class="list-group-item-heading"> Asad Mukhtar
                            <span class="font-small-3 float-right primary">4:14 AM</span>
                          </h6>
                          <p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Okay
                            <span class="float-right primary"><i class="font-medium-1 icon-pin blue-grey lighten-3"></i></span>
                          </p>
                        </div>
                      </a>
                      <a href="{{ Url('/messages') }}" class="media border-0">
                        <div class="media-left pr-1">
                          <span class="avatar avatar-md avatar-online">
                            <img class="media-object rounded-circle" src="{{ asset('images/2u.png') }}">
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body w-100">
                          <h6 class="list-group-item-heading"> Asad Mukhtar
                            <span class="font-small-3 float-right primary">4:14 AM</span>
                          </h6>
                          <p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Okay
                            <span class="float-right primary"><i class="font-medium-1 icon-pin blue-grey lighten-3"></i></span>
                          </p>
                        </div>
                      </a>
                      <a href="{{ Url('/messages') }}" class="media border-0">
                        <div class="media-left pr-1">
                          <span class="avatar avatar-md avatar-online">
                            <img class="media-object rounded-circle" src="{{ asset('images/2u.png') }}">
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body w-100">
                          <h6 class="list-group-item-heading"> Asad Mukhtar
                            <span class="font-small-3 float-right primary">4:14 AM</span>
                          </h6>
                          <p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Okay
                            <span class="float-right primary"><i class="font-medium-1 icon-pin blue-grey lighten-3"></i></span>
                          </p>
                        </div>
                      </a>
                      <a href="{{ Url('/messages') }}" class="media border-0">
                        <div class="media-left pr-1">
                          <span class="avatar avatar-md avatar-online">
                            <img class="media-object rounded-circle" src="{{ asset('images/2u.png') }}">
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body w-100">
                          <h6 class="list-group-item-heading"> Asad Mukhtar
                            <span class="font-small-3 float-right primary">4:14 AM</span>
                          </h6>
                          <p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Okay
                            <span class="float-right primary"><i class="font-medium-1 icon-pin blue-grey lighten-3"></i></span>
                          </p>
                        </div>
                      </a>
                      <a href="{{ Url('/messages') }}" class="media border-0">
                        <div class="media-left pr-1">
                          <span class="avatar avatar-md avatar-online">
                            <img class="media-object rounded-circle" src="{{ asset('images/2u.png') }}">
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body w-100">
                          <h6 class="list-group-item-heading"> Asad Mukhtar
                            <span class="font-small-3 float-right primary">4:14 AM</span>
                          </h6>
                          <p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Okay
                            <span class="float-right primary"><i class="font-medium-1 icon-pin blue-grey lighten-3"></i></span>
                          </p>
                        </div>
                      </a>
                      <a href="{{ Url('/messages') }}" class="media border-0">
                        <div class="media-left pr-1">
                          <span class="avatar avatar-md avatar-online">
                            <img class="media-object rounded-circle" src="{{ asset('images/2u.png') }}">
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body w-100">
                          <h6 class="list-group-item-heading"> Asad Mukhtar
                            <span class="font-small-3 float-right primary">4:14 AM</span>
                          </h6>
                          <p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Okay
                            <span class="float-right primary"><i class="font-medium-1 icon-pin blue-grey lighten-3"></i></span>
                          </p>
                        </div>
                      </a>
                      <a href="{{ Url('/messages') }}" class="media border-0">
                        <div class="media-left pr-1">
                          <span class="avatar avatar-md avatar-online">
                            <img class="media-object rounded-circle" src="{{ asset('images/2u.png') }}">
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body w-100">
                          <h6 class="list-group-item-heading"> Asad Mukhtar
                            <span class="font-small-3 float-right primary">4:14 AM</span>
                          </h6>
                          <p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Okay
                            <span class="float-right primary"><i class="font-medium-1 icon-pin blue-grey lighten-3"></i></span>
                          </p>
                        </div>
                      </a>
                      <a href="{{ Url('/messages') }}" class="media border-0">
                        <div class="media-left pr-1">
                          <span class="avatar avatar-md avatar-online">
                            <img class="media-object rounded-circle" src="{{ asset('images/2u.png') }}">
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body w-100">
                          <h6 class="list-group-item-heading"> Asad Mukhtar
                            <span class="font-small-3 float-right primary">4:14 AM</span>
                          </h6>
                          <p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Okay
                            <span class="float-right primary"><i class="font-medium-1 icon-pin blue-grey lighten-3"></i></span>
                          </p>
                        </div>
                      </a>
                      <a href="{{ Url('/messages') }}" class="media border-0">
                        <div class="media-left pr-1">
                          <span class="avatar avatar-md avatar-online">
                            <img class="media-object rounded-circle" src="{{ asset('images/2u.png') }}">
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body w-100">
                          <h6 class="list-group-item-heading"> Asad Mukhtar
                            <span class="font-small-3 float-right primary">4:14 AM</span>
                          </h6>
                          <p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Okay
                            <span class="float-right primary"><i class="font-medium-1 icon-pin blue-grey lighten-3"></i></span>
                          </p>
                        </div>
                      </a>
                      <a href="{{ Url('/messages') }}" class="media border-0">
                        <div class="media-left pr-1">
                          <span class="avatar avatar-md avatar-online">
                            <img class="media-object rounded-circle" src="{{ asset('images/2u.png') }}">
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body w-100">
                          <h6 class="list-group-item-heading"> Asad Mukhtar
                            <span class="font-small-3 float-right primary">4:14 AM</span>
                          </h6>
                          <p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Okay
                            <span class="float-right primary"><i class="font-medium-1 icon-pin blue-grey lighten-3"></i></span>
                          </p>
                        </div>
                      </a>
                      <a href="{{ Url('/messages') }}" class="media border-0">
                        <div class="media-left pr-1">
                          <span class="avatar avatar-md avatar-online">
                            <img class="media-object rounded-circle" src="{{ asset('images/2u.png') }}">
                            <i></i>
                          </span>
                        </div>
                        <div class="media-body w-100">
                          <h6 class="list-group-item-heading"> Asad Mukhtar
                            <span class="font-small-3 float-right primary">4:14 AM</span>
                          </h6>
                          <p class="list-group-item-text text-muted mb-0"><i class="ft-check primary font-small-2"></i> Okay
                            <span class="float-right primary"><i class="font-medium-1 icon-pin blue-grey lighten-3"></i></span>
                          </p>
                        </div>
                      </a>
    
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content-right">
        <div class="content-wrapper">
          <div class="content-header row">
          </div>
          <div class="content-body" style="background-color:white;">          
              <message></message>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection