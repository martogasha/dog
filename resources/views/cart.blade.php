<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/patoi/default/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Dec 2021 05:55:57 GMT -->
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
    <title>Patoi - Pet Care Shop HTML Template</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
</head>
<body>

<div class="top-header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <p>Phone: <b>0796522538</b> Gmail: <b>gabrielmburu63@gmail.com</b></p>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-6">
                <div class="search-box">
                    <form>
                        <input type="text" class="input-search" placeholder="Enter your keywords...">
                        <button type="submit"><i class='bx bx-search'></i></button>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <ul>
                    <li><a href="#" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                    <li><a href="#" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                    <li><a href="#" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                    <li><a href="#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="navbar-area">
    <div class="patoi-responsive-nav">
        <div class="container">
            <div class="patoi-responsive-menu">
                <div class="logo">
                    <a href="{{url('/')}}"><img src="assets/img/dogLogo.png" alt="logo"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="patoi-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{url('/')}}"><img src="assets/img/dogLogo.png" alt="logo"></a>
                <div class="collapse navbar-collapse mean-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a href="{{url('/')}}" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item"><a href="{{url('shop')}}" class="nav-link">Shop</a>
                        <li class="nav-item"><a href="#" class="nav-link">About</a>
                        </li>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">Blog</a>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                    </ul>                    <div class="others-option">
                        <div class="d-flex align-items-center">
                            <ul>
                                <li><a href="profile-authentication.html"><i class='bx bx-user-circle'></i></a></li>
                                <li><a href="{{url('cart')}}">
                                        <button type="button" class="btn btn-primary">
                                            <i class='bx bx-cart'></i><span class="badge bg-danger ms-2">{{\Illuminate\Support\Facades\Session::has('cat') ? \Illuminate\Support\Facades\Session::get('cat')->totalQty: ''}}</span>
                                        </button>
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-option">
                        <ul>
                            <li>
                                <select class="form-select">
                                    <option selected>English</option>
                                    <option value="1">Spanish</option>
                                    <option value="2">Chinese</option>
                                </select>
                            </li>
                            <li><a href="profile-authentication.html"><i class='bx bx-user-circle'></i></a></li>
                            <li><a href="cart.html"><i class='bx bx-cart'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('flash-message')

<div class="cart-area ptb-100">
    <div class="container">
        <form>
            <div class="cart-table table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($products))
                        @foreach($products as $product)
                    <tr>
                        <td><a href="{{url('cartRemove',$product['item']['id'])}}" class="remove"><i class='bx bx-trash'></i></a></td>
                        <td class="product-thumbnail">
                            <a href="products-details.html">
                                <img src="{{asset('uploads/product/'.$product['item']['image'])}}" alt="item">
                                <h3>{{$product['item']['name']}}</h3>
                            </a>
                        </td>
                        <td>Ksh:{{$product['item']['amount']}}</td>
                        <td class="product-quantity">
                            <div class="input-counter">
                                <a href="{{url('cartReduceByOne',$product['item']['id'])}}"><span class="minus-btn"><i class='bx bx-minus'></i></span></a>
                                <input type="text" value="{{$product['quantity']}}">
                                <a href="{{url('addByOne',$product['item']['id'])}}"><span class="plus-btn"><i class='bx bx-plus'></i></span></a>
                            </div>
                        </td>
                        <td>Ksh:{{$product['item']['amount'] * $product['quantity']}}</td>
                    </tr>
                        @endforeach
                    @else
                        <td>Cart Empty</td>
                    @endif
                    </tbody>
                </table>
            </div>
            <div class="cart-buttons">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-sm-12 col-md-7">
                        <div class="shopping-coupon-code">
                            <input type="text" class="form-control" placeholder="Coupon code" name="coupon-code" id="coupon-code">
                            <button type="submit">Apply Coupon</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart-totals">
                <ul>
                    @if(isset($totalPrice))
                    <li>Total <span>Ksh:{{$totalPrice}}</span></li>
                    @endif
                </ul>
                <a href="{{url('checkout')}}" class="default-btn"><span>Proceed to Checkout</span></a>
            </div>
        </form>
    </div>
</div>


<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <a href="{{url('/')}}" class="logo">
                        <img src="assets/img/dogLogo.png" alt="logo">
                    </a>
                    <ul class="footer-contact-info">
                        <li><span>Hotline:</span> <a href="tel:12855">12855</a></li>
                        <li><span>Tech support:</span> <a href="tel:+1514312-5678">+1 (514) 312-5678</a></li>
                        <li><span>Email:</span> <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#a2cac7cececde2d2c3d6cdcb8cc1cdcf"><span class="__cf_email__" data-cfemail="1e767b7272715e6e7f6a7177307d7173">[email&#160;protected]</span></a></li>
                        <li><span>Address:</span> 1523 Cook Hill Road New Haven, CT</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget pl-4">
                    <h3>Information</h3>
                    <ul class="custom-links">
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="privacy-policy.html">Refund Policy</a></li>
                        <li><a href="terms-conditions.html">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Customer service</h3>
                    <ul class="custom-links">
                        <li><a href="profile-authentication.html">My Account</a></li>
                        <li><a href="faq.html">FAQ's</a></li>
                        <li><a href="cart.html">Order History</a></li>
                        <li><a href="wishlist.html">Wishlist</a></li>
                        <li><a href="terms-conditions.html">Delivery Information</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h3>Subscribe to our newsletter!</h3>
                    <p>Sign up for our mailing list to get the latest updates news & offers.</p>
                    <form class="newsletter-form" data-toggle="validator">
                        <input type="email" class="input-newsletter" placeholder="Your email address" name="EMAIL" required autocomplete="off">
                        <button type="submit"><i class='bx bx-paper-plane'></i></button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                    <div class="payment-types">
                        <div class="d-flex align-items-center">
                            <span>We accept:</span>
                            <ul>
                                <li><img src="assets/img/payment/visa.png" alt="visa"></li>
                                <li><img src="assets/img/payment/mc.png" alt="master-card"></li>
                                <li><img src="assets/img/payment/paypal.png" alt="paypal"></li>
                                <li><img src="assets/img/payment/ae.png" alt="american-express"></li>
                                <li><img src="assets/img/payment/discover.png" alt="discover"></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <p>Copyright @2021 <span>Patoi</span>. Design & Developed by <a href="https://envytheme.com/">EnvyTheme</a></p>
        </div>
    </div>
</footer>

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

<!-- Mirrored from templates.envytheme.com/patoi/default/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Dec 2021 05:55:57 GMT -->
</html>
