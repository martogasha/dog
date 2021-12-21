<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/patoi/default/products-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Dec 2021 05:55:56 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/rangeSlider.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/countrySelect.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <title>{{$product->name}} - Pet Mundu Shop</title>
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
@include('nav')




<div class="products-details-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <div class="products-details-thumbs-image">
                    <ul class="products-details-thumbs-image-slides">
                        <li><img src="{{asset('uploads/product/'.$product->image)}}" alt="image"></li>
                        @if(!empty($product->image1))
                        <li><img src="{{asset('uploads/product/'.$product->image1)}}" alt="image"></li>
                        @endif
                        @if(!empty($product->image2))
                        <li><img src="{{asset('uploads/product/'.$product->image2)}}" alt="image"></li>
                        @endif
                    @if(!empty($product->image3))
                            <li><img src="{{asset('uploads/product/'.$product->image3)}}" alt="image"></li>
                        @endif
                    @if(!empty($product->image4))
                                <li><img src="{{asset('uploads/product/'.$product->image4)}}" alt="image"></li>
                        @endif

                    </ul>
                    <div class="slick-thumbs">
                        <ul>
                            <li><img src="{{asset('uploads/product/'.$product->image)}}" alt="image"></li>
                            @if(!empty($product->image1))
                                <li><img src="{{asset('uploads/product/'.$product->image1)}}" alt="image"></li>
                            @endif
                            @if(!empty($product->image2))
                                <li><img src="{{asset('uploads/product/'.$product->image2)}}" alt="image"></li>
                            @endif
                            @if(!empty($product->image3))
                                <li><img src="{{asset('uploads/product/'.$product->image3)}}" alt="image"></li>
                            @endif
                            @if(!empty($product->image4))
                                <li><img src="{{asset('uploads/product/'.$product->image4)}}" alt="image"></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="products-details-desc">
                    <h3>{{$product->name}}</h3>
                    <div class="price">
                        <span class="new-price">Ksh {{$product->amount}}</span>
                    </div>
                    <p>{{$product->desc}}</p>
                    <form id="productDetailForm">
                        <input type="hidden" value="{{$product->id}}" name="productId" id="productDetail">
                    <div class="products-add-to-cart">
                        <button class="default-btn"><span>Add to Cart</span></button>
                    </div>
                    </form>
                    <a href="wishlist.html" class="add-to-wishlist"><i class='bx bx-heart'></i> Add to wishlist</a>
                    <div class="products-share">
                        <ul class="social">
                            <li><span>Share:</span></li>
                            <li><a href="#" class="facebook" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="#" class="twitter" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="#" class="linkedin" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                            <li><a href="#" class="instagram" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="products-details-tabs">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab" data-bs-target="#description" type="button" role="tab" aria-controls="description" aria-selected="false">Description</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel">
                            <h3>{{$product->topic}}</h3>
                            <p>{{$product->desc}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="modal fade" id="ignismyModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
                    </div>

                    <div class="modal-body">
                        <div class="thank-you-pop">
                            <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
                            <h1>ITEM ADDED TO CART!</h1>

                        </div>
                        <div style="padding-left: 110px">
                        <a href="{{url('shop')}}"><button class="btn btn-success">Continue Shopping</button></a>
                        <a href="{{url('cart')}}"><button class="btn btn-info">View Cart</button></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<style>
    /*--thank you pop starts here--*/
    .thank-you-pop{
        width:100%;
        padding:20px;
        text-align:center;
    }
    .thank-you-pop img{
        width:76px;
        height:auto;
        margin:0 auto;
        display:block;
        margin-bottom:25px;
    }

    .thank-you-pop h1{
        font-size: 42px;
        margin-bottom: 25px;
        color:#5C5C5C;
    }
    .thank-you-pop p{
        font-size: 20px;
        margin-bottom: 27px;
        color:#5C5C5C;
    }
    .thank-you-pop h3.cupon-pop{
        font-size: 25px;
        margin-bottom: 40px;
        color:#222;
        display:inline-block;
        text-align:center;
        padding:10px 20px;
        border:2px dashed #222;
        clear:both;
        font-weight:normal;
    }
    .thank-you-pop h3.cupon-pop span{
        color:#03A9F4;
    }
    .thank-you-pop a{
        display: inline-block;
        margin: 0 auto;
        padding: 9px 20px;
        color: #fff;
        text-transform: uppercase;
        font-size: 14px;
        background-color: #8BC34A;
        border-radius: 17px;
    }
    .thank-you-pop a i{
        margin-right:5px;
        color:#fff;
    }
    #ignismyModal .modal-header{
        border:0px;
    }
    /*--thank you pop ends here--*/

</style>

@include('footer')

<div class="go-top"><i class='bx bx-upvote'></i></div>

<div class="modal fade productsQuickView" id="productsQuickView" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="image">
                            <img src="{{asset('assets/img/products/products1.jpg')}}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="content">
                            <h3><a href="products-details.html">Pet Brash</a></h3>
                            <div class="price">
                                <span class="new-price">$150.00</span>
                                <span class="old-price">$200.00</span>
                            </div>
                            <div class="rating">
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                                <i class='bx bxs-star'></i>
                            </div>
                            <p>Nemo malesuada animi consectetur, cras consectetuer laborum tenetur, cum, lacus nemo imperdiet facilisis aute metus lorem.</p>
                            <div class="products-add-to-cart">
                                <div class="input-counter">
                                    <span class="minus-btn"><i class='bx bx-minus'></i></span>
                                    <input type="text" value="1">
                                    <span class="plus-btn"><i class='bx bx-plus'></i></span>
                                </div>
                                <button type="submit" class="default-btn"><span>Add to Cart</span></button>
                            </div>
                            <a href="wishlist.html" class="add-to-wishlist"><i class='bx bx-heart'></i> Add to wishlist</a>
                            <ul class="products-info">
                                <li><span>SKU:</span> 007</li>
                                <li><span>Categories:</span> <a href="shop-grid.html">Brash</a></li>
                                <li><span>Availability:</span> In stock (7 items)</li>
                                <li><span>Tag:</span> Accessories</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="productsFilterModal modal right fade" id="productsFilterModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <aside class="widget-area">
                    <div class="widget widget_categories">
                        <h3 class="widget-title"><span>Categories</span></h3>
                        <ul>
                            <li><a href="shop-left-sidebar.html">Business</a></li>
                            <li><a href="shop-left-sidebar.html">Privacy</a></li>
                            <li><a href="shop-left-sidebar.html">Technology</a></li>
                            <li><a href="shop-left-sidebar.html">Tips</a></li>
                            <li><a href="shop-left-sidebar.html">Log in</a></li>
                            <li><a href="shop-left-sidebar.html">Uncategorized</a></li>
                        </ul>
                    </div>
                    <div class="widget widget_price_filter">
                        <h3 class="widget-title"><span>Filter by Price</span></h3>
                        <div class="collection_filter_by_price">
                            <input class="js-range-of-price" type="text" data-min="0" data-max="1055" name="filter_by_price" data-step="10">
                        </div>
                    </div>
                    <div class="widget widget_patoi_posts_thumb">
                        <h3 class="widget-title"><span>Our Best Sellers</span></h3>
                        <article class="item">
                            <a href="products-details.html" class="thumb">
                                <img src="{{asset('assets/img/products/products1.jpg')}}" alt="blog-image">
                            </a>
                            <div class="info">
                                <h4 class="title"><a href="products-details.html">Pet brash</a></h4>
                                <div class="star-rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <span class="price">$150.00</span>
                            </div>
                        </article>
                        <article class="item">
                            <a href="products-details.html" class="thumb">
                                <img src="{{asset('assets/img/products/products2.jpg')}}" alt="blog-image">
                            </a>
                            <div class="info">
                                <h4 class="title"><a href="products-details.html">Automatic dog blue leash</a></h4>
                                <div class="star-rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <span class="price">$150.00</span>
                            </div>
                        </article>
                        <article class="item">
                            <a href="products-details.html" class="thumb">
                                <img src="{{asset('assets/img/products/products3.jpg')}}" alt="blog-image">
                            </a>
                            <div class="info">
                                <h4 class="title"><a href="products-details.html">Cat toilet bowl</a></h4>
                                <div class="star-rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <span class="price">$150.00</span>
                            </div>
                        </article>
                        <article class="item">
                            <a href="products-details.html" class="thumb">
                                <img src="{{asset('assets/img/products/products4.jpg')}}" alt="blog-image">
                            </a>
                            <div class="info">
                                <h4 class="title"><a href="products-details.html">Bowl with rubber toy</a></h4>
                                <div class="star-rating">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <span class="price">$150.00</span>
                            </div>
                        </article>
                    </div>
                    <div class="widget widget_tag_cloud">
                        <h3 class="widget-title"><span>Tags</span></h3>
                        <div class="tagcloud">
                            <a href="shop-left-sidebar.html">Advertisment</a>
                            <a href="shop-left-sidebar.html">Business</a>
                            <a href="shop-left-sidebar.html">Life</a>
                            <a href="shop-left-sidebar.html">Lifestyle</a>
                            <a href="shop-left-sidebar.html">Fashion</a>
                            <a href="shop-left-sidebar.html">Ads</a>
                            <a href="shop-left-sidebar.html">Advertisment</a>
                        </div>
                    </div>
                    <div class="widget widget_follow_us">
                        <h3 class="widget-title"><span>Follow Us</span></h3>
                        <ul>
                            <li><a href="#" target="_blank">Facebook</a></li>
                            <li><a href="#" target="_blank">Twitter</a></li>
                            <li><a href="#" target="_blank">Instagram</a></li>
                            <li><a href="#" target="_blank">Pinterest</a></li>
                            <li><a href="#" target="_blank">Linkedin</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</div>

<script data-cfasync="false" src="https://templates.envytheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/meanmenu.min.js')}}"></script>
<script src="{{asset('assets/js/appear.min.js')}}"></script>
<script src="{{asset('assets/js/countrySelect.min.js')}}"></script>
<script src="{{asset('assets/js/odometer.min.js')}}"></script>
<script src="{{asset('assets/js/loopcounter.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/rangeSlider.min.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/form-validator.min.js')}}"></script>
<script src="{{asset('assets/js/contact-form-script.js')}}"></script>
<script src="{{asset('assets/js/ajaxchimp.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

<script >
    $('#productDetailForm').on('submit',function (event) {
        event.preventDefault();
        productId = $('#productDetail').val();
    $.ajax({
    type:"post",
    url:"{{route('storeCart')}}",
    data:{
    "_token": "{{ csrf_token() }}",
    productId:productId},
    success:function (data) {
    $('#ignismyModal').modal('show');
    },
    error:function (error) {
        console.log(error)
        alert('error')

    }

    });
    });
</script>
</body>

<!-- Mirrored from templates.envytheme.com/patoi/default/products-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Dec 2021 05:55:57 GMT -->
</html>
