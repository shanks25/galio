
<div class="row">
    <div class="col-lg-5">
        <div class="product-large-slider slick-arrow-style_2 mb-20">
            @foreach($latestProduct->productImages as $prodImage)
            <div class="pro-large-img">
                <img src="{{asset($prodImage->path ?? 'assets/img/product/product-img2.jpg')}}" alt="">
            </div>
            @endforeach

        </div>
        <div class="pro-nav slick-padding2 slick-arrow-style_2">
            @foreach($latestProduct->productImages as $prodImage)
            <div class="pro-nav-thumb">
                <img src="{{asset($prodImage->path ?? 'assets/img/product/product-img2.jpg')}}" alt="product image">
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-lg-7">
        <div class="product-details-des mt-md-34 mt-sm-34">
            <h3><a href="{{route('product_details',$latestProduct->id)}}">{{$latestProduct->title}}</a></h3>
            <!-- <div class="ratings">
                <span class="good"><i class="fa fa-star"></i></span>
                <span class="good"><i class="fa fa-star"></i></span>
                <span class="good"><i class="fa fa-star"></i></span>
                <span class="good"><i class="fa fa-star"></i></span>
                <span><i class="fa fa-star"></i></span>
                <div class="pro-review">
                    <span>1 review(s)</span>
                </div>
            </div> 
            <div class="availability mt-10">
                <h5>Availability:</h5>
                <span>1 in stock</span>
            </div> -->
            <div class="pricebox">
                <span class="regular-price">₹{{$latestProduct->price}}</span>
            </div>
            <p>{{$latestProduct->description}}</p>
            <div class="quantity-cart-box d-flex align-items-center mt-20">
                <div class="quantity">
                    <div class="pro-qty"><input type="text" value="1"></div>
                </div>
                <div class="action_link">
                    <a class="buy-btn" href="#">add to cart<i class="fa fa-shopping-cart"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product details inner end -->

