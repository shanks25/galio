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
		<form action="{{ url('edit-profile') }}" id="company_form" method="POST" enctype="multipart/form-data">
			@csrf
			@include('message')
			<div class="col-md-12">
				<div class="common_main_section">
					<div class="profile-datails">
						<div class="profile-img-set">
							<span>
								<img src="{{ asset($customer->profile_pic) }}" id="imagePreview" class="img-responsive" alt="profile"/>
								<div class="uplo_img_form">
									<label><input type="file" name="profilepic"   id="imageUpload"  ></label>
								</div>
							</span>
							<div class="profi-details">
								<h4>Edit Profile</h4>
								<a href="{{ url('profile') }}" class="btn cmn-btn"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;View Profile</a>
							</div>

						</div>
						<div class="profil_persnal-details">
							<form action="{{ url('edit-profile') }}" id="company_form" method="POST">
								@csrf
								<div class="row">
									<div class="col-md-4">
										<div class="profi_pers_data typusr">
											<label>Customer Type : </label>
											<div class="label-deta">Company</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group form_input">
											<label>Company Name :</label>
											<input type="text" class="form-control" id="" required name="company_name" value="{{$customer->company_name}}">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group form_input">
											<label>Company Contact Person :</label>
											<input type="text" class="form-control" id="" required name="comp_cont_person" value="{{$customer->comp_cont_person}}">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group form_input">
											<label>Company Contact Position :</label>
											<input type="text" class="form-control" id="" required name="company_cont_position" value="{{$customer->company_cont_position}}">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="form-group form_input">
											<label>Company Telephone Number :</label>
											<input type="text" class="form-control" id="" required name="telephone_no" value="{{$customer->telephone_no}}">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group form_input">
											<label>Email Address :</label>
											<input type="text" class="form-control" id="" required name="email" value="{{$user->email}}">
										</div>
									</div>
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
									<h4>Company Address</h4>
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
											<textarea type="text" name="street_address" required class="form-control" id="adres" value="">{{$customer->street_address}}</textarea>
										</div>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<div class="form-group form_input">
											<label>Select Province :</label>
											<select onchange="getCity(this.value)" name="state_id" required class="form-control"> 
												@foreach ($states as $state)
												<option value="{{$state->id}}" @if ($state->id == $customer->state_id)
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
													<input type="text" maxlength="5" class="form-control" id="" name="zipcode" value="{{$customer->zipcode}}">
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

				var validator = $("#company_form").validate({ 


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

			</script>

			@stop