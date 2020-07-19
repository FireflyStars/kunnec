@extends('layouts.newheader.header')
@section('title', 'Create Events')
@section('content')

  <div class="card mb-3">
        <div class="card-body" style="background-color:#009900;">
            <div class="row justify-content-between align-items-center">
                <div class="col-md">
                    <h5 class="mb-2 mb-md-0" style="color:#FFFFFF;">
                      <img src="{{ asset('newlook/images/logos/K_Logo6.png') }}" height="40px" width="60px"/> Create Event
                    </h5>
                </div> 
                <div class="col-auto">
                    <button class="btn btn-falcon-default btn-sm mr-2" role="button">Save</button>
                    <button class="btn btn-falcon-primary btn-sm" role="button">Make your event live </button>
                </div>
            </div>
        </div>
    </div>
<!--
  <div class="card overflow-hidden mb-3">
        <div class="cover-image overflow-hidden">
          <img class="card-img-top" src="{{ asset('newlook/assets/img/generic/13.jpg') }}" alt="">
            <input class="d-none" id="upload-cover-image" type="file">
            <label class="cover-image-file-input" for="upload-cover-image">
              <span class="fas fa-camera mr-2"></span>
              <span>Change cover photo</span>
            </label>
        </div>
    </div>
-->
    <form action="{{ route('event.store') }}" method="post">
      @csrf
     <div class="row no-gutters">
          <div class="col-lg-8 pr-lg-2">
            <div class="card mb-3">
              <div class="card-header">
                <h5 class="mb-0">Event Details</h5>
              </div>
              <div class="card-body bg-light">
                  <div class="form-row">
                    <div class="col-12">
                      <div class="form-group">
                        <label for="event-name">Event Title</label>
                        <input class="form-control" name="title" id="event-name" type="text" placeholder="Event Title">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="start-date">Start Date</label>
                        <input class="form-control datetimepicker" name="startdate" id="start-date" type="text">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="start-time">Start Time</label>
                        <input class="form-control datetimepicker" id="starttime" name="starttime" type="text" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i"}'>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="end-date">End Date</label>
                        <input class="form-control datetimepicker" name="enddate" id="end-date" type="text">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="end-time">End Time</label>
                        <input class="form-control datetimepicker" name="endtime" id="end-time" type="text" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i"}'>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group mb-0">
                        <label for="registration-deadline">Registration Deadline</label>
                        <input class="form-control datetimepicker" name="regdeadline" id="registration-deadline" type="text">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group mb-0">
                        <label for="time-zone">Timezone</label>
                        <select class="custom-select" id="time-zone" name="timezone">
                          <option>GMT-12:00 Etc/GMT-12</option>
                          <option>GMT-11:00 Etc/GMT-11</option>
                          <option>GMT-11:00 Pacific/Midway</option>
                          <option>GMT-10:00 America/Adak</option>
                          <option>GMT-09:00 America/Anchorage</option>
                          <option>GMT-09:00 Pacific/Gambier</option>
                          <option>GMT-08:00 America/Dawson_Creek</option>
                          <option>GMT-08:00 America/Ensenada</option>
                          <option>GMT-08:00 America/Los_Angeles</option>
                          <option>GMT-07:00 America/Chihuahua</option>
                          <option>GMT-07:00 America/Denver</option>
                          <option>GMT-06:00 America/Belize</option>
                          <option>GMT-06:00 America/Cancun</option>
                          <option>GMT-06:00 America/Chicago</option>
                          <option>GMT-06:00 Chile/EasterIsland</option>
                          <option>GMT-05:00 America/Bogota</option>
                          <option>GMT-05:00 America/Havana</option>
                          <option>GMT-05:00 America/New_York</option>
                          <option>GMT-04:30 America/Caracas</option>
                          <option>GMT-04:00 America/Campo_Grande</option>
                          <option>GMT-04:00 America/Glace_Bay</option>
                          <option>GMT-04:00 America/Goose_Bay</option>
                          <option>GMT-04:00 America/Santiago</option>
                          <option>GMT-04:00 America/La_Paz</option>
                          <option>GMT-03:00 America/Argentina/Buenos_Aires</option>
                          <option>GMT-03:00 America/Montevideo</option>
                          <option>GMT-03:00 America/Araguaina</option>
                          <option>GMT-03:00 America/Godthab</option>
                          <option>GMT-03:00 America/Miquelon</option>
                          <option>GMT-03:00 America/Sao_Paulo</option>
                          <option>GMT-03:30 America/St_Johns</option>
                          <option>GMT-02:00 America/Noronha</option>
                          <option>GMT-01:00 Atlantic/Cape_Verde</option>
                          <option>GMT Europe/Belfast</option>
                          <option>GMT Africa/Abidjan</option>
                          <option>GMT Europe/Dublin</option>
                          <option>GMT Europe/Lisbon</option>
                          <option>GMT Europe/London</option>
                          <option>UTC UTC</option>
                          <option>GMT+01:00 Africa/Algiers</option>
                          <option>GMT+01:00 Africa/Windhoek</option>
                          <option>GMT+01:00 Atlantic/Azores</option>
                          <option>GMT+01:00 Atlantic/Stanley</option>
                          <option>GMT+01:00 Europe/Amsterdam</option>
                          <option>GMT+01:00 Europe/Belgrade</option>
                          <option>GMT+01:00 Europe/Brussels</option>
                          <option>GMT+02:00 Africa/Cairo</option>
                          <option>GMT+02:00 Africa/Blantyre</option>
                          <option>GMT+02:00 Asia/Beirut</option>
                          <option>GMT+02:00 Asia/Damascus</option>
                          <option>GMT+02:00 Asia/Gaza</option>
                          <option>GMT+02:00 Asia/Jerusalem</option>
                          <option>GMT+03:00 Africa/Addis_Ababa</option>
                          <option>GMT+03:00 Asia/Riyadh89</option>
                          <option>GMT+03:00 Europe/Minsk</option>
                          <option>GMT+03:30 Asia/Tehran</option>
                          <option>GMT+04:00 Asia/Dubai</option>
                          <option>GMT+04:00 Asia/Yerevan</option>
                          <option>GMT+04:00 Europe/Moscow</option>
                          <option>GMT+04:30 Asia/Kabul</option>
                          <option>GMT+05:00 Asia/Tashkent</option>
                          <option>GMT+05:30 Asia/Kolkata</option>
                          <option>GMT+05:45 Asia/Katmandu</option>
                          <option>GMT+06:00 Asia/Dhaka</option>
                          <option>GMT+06:00 Asia/Yekaterinburg</option>
                          <option>GMT+06:30 Asia/Rangoon</option>
                          <option>GMT+07:00 Asia/Bangkok</option>
                          <option>GMT+07:00 Asia/Novosibirsk</option>
                          <option>GMT+08:00 Etc/GMT+8</option>
                          <option>GMT+08:00 Asia/Hong_Kong</option>
                          <option>GMT+08:00 Asia/Krasnoyarsk</option>
                          <option>GMT+08:00 Australia/Perth</option>
                          <option>GMT+08:45 Australia/Eucla</option>
                          <option>GMT+09:00 Asia/Irkutsk</option>
                          <option>GMT+09:00 Asia/Seoul</option>
                          <option>GMT+09:00 Asia/Tokyo</option>
                          <option>GMT+09:30 Australia/Adelaide</option>
                          <option>GMT+09:30 Australia/Darwin</option>
                          <option>GMT+09:30 Pacific/Marquesas</option>
                          <option>GMT+10:00 Etc/GMT+10</option>
                          <option>GMT+10:00 Australia/Brisbane</option>
                          <option>GMT+10:00 Australia/Hobart</option>
                          <option>GMT+10:00 Asia/Yakutsk</option>
                          <option>GMT+10:30 Australia/Lord_Howe</option>
                          <option>GMT+11:00 Asia/Vladivostok</option>
                          <option>GMT+11:30 Pacific/Norfolk</option>
                          <option>GMT+12:00 Etc/GMT+12</option>
                          <option>GMT+12:00 Asia/Anadyr</option>
                          <option>GMT+12:00 Asia/Magadan</option>
                          <option>GMT+12:00 Pacific/Auckland</option>
                          <option>GMT+12:45 Pacific/Chatham</option>
                          <option>GMT+13:00 Pacific/Tongatapu</option>
                          <option>GMT+14:00 Pacific/Kiritimati</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-12">
                      <hr class="border-dashed border-bottom-0">
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="event-venue">Venue</label>
                        <input class="form-control" id="event-venue" name="venue" type="text" placeholder="Venue">
                        <button class="btn btn-link btn-sm btn p-0" type="button">Online Event</button>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label for="event-address">Address</label>
                        <input name="address" class="form-control" id="event-address" type="text" placeholder="Address">
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="event-country">Country</label>
                        <select class="custom-select custom-select-sm" id="country" name="country">
                          @foreach($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="event-state">State</label>
                        <select class="custom-select custom-select-sm" name="state" id="state">
                        </select>
                      </div>
                    </div>
                    <div class="col-sm-4">
                      <div class="form-group">
                        <label for="event-city">City</label>
                         <select class="custom-select custom-select-sm" name="city" id="city">
                        </select>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label for="event-description">Description</label>
                        <textarea class="form-control" id="event-description" name="description" rows="6"> </textarea>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="card mb-3">
                  <div class="card-header">
                    <h5 class="mb-0">Ticket Price</h5>
                    Free <input type="radio" ticket="type" name="ticket_type" value="free" />
                    Paid <input type="radio" ticket="type" name="ticket_type" value="paid" />
                    Donation <input type="radio" ticket="type" name="ticket_type" value="donation" />
                  </div>
                  <div class="card-body bg-light" id="ptype" style="display:none;">
                    <hr>
                      <h6>Pricing Options:</h6>
                      <div>
                        <input name="e_v_p" type="radio" value="1" />
                        <label>Enable varible pricing</label>
                        <br />
                        <input name="e_v_p" type="radio" value="2" />
                        <label>Enable multi-option purchase mode.</label>
                      </div>
                      <button class="btn btn-success btn-sm" type="button" id="addp">
                        + Add New
                      </button>
                      <table class="table table-bordered mt-2 bg-white">
                        <thead>
                          <tr class="fs--1">
                            <th>Option Name</th>
                            <th>Price</th>
                            <th>Default</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody id="optype">
                          <tr id="0">
                            <td>
                              <input class="form-control form-control-sm" type="text" placeholder="Option Name" value="Front desks" name="opt1[]">
                            </td>
                            <td>
                              <input class="form-control form-control-sm" type="text" placeholder="Price" value="$0.00" name="price1[]"  />
                            </td>
                            <td class="text-center align-middle">
                              <div class="custom-control custom-radio">
                                <input class="custom-control-input" value="1" id="customRadio1" type="radio" name="optdef[]" checked />
                                <label class="custom-control-label" for="customRadio1"></label>
                              </div>
                            </td>
                            <td class="text-center align-middle">
                              <button type="button" class="btn btn-link btn-sm" id="del" n="0">
                                <span class="fas fa-times-circle text-danger" data-fa-transform="shrink-3">
                                </span>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
            </div>
            <div class="card mb-3">
                  <div class="card-header">
                    <h5 class="mb-0">Schedule</h5>
                  </div>
                  <div class="card-body bg-light">
                    <div class="border rounded position-relative bg-white p-3">
                      <div class="form-row">
                        <div class="col-12">
                          <div class="form-group">
                            <label for="schedule-title">Title</label>
                            <input class="form-control form-control-sm" id="schedule-title" type="text" placeholder="Title" name="schedule_title0" />
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="schedule-start-date">Start Date</label>
                            <input class="form-control form-control-sm datetimepicker" id="schedule-start-date" name="schedule_sd" type="text" data-options='{"dateFormat":"d/m/y","enableTime":false}'>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="schedule-start-time">Start Time</label>
                            <input class="form-control form-control-sm datetimepicker" id="schedule-start-time" name="schedule_st" type="text" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i"}'>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="schedule-end-date">End Date</label>
                            <input class="form-control form-control-sm datetimepicker" id="schedule-end-date" name="schedule_ed" type="text" data-options='{"enableTime":true}'>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="schedule-end-time">End Time</label>
                            <input class="form-control form-control-sm datetimepicker" id="schedule-end-time" type="text" name="schedule_et" data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i"}'>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-falcon-default btn-sm mt-2" type="button"><span class="fas fa-plus fs--2 mr-1" data-fa-transform="up-1"></span>Add Item </button>
                  </div>
            </div>
            <div class="card mb-3">
                  <div class="card-header">
                    <h5 class="mb-0">Upload Photos</h5>
                  </div>
                  <div class="card-body bg-light">
                    <div class="dropzone dropzone-multiple p-0" data-dropzone data-options='{"url":"valid/url"}'>
                      <div class="fallback">
                        <input type="file" name="file2">
                      </div>
                      <div class="dz-message" data-dz-message> <img class="mr-2" src="../assets/img/icons/cloud-upload.svg" width="25" alt="">Drop your files here</div>
                      <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
                        <div class="media align-items-center mb-3 pb-3 border-bottom btn-reveal-trigger"><img class="dz-image" src="..." alt="..." data-dz-thumbnail>
                          <div class="media-body d-flex flex-between-center">
                            <div>
                              <h6 data-dz-name></h6>
                              <div class="d-flex align-items-center">
                                <p class="mb-0 fs--1 text-400 line-height-1" data-dz-size></p>
                                <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>
                              </div>
                            </div>
                            <div class="dropdown text-sans-serif">
                              <button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                              <div class="dropdown-menu dropdown-menu-right border py-0">
                                <div class="bg-white py-2"><a class="dropdown-item" href="#!" data-dz-remove>Remove File</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="card mb-3 mb-lg-0">
                  <div class="card-header">
                    <h5 class="mb-0">Custom Fields</h5>
                  </div>
                  <div class="card-body bg-light">
                    <div class="position-relative rounded border bg-white p-3">
                      <div class="form-row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="field-name">Name</label>
                            <input class="form-control form-control-sm" id="field-name" type="text" placeholder="Name (e.g. T-shirt)" name="custom_name0" />
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="field-type">Type</label>
                            <select name="feild_type0" class="custom-select custom-select-sm" id="field-type">
                              <option>Select a type</option>
                              <option>Text</option>
                              <option>Checkboxes</option>
                              <option>Radio Buttons</option>
                              <option>Textarea</option>
                              <option>Date</option>
                              <option>Dropdowns</option>
                              <option>File</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label for="field-options">Field Options</label>
                            <textarea name="field_options0" class="form-control form-control-sm" id="field-options" rows="3"></textarea><small class="form-text fs--1 text-warning">* Separate your options with comma</small>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button class="btn btn-falcon-default btn-sm mt-2" type="submit"><span class="fas fa-plus fs--2 mr-1" data-fa-transform="up-1"></span>Add Item</button>
                  </div>
            </div>
          </div>
          <div class="col-lg-4 pl-lg-2">
            <div class="sticky-top sticky-sidebar">
                  <div class="card mb-3 mb-lg-0">
                    <div class="card-header">
                      <h5 class="mb-0">
                         Other Info
                      </h5>
                    </div>
                    <div class="card-body bg-light">
                      <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                          <label class="mb-0" for="organizer">Organizer</label>
                          <button class="btn btn-link btn-sm pr-0" type="button">Add New</button>
                        </div>
                        <select class="custom-select" id="organizer" size="1" name="organizer">
                          <option>Massachusetts Institute of Technology</option>
                          <option>University of Chicago</option>
                          <option>GSAS Open Labs At Harvard</option>
                          <option>California Institute of Technology</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                          <label class="mb-0" for="sponsors">Sponsors</label>
                          <button class="btn btn-link btn-sm pr-0" type="button">Add New</button>
                        </div>
                        <select class="custom-select" id="sponsors"  size="1" name="sponsors">
                          <option>Microsoft Corporation</option>
                          <option>Technext Limited</option>
                          <option>Hewlett-Packard</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="event-type">Event Type</label>
                        <select class="custom-select" id="event-type" name="event_type">
                          <option>Select event type...</option>
                          <option>Class, Training, or Workshop</option>
                          <option>Concert or Performance</option>
                          <option>Conference</option>
                          <option>Convention</option>
                          <option>Dinner or Gala</option>
                          <option>Festival or Fair</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="event-topic">Event Topic</label>
                        <select class="custom-select" id="event-topic" name="even_topic">
                          <option value="" selected="selected">Select a topic</option>
                          <option>Auto, Boat &amp; Air</option>
                          <option>Business &amp; Professional</option>
                          <option>Charity &amp; Causes</option>
                          <option>Community &amp; Culture</option>
                          <option>Family &amp; Education</option>
                          <option>Fashion &amp; Beauty</option>
                          <option>Film, Media &amp; Entertainment</option>
                          <option>Food &amp; Drink</option>
                          <option>Government &amp; Politics</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <div class="d-flex justify-content-between align-items-center">
                          <label class="mb-0" for="event-tags">Tags</label>
                          <button class="btn btn-link btn-sm pr-0" type="button">Add New</button>
                        </div>
                        <select class="form-control selectpicker" id="event-tags" multiple size="1" data-options='{"placeholder":"Select tags"}' name="eventtags">
                          <option>Concert</option>
                          <option>New Year</option>
                          <option>Party</option>
                        </select>
                      </div>
                      <hr class="border-dashed border-bottom-0">
                      <h6>Listing Privacy</h6>
                      <div class="form-group custom-control custom-radio">
                        <input class="custom-control-input" id="customRadio4" type="radio" name="listingPrivacy" checked>
                        <label class="custom-control-label" for="customRadio4"> <strong>Public page:</strong></label><small class="form-text mt-0">Discoverable by anyone on Falcon, our distribution partners, and search engines.</small>
                      </div>
                      <div class="form-group custom-control custom-radio">
                        <input class="custom-control-input" id="customRadio5" type="radio" name="listingPrivacy">
                        <label class="custom-control-label" for="customRadio5"> 
                          <strong>
                              Private page:
                          </strong>
                        </label>
                        <small class="form-text mt-0">Accessible only by people you specify. </small>
                      </div>
                      <hr class="border-dashed border-bottom-0">
                      <h6>Remaining Tickets</h6>
                      <div class="form-group custom-control custom-checkbox mb-0">
                        <input class="custom-control-input" value="12" name="snort" id="customRadio6" type="checkbox"> 
                        <label class="custom-control-label" for="customRadio6">Show the number of remaining tickets.</label>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
      </div>
      <div class="card mt-3">
        <div class="card-body">
          <div class="row justify-content-between align-items-center">
            <div class="col-md">
              <h5 class="mb-2 mb-md-0">
                  Nice Job! You're almost done
              </h5>
            </div>
            <div class="col-auto">
              <button type="submit" class="btn btn-falcon-default btn-sm mr-2">Save</button>
              <button class="btn btn-falcon-primary btn-sm">Make your event live </button>
            </div>
          </div>
        </div>
      </div>
    </form>
@endsection