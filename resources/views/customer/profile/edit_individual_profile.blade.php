@extends('customer.layouts.app')
@section('title','Edit-Profile')
@section('content')
<!--banner section start here-->
<section class="banner_section_new">
	<div class="container-fluid">
		<div class="col-md-12">
			<div class="banner_title">
				<a href="index.html" class="back-home"><i class="fa fa-home" aria-hidden="true"></i></a>
				<span class="banner-or-set">|</span>
				<h4>My Profile</h4>
			</div>
		</div>
	</div>
</section>

<!--banner section end here-->
<!--profile section start here-->
<section class="main_data_section">
	<div class="container-fluid">
		<form action="{{ url('edit-profile') }}" method="POST" id="edit_individual"  enctype="multipart/form-data">
			@csrf
			@include('message')
			<div class="col-md-12">
				<div class="common_main_section">
					<div class="profile-datails">
						<div class="profile-img-set">
							<span>
								<img src="{{ asset($customer->profile_pic) }}" id="imagePreview" class="img-responsive" alt="profile"/>
								<div class="uplo_img_form">
									<label><input type="file" name="profilepic" accept="image/*"  id="imageUpload"  ></label>
								</div>
							</span>
							<div class="profi-details">
								<h4>Edit Profile</h4>
								<a href="{{ url('profile') }}" class="btn cmn-btn"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;View Profile</a>
							</div>
						</div>
						<div class="profil_persnal-details">

							<div class="row">
								<div class="col-md-4">
									<div class="profi_pers_data typusr">
										<label>Customer Type :</label>
										<div class="label-deta">Individual</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group form_input">
										<label>First Name <span>*</span></label>
										<input type="text" class="form-control" id="" minlength="2" name="first_name" value="{{$customer->first_name}}">
									</div>
								</div>
								<div class="col-md-4">																								
									<div class="form-group form_input">
										<label>Last Name <span>*</span></label>
										<input type="text" class="form-control" minlength="2" name="last_name" id=""value="{{$customer->last_name}}">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group form_input">
										<label>Title :</label> 
										<select required="" name="title" class="form-control type3">
											<option value="">Select Title</option>
											<option {{$customer->title == 'Mr' ? 'selected' : ''}} value="Mr">Mr</option>
											<option {{$customer->title == 'Mrs' ? 'selected' : ''}} value="Mrs">Mrs</option>
											<option {{$customer->title == 'Master' ? 'selected' : ''}}  value="Master">Master</option>
											<option {{$customer->title == 'Miss' ? 'selected' : ''}} value="Miss">Miss</option>
										</select>	
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="form-group form_input">
										<label>Telephone Number <span>*</span></label>
										<input type="text" class="form-control" id="" name="telephone_no" value="{{$customer->telephone_no}}">
									</div>
								</div>
								<div class="col-md-4">
									<div class="row">
										<div class="col-md-9 col-sm-9 col-xs-9">
											<div class="form-group form_input">
												<label>RSA ID/Identification No. <span>*</span></label>
												<div class="radio_btn_set">
													<div class="radio_set">
														<input type="radio" id="rsa1" name="rsa_type" {{$customer->rsa_type == 1 ? 'checked' : ''}} value="1" onclick="show1();">
														<label for="rsa1">RSA ID</label>
													</div>
													<div class="radio_set">
														<input type="radio" id="rsa2" {{$customer->rsa_type == 2 ? 'checked' : ''}}  name="rsa_type" value="2" onclick="show2();">
														<label for="rsa2">Identification</label>
													</div>
												</div>
												<div class="file-upload-here uplad_img_input input-group" style="display: table" id="div1">
													<div class="form-group form_input">
														<input type="text" class="form-control" name="RSA_id_or_passport_no" id="" value="{{$customer->RSA_id_or_passport_no}}">
													</div>
													<div class="form-group form_input updocsecct">
														<input class="" id="my_file" name="upload_RSA_or_passport" accept="image/*"  type="file" placeholder="Enter ID">
														<div class="input-group-btn">
															<button  id="get_file" class="btn btn-default uplad_img" type="button">
																<i class="fa fa-upload"></i>
															</button>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-3 paddd_left_zero">
											<div class="form-group form_input edit_profi_paspo">
												<div class="passpo_docs" id="remove">
													<img src="{{ asset($customer->upload_RSA_or_passport) }}" class="img-responsive" alt="RSA ID/Passport" title="RSA ID/Passport"/>
													<a href="javascript:void(0;)" onclick="deletedoc()" class="clos_docs">
														<i class="fa fa-times" aria-hidden="true"></i>
													</a>
												</div>

											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group form_input">
										<label>Email Address <span>*</span></label>
										<input type="text" class="form-control" id="" name="email" value="{{$user->email}}">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="profi_pers_data">
										<label class="lable_ful_wdh">Password :</label>
										<div class="label-deta-password">*******</div>
										<span class="pull-right">
											<a href="#." class="pas-show-eye"><i class="fa fa-eye" aria-hidden="true"></i></a>
											<a href="#." class="change-pas-a" data-toggle="modal" data-target="#Change-password">Change Password</a>
										</span>	
									</div>
								</div>

							</div>
							<div class="common_heading_section">
								<h4>Individual Address</h4>
							</div>

							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="form-group form_input">
										<label>Select Country :</label>
										<select class="form-control">
											<option selected>South Africa</option>
										</select>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="form-group form_input straddrs">
										<label for="">Street Address :</label>
										<textarea type="text" class="form-control" name="street_address" required id="adres" value="">{{$customer->street_address}}</textarea>
									</div>
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="form-group form_input">
										<label>Select Province :</label>
										<select required name="state_id" onchange="getCity(this.value)" class="form-control"> 
											@foreach ($states as $state)
											<option  value="{{$state->id}}" @if ($state->id == $customer->state_id)
												selected 
												@endif>{{$state->name}}</option>
												@endforeach
											</select>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-12">
										
										<div class="form-group form_input">
											<label>Select City :</label>
											<select id="city" required name="city_id" class="form-control"> 
												@foreach ($cities as $city)
												<option value="{{$city->id}}"  @if ($city->id == $customer->city_id)
													selected 
													@endif>{{$city->name}}</option>
													@endforeach
												</select>
											</div>


										</div>
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="form-group form_input">
												<label for="email">Zipcode :</label>
												<input type="text" class="form-control" id="" name="zipcode" value="{{$customer->zipcode}}">
											</div>
										</div>
									</div>
									<div class="bootom_section_btn">
										<button type="submit" class="btn cmn-btn"> Update</button> 
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		@include('customer.layouts.profile_modals')


		@stop

		@section('scripts')
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
		<script>


			var validator = $("#edit_individual").validate({ 


				onkeydown: false, 

				rules: { 
					
					email: {
						pattern : /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/
					},
					zipcode: {
						required: true,
						digits: true,
						minlength: 5,
						maxlength: 5
					},


				},

				messages: {     	 
					email: "Please enter a valid email address",
					zipcode: "Please enter 5 digits zipcode",
					first_name:{
						minlength:"please enter at least two character"	
					},

				}, 


				submitHandler: function(form) {
					

					form.submit();
				}
			});



			function readURL(input) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();
					reader.onload = function(e) {
						$('#imagePreview').attr('src', e.target.result );
						$('#imagePreview').hide();
						$('#imagePreview').fadeIn(650);
					}
					reader.readAsDataURL(input.files[0]);
				}
			}
			$("#imageUpload").change(function() {
				readURL(this);
			});









			function getCity(id) {
				$('#city option').remove();
				$.ajax({
					type: "GET",
					url: "{{ url('json/city') }}",
					data: {
						id: id
					},
					success: function(data) {
						console.log(data)
						all_city = data['city'];
						collect_option = '<option value="">Select City</option>';
						for (var k in all_city) {
							collect_option = collect_option + '<option  value="' + all_city[k]['id'] + '">' + all_city[k]['name'] + '</option>';
						}
						$('#city').append(collect_option);
					}
				});
			}



			document.getElementById('get_file').onclick = function() {
				document.getElementById('my_file').click();
			};



			function deletedoc()
			{	

				$.ajax({
					type: "post", 
					url: "{{ route('customer.deletedoc') }}",


					success: function(data) {

						if (data.status==1) 
						{

							$('#remove').remove()
							toastr.success("Image Deleted Successfully"); 
						}
						else {toastr.error(data.msg);}

					}


				});
			}



		</script>

		@endsection