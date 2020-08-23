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

        success: (function (data) {
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
        .fail(function (jqXHR, ajaxOptions, thrownError) {
            alert('server not responding...');
        });

}// Fill modal with content from link href
