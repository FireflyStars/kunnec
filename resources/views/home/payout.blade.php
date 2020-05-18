@extends('layouts.header')
@section('content')
		<style type="text/css">
			.card{
				margin-bottom:0px !important;
			}
		</style>
		<div class="app-content content">
		    <div class="content-wrapper">
		      <br />
		      <div class="content-body">
		         	<div class="col-md-12">
		           	   <div class="jumbotron">
		           	   	<h3><i class="fa fa-calendar"></i> Monthly Payout</h3>
		           	   	<hr />
		           	   	<div class="form-group">
							<label for="sel3"> Year</label>
							<select class="form-control" id="sel2">
							        <option> 2018</option>
							        <option> 2019</option>
							        <option> 2020</option>
							        <option> 2021</option>
							        <option> 2022</option>
							        <option> 2023</option>
							        <option> 2024</option>
							        <option> 2025</option>
							        <option> 2026</option>
							        <option> 2027</option>
							        <option> 2028</option>
							        <option> 2029</option>
							        <option> 2030</option>
							        <option> 2031</option>
							        <option> 2032</option>
							        <option> 2033</option>
							        <option> 2034</option>
							        <option> 2035</option>
							        <option> 2036</option>
							        <option> 2037</option>
							        <option> 2038</option>
							        <option> 2039</option>
							        <option> 2040</option>
							</select>
						</div>
						<div class="card">
							    <div class="card-header">
							      <a class="collapsed card-link months" data-toggle="collapse" href="#collapseTwo032">
							        	January
							      </a>
							    </div>
							    <div id="collapseTwo032" class="collapse" data-parent="#accordion">
							      <div class="card-body">
								        <div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
										        Kunnec Show
										      </a>
										    </div>
										    <div id="collapseThree" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Shows</h2>
												<p>A show is $5.00 ( 25 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$3.00 paid to you per Kunnec viewer </p>          
												<table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Show Title</th>
												        <th>Date</th>
												        <th>Viewers</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Show1</td>
												        <td>2nd</td>
												        <td>300</td>
												        <td> <span class="badge btn-warning">$900</span></td>
												      </tr>
												      <tr>
												        <td>Show2</td>
												        <td>16th</td>
												        <td>153</td>
												        <td> <span class="badge btn-warning">$459</span></td>
												      </tr>
												      <tr>
												        <td>Show 3</td>
												        <td>21st</td>
												        <td>257</td>
												        <td> <span class="badge btn-warning">$771</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2130</span></td>
												      </tr>
												    </tbody>
												</table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree00">
										        Kunnec Tutor
										      </a>
										    </div>
										    <div id="collapseThree00" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tutors</h2>
												  <p>A class session is 15 minutes  ( 75 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$9.00 paid to you per Kunnec class session</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tutor Session</th>
												        <th>Date</th>
												        <th>Class Sessions</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>English</td>
												        <td>2nd</td>
												        <td>8</td>
												        <td> <span class="badge btn-warning">$72</span></td>
												      </tr>
												      <tr>
												        <td>English</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$225</span></td>
												      </tr>
												      <tr>
												        <td>Math</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$315</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td>
												      		<span class="badge btn-warning">$612</span>
												      	</td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree02">
										        Kunnec Tuts
										      </a>
										    </div>
										    <div id="collapseThree02" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tuts</h2>
												<p>To view a tutorial is $1.00  ( 5 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.60 paid to you per Kunnec view</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tuts Name</th>
												        <th>Date</th>
												        <th>Tuts View </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Php coding</td>
												        <td>2nd</td>
												        <td>45</td>
												        <td> <span class="badge btn-warning">$27</span></td>
												      </tr>
												      <tr>
												        <td>Css</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$15</span></td>
												      </tr>
												      <tr>
												        <td>Excel</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$3</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$45</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree03">
										        Kunnec Books
										      </a>
										    </div>
										    <div id="collapseThree03" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Books</h2>
												  <p>To read/download a book is $0.60  ( 3 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$0.36 paid to you per Kunnec read/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Book Name</th>
												        <th>Date</th>
												        <th>Read Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>How to Promote on Youtube</td>
												        <td>2nd</td>
												        <td>2000</td>
												        <td> <span class="badge btn-warning">$720</span></td>
												      </tr>
												      <tr>
												        <td>A miracle</td>
												        <td>16th</td>
												        <td>200</td>
												        <td> <span class="badge btn-warning">$60</span></td>
												      </tr>
												      <tr>
												        <td>Burn baby Burn</td>
												        <td>21st</td>
												        <td>4200</td>
												        <td> <span class="badge btn-warning">$1512</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2292</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree04">
										        Kunnec Stream
										      </a>
										    </div>
										    <div id="collapseThree04" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Streams</h2>
												<p>To stream/download a song is $0.20  ( 1 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.12 paid to you per Kunnec stream/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Song Name</th>
												        <th>Date</th>
												        <th>Stream/Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Thug Heaven</td>
												        <td>2nd</td>
												        <td>10000</td>
												        <td> <span class="badge btn-warning">$1200</span></td>
												      </tr>
												      <tr>
												        <td>Let it be Known</td>
												        <td>16th</td>
												        <td>5527</td>
												        <td> <span class="badge btn-warning">$663.24</span></td>
												      </tr>
												      <tr>
												        <td>Hello Bobby</td>
												        <td>21st</td>
												        <td>9048</td>
												        <td> <span class="badge btn-warning">$1085.76</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2949</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
							      </div>
							    </div>
					    </div>
						<div class="card">
							    <div class="card-header">
							      <a class="collapsed card-link months" data-toggle="collapse" href="#collapseTwo0">
							        	Febuaray
							      </a>
							    </div>
							    <div id="collapseTwo0" class="collapse" data-parent="#accordion">
							      <div class="card-body">
								        <div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree10">
										        Kunnec Show
										      </a>
										    </div>
										    <div id="collapseThree10" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Shows</h2>
												<p>A show is $5.00 ( 25 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$3.00 paid to you per Kunnec viewer </p>          
												<table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Show Title</th>
												        <th>Date</th>
												        <th>Viewers</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Show1</td>
												        <td>2nd</td>
												        <td>300</td>
												        <td> <span class="badge btn-warning">$900</span></td>
												      </tr>
												      <tr>
												        <td>Show2</td>
												        <td>16th</td>
												        <td>153</td>
												        <td> <span class="badge btn-warning">$459</span></td>
												      </tr>
												      <tr>
												        <td>Show 3</td>
												        <td>21st</td>
												        <td>257</td>
												        <td> <span class="badge btn-warning">$771</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2130</span></td>
												      </tr>
												    </tbody>
												</table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree20">
										        Kunnec Tutor
										      </a>
										    </div>
										    <div id="collapseThree20" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tutors</h2>
												  <p>A class session is 15 minutes  ( 75 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$9.00 paid to you per Kunnec class session</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tutor Session</th>
												        <th>Date</th>
												        <th>Class Sessions</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>English</td>
												        <td>2nd</td>
												        <td>8</td>
												        <td> <span class="badge btn-warning">$72</span></td>
												      </tr>
												      <tr>
												        <td>English</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$225</span></td>
												      </tr>
												      <tr>
												        <td>Math</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$315</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td>
												      		<span class="badge btn-warning">$612</span>
												      	</td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree30">
										        Kunnec Tuts
										      </a>
										    </div>
										    <div id="collapseThree30" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tuts</h2>
												<p>To view a tutorial is $1.00  ( 5 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.60 paid to you per Kunnec view</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tuts Name</th>
												        <th>Date</th>
												        <th>Tuts View </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Php coding</td>
												        <td>2nd</td>
												        <td>45</td>
												        <td> <span class="badge btn-warning">$27</span></td>
												      </tr>
												      <tr>
												        <td>Css</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$15</span></td>
												      </tr>
												      <tr>
												        <td>Excel</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$3</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$45</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree40">
										        Kunnec Books
										      </a>
										    </div>
										    <div id="collapseThree40" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Books</h2>
												  <p>To read/download a book is $0.60  ( 3 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$0.36 paid to you per Kunnec read/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Book Name</th>
												        <th>Date</th>
												        <th>Read Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>How to Promote on Youtube</td>
												        <td>2nd</td>
												        <td>2000</td>
												        <td> <span class="badge btn-warning">$720</span></td>
												      </tr>
												      <tr>
												        <td>A miracle</td>
												        <td>16th</td>
												        <td>200</td>
												        <td> <span class="badge btn-warning">$60</span></td>
												      </tr>
												      <tr>
												        <td>Burn baby Burn</td>
												        <td>21st</td>
												        <td>4200</td>
												        <td> <span class="badge btn-warning">$1512</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2292</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree50">
										        Kunnec Stream
										      </a>
										    </div>
										    <div id="collapseThree50" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Streams</h2>
												<p>To stream/download a song is $0.20  ( 1 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.12 paid to you per Kunnec stream/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Song Name</th>
												        <th>Date</th>
												        <th>Stream/Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Thug Heaven</td>
												        <td>2nd</td>
												        <td>10000</td>
												        <td> <span class="badge btn-warning">$1200</span></td>
												      </tr>
												      <tr>
												        <td>Let it be Known</td>
												        <td>16th</td>
												        <td>5527</td>
												        <td> <span class="badge btn-warning">$663.24</span></td>
												      </tr>
												      <tr>
												        <td>Hello Bobby</td>
												        <td>21st</td>
												        <td>9048</td>
												        <td> <span class="badge btn-warning">$1085.76</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2949</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
							      </div>
							    </div>
							</div>
							<div class="card">
							    <div class="card-header">
							      <a class="collapsed card-link months" data-toggle="collapse" href="#collapseTwo2">
							        	March
							      </a>
							    </div>
							    <div id="collapseTwo2" class="collapse" data-parent="#accordion">
							      <div class="card-body">
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree31">
										        Kunnec Show
										      </a>
										    </div>
										    <div id="collapseThree31" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Shows</h2>
												<p>A show is $5.00 ( 25 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$3.00 paid to you per Kunnec viewer </p>          
												<table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Show Title</th>
												        <th>Date</th>
												        <th>Viewers</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Show1</td>
												        <td>2nd</td>
												        <td>300</td>
												        <td> <span class="badge btn-warning">$900</span></td>
												      </tr>
												      <tr>
												        <td>Show2</td>
												        <td>16th</td>
												        <td>153</td>
												        <td> <span class="badge btn-warning">$459</span></td>
												      </tr>
												      <tr>
												        <td>Show 3</td>
												        <td>21st</td>
												        <td>257</td>
												        <td> <span class="badge btn-warning">$771</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2130</span></td>
												      </tr>
												    </tbody>
												</table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree32">
										        Kunnec Tutor
										      </a>
										    </div>
										    <div id="collapseThree32" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tutors</h2>
												  <p>A class session is 15 minutes  ( 75 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$9.00 paid to you per Kunnec class session</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tutor Session</th>
												        <th>Date</th>
												        <th>Class Sessions</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>English</td>
												        <td>2nd</td>
												        <td>8</td>
												        <td> <span class="badge btn-warning">$72</span></td>
												      </tr>
												      <tr>
												        <td>English</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$225</span></td>
												      </tr>
												      <tr>
												        <td>Math</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$315</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td>
												      		<span class="badge btn-warning">$612</span>
												      	</td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree33">
										        Kunnec Tuts
										      </a>
										    </div>
										    <div id="collapseThree33" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tuts</h2>
												<p>To view a tutorial is $1.00  ( 5 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.60 paid to you per Kunnec view</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tuts Name</th>
												        <th>Date</th>
												        <th>Tuts View </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Php coding</td>
												        <td>2nd</td>
												        <td>45</td>
												        <td> <span class="badge btn-warning">$27</span></td>
												      </tr>
												      <tr>
												        <td>Css</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$15</span></td>
												      </tr>
												      <tr>
												        <td>Excel</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$3</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$45</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree34">
										        Kunnec Books
										      </a>
										    </div>
										    <div id="collapseThree34" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Books</h2>
												  <p>To read/download a book is $0.60  ( 3 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$0.36 paid to you per Kunnec read/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Book Name</th>
												        <th>Date</th>
												        <th>Read Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>How to Promote on Youtube</td>
												        <td>2nd</td>
												        <td>2000</td>
												        <td> <span class="badge btn-warning">$720</span></td>
												      </tr>
												      <tr>
												        <td>A miracle</td>
												        <td>16th</td>
												        <td>200</td>
												        <td> <span class="badge btn-warning">$60</span></td>
												      </tr>
												      <tr>
												        <td>Burn baby Burn</td>
												        <td>21st</td>
												        <td>4200</td>
												        <td> <span class="badge btn-warning">$1512</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2292</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree35">
										        Kunnec Stream
										      </a>
										    </div>
										    <div id="collapseThree35" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Streams</h2>
												<p>To stream/download a song is $0.20  ( 1 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.12 paid to you per Kunnec stream/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Song Name</th>
												        <th>Date</th>
												        <th>Stream/Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Thug Heaven</td>
												        <td>2nd</td>
												        <td>10000</td>
												        <td> <span class="badge btn-warning">$1200</span></td>
												      </tr>
												      <tr>
												        <td>Let it be Known</td>
												        <td>16th</td>
												        <td>5527</td>
												        <td> <span class="badge btn-warning">$663.24</span></td>
												      </tr>
												      <tr>
												        <td>Hello Bobby</td>
												        <td>21st</td>
												        <td>9048</td>
												        <td> <span class="badge btn-warning">$1085.76</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2949</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
							      </div>
							    </div>
							</div>
							<div class="card">
							    <div class="card-header">
							      <a class="collapsed card-link months" data-toggle="collapse" href="#collapseTwo3">
							        	Aprill
							      </a>
							    </div>
							    <div id="collapseTwo3" class="collapse" data-parent="#accordion">
							      <div class="card-body">
								       <div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree401">
										        Kunnec Show
										      </a>
										    </div>
										    <div id="collapseThree401" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Shows</h2>
												<p>A show is $5.00 ( 25 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$3.00 paid to you per Kunnec viewer </p>          
												<table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Show Title</th>
												        <th>Date</th>
												        <th>Viewers</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Show1</td>
												        <td>2nd</td>
												        <td>300</td>
												        <td> <span class="badge btn-warning">$900</span></td>
												      </tr>
												      <tr>
												        <td>Show2</td>
												        <td>16th</td>
												        <td>153</td>
												        <td> <span class="badge btn-warning">$459</span></td>
												      </tr>
												      <tr>
												        <td>Show 3</td>
												        <td>21st</td>
												        <td>257</td>
												        <td> <span class="badge btn-warning">$771</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2130</span></td>
												      </tr>
												    </tbody>
												</table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree41">
										        Kunnec Tutor
										      </a>
										    </div>
										    <div id="collapseThree41" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tutors</h2>
												  <p>A class session is 15 minutes  ( 75 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$9.00 paid to you per Kunnec class session</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tutor Session</th>
												        <th>Date</th>
												        <th>Class Sessions</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>English</td>
												        <td>2nd</td>
												        <td>8</td>
												        <td> <span class="badge btn-warning">$72</span></td>
												      </tr>
												      <tr>
												        <td>English</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$225</span></td>
												      </tr>
												      <tr>
												        <td>Math</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$315</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td>
												      		<span class="badge btn-warning">$612</span>
												      	</td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree42">
										        Kunnec Tuts
										      </a>
										    </div>
										    <div id="collapseThree42" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tuts</h2>
												<p>To view a tutorial is $1.00  ( 5 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.60 paid to you per Kunnec view</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tuts Name</th>
												        <th>Date</th>
												        <th>Tuts View </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Php coding</td>
												        <td>2nd</td>
												        <td>45</td>
												        <td> <span class="badge btn-warning">$27</span></td>
												      </tr>
												      <tr>
												        <td>Css</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$15</span></td>
												      </tr>
												      <tr>
												        <td>Excel</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$3</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$45</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree44">
										        Kunnec Books
										      </a>
										    </div>
										    <div id="collapseThree44" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Books</h2>
												  <p>To read/download a book is $0.60  ( 3 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$0.36 paid to you per Kunnec read/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Book Name</th>
												        <th>Date</th>
												        <th>Read Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>How to Promote on Youtube</td>
												        <td>2nd</td>
												        <td>2000</td>
												        <td> <span class="badge btn-warning">$720</span></td>
												      </tr>
												      <tr>
												        <td>A miracle</td>
												        <td>16th</td>
												        <td>200</td>
												        <td> <span class="badge btn-warning">$60</span></td>
												      </tr>
												      <tr>
												        <td>Burn baby Burn</td>
												        <td>21st</td>
												        <td>4200</td>
												        <td> <span class="badge btn-warning">$1512</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2292</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree45">
										        Kunnec Stream
										      </a>
										    </div>
										    <div id="collapseThree45" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Streams</h2>
												<p>To stream/download a song is $0.20  ( 1 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.12 paid to you per Kunnec stream/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Song Name</th>
												        <th>Date</th>
												        <th>Stream/Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Thug Heaven</td>
												        <td>2nd</td>
												        <td>10000</td>
												        <td> <span class="badge btn-warning">$1200</span></td>
												      </tr>
												      <tr>
												        <td>Let it be Known</td>
												        <td>16th</td>
												        <td>5527</td>
												        <td> <span class="badge btn-warning">$663.24</span></td>
												      </tr>
												      <tr>
												        <td>Hello Bobby</td>
												        <td>21st</td>
												        <td>9048</td>
												        <td> <span class="badge btn-warning">$1085.76</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2949</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
							      </div>
							    </div>
							</div>
							<div class="card">
							    <div class="card-header">
							      <a class="collapsed card-link months" data-toggle="collapse" href="#collapseTwo4">
							        	May
							      </a>
							    </div>
							    <div id="collapseTwo4" class="collapse" data-parent="#accordion">
							      <div class="card-body">
								        <div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree500">
										        Kunnec Show
										      </a>
										    </div>
										    <div id="collapseThree500" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Shows</h2>
												<p>A show is $5.00 ( 25 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$3.00 paid to you per Kunnec viewer </p>          
												<table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Show Title</th>
												        <th>Date</th>
												        <th>Viewers</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Show1</td>
												        <td>2nd</td>
												        <td>300</td>
												        <td> <span class="badge btn-warning">$900</span></td>
												      </tr>
												      <tr>
												        <td>Show2</td>
												        <td>16th</td>
												        <td>153</td>
												        <td> <span class="badge btn-warning">$459</span></td>
												      </tr>
												      <tr>
												        <td>Show 3</td>
												        <td>21st</td>
												        <td>257</td>
												        <td> <span class="badge btn-warning">$771</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2130</span></td>
												      </tr>
												    </tbody>
												</table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree51">
										        Kunnec Tutor
										      </a>
										    </div>
										    <div id="collapseThree51" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tutors</h2>
												  <p>A class session is 15 minutes  ( 75 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$9.00 paid to you per Kunnec class session</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tutor Session</th>
												        <th>Date</th>
												        <th>Class Sessions</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>English</td>
												        <td>2nd</td>
												        <td>8</td>
												        <td> <span class="badge btn-warning">$72</span></td>
												      </tr>
												      <tr>
												        <td>English</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$225</span></td>
												      </tr>
												      <tr>
												        <td>Math</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$315</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td>
												      		<span class="badge btn-warning">$612</span>
												      	</td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree53">
										        Kunnec Tuts
										      </a>
										    </div>
										    <div id="collapseThree53" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tuts</h2>
												<p>To view a tutorial is $1.00  ( 5 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.60 paid to you per Kunnec view</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tuts Name</th>
												        <th>Date</th>
												        <th>Tuts View </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Php coding</td>
												        <td>2nd</td>
												        <td>45</td>
												        <td> <span class="badge btn-warning">$27</span></td>
												      </tr>
												      <tr>
												        <td>Css</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$15</span></td>
												      </tr>
												      <tr>
												        <td>Excel</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$3</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$45</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree54">
										        Kunnec Books
										      </a>
										    </div>
										    <div id="collapseThree54" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Books</h2>
												  <p>To read/download a book is $0.60  ( 3 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$0.36 paid to you per Kunnec read/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Book Name</th>
												        <th>Date</th>
												        <th>Read Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>How to Promote on Youtube</td>
												        <td>2nd</td>
												        <td>2000</td>
												        <td> <span class="badge btn-warning">$720</span></td>
												      </tr>
												      <tr>
												        <td>A miracle</td>
												        <td>16th</td>
												        <td>200</td>
												        <td> <span class="badge btn-warning">$60</span></td>
												      </tr>
												      <tr>
												        <td>Burn baby Burn</td>
												        <td>21st</td>
												        <td>4200</td>
												        <td> <span class="badge btn-warning">$1512</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2292</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree450">
										        Kunnec Stream
										      </a>
										    </div>
										    <div id="collapseThree450" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Streams</h2>
												<p>To stream/download a song is $0.20  ( 1 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.12 paid to you per Kunnec stream/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Song Name</th>
												        <th>Date</th>
												        <th>Stream/Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Thug Heaven</td>
												        <td>2nd</td>
												        <td>10000</td>
												        <td> <span class="badge btn-warning">$1200</span></td>
												      </tr>
												      <tr>
												        <td>Let it be Known</td>
												        <td>16th</td>
												        <td>5527</td>
												        <td> <span class="badge btn-warning">$663.24</span></td>
												      </tr>
												      <tr>
												        <td>Hello Bobby</td>
												        <td>21st</td>
												        <td>9048</td>
												        <td> <span class="badge btn-warning">$1085.76</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2949</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
							      </div>
							    </div>
							</div>
							<div class="card">
							    <div class="card-header">
							      <a class="collapsed card-link months" data-toggle="collapse" href="#collapseTwo5">
							        	June
							      </a>
							    </div>
							    <div id="collapseTwo5" class="collapse" data-parent="#accordion">
							      <div class="card-body">
								      
								       <div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree600">
										        Kunnec Show
										      </a>
										    </div>
										    <div id="collapseThree600" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Shows</h2>
												<p>A show is $5.00 ( 25 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$3.00 paid to you per Kunnec viewer </p>          
												<table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Show Title</th>
												        <th>Date</th>
												        <th>Viewers</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Show1</td>
												        <td>2nd</td>
												        <td>300</td>
												        <td> <span class="badge btn-warning">$900</span></td>
												      </tr>
												      <tr>
												        <td>Show2</td>
												        <td>16th</td>
												        <td>153</td>
												        <td> <span class="badge btn-warning">$459</span></td>
												      </tr>
												      <tr>
												        <td>Show 3</td>
												        <td>21st</td>
												        <td>257</td>
												        <td> <span class="badge btn-warning">$771</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2130</span></td>
												      </tr>
												    </tbody>
												</table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree61">
										        Kunnec Tutor
										      </a>
										    </div>
										    <div id="collapseThree61" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tutors</h2>
												  <p>A class session is 15 minutes  ( 75 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$9.00 paid to you per Kunnec class session</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tutor Session</th>
												        <th>Date</th>
												        <th>Class Sessions</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>English</td>
												        <td>2nd</td>
												        <td>8</td>
												        <td> <span class="badge btn-warning">$72</span></td>
												      </tr>
												      <tr>
												        <td>English</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$225</span></td>
												      </tr>
												      <tr>
												        <td>Math</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$315</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td>
												      		<span class="badge btn-warning">$612</span>
												      	</td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree62">
										        Kunnec Tuts
										      </a>
										    </div>
										    <div id="collapseThree62" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tuts</h2>
												<p>To view a tutorial is $1.00  ( 5 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.60 paid to you per Kunnec view</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tuts Name</th>
												        <th>Date</th>
												        <th>Tuts View </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Php coding</td>
												        <td>2nd</td>
												        <td>45</td>
												        <td> <span class="badge btn-warning">$27</span></td>
												      </tr>
												      <tr>
												        <td>Css</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$15</span></td>
												      </tr>
												      <tr>
												        <td>Excel</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$3</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$45</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree63">
										        Kunnec Books
										      </a>
										    </div>
										    <div id="collapseThree63" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Books</h2>
												  <p>To read/download a book is $0.60  ( 3 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$0.36 paid to you per Kunnec read/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Book Name</th>
												        <th>Date</th>
												        <th>Read Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>How to Promote on Youtube</td>
												        <td>2nd</td>
												        <td>2000</td>
												        <td> <span class="badge btn-warning">$720</span></td>
												      </tr>
												      <tr>
												        <td>A miracle</td>
												        <td>16th</td>
												        <td>200</td>
												        <td> <span class="badge btn-warning">$60</span></td>
												      </tr>
												      <tr>
												        <td>Burn baby Burn</td>
												        <td>21st</td>
												        <td>4200</td>
												        <td> <span class="badge btn-warning">$1512</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2292</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree64">
										        Kunnec Stream
										      </a>
										    </div>
										    <div id="collapseThree64" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Streams</h2>
												<p>To stream/download a song is $0.20  ( 1 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.12 paid to you per Kunnec stream/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Song Name</th>
												        <th>Date</th>
												        <th>Stream/Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Thug Heaven</td>
												        <td>2nd</td>
												        <td>10000</td>
												        <td> <span class="badge btn-warning">$1200</span></td>
												      </tr>
												      <tr>
												        <td>Let it be Known</td>
												        <td>16th</td>
												        <td>5527</td>
												        <td> <span class="badge btn-warning">$663.24</span></td>
												      </tr>
												      <tr>
												        <td>Hello Bobby</td>
												        <td>21st</td>
												        <td>9048</td>
												        <td> <span class="badge btn-warning">$1085.76</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2949</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
							      </div>
							    </div>
							</div>
							<div class="card">
							    <div class="card-header">
							      <a class="collapsed card-link months" data-toggle="collapse" href="#collapseTwo6">
							        	July
							      </a>
							    </div>
							    <div id="collapseTwo6" class="collapse" data-parent="#accordion">
							      <div class="card-body">
								        <div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree700">
										        Kunnec Show
										      </a>
										    </div>
										    <div id="collapseThree700" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Shows</h2>
												<p>A show is $5.00 ( 25 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$3.00 paid to you per Kunnec viewer </p>          
												<table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Show Title</th>
												        <th>Date</th>
												        <th>Viewers</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Show1</td>
												        <td>2nd</td>
												        <td>300</td>
												        <td> <span class="badge btn-warning">$900</span></td>
												      </tr>
												      <tr>
												        <td>Show2</td>
												        <td>16th</td>
												        <td>153</td>
												        <td> <span class="badge btn-warning">$459</span></td>
												      </tr>
												      <tr>
												        <td>Show 3</td>
												        <td>21st</td>
												        <td>257</td>
												        <td> <span class="badge btn-warning">$771</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2130</span></td>
												      </tr>
												    </tbody>
												</table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree71">
										        Kunnec Tutor
										      </a>
										    </div>
										    <div id="collapseThree71" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tutors</h2>
												  <p>A class session is 15 minutes  ( 75 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$9.00 paid to you per Kunnec class session</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tutor Session</th>
												        <th>Date</th>
												        <th>Class Sessions</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>English</td>
												        <td>2nd</td>
												        <td>8</td>
												        <td> <span class="badge btn-warning">$72</span></td>
												      </tr>
												      <tr>
												        <td>English</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$225</span></td>
												      </tr>
												      <tr>
												        <td>Math</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$315</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td>
												      		<span class="badge btn-warning">$612</span>
												      	</td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree72">
										        Kunnec Tuts
										      </a>
										    </div>
										    <div id="collapseThree72" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tuts</h2>
												<p>To view a tutorial is $1.00  ( 5 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.60 paid to you per Kunnec view</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tuts Name</th>
												        <th>Date</th>
												        <th>Tuts View </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Php coding</td>
												        <td>2nd</td>
												        <td>45</td>
												        <td> <span class="badge btn-warning">$27</span></td>
												      </tr>
												      <tr>
												        <td>Css</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$15</span></td>
												      </tr>
												      <tr>
												        <td>Excel</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$3</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$45</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree73">
										        Kunnec Books
										      </a>
										    </div>
										    <div id="collapseThree73" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Books</h2>
												  <p>To read/download a book is $0.60  ( 3 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$0.36 paid to you per Kunnec read/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Book Name</th>
												        <th>Date</th>
												        <th>Read Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>How to Promote on Youtube</td>
												        <td>2nd</td>
												        <td>2000</td>
												        <td> <span class="badge btn-warning">$720</span></td>
												      </tr>
												      <tr>
												        <td>A miracle</td>
												        <td>16th</td>
												        <td>200</td>
												        <td> <span class="badge btn-warning">$60</span></td>
												      </tr>
												      <tr>
												        <td>Burn baby Burn</td>
												        <td>21st</td>
												        <td>4200</td>
												        <td> <span class="badge btn-warning">$1512</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2292</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree74">
										        Kunnec Stream
										      </a>
										    </div>
										    <div id="collapseThree74" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Streams</h2>
												<p>To stream/download a song is $0.20  ( 1 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.12 paid to you per Kunnec stream/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Song Name</th>
												        <th>Date</th>
												        <th>Stream/Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Thug Heaven</td>
												        <td>2nd</td>
												        <td>10000</td>
												        <td> <span class="badge btn-warning">$1200</span></td>
												      </tr>
												      <tr>
												        <td>Let it be Known</td>
												        <td>16th</td>
												        <td>5527</td>
												        <td> <span class="badge btn-warning">$663.24</span></td>
												      </tr>
												      <tr>
												        <td>Hello Bobby</td>
												        <td>21st</td>
												        <td>9048</td>
												        <td> <span class="badge btn-warning">$1085.76</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2949</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
							      </div>
							    </div>
							</div>
							<div class="card">
							    <div class="card-header">
							      <a class="collapsed card-link months" data-toggle="collapse" href="#collapseTwo7">
							        	August
							      </a>
							    </div>
							    <div id="collapseTwo7" class="collapse" data-parent="#accordion">
							      <div class="card-body">
								        <div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree800">
										        Kunnec Show
										      </a>
										    </div>
										    <div id="collapseThree800" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Shows</h2>
												<p>A show is $5.00 ( 25 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$3.00 paid to you per Kunnec viewer </p>          
												<table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Show Title</th>
												        <th>Date</th>
												        <th>Viewers</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Show1</td>
												        <td>2nd</td>
												        <td>300</td>
												        <td> <span class="badge btn-warning">$900</span></td>
												      </tr>
												      <tr>
												        <td>Show2</td>
												        <td>16th</td>
												        <td>153</td>
												        <td> <span class="badge btn-warning">$459</span></td>
												      </tr>
												      <tr>
												        <td>Show 3</td>
												        <td>21st</td>
												        <td>257</td>
												        <td> <span class="badge btn-warning">$771</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2130</span></td>
												      </tr>
												    </tbody>
												</table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree81">
										        Kunnec Tutor
										      </a>
										    </div>
										    <div id="collapseThree81" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tutors</h2>
												  <p>A class session is 15 minutes  ( 75 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$9.00 paid to you per Kunnec class session</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tutor Session</th>
												        <th>Date</th>
												        <th>Class Sessions</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>English</td>
												        <td>2nd</td>
												        <td>8</td>
												        <td> <span class="badge btn-warning">$72</span></td>
												      </tr>
												      <tr>
												        <td>English</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$225</span></td>
												      </tr>
												      <tr>
												        <td>Math</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$315</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td>
												      		<span class="badge btn-warning">$612</span>
												      	</td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree82">
										        Kunnec Tuts
										      </a>
										    </div>
										    <div id="collapseThree82" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tuts</h2>
												<p>To view a tutorial is $1.00  ( 5 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.60 paid to you per Kunnec view</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tuts Name</th>
												        <th>Date</th>
												        <th>Tuts View </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Php coding</td>
												        <td>2nd</td>
												        <td>45</td>
												        <td> <span class="badge btn-warning">$27</span></td>
												      </tr>
												      <tr>
												        <td>Css</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$15</span></td>
												      </tr>
												      <tr>
												        <td>Excel</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$3</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$45</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree83">
										        Kunnec Books
										      </a>
										    </div>
										    <div id="collapseThree83" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Books</h2>
												  <p>To read/download a book is $0.60  ( 3 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$0.36 paid to you per Kunnec read/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Book Name</th>
												        <th>Date</th>
												        <th>Read Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>How to Promote on Youtube</td>
												        <td>2nd</td>
												        <td>2000</td>
												        <td> <span class="badge btn-warning">$720</span></td>
												      </tr>
												      <tr>
												        <td>A miracle</td>
												        <td>16th</td>
												        <td>200</td>
												        <td> <span class="badge btn-warning">$60</span></td>
												      </tr>
												      <tr>
												        <td>Burn baby Burn</td>
												        <td>21st</td>
												        <td>4200</td>
												        <td> <span class="badge btn-warning">$1512</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2292</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree84">
										        Kunnec Stream
										      </a>
										    </div>
										    <div id="collapseThree84" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Streams</h2>
												<p>To stream/download a song is $0.20  ( 1 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.12 paid to you per Kunnec stream/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Song Name</th>
												        <th>Date</th>
												        <th>Stream/Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Thug Heaven</td>
												        <td>2nd</td>
												        <td>10000</td>
												        <td> <span class="badge btn-warning">$1200</span></td>
												      </tr>
												      <tr>
												        <td>Let it be Known</td>
												        <td>16th</td>
												        <td>5527</td>
												        <td> <span class="badge btn-warning">$663.24</span></td>
												      </tr>
												      <tr>
												        <td>Hello Bobby</td>
												        <td>21st</td>
												        <td>9048</td>
												        <td> <span class="badge btn-warning">$1085.76</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2949</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
							      </div>
							    </div>
							</div>
							<div class="card">
							    <div class="card-header">
							      <a class="collapsed card-link months" data-toggle="collapse" href="#collapseTwo8">
							        	September
							      </a>
							    </div>
							    <div id="collapseTwo8" class="collapse" data-parent="#accordion">
							      <div class="card-body">
								        <div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree900">
										        Kunnec Show
										      </a>
										    </div>
										    <div id="collapseThree900" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Shows</h2>
												<p>A show is $5.00 ( 25 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$3.00 paid to you per Kunnec viewer </p>          
												<table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Show Title</th>
												        <th>Date</th>
												        <th>Viewers</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Show1</td>
												        <td>2nd</td>
												        <td>300</td>
												        <td> <span class="badge btn-warning">$900</span></td>
												      </tr>
												      <tr>
												        <td>Show2</td>
												        <td>16th</td>
												        <td>153</td>
												        <td> <span class="badge btn-warning">$459</span></td>
												      </tr>
												      <tr>
												        <td>Show 3</td>
												        <td>21st</td>
												        <td>257</td>
												        <td> <span class="badge btn-warning">$771</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2130</span></td>
												      </tr>
												    </tbody>
												</table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree91">
										        Kunnec Tutor
										      </a>
										    </div>
										    <div id="collapseThree91" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tutors</h2>
												  <p>A class session is 15 minutes  ( 75 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$9.00 paid to you per Kunnec class session</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tutor Session</th>
												        <th>Date</th>
												        <th>Class Sessions</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>English</td>
												        <td>2nd</td>
												        <td>8</td>
												        <td> <span class="badge btn-warning">$72</span></td>
												      </tr>
												      <tr>
												        <td>English</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$225</span></td>
												      </tr>
												      <tr>
												        <td>Math</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$315</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td>
												      		<span class="badge btn-warning">$612</span>
												      	</td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree92">
										        Kunnec Tuts
										      </a>
										    </div>
										    <div id="collapseThree92" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tuts</h2>
												<p>To view a tutorial is $1.00  ( 5 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.60 paid to you per Kunnec view</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tuts Name</th>
												        <th>Date</th>
												        <th>Tuts View </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Php coding</td>
												        <td>2nd</td>
												        <td>45</td>
												        <td> <span class="badge btn-warning">$27</span></td>
												      </tr>
												      <tr>
												        <td>Css</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$15</span></td>
												      </tr>
												      <tr>
												        <td>Excel</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$3</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$45</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree93">
										        Kunnec Books
										      </a>
										    </div>
										    <div id="collapseThree93" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Books</h2>
												  <p>To read/download a book is $0.60  ( 3 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$0.36 paid to you per Kunnec read/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Book Name</th>
												        <th>Date</th>
												        <th>Read Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>How to Promote on Youtube</td>
												        <td>2nd</td>
												        <td>2000</td>
												        <td> <span class="badge btn-warning">$720</span></td>
												      </tr>
												      <tr>
												        <td>A miracle</td>
												        <td>16th</td>
												        <td>200</td>
												        <td> <span class="badge btn-warning">$60</span></td>
												      </tr>
												      <tr>
												        <td>Burn baby Burn</td>
												        <td>21st</td>
												        <td>4200</td>
												        <td> <span class="badge btn-warning">$1512</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2292</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree94">
										        Kunnec Stream
										      </a>
										    </div>
										    <div id="collapseThree94" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Streams</h2>
												<p>To stream/download a song is $0.20  ( 1 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.12 paid to you per Kunnec stream/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Song Name</th>
												        <th>Date</th>
												        <th>Stream/Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Thug Heaven</td>
												        <td>2nd</td>
												        <td>10000</td>
												        <td> <span class="badge btn-warning">$1200</span></td>
												      </tr>
												      <tr>
												        <td>Let it be Known</td>
												        <td>16th</td>
												        <td>5527</td>
												        <td> <span class="badge btn-warning">$663.24</span></td>
												      </tr>
												      <tr>
												        <td>Hello Bobby</td>
												        <td>21st</td>
												        <td>9048</td>
												        <td> <span class="badge btn-warning">$1085.76</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2949</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
							      </div>
							    </div>
							</div>
							<div class="card">
							    <div class="card-header">
							      <a class="collapsed card-link months" data-toggle="collapse" href="#collapseTwo9">
							        	Octobor
							      </a>
							    </div>
							    <div id="collapseTwo9" class="collapse" data-parent="#accordion">
							      <div class="card-body">
								        <div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree1000">
										        Kunnec Show
										      </a>
										    </div>
										    <div id="collapseThree1000" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Shows</h2>
												<p>A show is $5.00 ( 25 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$3.00 paid to you per Kunnec viewer </p>          
												<table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Show Title</th>
												        <th>Date</th>
												        <th>Viewers</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Show1</td>
												        <td>2nd</td>
												        <td>300</td>
												        <td> <span class="badge btn-warning">$900</span></td>
												      </tr>
												      <tr>
												        <td>Show2</td>
												        <td>16th</td>
												        <td>153</td>
												        <td> <span class="badge btn-warning">$459</span></td>
												      </tr>
												      <tr>
												        <td>Show 3</td>
												        <td>21st</td>
												        <td>257</td>
												        <td> <span class="badge btn-warning">$771</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2130</span></td>
												      </tr>
												    </tbody>
												</table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree101">
										        Kunnec Tutor
										      </a>
										    </div>
										    <div id="collapseThree101" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tutors</h2>
												  <p>A class session is 15 minutes  ( 75 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$9.00 paid to you per Kunnec class session</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tutor Session</th>
												        <th>Date</th>
												        <th>Class Sessions</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>English</td>
												        <td>2nd</td>
												        <td>8</td>
												        <td> <span class="badge btn-warning">$72</span></td>
												      </tr>
												      <tr>
												        <td>English</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$225</span></td>
												      </tr>
												      <tr>
												        <td>Math</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$315</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td>
												      		<span class="badge btn-warning">$612</span>
												      	</td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree102">
										        Kunnec Tuts
										      </a>
										    </div>
										    <div id="collapseThree102" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tuts</h2>
												<p>To view a tutorial is $1.00  ( 5 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.60 paid to you per Kunnec view</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tuts Name</th>
												        <th>Date</th>
												        <th>Tuts View </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Php coding</td>
												        <td>2nd</td>
												        <td>45</td>
												        <td> <span class="badge btn-warning">$27</span></td>
												      </tr>
												      <tr>
												        <td>Css</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$15</span></td>
												      </tr>
												      <tr>
												        <td>Excel</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$3</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$45</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree103">
										        Kunnec Books
										      </a>
										    </div>
										    <div id="collapseThree103" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Books</h2>
												  <p>To read/download a book is $0.60  ( 3 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$0.36 paid to you per Kunnec read/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Book Name</th>
												        <th>Date</th>
												        <th>Read Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>How to Promote on Youtube</td>
												        <td>2nd</td>
												        <td>2000</td>
												        <td> <span class="badge btn-warning">$720</span></td>
												      </tr>
												      <tr>
												        <td>A miracle</td>
												        <td>16th</td>
												        <td>200</td>
												        <td> <span class="badge btn-warning">$60</span></td>
												      </tr>
												      <tr>
												        <td>Burn baby Burn</td>
												        <td>21st</td>
												        <td>4200</td>
												        <td> <span class="badge btn-warning">$1512</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2292</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree104">
										        Kunnec Stream
										      </a>
										    </div>
										    <div id="collapseThree104" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Streams</h2>
												<p>To stream/download a song is $0.20  ( 1 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.12 paid to you per Kunnec stream/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Song Name</th>
												        <th>Date</th>
												        <th>Stream/Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Thug Heaven</td>
												        <td>2nd</td>
												        <td>10000</td>
												        <td> <span class="badge btn-warning">$1200</span></td>
												      </tr>
												      <tr>
												        <td>Let it be Known</td>
												        <td>16th</td>
												        <td>5527</td>
												        <td> <span class="badge btn-warning">$663.24</span></td>
												      </tr>
												      <tr>
												        <td>Hello Bobby</td>
												        <td>21st</td>
												        <td>9048</td>
												        <td> <span class="badge btn-warning">$1085.76</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2949</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
							      </div>
							    </div>
							</div>
							<div class="card">
							    <div class="card-header">
							      <a class="collapsed card-link months" data-toggle="collapse" href="#collapseTwo10">
							        	November
							      </a>
							    </div>
							    <div id="collapseTwo10" class="collapse" data-parent="#accordion">
							      <div class="card-body">
								        <div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree10000">
										        Kunnec Show
										      </a>
										    </div>
										    <div id="collapseThree10000" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Shows</h2>
												<p>A show is $5.00 ( 25 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$3.00 paid to you per Kunnec viewer </p>          
												<table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Show Title</th>
												        <th>Date</th>
												        <th>Viewers</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Show1</td>
												        <td>2nd</td>
												        <td>300</td>
												        <td> <span class="badge btn-warning">$900</span></td>
												      </tr>
												      <tr>
												        <td>Show2</td>
												        <td>16th</td>
												        <td>153</td>
												        <td> <span class="badge btn-warning">$459</span></td>
												      </tr>
												      <tr>
												        <td>Show 3</td>
												        <td>21st</td>
												        <td>257</td>
												        <td> <span class="badge btn-warning">$771</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2130</span></td>
												      </tr>
												    </tbody>
												</table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree111">
										        Kunnec Tutor
										      </a>
										    </div>
										    <div id="collapseThree111" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tutors</h2>
												  <p>A class session is 15 minutes  ( 75 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$9.00 paid to you per Kunnec class session</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tutor Session</th>
												        <th>Date</th>
												        <th>Class Sessions</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>English</td>
												        <td>2nd</td>
												        <td>8</td>
												        <td> <span class="badge btn-warning">$72</span></td>
												      </tr>
												      <tr>
												        <td>English</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$225</span></td>
												      </tr>
												      <tr>
												        <td>Math</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$315</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td>
												      		<span class="badge btn-warning">$612</span>
												      	</td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree112">
										        Kunnec Tuts
										      </a>
										    </div>
										    <div id="collapseThree112" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tuts</h2>
												<p>To view a tutorial is $1.00  ( 5 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.60 paid to you per Kunnec view</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tuts Name</th>
												        <th>Date</th>
												        <th>Tuts View </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Php coding</td>
												        <td>2nd</td>
												        <td>45</td>
												        <td> <span class="badge btn-warning">$27</span></td>
												      </tr>
												      <tr>
												        <td>Css</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$15</span></td>
												      </tr>
												      <tr>
												        <td>Excel</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$3</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$45</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree113">
										        Kunnec Books
										      </a>
										    </div>
										    <div id="collapseThree113" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Books</h2>
												  <p>To read/download a book is $0.60  ( 3 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$0.36 paid to you per Kunnec read/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Book Name</th>
												        <th>Date</th>
												        <th>Read Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>How to Promote on Youtube</td>
												        <td>2nd</td>
												        <td>2000</td>
												        <td> <span class="badge btn-warning">$720</span></td>
												      </tr>
												      <tr>
												        <td>A miracle</td>
												        <td>16th</td>
												        <td>200</td>
												        <td> <span class="badge btn-warning">$60</span></td>
												      </tr>
												      <tr>
												        <td>Burn baby Burn</td>
												        <td>21st</td>
												        <td>4200</td>
												        <td> <span class="badge btn-warning">$1512</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2292</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree114">
										        Kunnec Stream
										      </a>
										    </div>
										    <div id="collapseThree114" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Streams</h2>
												<p>To stream/download a song is $0.20  ( 1 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.12 paid to you per Kunnec stream/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Song Name</th>
												        <th>Date</th>
												        <th>Stream/Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Thug Heaven</td>
												        <td>2nd</td>
												        <td>10000</td>
												        <td> <span class="badge btn-warning">$1200</span></td>
												      </tr>
												      <tr>
												        <td>Let it be Known</td>
												        <td>16th</td>
												        <td>5527</td>
												        <td> <span class="badge btn-warning">$663.24</span></td>
												      </tr>
												      <tr>
												        <td>Hello Bobby</td>
												        <td>21st</td>
												        <td>9048</td>
												        <td> <span class="badge btn-warning">$1085.76</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2949</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
							      </div>
							    </div>
							</div>
							<div class="card">
							    <div class="card-header">
							      <a class="collapsed card-link months" data-toggle="collapse" href="#collapseTwo121">
							        	December
							      </a>
							    </div>
							    <div id="collapseTwo121" class="collapse" data-parent="#accordion">
							      <div class="card-body">
								       <div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree1200">
										        Kunnec Show
										      </a>
										    </div>
										    <div id="collapseThree1200" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Shows</h2>
												<p>A show is $5.00 ( 25 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$3.00 paid to you per Kunnec viewer </p>          
												<table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Show Title</th>
												        <th>Date</th>
												        <th>Viewers</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Show1</td>
												        <td>2nd</td>
												        <td>300</td>
												        <td> <span class="badge btn-warning">$900</span></td>
												      </tr>
												      <tr>
												        <td>Show2</td>
												        <td>16th</td>
												        <td>153</td>
												        <td> <span class="badge btn-warning">$459</span></td>
												      </tr>
												      <tr>
												        <td>Show 3</td>
												        <td>21st</td>
												        <td>257</td>
												        <td> <span class="badge btn-warning">$771</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2130</span></td>
												      </tr>
												    </tbody>
												</table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree121">
										        Kunnec Tutor
										      </a>
										    </div>
										    <div id="collapseThree121" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tutors</h2>
												  <p>A class session is 15 minutes  ( 75 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$9.00 paid to you per Kunnec class session</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tutor Session</th>
												        <th>Date</th>
												        <th>Class Sessions</th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>English</td>
												        <td>2nd</td>
												        <td>8</td>
												        <td> <span class="badge btn-warning">$72</span></td>
												      </tr>
												      <tr>
												        <td>English</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$225</span></td>
												      </tr>
												      <tr>
												        <td>Math</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$315</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td>
												      		<span class="badge btn-warning">$612</span>
												      	</td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree122">
										        Kunnec Tuts
										      </a>
										    </div>
										    <div id="collapseThree122" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Tuts</h2>
												<p>To view a tutorial is $1.00  ( 5 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.60 paid to you per Kunnec view</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Tuts Name</th>
												        <th>Date</th>
												        <th>Tuts View </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Php coding</td>
												        <td>2nd</td>
												        <td>45</td>
												        <td> <span class="badge btn-warning">$27</span></td>
												      </tr>
												      <tr>
												        <td>Css</td>
												        <td>16th</td>
												        <td>25</td>
												        <td> <span class="badge btn-warning">$15</span></td>
												      </tr>
												      <tr>
												        <td>Excel</td>
												        <td>21st</td>
												        <td>35</td>
												        <td> <span class="badge btn-warning">$3</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$45</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree123">
										        Kunnec Books
										      </a>
										    </div>
										    <div id="collapseThree123" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Books</h2>
												  <p>To read/download a book is $0.60  ( 3 credits )</p>      
												 <p>60% of monies made goes to you:</p>
												<p>$0.36 paid to you per Kunnec read/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Book Name</th>
												        <th>Date</th>
												        <th>Read Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>How to Promote on Youtube</td>
												        <td>2nd</td>
												        <td>2000</td>
												        <td> <span class="badge btn-warning">$720</span></td>
												      </tr>
												      <tr>
												        <td>A miracle</td>
												        <td>16th</td>
												        <td>200</td>
												        <td> <span class="badge btn-warning">$60</span></td>
												      </tr>
												      <tr>
												        <td>Burn baby Burn</td>
												        <td>21st</td>
												        <td>4200</td>
												        <td> <span class="badge btn-warning">$1512</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2292</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
										<div class="card">
										    <div class="card-header">
										      <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree124">
										        Kunnec Stream
										      </a>
										    </div>
										    <div id="collapseThree124" class="collapse" data-parent="#accordion">
										      <div class="card-body">
										        <h2>Your Streams</h2>
												<p>To stream/download a song is $0.20  ( 1 credits )</p>      
												<p>60% of monies made goes to you:</p>
												<p>$0.12 paid to you per Kunnec stream/download</p>          
												  <table class="table table-hover">
												    <thead>
												      <tr>
												        <th>Song Name</th>
												        <th>Date</th>
												        <th>Stream/Download </th>
												        <th>Total</th>
												      </tr>
												    </thead>
												    <tbody>
												      <tr>
												        <td>Thug Heaven</td>
												        <td>2nd</td>
												        <td>10000</td>
												        <td> <span class="badge btn-warning">$1200</span></td>
												      </tr>
												      <tr>
												        <td>Let it be Known</td>
												        <td>16th</td>
												        <td>5527</td>
												        <td> <span class="badge btn-warning">$663.24</span></td>
												      </tr>
												      <tr>
												        <td>Hello Bobby</td>
												        <td>21st</td>
												        <td>9048</td>
												        <td> <span class="badge btn-warning">$1085.76</span></td>
												      </tr>
												      <tr>
												      	<th>Total</th>
												      	<td><span class="badge btn-warning">$2949</span></td>
												      </tr>
												    </tbody>
												  </table>
										      </div>
										    </div>
										</div>
							      </div>
							    </div>
							</div>
		           	   </div>
		           	</div>
		      </div>
		    </div>
		</div>
@endsection