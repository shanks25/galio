@extends('customer.layouts.app')
@section('title','Galio - Product Details')
@section('content')
<!-- breadcrumb area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="shop-grid-left-sidebar.html">shop</a></li>
                            <li class="breadcrumb-item active" aria-current="page">checkout</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb area end -->

<!-- checkout main wrapper start -->
<div class="checkout-page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Checkout Login Coupon Accordion Start -->
                <div class="checkoutaccordion" id="checkOutAccordion">
                    <div class="card">
                        <!-- <h3>Returning Customer? <span data-toggle="collapse" data-target="#logInaccordion">Click Here To Login</span></h3> -->

                        <div id="logInaccordion" class="collapse" data-parent="#checkOutAccordion">
                            <div class="card-body">
                                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                <div class="login-reg-form-wrap mt-20">
                                    <div class="row">
                                        <div class="col-lg-7 m-auto">
                                            <form action="#" method="post">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="single-input-item">
                                                            <input type="email" placeholder="Enter your Email" />
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12">
                                                        <div class="single-input-item">
                                                            <input type="password" placeholder="Enter your Password" />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="single-input-item">
                                                    <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                                        <div class="remember-meta">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" id="rememberMe" />
                                                                <label class="custom-control-label" for="rememberMe">Remember Me</label>
                                                            </div>
                                                        </div>

                                                        <a href="#" class="forget-pwd">Forget Password?</a>
                                                    </div>
                                                </div>

                                                <div class="single-input-item">
                                                    <button class="check-btn sqr-btn">Login</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Checkout Login Coupon Accordion End -->
            </div>
        </div>
        <form action="{{route('add-order')}}" id="place_order_form" name="place_order_form" method="post">
            @csrf
            <div class="row">
                <!-- Checkout Billing Details -->
                <div class="col-lg-6">
                    <div class="checkout-billing-details-wrap">
                        <h2>Billing Details</h2>
                        <div class="billing-form-wrap">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single-input-item">
                                        <label for="f_name" class="required">First Name</label>
                                        <input type="text" id="f_name" name="f_name" placeholder="First Name" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="single-input-item">
                                        <label for="l_name" class="required">Last Name</label>
                                        <input type="text" id="l_name" name="l_name" placeholder="Last Name" />
                                    </div>
                                </div>
                            </div>

                            <div class="single-input-item">
                                <label for="email" class="required">Email Address</label>
                                <input type="email" id="email" name="email" placeholder="Email Address" />
                            </div>

                            <div class="single-input-item">
                                <label for="com-name">Company Name</label>
                                <input type="text" id="company_name" name="company_name" placeholder="Company Name" />
                            </div>

                            <div class="single-input-item">
                                <label for="country" class="required">Country</label>
                                <select id="country" name="country">
                                    <option value="1">India</option>
                                </select>
                            </div>
                            <div class="single-input-item">
                                <label for="state" class="required">State / Divition</label>
                                <select id="state" name="state">
                                    @foreach($states as $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="single-input-item">
                                <label for="city" class="required">City</label>
                                <select id="city" name="city">
                                    @foreach($city as $cities)
                                    <option value="{{$cities->id}}">{{$cities->city}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="single-input-item">
                                <label for="street-address" class="required pt-20">Street address</label>
                                <input type="text" id="street_address" name="street_address" placeholder="Street address Line 1" />
                            </div>
                            <div class="single-input-item">
                                <label for="postcode" class="required">Postcode / ZIP</label>
                                <input type="text" class="number-only" id="postcode" name="postcode" placeholder="Postcode / ZIP" maxlength="6" />
                            </div>

                            <div class="single-input-item">
                                <label for="phone">Phone</label>
                                <input type="text" class="number-only" id="phone" name="phone" placeholder="Phone" maxlength="10" />
                            </div>
                            <div class="single-input-item">
                                <label for="ordernote">Order Note</label>
                                <textarea name="ordernote" id="ordernote" cols="30" rows="3" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Order Summary Details -->
                <div class="col-lg-6">
                    <div class="order-summary-details mt-md-26 mt-sm-26">
                        <h2>Your Order Summary</h2>
                        <div class="order-summary-content mb-sm-4">
                            <!-- Order Summary Table -->
                            <div class="order-summary-table table-responsive text-center">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Products</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="{{route('product_details',$product->id)}}">{{$product->title}} <strong> × {{$qty}}</strong></a>
                                                <input type="hidden" id="hidden_qty" name="hidden_qty" value="{{$qty}}">
                                                <input type="hidden" id="hidden_product_id" name="hidden_product_id" value="{{$product->id}}">
                                            </td>
                                            <td>{{$product->selling_price}}</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td>Sub Total</td>
                                            <td><strong>{{$qty * $product->selling_price}}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Total Amount</td>
                                            <td><strong>{{$qty * $product->selling_price}}</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- Order Payment Method -->
                            <div class="order-payment-method">
                                <div class="single-payment-method show">
                                    <div class="payment-method-name">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="cashon" name="paymentmethod" value="cash" class="custom-control-input" checked />
                                            <label class="custom-control-label" for="cashon">Cash On Delivery</label>
                                        </div>
                                    </div>
                                    <div class="payment-method-details" data-method="cash">
                                        <p>Pay with cash upon delivery.</p>
                                    </div>
                                </div>

                                <div class="summary-footer-area">
                                    <div class="custom-control custom-checkbox mb-14">
                                        <input type="checkbox" class="custom-control-input" id="terms" name="terms" />
                                        <label class="custom-control-label" for="terms">I have read and agree to the website <a href="index.html">terms and conditions.</a></label>
                                    </div>
                                    <button type="submit" class="check-btn sqr-btn" id="place_order_btn">Place Order</button>
                                    <!-- onclick="check_submit()" -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- checkout main wrapper end -->

@endsection
@section('scripts')
<script src="{{asset('assets/js/landingpage.js')}}"></script>
<script>
    var product_quick_view = "{{route('product_quick_view')}}";

    function check_submit() {
        var obj;
        url = base_url + '/checklogin';
        $.ajax({
            type: "GET",
            url: url,
            async: false,
            success: function(data) {
                if (data == 0) {
                    toastr.error("Please Login First");
                    obj = 0;
                } else {
                    obj = 1
                }
            }
        });
        return obj;
    }
    $(function() {
        $("form[name='place_order_form']").validate({
            ignore: [],
            rules: {
                "f_name": "required",
                "l_name": "required",
                "email": "required",
                "company_name": "required",
                "country": "required",
                "state": "required",
                "city": "required",
                "street_address": "required",
                "postcode": "required",
                "phone": "required",
                "ordernote": "required",
                "terms": "required",

            },
            messages: {
                // "title": "Field is",
            },
            submitHandler: function(form) {
                check_login_status = check_submit();
                console.log(check_login_status);
                if (check_login_status) {
                    $('#place_order_btn').attr('disabled', true);
                    form.submit();
                } else {
                    return false;
                }
                // 
            }
        });
    });
    $('#state').on('change', function() {
        var cat = $(this).val();
        url = base_url + "/cities/" + cat;
        if (cat == "") {
            $('#city').html('<option></option>');
            $('#city').prop('disabled', true);
        } else {
            $.ajax({
                type: "GET",
                url: url,
                success: function(data) {
                    $('#city').html('');
                    sbucat = data.city;
                    all_option = '<option value="">Select City </option>';
                    sbucat.forEach(element => {
                        all_option = all_option + '<option value=' + element['id'] + ' >' + element['city'] + '</option>';
                    });
                    console.log(all_option);
                    $('#city').append(all_option);
                    $('#city').niceSelect('update');
                }
            });
        }

    });
</script>

@endsection