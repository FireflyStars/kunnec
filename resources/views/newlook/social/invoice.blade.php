@extends('layouts.newheader.header')
@section('title', 'Invoice')
@section('content')
  <div id="content">
           <div class="card">
              <div class="card-header d-flex justify-content-between" style="background-color:#009900;">
                <h5 class="mb-0" style="color:#FFFFFF;">
                  <img src="images/logos/K_Logo6.png" height="40px" width="60px"/> Invoice
                </h5>  
              </div>  
           </div>
           <div class="card mb-3">
                <div class="card-body">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-md">
                      <h5 class="mb-2 mb-md-0">Invoice# : KC202094</h5>
                    </div>
                    <div class="col-auto">
                      <button class="btn btn-falcon-default btn-sm mr-2 mb-2 mb-sm-0" type="button"><span class="fas fa-print mr-1"> </span>Print</button>
                    </div>
                  </div>
                </div>
           </div>
           <div class="card mb-3">
              <div class="card-body">
                <div class="row align-items-center text-center mb-3">
                  <div class="col-sm-6 text-sm-left">
                    <img src="images/logos/K_Logo5.png" alt="invoice" width="150">
                  </div>
                  <div class="col text-sm-right mt-3 mt-sm-0">
                    <h2 class="mb-3">Invoice</h2>
                    <h5>Kunnec.com</h5>
                    <p class="fs--1 mb-0">156 University Ave, Toronto<br>On, Canada, M5H 2H7</p>
                  </div>
                  <div class="col-12">
                    <hr>
                  </div>
                </div>
                <div class="row justify-content-between align-items-center">
                  <div class="col">
                    <h6 class="text-500">Invoice to</h6>
                    <h5><img src="images/users/profiles/sabrina.jpg" width="50px" height="50px" class="rounded-circle img-border box-shadow-1" alt="Card image"> Sabrina</h5>
                    <p class="fs--1">1954 Bloor Street West<br>Torronto ON, M6P 3K9<br>Canada</p>
                    <p class="fs--1"><a href="mailto:example@gmail.com">example@gmail.com</a><br><a href="tel:444466667777">+4444-6666-7777</a></p>
                  </div>
                  <div class="col-sm-auto ml-auto">
                    <div class="table-responsive">
                      <table class="table table-sm table-borderless fs--1">
                        <tbody>
                          
                          <tr>
                            <th class="text-sm-right">Invoice No:</th>
                            <td>KC202094</td>
                          </tr>
                          <tr>
                            <th class="text-sm-right">Invoice Date:</th>
                            <td>09-25-2020</td>
                          </tr>
                          <tr>
                            <th class="text-sm-right">Payment Due:</th>
                            <td>$8.99</td>
                          </tr>
                          <tr class="alert-warning font-weight-bold">
                            <th class="text-sm-right">Amount Paid:</th>
                            <td>$8.99</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="table-responsive mt-4 fs--1">
                  <table class="table table-striped border-bottom">
                    <thead>
                      <tr class="bg-primary text-white">
                        <th class="border-0">Service</th>
                        <th class="border-0 text-center">Paid</th>
                        <th class="border-0 text-right">Amount</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="align-middle">
                          <h6 class="mb-0 text-nowrap">Monthly Payment</h6>
                          <p class="mb-0">Cancel at any time</p>
                        </td>
                        <td class="align-middle text-center">Yes</td>
                        <td class="align-middle text-right">$8.99</td>
                        
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
                <div class="row no-gutters justify-content-end">
                  <div class="col-auto">
                    <table class="table table-sm table-borderless fs--1 text-right">
                      <tr>
                        <th class="text-900">Subtotal:</th>
                        <td class="font-weight-semi-bold">$8.99 </td>
                      </tr>
                      <tr>
                        <th class="text-900">Tax %:</th>
                        <td class="font-weight-semi-bold">$0.00</td>
                      </tr>
                      <tr class="border-top">
                        <th class="text-900">Total:</th>
                        <td class="font-weight-semi-bold">$8.99</td>
                      </tr>
                      <tr class="border-top alert-success border-2x font-weight-bold text-900">
                        <th>Amount Received:</th>
                        <td>$8.99</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div class="card-footer bg-light">
                <p class="fs--1 mb-0">
                  <strong>Notes: </strong>We really appreciate your business and if there’s anything else we can do, please let us know!
                </p>
              </div>
           </div>
        </div>
@endsection