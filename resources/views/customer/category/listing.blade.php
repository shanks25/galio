@extends('customer.layouts.app')
@section('title','Galio - Product Details')
@section('content')
<!-- breadcrumb area start -->
<!-- <div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-wrap">
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">shop left sidebar</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- breadcrumb area end -->

<!-- page wrapper start -->
<div class="page-main-wrapper">
    <div class="container">
        <div class="row">
            <!-- sidebar start -->
            <div class="col-lg-3 order-2 order-lg-1">
                <div class="shop-sidebar-wrap mt-md-28 mt-sm-28">
                    <!-- sidebar categorie start -->
                    <div class="sidebar-widget mb-30">
                        <div class="sidebar-category">
                            <ul>
                                <li class="title"><i class="fa fa-bars"></i> categories</li>

                                @foreach($CategoryMaster as $cat)
                                <li>
                                    <a href="{{route('category-filter',$cat->id)}}">{{$cat->name}}</a><span>({{$total_product[$cat->id] ?? '0'}})</span></li>
                                @endforeach
                                <!-- <li><a href="#">camera</a><span>(12)</span></li>
                                <li><a href="#">computer</a><span>(08)</span></li>
                                <li><a href="#">electronic</a><span>(16)</span></li>
                                <li><a href="#">Necklaces</a><span>(11)</span></li>
                                <li><a href="#">Rugby</a><span>(20)</span></li>
                                <li><a href="#">smart phones</a><span>(15)</span></li>
                                <li><a href="#">tablet</a><span>(12)</span></li>
                                <li><a href="#">watch</a><span>(10)</span></li> -->
                            </ul>
                        </div>
                    </div>
                    <!-- sidebar categorie start -->

                    <!-- manufacturer start -->
                    <!-- <div class="sidebar-widget mb-30">
                        <div class="sidebar-title mb-10">
                            <h3>Manufacturers</h3>
                        </div>
                        <div class="sidebar-widget-body">
                            <ul>
                                <li><i class="fa fa-angle-right"></i><a href="#">calvin klein</a><span>(10)</span></li>
                                <li><i class="fa fa-angle-right"></i><a href="#">diesel</a><span>(12)</span></li>
                                <li><i class="fa fa-angle-right"></i><a href="#">polo</a><span>(20)</span></li>
                                <li><i class="fa fa-angle-right"></i><a href="#">Tommy Hilfiger</a><span>(12)</span></li>
                                <li><i class="fa fa-angle-right"></i><a href="#">Versace</a><span>(16)</span></li>
                            </ul>
                        </div>
                    </div> -->
                    <!-- manufacturer end -->

                    <!-- pricing filter start -->
                    <!-- <div class="sidebar-widget mb-30">
                        <div class="sidebar-title mb-10">
                            <h3>filter by price</h3>
                        </div>
                        <div class="sidebar-widget-body">
                            <div class="price-range-wrap">
                                <div class="price-range" data-min="50" data-max="400"></div>
                                <div class="range-slider">
                                    <form action="#" class="d-flex justify-content-between">
                                        <button class="filter-btn">filter</button>
                                        <div class="price-input d-flex align-items-center">
                                            <label for="amount">Price: </label>
                                            <input type="text" id="amount">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <!-- pricing filter end -->

                    <!-- product size start -->
                    <!-- <div class="sidebar-widget mb-30">
                        <div class="sidebar-title mb-10">
                            <h3>size</h3>
                        </div>
                        <div class="sidebar-widget-body">
                            <ul>
                                <li><i class="fa fa-angle-right"></i><a href="#">s</a><span>(10)</span></li>
                                <li><i class="fa fa-angle-right"></i><a href="#">m</a><span>(12)</span></li>
                                <li><i class="fa fa-angle-right"></i><a href="#">l</a><span>(20)</span></li>
                                <li><i class="fa fa-angle-right"></i><a href="#">XL</a><span>(12)</span></li>
                            </ul>
                        </div>
                    </div> -->
                    <!-- product size end -->

                    <!-- product tag start -->
                    <!-- <div class="sidebar-widget mb-30">
                        <div class="sidebar-title mb-10">
                            <h3>tags</h3>
                        </div>
                        <div class="sidebar-widget-body">
                            <div class="product-tag">
                                <a href="#">camera</a>
                                <a href="#">computer</a>
                                <a href="#">tablet</a>
                                <a href="#">watch</a>
                                <a href="#">smart phones</a>
                                <a href="#">handbag</a>
                                <a href="#">shoe</a>
                                <a href="#">men</a>
                            </div>
                        </div>
                    </div> -->
                    <!-- product tag end -->

                    <!-- sidebar banner start -->
                    <div class="sidebar-widget mb-30">
                        <div class="img-container fix img-full">
                            <a href="#"><img src="assets/img/banner/banner_shop.jpg" alt=""></a>
                        </div>
                    </div>
                    <!-- sidebar banner end -->
                </div>
            </div>
            <!-- sidebar end -->

            <!-- product main wrap start -->
            <div class="col-lg-9 order-1 order-lg-2">
                <!-- <div class="shop-banner img-full">
                    <img src="{{asset('assets/img/banner/banner_static1.jpg')}}" alt="">
                </div> -->
                <!-- product view wrapper area start -->
                <div class="shop-product-wrapper pt-34">
                    <!-- shop product top wrap start -->
                    <div class="shop-top-bar">
                        <div class="row">
                            <div class="col-lg-7 col-md-6">
                                <div class="top-bar-left">
                                    <div class="product-view-mode mr-70 mr-sm-0">
                                        <a class="active" href="#" data-target="grid"><i class="fa fa-th"></i></a>
                                        <a href="#" data-target="list"><i class="fa fa-list"></i></a>
                                    </div>
                                    <div class="product-amount">
                                        <p>
                                            <!-- Showing 1–16 of 21 results -->
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-6">
                                <div class="top-bar-right">
                                    <!-- <div class="product-short">
                                        <p>Sort By : </p>
                                        <select class="nice-select" name="sortby">
                                            <option value="trending">Relevance</option>
                                            <option value="sales">Name (A - Z)</option>
                                            <option value="sales">Name (Z - A)</option>
                                            <option value="rating">Price (Low &gt; High)</option>
                                            <option value="date">Rating (Lowest)</option>
                                            <option value="price-asc">Model (A - Z)</option>
                                            <option value="price-asc">Model (Z - A)</option>
                                        </select>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- shop product top wrap start -->

                    <!-- product item start -->
                    <div class="shop-product-wrap grid row">
                        @foreach($product as $detail)
                        <div class="col-lg-3 col-md-4 col-sm-6">
                            <!-- product single grid item start -->
                            <div class="product-item fix mb-30">
                                <div class="product-thumb">
                                    <a href="{{route('product_details',$detail->id)}}">
                                        <img src="{{asset($detail->productImages[0]->path ?? '')}}" class="img-pri" alt="">
                                        <img src="{{asset($detail->productImages[1]->path ?? '')}}" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                    <div class="product-action-link">
                                        <a href="#" data-id="{{$detail->id}}" onclick="quick_view(this)"> <span data-toggle="tooltip" data-placement="left" title="Quick view"><i class="fa fa-search"></i></span> </a>
                                        <!-- <a href="#" data-toggle="tooltip" data-placement="left" title="Wishlist"><i class="fa fa-heart-o"></i></a> -->
                                        <!-- <a href="#" data-toggle="tooltip" data-placement="left" title="Compare"><i class="fa fa-refresh"></i></a> -->
                                        <!-- <a href="#" data-toggle="tooltip" data-placement="left" title="Add to cart"><i class="fa fa-shopping-cart"></i></a> -->
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="product-details.html">{{$detail->title}}</a></h4>
                                    <div class="pricebox">
                                        <span class="regular-price">{{$detail->proce}}</span>
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
                            <!-- product single grid item end -->
                            <!-- product single list item start -->
                            <div class="product-list-item mb-30">
                                <div class="product-thumb">
                                    <a href="{{route('product_details',$detail->id)}}">
                                        <img src="{{asset($detail->productImages[0]->path ?? '')}}" class="img-pri" alt="">
                                        <img src="{{asset($detail->productImages[1]->path ?? '')}}" class="img-sec" alt="">
                                    </a>
                                    <div class="product-label">
                                        <span>hot</span>
                                    </div>
                                </div>
                                <div class="product-list-content">
                                    <h3>
                                        <a href="{{route('product_details',$detail->id)}}">{{$detail->title}}</a>
                                    </h3>
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
                                    <div class="pricebox">
                                        <span class="regular-price">{{$detail->price}}</span>
                                        <!-- <span class="old-price"><del>$90.00</del></span> -->
                                    </div>
                                    <p>{{$detail->description}}</p>
                                    <div class="product-list-action-link">
                                        <a class="buy-btn" href="{{route('checkout-qty',[$detail->id,1])}}" data-toggle="tooltip" data-placement="top" title="Add to cart">go to buy <i class="fa fa-shopping-cart"></i> </a>
                                        <!-- <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip" data-placement="top" title="Quick view"><i class="fa fa-search"></i></span> </a> -->
                                        <!-- <a href="#" data-toggle="tooltip" data-placement="top" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="fa fa-refresh"></i></a> -->
                                    </div>
                                </div>
                            </div>
                            <!-- product single list item start -->
                        </div> <!-- product single column end -->
                        @endforeach
                    </div>
                    <!-- product item end -->
                </div>
                <!-- product view wrapper area end -->

                <!-- start pagination area -->
                <div class="paginatoin-area text-center pt-28">
                    <div class="row">
                        <div class="col-12">
                            <ul class="pagination-box">
                                {!! $product->links() !!}
                                <!-- <li><a class="Previous" href="#">Previous</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a class="Next" href="#"> Next </a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end pagination area -->

            </div>
            <!-- product main wrap end -->
        </div>
    </div>
</div>
<!-- product details wrapper end -->
@endsection
@section('scripts')
<script src="{{asset('assets/js/landingpage.js')}}"></script>
<script src="{{asset('assets/js/product.js')}}"></script>
<script>
    var product_quick_view = "{{route('product_quick_view')}}";

    function quick_view(e) {

        var id = $(e).data('id');

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
            }
        });
        $.ajax({
                url: product_quick_view,
                data: {
                    id: id
                },
                type: "get",
                datatype: 'html',
                // beforeSend: function() {
                //     $('#whitescreen').show();
                //     page = 1;

                // }

                success: (function(data) {
                    if (data.html == " ") {
                        $('.ajax-load').html("No more records found");

                        return;
                    }
                    // $('#whitescreen').hide();
                    $('.ajax-load').hide();
                    $("#results").empty();
                    $("#results").append(data.html);
                    $('#quick_view').modal('show');

                    // prodct details slider active
                    $('.product-large-slider').slick({
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        fade: true,
                        arrows: true,
                        asNavFor: '.pro-nav',
                        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
                        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
                    });

                    // product details slider nav active
                    $('.pro-nav').slick({
                        slidesToShow: 4,
                        slidesToScroll: 1,
                        asNavFor: '.product-large-slider',
                        centerMode: true,
                        arrows: true,
                        centerPadding: 0,
                        focusOnSelect: true,
                        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
                        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>'
                    });

                    // prodct details slider active
                    $('.product-box-slider').slick({
                        autoplay: false,
                        infinite: true,
                        fade: false,
                        dots: false,
                        arrows: true,
                        prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-angle-left"></i></button>',
                        nextArrow: '<button type="button" class="slick-next"><i class="fa fa-angle-right"></i></button>',
                        slidesToShow: 3,
                        responsive: [{
                                breakpoint: 768,
                                settings: {
                                    slidesToShow: 2,
                                }
                            },
                            {
                                breakpoint: 480,
                                settings: {
                                    slidesToShow: 1,
                                }
                            },
                        ]
                    });
                })
            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {
                alert('server not responding...');
            });

    } // Fill modal with content from link href
</script>

@endsection