@extends('layouts.admin.layout')
@section('content')
 <style type="text/css">
    
    .well {
      height:200px;
    }
    .red {
      background: red;
    }
    .blue {
      background: blue;
    }
    h1,h2,h3 {
      color: white;
    }
    .green {
      background: yellow;
    }
    .grey {
      background: grey;
    }
    .pink {
      background:pink;
    }
  </style>
  <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div class="clearfix"></div>
        <div class="content ">
        <!--  <div class="page-title">
              <h3>
                  <font color="black">
                      Dashboard 
                  </font>
              </h3>
          </div> -->
          <div class="container-fluid">
              <div class="col-sm-12 col-lg-12">
                  <div class="row">
                      <div class="col-sm-4">
                          <div class="well">
                              <br/> <br />
                              <center>
                                  <label>
                                    <b>
                                      <font color="red">
                                        Total visits
                                      </font>
                                    </b>
                                  </label>
                                  <h1>
                                      <font color="red" size="+7">
                                        <i class="fa fa-bar-chart"></i>
                                      </font>
                                  </h1>
                                  <h3>
                                    <font color="red">
                                        350
                                    </font>
                                  </h3>
                              </center>
                              <br />
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="well">
                              <br/> <br />
                              <center>
                                  <label>
                                    <b>
                                      <font color="blue">
                                        Total Members
                                      </font>
                                    </b>
                                  </label>
                                  <h1>
                                      <font color="blue" size="+7">
                                        <i class="fa fa-users"></i>
                                      </font>
                                  </h1>
                                  <h3>
                                    <font color="blue">
                                        350
                                    </font>
                                  </h3>
                              </center>
                              <br />
                          </div>
                      </div>
                      <div class="col-sm-4">
                          <div class="well">
                              <br/> <br />
                              <center>
                                  <label>
                                    <b>
                                      <font color="grey">
                                        Requests
                                      </font>
                                    </b>
                                  </label>
                                  <h1>
                                      <font color="grey" size="+7">
                                        <i class="fa fa-warning"></i>
                                      </font>
                                  </h1>
                                  <h3>
                                    <font color="grey">
                                        350
                                    </font>
                                  </h3>
                              </center>
                              <br />
                          </div>
                      </div>
                  </div>
                  <hr />
                  <div class="row">
                    <div  class="col-lg-8">
                      <div class="well"></div>
                    </div>
                    <div  class="col-lg-4">
                        <ul class="list-group">
                          <li class="list-group-item active">
                            <i class="fa fa-bell"></i> Notification
                          </li>
                          <li class="list-group-item">Dapibus ac facilisis in</li>
                          <li class="list-group-item">Morbi leo risus</li>
                          <li class="list-group-item">Porta ac consectetur ac</li>
                          <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                  </div>
                  <hr />
                  <div class="row">
                      <div class="col-sm-3">
                          <div class="well red">
                              <br/> <br />
                              <center>
                                  <h1 id="countdown">256</h1>
                                  <hr />
                                  <h3>
                                    <i class="fa fa-users"></i>  Users
                                  </h3>
                              </center>
                          </div>
                      </div>
                      <div class="col-sm-3">
                          <div class="well blue">
                            <br/> <br />
                              <center>
                                  <h1 id="countdown">255</h1>
                                  <hr />
                                  <h3>
                                    <i class="fa fa-envelope"></i>  Requests
                                  </h3>
                              </center>
                          </div>
                      </div>
                      <div class="col-sm-3">
                          <div class="well green">
                            <br/> <br />
                              <center>
                                  <h1 id="countdown">255</h1>
                                  <hr />
                                  <h3>
                                    <i class="fa fa-paper-plane"></i> 
                                    updated News
                                  </h3>
                              </center>
                          </div>
                      </div>
                      <div class="col-sm-3">
                          <div class="well grey">
                            <br/> <br />
                              <center>
                                  <h1 id="countdown">252</h1>
                                  <hr />
                                  <h3>
                                    <i class="fa fa-ban"></i> 
                                    Disable users
                                  </h3>
                              </center>
                          </div>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-3">
                          <div class="well pink">
                              <br/> <br />
                              <center>
                                  <h1 id="countdown">
                                      252
                                  </h1>
                                  <hr />
                                  <h3>
                                    <i class="fa fa-money"></i> 
                                    Sold Credit
                                  </h3>
                              </center>
                          </div>
                      </div>
                      <div class="col-sm-3">
                          <div class="well grey">
                            <br/> <br/>
                            <center>
                              <h3>
                                254
                              </h3>
                              <hr>
                              <h3>
                                <i class="fa fa-envelope"></i> 
                                Forward Alert
                              </h3>
                            </center>
                          </div>
                      </div>
                      <div class="col-sm-3">
                          <div class="well red">
                            <br/> <br/>
                            <center>
                              <h3>
                                254
                              </h3>
                              <hr>
                              <h3>
                                <i class="fa fa-shopping-bag"></i> 
                                Kunnec shops
                              </h3>
                            </center>
                          </div>
                      </div>
                      <div class="col-sm-3">
                          <div class="well blue">
                               <br/> <br/>
                            <center>
                              <h3>
                                254
                              </h3>
                              <hr>
                              <h3>
                                <i class="fa fa-shopping-bag"></i> 
                                Kunnec shops
                              </h3>
                            </center>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
  </div> 
@endsection