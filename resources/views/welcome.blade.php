<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/patoi/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Dec 2021 05:53:12 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/rangeSlider.min.css">
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <link rel="stylesheet" href="assets/css/slick.min.css">
    <link rel="stylesheet" href="assets/css/countrySelect.min.css">
    <link rel="stylesheet" href="assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>Pet Mundu - Online Pet    Shop</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<body>

@include('nav')


<div class="main-banner-area">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="main-banner-content">
                    <span class="sub-title">Welcome to Pet Mundu</span>
                    <h1>We provide best pet products</h1>
                    <p>Save 20% off your first order</p>
                    <a href="{{url('shop')}}" class="default-btn"><span>Shop Now</span></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="main-banner-image">
                    <img src="assets/img/banner/banner1.png" alt="banner-image">
                    <img src="assets/img/banner/banner2.png" alt="banner-image">
                    <img src="assets/img/banner/banner3.png" alt="banner-image">
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<div class="products-area pb-75">
    <div class="container">
        <div class="section-title">
            <h2>Best Products</h2>
        </div>
        <div class="row justify-content-center">
            @foreach($products as $product)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-products-box">
                    <div class="image">
                        <a href="{{url('productDetail',$product->id)}}" class="d-block">
                            <img src="{{asset('uploads/product/'.$product->image)}}" alt="products-image">
                        </a>
                    </div>
                    <div class="content">
                        <h3><a href="products-details.html">{{$product->name}}</a></h3>
                        <div class="price">
                            <span class="new-price">Ksh {{$product->amount}}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="facility-area">
    <div class="container">
        <div class="facility-inner">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-facility-box">
                        <img src="assets/img/icon/icon1.png" alt="icon">
                        <h3>Best collection</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-facility-box">
                        <img src="assets/img/icon/icon2.png" alt="icon">
                        <h3>Fast delivery</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-facility-box">
                        <img src="assets/img/icon/icon3.png" alt="icon">
                        <h3>24/7 customer support</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                    <div class="single-facility-box">
                        <img src="assets/img/icon/icon4.png" alt="icon">
                        <h3>Secured payment</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
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
                            <img src="assets/img/products/products1.jpg" alt="image">
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
                                <img src="assets/img/products/products1.jpg" alt="blog-image">
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
                                <img src="assets/img/products/products2.jpg" alt="blog-image">
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
                                <img src="assets/img/products/products3.jpg" alt="blog-image">
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
                                <img src="assets/img/products/products4.jpg" alt="blog-image">
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


<script data-cfasync="false" src="https://templates.envytheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/meanmenu.min.js"></script>
<script src="assets/js/appear.min.js"></script>
<script src="assets/js/countrySelect.min.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/loopcounter.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/rangeSlider.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.js"></script>
<script src="assets/js/ajaxchimp.min.js"></script>
<script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from templates.envytheme.com/patoi/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Dec 2021 05:54:52 GMT -->
</html>
