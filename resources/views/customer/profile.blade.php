@extends('customer.layouts.app')
@section('title','Galio - Mega Shop Responsive Bootstrap 4 Template')
@section('content') 
<link rel="stylesheet" type="text/css" href="css/style.cs">
<div class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumb-wrap">
					<nav aria-label="breadcrumb">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index.html">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">my account</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div>
@include('message')
<!-- breadcrumb area end -->

<!-- my account wrapper start -->
<div class="my-account-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<!-- My Account Page Start -->
				<div class="myaccount-page-wrapper">
					<!-- My Account Tab Menu Start -->
					<div class="row">
						<div class="col-lg-3 col-md-4">
						@include('customer.layouts.sidebar')
							<!-- My Account Tab Menu End -->

							<!-- My Account Tab Content Start -->
							<div class="col-lg-9 col-md-8"> 
								<!-- Single Tab Content Start -->


								<!-- Single Tab Content Start -->
								<div class="" id="account-info" >
									<div class="myaccount-content">
										<h3>Account Details</h3>
										<div class="account-details-form">
											<form action="{{url('profile')}}" method="post">
												@csrf
												<div class="row">
													<div class="col-lg-6">
														<div class="single-input-item">
															<label for="first-name" class="required">First
															Name</label>
															<input value="{{$user->first_name}}" type="text" name="first_name" id="first-name"
															placeholder="First Name" />
														</div>
													</div>
													<div class="col-lg-6">
														<div class="single-input-item">
															<label for="last-name" class="required">Last
															Name</label>
															<input value="{{$user->last_name}}" name="last_name" type="text" id="last-name"
															placeholder="Last Name" />
														</div>
													</div>
												</div>
												<div class="single-input-item">
													<label for="display-name" class="required">Display
													Name</label>
													<input value="{{$user->first_name }} {{$user->last_name}}" type="text" id="display-name"
													placeholder="Display Name" />
												</div>
												<div class="single-input-item">
													<label for="email" class="required">Email Addres</label>
													<input type="email" name="email" value="{{$user->email}}" id="email"
													placeholder="Email Address" />
												</div>

												<div class="single-input-item">
													<button type="submit" class="check-btn sqr-btn ">Save Changes</button>
												</div>
											</form>
										</div>
										<a href="#" onclick="showModal()">change password</a>
									</div>
								</div> <!-- Single Tab Content End -->
							</div>
						</div> <!-- My Account Tab Content End -->
					</div>
				</div>
			</div> 
			<div id="changepassword" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title">Change Password</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<div class="model-content">
								<form onsubmit="event.preventDefault(); changePassword();">
									<div class="form-group form_input">
										<label for="email">Current Password :</label>
										<div class="input-group">
											<input type="password" name="oldpassword" id="oldpassword" required class="form-control" id="" placeholder="Enter Current Password">

											<div class="input-group-btn" onclick="ShowHidePassword(1)">
												<button class="btn btn-default" type="button">
													<i class="fa fa-eye"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="form-group form_input">
										<label for="email">New Password :</label>
										<div class="input-group">
											<input type="password" class="form-control" id="password1" required name="newpassword" placeholder="Enter New Password">
											<div class="input-group-btn" onclick="ShowHidePassword(2)">
												<button class="btn btn-default" type="button">
													<i class="fa fa-eye"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="form-group form_input">
										<label for="email">Confirm Password :</label>
										<div class="input-group">
											<input type="password" class="form-control" id="password2" required name="password_confirmation" placeholder="Enter Confirm Password">
											<div class="input-group-btn" onclick="ShowHidePassword(3)">
												<button class="btn btn-default" type="button">
													<i class="fa fa-eye"></i>
												</button>
											</div>
										</div>
									</div>
									<div class="modal-footer pop_btn_set">
										<div class="pop-btn-devid">
											<button type="submit" class="btn pop-big-btn">Update</button>
										</div>
									</div>
								</form>
							</div>
						</div>

					</div>

				</div>
			</div>

		</div>
	</div>
	brand area start -->
	<div class="brand-area pt-34 pb-30">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section-title mb-30">
						<div class="title-icon">
							<i class="fa fa-crop"></i>
						</div>
						<h3>Popular Brand</h3>
					</div> <!-- section title end -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="brand-active slick-padding slick-arrow-style">
						<div class="brand-item text-center">
							<a href="#"><img src="assets/img/brand/br1.png" alt=""></a>
						</div>
						<div class="brand-item text-center">
							<a href="#"><img src="assets/img/brand/br2.png" alt=""></a>
						</div>
						<div class="brand-item text-center">
							<a href="#"><img src="assets/img/brand/br3.png" alt=""></a>
						</div>
						<div class="brand-item text-center">
							<a href="#"><img src="assets/img/brand/br4.png" alt=""></a>
						</div>
						<div class="brand-item text-center">
							<a href="#"><img src="assets/img/brand/br5.png" alt=""></a>
						</div>
						<div class="brand-item text-center">
							<a href="#"><img src="assets/img/brand/br6.png" alt=""></a>
						</div>
						<div class="brand-item text-center">
							<a href="#"><img src="assets/img/brand/br4.png" alt=""></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 

	@endsection
	@section('scripts')

	<script type="text/javascript"> 

		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});


		function showModal() {
			$('#changepassword').modal();
		}

		function ShowHidePassword(id) {
			if (id == 1) {
				var input = $("#oldpassword");
			} else if (id == 2) {
				var input = $("#password1");
			} else {
				var input = $("#password2");
			}

			if (input.attr("type") === "password") {
				input.attr("type", "text");
			} else {
				input.attr("type", "password");
			}
		}


		function changePassword() {


			let oldpass = $('#oldpassword').val()
			let newpass1 = $('#password1').val()
			let newpass2 = $('#password2').val()

			if (newpass1 != newpass2) {
				toastr.error("New password and Confirm Password does not match");

			} else {

				$.ajax({ 

					url: "{{ route('customer.password') }}",
					data: {
						'oldpassword': oldpass,
						'newpassword': newpass1
					},
					success: function(data) {
						console.log(data);
						if (data.status == 0) {
							toastr.error("Invalid Current password");
							$('#oldpassword').val('')
						}

						if (data.status == 1) {
							toastr.success("Password Changed Successfully");

							$('#oldpassword').val()
							$('#password1').val()
							$('#password2').val()
							$('#Change-password').hide()
							$('#profile-update-popup').modal()
							setTimeout(function() {
								location.reload();

							}, 900);
						}
					}


				});






			}
		}
	</script>



	@stop