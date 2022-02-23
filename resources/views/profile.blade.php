<!doctype html>
<html lang="zxx">

<!-- Mirrored from templates.envytheme.com/patoi/default/profile-authentication.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Dec 2021 05:55:55 GMT -->
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
@include('nav')

<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h1>{{\Illuminate\Support\Facades\Auth::user()->name}} Account</h1>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>{{\Illuminate\Support\Facades\Auth::user()->name}} Account</li>
            </ul>
        </div>
    </div>
</div>

@include('flash-message')
<div class="profile-authentication-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="register-form">
                    <h2>Account Details</h2>
                    <form action="{{url('updateProfile')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="{{\Illuminate\Support\Facades\Auth::user()->email}}" required>
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone" value="{{\Illuminate\Support\Facades\Auth::user()->phone}}" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" id="password1" name="password" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword1" placeholder="Confirm Password" required>
                        </div>
                        <span id="passwordMatch" style="color: green">Password match</span>
                        <br>
                        <span id="passwordError" style="color: red">Password don't match match</span>
                        <button type="submit">Save Changes</button>
                        <input type="hidden" name="role" value="1">
                    </form>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button class="btn btn-danger" style="color: red">lOGOUT</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <a href="index.html" class="logo">
                        <img src="assets/img/white-logo.png" alt="logo">
                    </a>
                    <ul class="footer-contact-info">
                        <li><span>Hotline:</span> <a href="tel:12855">12855</a></li>
                        <li><span>Tech support:</span> <a href="tel:+1514312-5678">+1 (514) 312-5678</a></li>
                        <li><span>Email:</span> <a href="https://templates.envytheme.com/cdn-cgi/l/email-protection#a2cac7cececde2d2c3d6cdcb8cc1cdcf"><span class="__cf_email__" data-cfemail="650d0009090a251504110a0c4b060a08">[email&#160;protected]</span></a></li>
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
<script>
    $(document).ready(function () {
        $('#passwordError').hide();
        $('#passwordMatch').hide();
    });
    $('#confirmPassword1').on('keyup',function () {
        if ($('#password1').val() == $('#confirmPassword1').val() ){
            $('#passwordMatch').show();
            $('#passwordError').hide();
        }
        else {
            $('#passwordError').show();
            $('#passwordMatch').hide();
        }
    });
</script>
<!-- Mirrored from templates.envytheme.com/patoi/default/profile-authentication.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Dec 2021 05:55:55 GMT -->
</html>
