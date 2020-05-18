<template>
	<div class="container-fluid">
		<div class="col-lg-12 col-sm-12 col-md-12">
			<form class="form-group" action="#" method="post">
				<h2> <i class="fa fa-plus-circle"></i> Add Your New Service</h2>
				<div class="col-lg-12">
					<div>
						<label><b> <i class="fa fa-info-circle"></i> Service Title </b></label>
						<input type="text" placeholder="Service Title" class="form-control" name="title" />
					</div>
				</div> <br />
				<div class="col-lg-12">
					<div>
						<label>
							<b> <i class="fa fa-pencil-square" aria-hidden="true"></i> Describe your Service </b>
						</label>
						<textarea class="form-control" name="description" rows="10" cols="10"></textarea>
					</div>
				</div> <br />
				<div class="col-lg-12">
					<label> <i class="fa fa-plus-circle"></i> Add Facilities</label>
					<div class="card">
						<div class="card-header">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Add Facilities" name="addservice" id="addservice" />
								<button class="btn btn-info"><i>+</i> Add </button>
							</div>
						</div>
						<div class="card-body">
							<ul class="list-group">
							  <li class="list-group-item">
							  	<div class="col-lg-12 input-group">
							  		<input type="text" value="Cleaner" class="form-control" name="" disabled/>
							  		<button type="button" class="btn btn-danger">-</button>
							  	</div>
							  </li>
							  <li class="list-group-item">
							  	<div class="col-lg-12 input-group">
							  		<input type="text" value="Washer" class="form-control" name="" disabled/>
							  		<button type="button" class="btn btn-danger">-</button>
							  	</div>
							  </li>
							  <li class="list-group-item">
							  	<div class="col-lg-12 input-group">
							  		<input type="text" value="Repairing" class="form-control" name="" disabled/>
							  		<button type="button" class="btn btn-danger">-</button>
							  	</div>
							  </li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-6">
							<label>
								<b> <i class="fa fa-clock-o" aria-hidden="true"></i> Opening Timing </b>
							</label>
							<input type="time" name="opentime" class="form-control" />
						</div>
						<div class="col-lg-6">
							<label>
								<b> <i class="fa fa-clock-o" aria-hidden="true"></i> Close Timing </b>
							</label>
							<input type="time" name="closetime" class="form-control" />
						</div>
					</div>
				</div> <br />
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-6">
							<label>
								<b> <i class="fa fa-sort-desc" aria-hidden="true"></i> Opening Timing </b>
							</label>
							<input type="time" name="opentime" class="form-control" />
						</div>
						<div class="col-lg-6">
							<label>
								<b> <i class="fa fa-sort-desc" aria-hidden="true"></i> Sub Category </b>
							</label>
							<select class="form-control" name="category">
								<option>Select Sub Category</option>
							</select>
						</div>
					</div>
				</div> <br />
				<div class="col-lg-12">
					<div class="row">
						<div class="col-lg-6">
							<label>
								<b> <i class="fa fa-envelope-open" aria-hidden="true"></i> Email </b>
							</label>
							<input type="mail" placeholder="Email" class="form-control" name="email" />
						</div>
						<div class="col-lg-6">
							<label>
								<b> <i class="fa fa-phone" aria-hidden="true"></i> Phone </b>
							</label>
							<input type="text" placeholder="Phone" class="form-control" name="phone" />
						</div>
					</div>
				</div>
				<br />
				<div class="col-lg-12">
					<button class="btn btn-info float-right"><i class="fa fa-floppy-o" aria-hidden="true"></i> Publish</button>
				</div>
			</form>
		</div>
	</div>
</template>