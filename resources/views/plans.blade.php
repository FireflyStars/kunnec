@extends('layouts.hf')
@section('title', 'Plans || Kunnec ')
@section('content')
<div class="container-fluid">
	<center>
		<h1>Kunnec Plans</h1>
		<p>Select the plan that works for you.</p>
	</center>
	<hr />
	<div class="plns_bdy">
        <div id="srvs_tl">Kunnec Plans</div>
               <p style="text-align:center">Select the plan that works for you.</p>
               <hr>
               <div class="columns">
                      <ul class="price">
                             <li class="header"  style="background-color:#1672C4">Gold</li>
                             <li class="grey">FREE</li>
                             <li>Post in Kunnec Social</li>
                             <li>Buy credits</li>
                             <li>Post in Kunnec to Me for 5 credits</li>
                             <li>Use all Kunnec Services</li>
                             <li>Able to download Kunnec Record for $12 / month</li>
                             <li class="grey">
                             	<button class="button">
                             		<a href="/sign_up" class="btn btn-success">Sign Up</a>
                             	</button>
                             </li>
                      </ul>
              </div>
              <div class="columns">
                    <ul class="price">
                       <li class="header" style="background-color:#1672C4">Platnium</li>
                       <li class="grey">$ 14.99 / year</li>
                       <li>Everything in the Gold Plan</li>
					   <li>Post in Kunnec to You</li>
					   <li>Post in Kunnec Shop</li>
					   <li class="grey">
					   	<button class="button">
					   		<a href="/sign_up" class="btn btn-success">Sign Up</a>
					   	</button>
					   </li>
					</ul>
			  </div>
			  <div class="columns">
					<ul class="price">
					    <li class="header" style="background-color:#1672C4">Diamond</li>
					    <li class="grey">$ 29.99 / year</li>
					    <li>Everything in the Gold Plan</li>
					    <li>Everything in the Platnium Plan</li>
					    <li>Post in Kunnec Books</li>
					    <li>Post in Kunnec View</li>
					    <li>Setup Kunnec Tutor</li>
					    <li>Setup Kunnec Show</li>
					    <li class="grey">
					    	<button class="button"><a href="/sign_up" class=""btn btn-success">Sign Up</a></button>
					    </li>
					</ul>
			  </div>
		</div>
	</div>
</div>
<br /> <br /> <br /> <br /> <br /> <br />
@endsection