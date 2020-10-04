@extends('customer.layouts.app')
@section('title','Galio - Mega Shop Responsive Bootstrap 4 Template')
@section('content')
<!-- hero slider start -->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="slider-wrapper-area">
				<div class="hero-slider-active hero__1 slick-dot-style hero-dot">
					<div class="single-slider" style="background-image: url({{asset('assets/img/slider/slider11_bg.jpg')}});">
						<div class="container p-0">
							<div class="slider-main-content">
								<div class="slider-content-img">
									<img src="{{asset('assets/img/slider/slider11_lable1.png')}}" alt="">
									<img src="{{asset('assets/img/slider/slider11_lable2.png')}}" alt="">
									<img src="{{asset('assets/img/slider/slider11_lable3.png')}}" alt="">
								</div>
								<div class="slider-text">
									<div class="slider-label">
										<img src="{{asset('assets/img/slider/slider11_lable4.png')}}" alt="">
									</div>
									<h1>headphones az12</h1>
									<p>Typi Non Habent Claritatem Insitam; Est Usus Legentis</p>
								</div>
							</div>
						</div>
					</div>
					<div class="single-slider" style="background-image: url({{asset('assets/img/slider/slider12_bg.jpg')}});">
						<div class="container p-0">
							<div class="slider-main-content">
								<div class="slider-content-img">
									<img src="{{asset('assets/img/slider/slider11_lable1.png')}}" alt="">
									<img src="{{asset('assets/img/slider/slider11_lable2.png')}}" alt="">
									<img src="{{asset('assets/img/slider/slider11_lable3.png')}}" alt="">
								</div>
								<div class="slider-text">
									<div class="slider-label">
										<img src="{{asset('assets/img/slider/slider11_lable4.png')}}" alt="">
									</div>
									<h1>samson s90</h1>
									<p>Typi Non Habent Claritatem Insitam; Est Usus Legentis</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- hero slider end -->

<!-- home banner area start -->
<div class="banner-area mt-30">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-6 order-1">
				<div class="img-container img-full fix imgs-res mb-sm-30">
					<a href="#">
						<img src="{{asset('assets/img/banner/banner_left.jpg')}}" alt="">
					</a>
				</div>
			</div>
			<div class="col-lg-5 col-md-5 order-sm-3">
				<div class="img-container img-full fix mb-30">
					<a href="#">
						<img src="{{asset('assets/img/banner/banner_static_top1.jpg')}}" alt="">
					</a>
				</div>
				<div class="img-container img-full fix mb-30">
					<a href="#">
						<img src="{{asset('assets/img/banner/banner_static_top2.jpg')}}" alt="">
					</a>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-6 order-2 order-md-3">
				<div class="img-container img-full fix">
					<a href="#">
						<img src="{{asset('assets/img/banner/banner_static_top3.jpg')}}" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- home banner area end -->


<!-- latest product start -->
<div class="latest-product">
	<div class="container">
		<div class="section-title mb-30">
			<div class="title-icon">
				<i class="fa fa-flash"></i>
			</div>
			<h3>latest product</h3>
		</div> <!-- section title end -->
		<!-- featured category start -->
		<div class="latest-product-active slick-padding slick-arrow-style">
			<!-- product single item start -->
			@foreach($latestProduct as $product)


			<div class="product-item fix">
				<div class="product-thumb">
					<a href="{{route('product_details',$product	->id)}}">
						@if(isset($product->productImagesFirst))

						<img src="{{asset($product->productImagesFirst->path)}}" class="img-pri" alt="">
						@endif
						@if(isset($product->productImagesLast))
						<img src="{{asset($product->productImagesLast->path)}}" class="img-sec" alt="">

						@else
						<img src="{{asset('assets/img/product/product-img2.jpg')}}" class="img-sec" alt="">
						@endif
					</a>
					<div class="product-label">
						<span>hot</span>
					</div>
					<div class="product-action-link">
						<a href="#" data-id="{{$product->id}}" onclick="quick_view(this)"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span>
						</a>
						<!-- <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a> -->
						<!-- <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a> -->
						<!-- <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a> -->
					</div>
				</div>
				<div class="product-content">
					<h4><a href="product-details.html">{{$product->title}}</a></h4>
					<div class="pricebox">
						<span class="regular-price">₹{{$product->price}}</span>
						<!-- <div class="ratings">
							<span class="good"><i class="fa fa-star"></i></span>
							<span class="good"><i class="fa fa-star"></i></span>
							<span class="good"><i class="fa fa-star"></i></span>
							<span class="good"><i class="fa fa-star"></i></span>
							<span><i class="fa fa-star"></i></span>
							<div class="pro-review">
								<span>1 review(s)</span>
							</div>
						</div> -->
					</div>
				</div>
			</div>
			@endforeach
			<!-- product single item end -->

		</div>
		<!-- featured category end -->
	</div>
</div>
<!-- latest product end -->

<!-- brand area start -->
<div class="brand-area pt-28 pb-30">
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
						<a href="#"><img src="{{asset('assets/img/brand/br1.png')}}" alt=""></a>
					</div>
					<div class="brand-item text-center">
						<a href="#"><img src="{{asset('assets/img/brand/br2.png')}}" alt=""></a>
					</div>
					<div class="brand-item text-center">
						<a href="#"><img src="{{asset('assets/img/brand/br3.png')}}" alt=""></a>
					</div>
					<div class="brand-item text-center">
						<a href="#"><img src="{{asset('assets/img/brand/br4.png')}}" alt=""></a>
					</div>
					<div class="brand-item text-center">
						<a href="#"><img src="{{asset('assets/img/brand/br5.png')}}" alt=""></a>
					</div>
					<div class="brand-item text-center">
						<a href="#"><img src="{{asset('assets/img/brand/br6.png')}}" alt=""></a>
					</div>
					<div class="brand-item text-center">
						<a href="#"><img src="{{asset('assets/img/brand/br4.png')}}" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- brand area end -->

@endsection
@section('scripts')
<script src="{{asset('assets/js/landingpage.js')}}"></script>
<script>
	var product_quick_view = "{{route('product_quick_view')}}";
</script>

@endsection