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
										<h3>Choose Plan</h3>
										<div class="account-details-form">
											<form id="checkout-selection" action="{{ route('razorpay') }}" method="POST">
												@csrf
												<input type="hidden" name="item_name" value="My Test Product">
												<input type="hidden" name="item_description" value="My Test Product Description">
												<input type="hidden" name="item_number" value="3456">
												<input type="hidden" name="amount" value="49">
												<input type="hidden" name="address" value="ABCD Address">
												<input type="hidden" name="currency" value="INR">
												<input type="hidden" name="cust_name" value="phpzag">
												<input type="hidden" name="email" value="kunal@gmail.com">
												<input type="hidden" name="contact" value="9657085678">
												<br>
												<input type="submit" class="btn btn-primary" value="Monthly Plan  (30 Days)">
											</form>
											{{-- <a href="{{'subscribe'}}"><h6> </h6> </a> --}}
										</div>

									</div>
								</div> <!-- Single Tab Content End -->
							</div>
						</div> <!-- My Account Tab Content End -->
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



	@stop	