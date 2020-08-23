@extends('layouts.app2')

@section('content') 
<style>
    .error{
        color: red;
    }
</style>


<body> 


    <!-- header middle start -->
    <div class="header-middle-area pt-20 pb-20">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="brand-logo">
                        <a href="index.html">
                            <img src="assets/img/logo/logo.png" alt="brand logo">
                        </a>
                    </div>
                </div> <!-- end logo area -->
                <div class="col-lg-9">
                    <div class="header-middle-right">
                        <div class="header-middle-shipping mb-20">
                            <div class="single-block-shipping">
                                <div class="shipping-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="shipping-content">
                                    <h5>Working time</h5>
                                    <span>Mon- Sun: 8.00 - 18.00</span>
                                </div>
                            </div> <!-- end single shipping -->
                            <div class="single-block-shipping">
                                <div class="shipping-icon">
                                    <i class="fa fa-truck"></i>
                                </div>
                                <div class="shipping-content">
                                    <h5>free shipping</h5>
                                    <span>On order over $199</span>
                                </div>
                            </div> <!-- end single shipping -->
                            <div class="single-block-shipping">
                                <div class="shipping-icon">
                                    <i class="fa fa-money"></i>
                                </div>
                                <div class="shipping-content">
                                    <h5>money back 100%</h5>
                                    <span>Within 30 Days after delivery</span>
                                </div>
                            </div> <!-- end single shipping -->
                        </div>
                        <div class="header-middle-block">
                            <div class="header-middle-searchbox">
                                <input type="text" placeholder="Search...">
                                <button class="search-btn"><i class="fa fa-search"></i></button>
                            </div>
                                    <!-- <div class="header-mini-cart">
                                        <div class="mini-cart-btn">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span class="cart-notification">2</span>
                                        </div>
                                        <div class="cart-total-price">
                                            <span>total</span>
                                            $50.00
                                        </div>
                                        <ul class="cart-list">
                                            <li>
                                                <div class="cart-img">
                                                    <a href="product-details.html"><img src="assets/img/cart/cart-1.jpg" alt=""></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h4><a href="product-details.html">simple product 09</a></h4>
                                                    <span>$60.00</span>
                                                </div>
                                                <div class="del-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="cart-img">
                                                    <a href="product-details.html"><img src="assets/img/cart/cart-2.jpg" alt=""></a>
                                                </div>
                                                <div class="cart-info">
                                                    <h4><a href="product-details.html">virtual product 10</a></h4>
                                                    <span>$50.00</span>
                                                </div>
                                                <div class="del-icon">
                                                    <i class="fa fa-times"></i>
                                                </div>
                                            </li>
                                            <li class="mini-cart-price">
                                                <span class="subtotal">subtotal : </span>
                                                <span class="subtotal-price">$88.66</span>
                                            </li>
                                            <li class="checkout-btn">
                                                <a href="#">checkout</a>
                                            </li>
                                        </ul>
                                    </div> -->
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
                                    <nav class="category-menu category-style-2">
                                        <ul>
                                            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-desktop"></i> computer</a></li>
                                            <li class="menu-item-has-children"><a href="shop-grid-left-sidebar.html"><i class="fa fa-camera"></i> camera</a>   
                                                <!-- Mega Category Menu Start -->
                                                <ul class="category-mega-menu">
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">Smartphone</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">Samsome</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">GL Stylus</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Uawei</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Cherry Berry</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">headphone</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">Desktop Headphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Mobile Headphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Wireless Headphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">LED Headphone</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">accessories</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">Power Bank</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Data Cable</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Power Cable</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Battery</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">headphone</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">Desktop Headphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Mobile Headphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Wireless Headphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">LED Headphone</a></li>
                                                        </ul>
                                                    </li>
                                                </ul><!-- Mega Category Menu End --> 
                                            </li>
                                            <li class="menu-item-has-children"><a href="shop-grid-left-sidebar.html"><i class="fa fa-book"></i> smart phones</a> 
                                                <!-- Mega Category Menu Start -->
                                                <ul class="category-mega-menu">
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">Smartphone</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">Samsome</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">GL Stylus</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Uawei</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Cherry Berry</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">uPhone</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">headphone</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">Desktop Headphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Mobile Headphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Wireless Headphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">LED Headphone</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Over-ear</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">accessories</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">Power Bank</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Data Cable</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Power Cable</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Battery</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">OTG Cable</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children">
                                                        <a href="shop-grid-left-sidebar.html">accessories</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">Power Bank</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Data Cable</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Power Cable</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">Battery</a></li>
                                                            <li><a href="shop-grid-left-sidebar.html">OTG Cable</a></li>
                                                        </ul>
                                                    </li>
                                                </ul><!-- Mega Category Menu End -->
                                            </li>
                                            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-clock-o"></i> watch</a></li>
                                            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-television"></i> electronic</a></li>
                                            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-tablet"></i> tablet</a></li>
                                            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-book"></i> books</a></li>
                                            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-microchip"></i> microchip</a></li>
                                            <li><a href="shop-grid-left-sidebar.html"><i class="fa fa-bullhorn"></i> bullhorn</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="active"><a href="index.html"><i class="fa fa-home"></i>Home</a>
                                                <!-- <ul class="dropdown">
                                                    <li><a href="index.html">Home version 01</a></li>
                                                    <li><a href="index-2.html">Home version 02</a></li>
                                                    <li><a href="index-3.html">Home version 03</a></li>
                                                    <li><a href="index-4.html">Home version 04</a></li>
                                                </ul> -->
                                            </li>
                                            <!-- <li class="static"><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                                <ul class="megamenu dropdown">
                                                    <li class="mega-title"><a href="#">column 01</a>
                                                        <ul>
                                                            <li><a href="shop-grid-left-sidebar.html">shop grid left
                                                                    sidebar</a></li>
                                                            <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                                    sidebar</a></li>
                                                            <li><a href="shop-grid-full-3-col.html">shop grid full 3
                                                                    column</a></li>
                                                            <li><a href="shop-grid-full-4-col.html">shop grid full 4
                                                                    column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 02</a>
                                                        <ul>
                                                            <li><a href="product-details.html">product details</a></li>
                                                            <li><a href="product-details-affiliate.html">product
                                                                    details
                                                                    affiliate</a></li>
                                                            <li><a href="product-details-variable.html">product details
                                                                    variable</a></li>
                                                            <li><a href="product-details-group.html">product details
                                                                    group</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 03</a>
                                                        <ul>
                                                            <li><a href="cart.html">cart</a></li>
                                                            <li><a href="checkout.html">checkout</a></li>
                                                            <li><a href="compare.html">compare</a></li>
                                                            <li><a href="wishlist.html">wishlist</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-title"><a href="#">column 04</a>
                                                        <ul>
                                                            <li><a href="my-account.html">my-account</a></li>
                                                            <li><a href="login-register.html">login-register</a></li>
                                                            <li><a href="about-us.html">about us</a></li>
                                                            <li><a href="contact-us.html">contact us</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">shop <i class="fa fa-angle-down"></i></a>
                                                <ul class="dropdown">
                                                    <li><a href="#">shop grid layout <i class="fa fa-angle-right"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="shop-grid-left-sidebar.html">shop grid left
                                                                    sidebar</a></li>
                                                            <li><a href="shop-grid-left-sidebar-3-col.html">left
                                                                    sidebar 3 col</a></li>
                                                            <li><a href="shop-grid-right-sidebar.html">shop grid right
                                                                    sidebar</a></li>
                                                            <li><a href="shop-grid-right-sidebar-3-col.html">grid right
                                                                    sidebar 3 col</a></li>
                                                            <li><a href="shop-grid-full-3-col.html">shop grid full 3
                                                                    column</a></li>
                                                            <li><a href="shop-grid-full-4-col.html">shop grid full 4
                                                                    column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">shop list layout <i class="fa fa-angle-right"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="shop-list-left-sidebar.html">shop list left
                                                                    sidebar</a></li>
                                                            <li><a href="shop-list-right-sidebar.html">shop list right
                                                                    sidebar</a></li>
                                                            <li><a href="shop-list-full.html">shop list full width</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">products details <i class="fa fa-angle-right"></i></a>
                                                        <ul class="dropdown">
                                                            <li><a href="product-details.html">product details</a></li>
                                                            <li><a href="product-details-affiliate.html">product
                                                                    details
                                                                    affiliate</a></li>
                                                            <li><a href="product-details-variable.html">product details
                                                                    variable</a></li>
                                                            <li><a href="product-details-group.html">product details
                                                                    group</a></li>
                                                            <li><a href="product-details-box.html">product details box
                                                                    slider</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li> -->
                                            <li><a href="blog-left-sidebar.html">Blog</a>
                                                <!-- <ul class="dropdown">
                                                    <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>
                                                    <li><a href="blog-left-sidebar-2-col.html">blog left sidebar 2 col</a></li>
                                                    <li><a href="blog-right-sidebar.html">blog right sidebar</a></li>
                                                    <li><a href="blog-full-2-column.html">blog full 2 column</a></li>
                                                    <li><a href="blog-full-3-column.html">blog full 3 column</a></li>
                                                    <li><a href="blog-details.html">blog details</a></li>
                                                    <li><a href="blog-details-audio.html">blog details audio</a></li>
                                                    <li><a href="blog-details-video.html">blog details video</a></li>
                                                    <li><a href="blog-details-image.html">blog details image</a></li>
                                                </ul> -->
                                            </li>
                                            <li><a href="contact-us.html">Contact us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 d-block d-lg-none"><div class="mobile-menu"></div></div>
                    </div>
                </div>
            </div>
            <!-- main menu area end -->

        </header>
        <!-- header area end -->

        <!-- breadcrumb area start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap">
                            <nav aria-label="breadcrumb">
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">login-register</li>       
                                </ul> @include('message')
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- login register wrapper start -->
        <div class="login-register-wrapper">
            <div class="container">
                <div class="member-area-from-wrap">
                    <div class="row">
                        <!-- Login Content Start -->
                        <div class="col-lg-6">
                            <div class="login-reg-form-wrap  pr-lg-50">
                                <h2>Sign In</h2>

                                <form action="{{url('login')}}" id="loginForm" method="post" >
                                    @csrf
                                    <div class="single-input-item">
                                        <input type="email" id="loginusername" name="username" placeholder="Email or Username" required />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="password"  name="password" id="loginpassword"  placeholder="Enter your Password" required />
                                    </div>
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                            <div class="remember-meta">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="rememberMe">
                                                    <label class="custom-control-label" for="rememberMe">Remember Me</label>
                                                </div>
                                            </div>
                                            <a href="#" class="forget-pwd">Forget Password?</a>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button class="sqr-btn">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Login Content End -->

                        <!-- Register Content Start -->
                        <div class="col-lg-6">
                            <div class="login-reg-form-wrap mt-md-34 mt-sm-34">
                                <h2>Singup Form</h2>
                                <form action="{{url('register')}}" id="registerForm" method="post" >
                                    @csrf
                                    <div class="single-input-item">
                                        <input type="text" name="first_name" placeholder="First Name" required />
                                    </div>

                                    <div class="single-input-item">
                                        <input type="text" name="last_name" placeholder="Last Name" required />
                                    </div>
                                    <div class="single-input-item">
                                        <input type="email" name="email" placeholder="Enter your Email" required />
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <input type="password" name="password"  class="password" placeholder="Enter your Password" required />
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="single-input-item">
                                                <input type="Password" name="password_confirmation" placeholder="Repeat your Password" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <div class="login-reg-form-meta">
                                            <div class="remember-meta">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="subnewsletter">
                                                    <label class="custom-control-label" for="subnewsletter">Subscribe Our Newsletter</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-input-item">
                                        <button class="sqr-btn">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Register Content End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- login register wrapper end -->

        <!-- brand area start -->
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

        <script src="{{asset('js/jquery.validate.min.js')}}"></script>
        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $('#loginForm').submit(function(){
                event.preventDefault();

                let username = $('#loginusername').val()
                let password = $('#loginpassword').val()


                $.ajax({
                    type: "post", 
                    url: "{{url('login')}}",
                    data: {
                        'username': username,
                        'password': password
                    },
                    success: function(data) {
                        console.log(data);
                        if (data.status == 0) {  
                            toastr.error(data.msg); $('#loginpassword').val('') 
                        } 


                        if (data.status == 1) { 

                            toastr.success("Logged in Successfully"); 
                            setTimeout(function(){
                                window.location.href = '{{ url('/') }}';
                            }, 200);

                        }

                    }


                });



            });


            var validator = $("#registerForm").validate({ 


                onkeydown: false, 

                rules: {

                    email: {
                     required: true,  
                 },

                 password : {
                    required: true,  

                },
                password_confirmation : { 
                    equalTo : ".password"
                }



            },

            messages: {          
                email: "Please enter a valid email address",


                password_confirmation:{
                    equalTo:"Please Enter Same Password"    
                },

            }, 


            submitHandler: function(form) {  

                form.submit();
            }
        });




    </script>

    @endsection