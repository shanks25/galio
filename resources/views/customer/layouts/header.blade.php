<body>



	<div class="wrapper">

		<!-- header area start -->
		<header>

			<!-- header top start -->
			<div class="header-top-area bg-gray text-center text-md-left">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-5">
							<div class="header-call-action">
								<a href="#">
									<i class="fa fa-envelope"></i>
									info@website.com
								</a>
								<a href="#">
									<i class="fa fa-phone"></i>
									0123456789
								</a>
							</div>
						</div>
						<div class="col-lg-6 col-md-7">
							<div class="header-top-right float-md-right float-none">
								<nav>
									<ul>
										<li>
											<div class="dropdown header-top-dropdown">
												<a class="dropdown-toggle" id="myaccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													my account
													<i class="fa fa-angle-down"></i>
												</a>
												<div class="dropdown-menu" aria-labelledby="myaccount">
													@guest
													<a class="dropdown-item" href="{{url('login')}}"> login</a>
													<a class="dropdown-item" href="{{url('login')}}">register</a>
													@else
													<a class="dropdown-item" href="{{url('profile')}}">My account</a>
													<a class="dropdown-item" href="{{url('logout')}}">logout</a>
													@endguest
												</div>
											</div>
										</li>
										<!-- <li>
										<a href="#">my wishlist</a>
									</li>
									<li>
										<a href="#">my cart</a>
									</li>
									<li>
										<a href="#">checkout</a>
									</li> -->
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- header top end -->

		<!-- header middle start -->
		<div class="header-middle-area pt-20 pb-20">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-3">
						<div class="brand-logo">
							<a href="/">
								<img src="{{asset('assets/img/logo/logo.png')}}" alt="brand logo">
							</a>
						</div>
					</div> <!-- end logo area -->
					<div class="col-lg-9">
						<div class="header-middle-right">
							<div class="header-middle-shipping mb-20">
									<!-- <div class="single-block-shipping">
										<div class="shipping-icon">
											<i class="fa fa-clock-o"></i>
										</div>
										<div class="shipping-content">
											<h5>Working time</h5>
											<span>Mon- Sun: 8.00 - 18.00</span>
										</div>
									</div> -->

									<!-- end single shipping -->
									<!-- <div class="single-block-shipping">
										<div class="shipping-icon">
											<i class="fa fa-truck"></i>
										</div>
										<div class="shipping-content">
											<h5>free shipping</h5>
											<span>On order over $199</span>
										</div>
									</div>  -->
									<!-- end single shipping -->
									<!-- <div class="single-block-shipping">
										<div class="shipping-icon">
											<i class="fa fa-money"></i>
										</div>
										<div class="shipping-content">
											<h5>money back 100%</h5>
											<span>Within 30 Days after delivery</span>
										</div>
									</div> -->
									<!-- end single shipping -->
								</div>
								<div class="header-middle-block">
									<div class="header-middle-searchbox">
										<input type="text" placeholder="Search...">
										<button class="search-btn"><i class="fa fa-search"></i></button>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- header middle end -->

			<!-- main menu area start -->
			<div class="main-header-wrapper bdr-bottom1">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="main-header-inner">
								<div class="category-toggle-wrap">
									<div class="category-toggle">
										category
										<div class="cat-icon">
											<i class="fa fa-angle-down"></i>
										</div>
									</div>
									<nav class="category-menu hm-1">
										<ul>
											@foreach($CategoryMaster as $cat)
											<li class="{{$cat->has('subCategiries')?'menu-item-has-children':''}}"><a href="shop-grid-left-sidebar.html">
												<!-- <i class="fa fa-camera"></i> -->
												{{$cat->name}}</a> 
												@if(isset($cat->subCategiries))
												<!-- Mega Category Menu Start -->
												<ul class="category-mega-menu">

													@foreach($cat->subCategiries as $subcat)
													<li><a href="shop-grid-left-sidebar.html">
														<!-- <i class="fa fa-clock-o"></i> -->
														{{$subcat->name}}</a></li>
														@endforeach

													</ul><!-- Mega Category Menu End -->
													@endif

												</li>
												@endforeach

											</ul>
										</nav>
									</div>
									<div class="main-menu">
										<nav id="mobile-menu">
											<ul>
												<li class="active"><a href="index.html"><i class="fa fa-home"></i>Home</a>

												</li>

												<li><a href="blog-left-sidebar.html">Blog</a>

												</li>
												<li><a href="contact-us.html">Contact us</a></li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<div class="col-12 d-block d-lg-none">
								<div class="mobile-menu"></div>
							</div>
						</div>
					</div>
				</div>
				<!-- main menu area end -->

			</header>
		<!-- header area end -->