@extends('layouts.newheader.header')
@section('title', 'Create Your Store')
@section('content')
<div class="card">
        <div class="card-body">
    	        <!-- Start of Tabs -->
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="setup-tab" data-toggle="tab" href="#tab-setup" role="tab" aria-controls="tab-setup" aria-selected="true">
                        Upload Product 
                      </a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" id="course-tab" data-toggle="tab" href="#tab-course" role="tab" aria-controls="tab-course" aria-selected="false">
                          My Store
                        </a>
                  </li>
      		        <li class="nav-item">
                      <a class="nav-link" id="wish-tab" data-toggle="tab" href="#tab-wish" role="tab" aria-controls="tab-wish" aria-selected="true">
                          Wish List
                      </a>
                  </li>
      		  </ul>
              <div class="tab-content border-x border-bottom p-3" id="myTabContent">
	                <div class="tab-pane fade show active" id="tab-setup" role="tabpanel" aria-labelledby="setup-tab">
	                    <div class="card">
	                        <div class="card-body p-0">
	      					    <hr class="style-12">
		          				<form action="{{ route('shop.store') }}" method="post">
		          					@csrf
		          					<div class="row no-gutters">
		                               <div class="col-lg-8 pr-lg-2">
		                                  <div class="card mb-3">
		                                      <div class="card-header">
		                                          <h5 class="mb-0">
		                                          		Upload Product
		                                          </h5>
		                                      </div>
		                                      <div class="card-body bg-light">
		                                            <div class="row">
		                                                <div class="col-12">
		                                                    <div class="form-group">
		                                                        <label for="heading">Title of Product</label>
		                                                        <input class="form-control" id="heading" type="text" name="name">
		                                                    </div>
		                                                </div>
		                                                <div class="col-12">
		                                                    <div class="form-group">
		                                                        <label for="heading">Brief Title Description</label>
		                                                        <input class="form-control" id="heading" type="text" name="bdes">
		                                                    </div>
		                                                </div>
		                                                <div class="col-lg-6">
		                                                    <div class="btn-group pb-3">
		                                                        <select class="custom-select">
		                                                        	<option>Select Category</option>
		                                                        	<option>Category</option>
		                                                        	<option>Category</option>
		                                                        	<option>Category</option>
		                                                        	<option>Category</option>
		                                                        	<option>Category</option>
		                                                        	<option>Category</option>
		                                                        	<option>Category</option>
		                                                        	<option>Category</option>
		                                                        	<option>Category</option>
		                                                        	<option>Category</option>
		                                                        	<option>Category</option>
		                                                        	<option>Category</option>
		                                                        	<option>Category</option>
		                                                        	<option>Category</option>
		                                                        	<option>Category</option>
		                                                        	<option>Category</option>
		                                                        	<option>Category</option>
		                                                        	<option>Category</option>
		                                                        	<option>Category</option>
		                                                        	<option>Category</option>
		                                                        	<option>Category</option>
		                                                        </select>
		                                                    </div>
		                                                </div>
		                                                <div class="col-lg-6">
		                                                    <div class="form-group">
		                                                      <select class="custom-select" id="card-holder-country"  required="required">
		                                                        <option value="">Select Language ...</option>
		                                                        <option value="Afrikanns">Afrikanns</option>
		                                                        <option value="Albanian">Albanian</option>
		                                                        <option value="Albanian">Amharic</option>
		                                                        <option value="Arabic">Arabic</option>
		                                                        <option value="Armenian">Armenian</option>
		                                                        <option value="Basque">Basque</option>
		                                                        <option value="Albanian">Belarusian</option>
		                                                        <option value="Bengali">Bengali</option>
		                                                        <option value="Albanian">Bosnian</option>
		                                                        <option value="Bulgarian">Bulgarian</option>
		                                                        <option value="Catalan">Catalan</option>
		                                                        <option value="Cambodian">Cambodian</option>
		                                                        <option value="Albanian">Cebuano</option>
		                                                        <option value="Albanian">Chichwea</option>
		                                                        <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
		                                                        <option value="Albanian">Corsican</option>
		                                                        <option value="Croation">Croation</option>
		                                                        <option value="Czech">Czech</option>
		                                                        <option value="Danish">Danish</option>
		                                                        <option value="Dutch">Dutch</option>
		                                                        <option value="English">English</option>
		                                                        <option value="Estonian">Estonian</option>
		                                                        <option value="Albanian">Filipino</option>
		                                                        <option value="Fiji">Fiji</option>
		                                                        <option value="Finnish">Finnish</option>
		                                                        <option value="French">French</option>
		                                                        <option value="Albanian">Gallician</option>
		                                                        <option value="Georgian">Georgian</option>
		                                                        <option value="German">German</option>
		                                                        <option value="Greek">Greek</option>
		                                                        <option value="Gujarati">Gujarati</option>
		                                                        <option value="Albanian">Hausa</option>
		                                                        <option value="Albanian">Cebuano</option>
		                                                        <option value="Hebrew">Hawaiian</option>
		                                                        <option value="Albanian">Hebrew</option>
		                                                        <option value="Hindi">Hindi</option>
		                                                        <option value="Albanian">Hmong</option>
		                                                        <option value="Hungarian">Hungarian</option>
		                                                        <option value="Icelandic">Icelandic</option>
		                                                        <option value="Albanian">Igbo</option>
		                                                        <option value="Indonesian">Indonesian</option>
		                                                        <option value="Irish">Irish</option>
		                                                        <option value="Italian">Italian</option>
		                                                        <option value="Japanese">Japanese</option>
		                                                        <option value="Javanese">Javanese</option>
		                                                        <option value="Albanian">Kannada</option>
		                                                        <option value="Albanian">Kazakh</option>
		                                                        <option value="Albanian">Khmer</option>
		                                                        <option value="Korean">Korean</option>
		                                                        <option value="Albanian">Kurdish</option>
		                                                        <option value="Albanian">Kyrgyz</option>
		                                                        <option value="Albanian">Lao</option>
		                                                        <option value="Latin">Latin</option>
		                                                        <option value="Latvian">Latvian</option>
		                                                        <option value="Lithuanian">Lithuanian</option>
		                                                        <option value="Albanian">Luxembourgish</option>
		                                                        <option value="Macedonian">Macedonian</option>
		                                                        <option value="Albanian">Malagasy</option>
		                                                        <option value="Malay">Malay</option>
		                                                        <option value="Malayalam">Malayalam</option>
		                                                        <option value="Maltese">Maltese</option>
		                                                        <option value="Maori">Maori</option>
		                                                        <option value="Marathi">Marathi</option>
		                                                        <option value="Mongolian">Mongolian</option>
		                                                        <option value="Albanian">Myammar</option>
		                                                        <option value="Nepali">Nepali</option>
		                                                        <option value="Norwegian">Norwegian</option>
		                                                        <option value="Albanian">Pashto</option>
		                                                        <option value="Persian">Persian</option>
		                                                        <option value="Polish">Polish</option>
		                                                        <option value="Portuguese">Portuguese</option>
		                                                        <option value="Punjabi">Punjabi</option>
		                                                        <option value="Quechua">Quechua</option>
		                                                        <option value="Romanian">Romanian</option>
		                                                        <option value="Russian">Russian</option>
		                                                        <option value="Samoan">Samoan</option>
		                                                        <option value="Albanian">Scots Gaelic</option>
		                                                        <option value="Serbian">Serbian</option>
		                                                        <option value="Albanian">Sesotho</option>
		                                                        <option value="Albanian">Shona</option>
		                                                        <option value="Albanian">Sinhala</option>
		                                                        <option value="Slovak">Slovak</option>
		                                                        <option value="Slovenian">Slovenian</option>
		                                                        <option value="Albanian">Somali</option>
		                                                        <option value="Spanish">Spanish</option>
		                                                        <option value="Albanian">Sundanese</option>
		                                                        <option value="Swahili">Swahili</option>
		                                                        <option value="Swedish ">Swedish </option>
		                                                        <option value="Albanian">Tajik</option>
		                                                        <option value="Tamil">Tamil</option>
		                                                        <option value="Tatar">Tatar</option>
		                                                        <option value="Telugu">Telugu</option>
		                                                        <option value="Thai">Thai</option>
		                                                        <option value="Tibetan">Tibetan</option>
		                                                        <option value="Tonga">Tonga</option>
		                                                        <option value="Turkish">Turkish</option>
		                                                        <option value="Ukranian">Ukranian</option>
		                                                        <option value="Urdu">Urdu</option>
		                                                        <option value="Uzbek">Uzbek</option>
		                                                        <option value="Vietnamese">Vietnamese</option>
		                                                        <option value="Welsh">Welsh</option>
		                                                        <option value="Xhosa">Xhosa</option>
		                                                        <option value="Albanian">Yiddish</option>
		                                                        <option value="Albanian">Yoruba</option>
		                                                        <option value="Albanian">Zulu</option>
		                                                      </select>
		                                                    </div>
		                                                </div>    
		                                                <div class="col-12">
		                                                    <div class="form-group">
		                                                        <label for="intro">
		                                                            Product Description
		                                                        </label>
		                                                        <textarea style="resize:none;" class="form-control" id="intro" name="description" cols="30" rows="13"></textarea>
		                                                    </div>
		                                                </div>
		                                                <div class="col-12 d-flex justify-content-end">
		                                                    <button class="btn btn-success" type="submit">
		                                                      Update 
		                                                    </button>
		                                                </div>
		                                            </div>
		                                      </div>
		                                  </div>
			                              <div class="card mb-3">
			                                  <div class="card-header">
				                                    <h5 class="mb-0">
				                                        Upload
				                                    </h5>
			                                  </div>
			                                  <div class="card-body bg-light">
				                                      <a class="mb-4 d-block d-flex align-items-center" href="#experience-form" data-toggle="collapse" aria-expanded="false" aria-controls="experience-form">
					                                        <span class="circle-dashed">
					                                          <span class="fas fa-plus"></span>
					                                        </span>
					                                        <span class="ml-3">Add a New Product</span>
				                                      </a>
				                                      <div class="collapse" id="experience-form">
					                        				<div class="form-group">
					                        				  <div class="row">
					                                                <div class="col-lg-3 text-lg-right">
					                        						    <label class="mb-0" for="school">
							                                              Upload Product
							                                            </label>
					                        							</div>
					                        							<div class="col-lg-7">
						                                                  <div onload="loadImageFile();">
						                                                      <input id="upload-Image" type="file" onchange="loadImageFile();" />
						                                                        <img id="upload-Preview"/>
						                                                  </div>
					                        							</div>
					                        						</div>
					                                          </div>
					            							  <hr class="border-dashed border-bottom-0 my-4" />
					        							      <button class="btn btn-success" type="button">Save Product</button> 
					                                        </div>
					                                  </div>
				                              </div>	
			                                  <div class="card-header">
			                                      <h5 class="mb-0">
			                                        View Product
			                                      </h5>
			                                  </div>
			                    			  <div class="card-body bg-light">
			                                       <a class="btn btn-primary d-block" href="k_shop_channel.php" type="button" href="#!">
			                                          View Product
			                                        </a>
			                                  </div>
			                              </div>
		                               <div class="col-lg-4 pl-lg-2">
			                                <div class="sticky-top sticky-sidebar">
				                                  <div class="card mb-3 overflow-hidden">
					                                    <div class="card">
					                                      <div class="card-header">
						                                        <h5 class="mb-0">
						                                          Main Product Image
						                                        </h5>
					                                      </div>
					                                      <div class="card-body bg-light">
						                    			        <div class="container">
						                                            <div class="col-md-6">
						                                                <div class="form-group">
						                                                    <div onload="loadImageFile();">
						                                                        <table>
						                                                            <tbody>
						                                                                <tr>
						                                                                    <td>Upload Image<input id="upload-Image" type="file" onchange="loadImageFile();" /></td>
						                                                                </tr>
						                                                                <tr>
						                                                                    <td><img id="upload-Preview"/></td>
						                                                                </tr>
						                                                            </tbody>
						                                                        </table>
						                                                    </div>
						                                                </div>
						                                            </div>
						                                        </div>
						                                    	<h5 class="fs-0">Delete this Product</h5>
						            				          	<div class="col mb-3">
						                                          <p class="fs--1">
						                                              Once you delete this product, there is no going back. Please be certain.
						                                          </p>
						                                          <a class="btn btn-danger d-block" href="#!" type="button" href="#!">
						                                                Delete Product
						                                          </a>
						                                        </div> 
						                                        <div class="col">					
						                            				<a class="btn btn-success d-block" href="#!" type="button" href="#!" >    Save Product
						                                            </a>
						                            		    </div>
						                            	  </div>
					                                    </div>
				                                  </div>
			                                </div>
		                               </div>
		                            </div>		
	                        	</form>
	                        </div>
	                    </div>
	                </div>
				     <!-- Start of New Tab -->
	                <div class="tab-pane fade" id="tab-course" role="tabpanel" aria-labelledby="course-tab">
	                    <div class="card">
	                        <div class="card-header">
	                          <div class="row align-items-center justify-content-between">
	                              <div class="col-4 col-sm-auto d-flex align-items-center pr-0 mb-3">
	                                    <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">
	                                      <i class="fas fa-video"></i> &nbsp;My Store
	                                    </h5>
	                              </div>
	                          </div>
					          <div class="table-responsive-sm">
						            <table class="table table-hover">
		                              <thead style="color:#FFFFFF; background-color:#009900;">
		                                <tr>
		                                  <th class="th-sm">#</th>
		                                  <th scope="col">Product</th>
		                                  <th scope="col">Description <i class="fas fa-sort-alpha-up"></i></th>
		                              	  <th scope="col">Date <i class="fas fa-sort"></i></th>
		                              	  <th scope="col">Edit</th>
		                                </tr>
		                              </thead>
		                              <tbody>
		                                <tr>
		                                  <th scope="row">1</th>
		                                  <td><a href="k_shop_details.php"><img src="../pages/course/images/sun.jpg" width="75px"></a></td>
		                                  <td><a href="k_shop_details.php">The Direction is Always Up</a></td>
		                                  <td>02/21/1988</td>
		                            	    <td><a href="k_shop_edit.php"><i class="fas fa-edit"></i></a></td>
		                                </tr>
		                            	</tbody>
		                            </table>
	                          </div>
	                        </div>
	                    </div>
	    		    </div>
			       	<!-- Start of New Tab -->
	                <div class="tab-pane fade" id="tab-wish" role="tabpanel" aria-labelledby="wish-tab">
	                    <div class="card">
	                        <div class="card-header">
	                            <div class="row align-items-center justify-content-between">
	                                <div class="col-4 col-sm-auto d-flex align-items-center pr-0 mb-3">
	                                    <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0"><i class="fas fa-heart"></i> &nbsp;Wish List</h5>
	                                </div>
	                            </div>
	                    		<div class="table-responsive-sm">
							        <table class="table table-hover">
		                                <thead style="color:#FFFFFF; background-color:#009900;">
		                                 <tr>
		                                    <th class="th-sm">#</th>
		                                    <th scope="col">Product</th>
		                                    <th scope="col">Product Title <i class="fas fa-sort-alpha-up"></i></th>
		                                    <th scope="col">Seller <i class="fas fa-sort"></i></th>
		                                	  <th scope="col">Category <i class="fas fa-sort"></i></th>
		                                	  <th scope="col">Date <i class="fas fa-sort"></i></th>
		                                  </tr>
		                                </thead>
		                                <tbody>
		                                  <tr>
		                                    <th scope="row">1</th>
		                                    <td><a href="k_course.php"><img src="../pages/course/images/sun.jpg" width="75px"></a></td>
		                                    <td><a href="k_course.php">The Direction is Always Up</a></td>
		                                    <td><a href="#!">Tupac Amoru Shakur</a></td>
		                              	  <td>Math</td>
		                              	  <td>02/21/1988</td>
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
@endsection