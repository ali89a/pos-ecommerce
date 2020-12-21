<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="{{ asset('front') }}/image/favicon.ico" type="image/x-icon">
    <link rel="icon" href="{{ asset('front') }}/image/favicon.ico" type="image/x-icon">
    <title>Gauwal - Online Shopping</title>
    <meta name="description" content="Responsive and clean html template design for any kind of ecommerce webshop">
    <!-- CSS Part Start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/js/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/css/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/css/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/css/owl.transitions.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front') }}/css/stylesheet-skin3.css" />
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <!-- CSS Part End-->
</head>

<body>
    <div class="wrapper-wide">
        <div id="header">
            <!-- Top Bar Start-->
            <nav id="top" class="htop">
                <div class="container">
                    <div class="row"> <span class="drop-icon visible-sm visible-xs"><i
                                class="fa fa-align-justify"></i></span>
                        <div class="pull-left flip left-top">
                            <div class="links">
                                <ul>
                                    <li class="mobile"><i class="fa fa-phone"></i>+88 01977-722530</li>
                                    <li class="email"><a href="mailto:info.gauwal@gmail.com"><i
                                                class="fa fa-envelope"></i>info.gauwal@gmail.com</a></li>
                                  
                                    <li><a href="#">Wish List (0)</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="top-links" class="nav pull-right flip">
                            <ul>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Top Bar End-->
            <!-- Header Start-->
            <header class="header-row">
                <div class="container">
                    <div class="table-container">
                        <!-- Logo Start -->
                        <div class="col-table-cell col-lg-4 col-md-4 col-sm-12 col-xs-12 inner">
                            <div id="logo"><a href="index-2.html"><img class="img-responsive" src="{{ asset('front') }}/image/logo.png"
                                        title="MarketShop" alt="MarketShop" /></a></div>
                        </div>
                        <!-- Logo End -->
                        <!-- Search Start-->
                        <div class="col-table-cell col-lg-5 col-md-5 col-md-push-0 col-sm-6 col-sm-push-6 col-xs-12">
                            <div id="search" class="input-group">
                                <input id="filter_name" type="text" name="search" value="" placeholder="Search"
                                    class="form-control input-lg" />
                                <button type="button" class="button-search"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <!-- Search End-->
                        <!-- Mini Cart Start-->
                        <div
                            class="col-table-cell col-lg-3 col-md-3 col-md-pull-0 col-sm-6 col-sm-pull-6 col-xs-12 inner">
                            <div id="cart">
                                <button type="button" data-toggle="dropdown" data-loading-text="Loading..."
                                    class="heading dropdown-toggle"> <span class="cart-icon pull-left flip"></span>
                                    <span id="cart-total">2 item(s) - $1,132.00</span></button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td class="text-center"><a href="product.html"><img
                                                                class="img-thumbnail"
                                                                title="Xitefun Causal Wear Fancy Shoes"
                                                                alt="Xitefun Causal Wear Fancy Shoes"
                                                                src="{{ asset('front') }}/image/product/sony_vaio_1-50x50.jpg"></a></td>
                                                    <td class="text-left"><a href="product.html">Xitefun Causal Wear
                                                            Fancy Shoes</a></td>
                                                    <td class="text-right">x 1</td>
                                                    <td class="text-right">$902.00</td>
                                                    <td class="text-center"><button class="btn btn-danger btn-xs remove"
                                                            title="Remove" onClick="" type="button"><i
                                                                class="fa fa-times"></i></button></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center"><a href="product.html"><img
                                                                class="img-thumbnail" title="Aspire Ultrabook Laptop"
                                                                alt="Aspire Ultrabook Laptop"
                                                                src="{{ asset('front') }}/image/product/samsung_tab_1-50x50.jpg"></a></td>
                                                    <td class="text-left"><a href="product.html">Aspire Ultrabook
                                                            Laptop</a></td>
                                                    <td class="text-right">x 1</td>
                                                    <td class="text-right">$230.00</td>
                                                    <td class="text-center"><button class="btn btn-danger btn-xs remove"
                                                            title="Remove" onClick="" type="button"><i
                                                                class="fa fa-times"></i></button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                    <li>
                                        <div>
                                            <table class="table table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <td class="text-right"><strong>Sub-Total</strong></td>
                                                        <td class="text-right">$940.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                                        <td class="text-right">$4.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><strong>VAT (20%)</strong></td>
                                                        <td class="text-right">$188.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-right"><strong>Total</strong></td>
                                                        <td class="text-right">$1,132.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <p class="checkout"><a href="cart.html" class="btn btn-primary"><i
                                                        class="fa fa-shopping-cart"></i> View
                                                    Cart</a>&nbsp;&nbsp;&nbsp;<a href="checkout.html"
                                                    class="btn btn-primary"><i class="fa fa-share"></i> Checkout</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Mini Cart End-->
                    </div>
                </div>
            </header>
            <!-- Header End-->
            <!-- Main Menu Start-->
            <nav id="menu" class="navbar">
                <div class="container">
                    <div class="navbar-header"> <span class="visible-xs visible-sm"> Menu <b></b></span></div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li><a class="home_link" title="Home" href="{{ route('front') }}"><span>Home</span></a></li>
                            <li class="dropdown"><a>Shop by Categories</a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li> <a href="category.html">Clothing<span>&rsaquo;</span></a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="category.html">Men <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">Sub Categories</a></li>
                                                                <li><a href="category.html">Sub Categories</a></li>
                                                                <li><a href="category.html">Sub Categories</a></li>
                                                                <li><a href="category.html">Sub Categories</a></li>
                                                                <li><a href="category.html">Sub Categories New</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="category.html">Women</a> </li>
                                                    <li><a href="category.html">Girls<span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">Sub Categories </a></li>
                                                                <li><a href="category.html">Sub Categories New</a></li>
                                                                <li><a href="category.html">Sub Categories New</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="category.html">Boys</a></li>
                                                    <li><a href="category.html">Baby</a></li>
                                                    <li><a href="category.html">Accessories <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">New Sub Categories</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li> <a href="category.html">Electronics<span>&rsaquo;</span></a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li> <a href="category.html">Laptops <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li> <a href="category.html">New Sub Categories </a>
                                                                </li>
                                                                <li> <a href="category.html">New Sub Categories </a>
                                                                </li>
                                                                <li> <a href="category.html">Sub Categories New </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li> <a href="category.html">Desktops <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li> <a href="category.html">New Sub Categories </a>
                                                                </li>
                                                                <li> <a href="category.html">Sub Categories New </a>
                                                                </li>
                                                                <li> <a href="category.html">Sub Categories New </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li> <a href="category.html">Cameras <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li> <a href="category.html">New Sub Categories</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="category.html">Mobile Phones <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">New Sub Categories</a></li>
                                                                <li><a href="category.html">New Sub Categories</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="category.html">TV &amp; Home Audio
                                                            <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">New Sub Categories </a>
                                                                </li>
                                                                <li><a href="category.html">Sub Categories New </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="category.html">MP3 Players</a> </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="category.html">Shoes<span>&rsaquo;</span></a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="category.html">Men</a> </li>
                                                    <li><a href="category.html">Women <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">New Sub Categories </a>
                                                                </li>
                                                                <li><a href="category.html">Sub Categories </a> </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="category.html">Girls</a> </li>
                                                    <li><a href="category.html">Boys</a> </li>
                                                    <li><a href="category.html">Baby</a> </li>
                                                    <li><a href="category.html">Accessories <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">New Sub Categories</a></li>
                                                                <li><a href="category.html">New Sub Categories</a></li>
                                                                <li><a href="category.html">Sub Categories</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li> <a href="category.html">Watches<span>&rsaquo;</span></a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li> <a href="category.html">Men's Watches</a></li>
                                                    <li> <a href="category.html">Women's Watches</a></li>
                                                    <li> <a href="category.html">Kids' Watches</a></li>
                                                    <li> <a href="category.html">Accessories</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li> <a href="category.html">Jewellery<span>&rsaquo;</span></a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li> <a href="category.html">Silver <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li> <a href="category.html">New Sub Categories</a></li>
                                                                <li> <a href="category.html">New Sub Categories</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="category.html">Gold <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">test 1</a></li>
                                                                <li><a href="category.html">test 2</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="category.html">Diamond</a></li>
                                                    <li><a href="category.html">Pearl <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">New Sub Categories</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="category.html">Men's Jewellery</a></li>
                                                    <li><a href="category.html">Children's Jewellery
                                                            <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">New Sub Categories </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="category.html">Health &amp; Beauty<span>&rsaquo;</span></a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li> <a href="category.html">Perfumes</a></li>
                                                    <li> <a href="category.html">Makeup</a></li>
                                                    <li> <a href="category.html">Sun Care</a></li>
                                                    <li> <a href="category.html">Skin Care</a></li>
                                                    <li> <a href="category.html">Eye Care</a></li>
                                                    <li> <a href="category.html">Hair Care</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li> <a href="category.html">Kids &amp; Babies<span>&rsaquo;</span></a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="category.html">Toys</a></li>
                                                    <li><a href="category.html">Games <span>&rsaquo;</span></a>
                                                        <div class="dropdown-menu">
                                                            <ul>
                                                                <li><a href="category.html">test 25</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li><a href="category.html">Puzzles</a></li>
                                                    <li><a href="category.html">Hobbies</a></li>
                                                    <li><a href="category.html">Strollers</a></li>
                                                    <li><a href="category.html">Health &amp; Safety</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li> <a href="category.html">Sports<span>&rsaquo;</span></a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="category.html">Cycling</a></li>
                                                    <li><a href="category.html">Running</a></li>
                                                    <li><a href="category.html">Swimming</a></li>
                                                    <li><a href="category.html">Football</a></li>
                                                    <li><a href="category.html">Golf</a></li>
                                                    <li><a href="category.html">Windsurfing</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li> <a href="category.html">Home &amp; Garden<span>&rsaquo;</span></a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="category.html">Bedding</a></li>
                                                    <li><a href="category.html">Food</a></li>
                                                    <li><a href="category.html">Furniture</a></li>
                                                    <li><a href="category.html">Kitchen</a></li>
                                                    <li><a href="category.html">Lighting</a></li>
                                                    <li><a href="category.html">Tools</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li> <a href="category.html">Wines &amp; Spirits<span>&rsaquo;</span></a>
                                            <div class="dropdown-menu">
                                                <ul>
                                                    <li><a href="category.html">Wine</a></li>
                                                    <li><a href="category.html">Whiskey</a></li>
                                                    <li><a href="category.html">Vodka</a></li>
                                                    <li><a href="category.html">Liqueurs</a></li>
                                                    <li><a href="category.html">Beer</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="contact-link"><a href="{{ route('about') }}">About Us</a></li>
                            <li class="contact-link"><a href="{{ route('contact') }}">Contact Us</a></li>
                            <li class="custom-link-right"><a href="{{ route('special.offer') }}" target="_blank">Special Offers</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Main Menu End-->
        </div>
        <div id="container">
            <div class="container">
              @yield('front-content')
            </div>
        </div>
        <!-- Feature Box Start-->
        <div class="container">
            <div class="custom-feature-box row">
                <div class="col-sm-4 col-xs-12">
                    <div class="feature-box fbox_1">
                        <div class="title">Free Shipping</div>
                        <p>Free shipping on order over $1000</p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="feature-box fbox_3">
                        <div class="title">Gift Cards</div>
                        <p>Give the special perfect gift</p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <div class="feature-box fbox_4">
                        <div class="title">Reward Points</div>
                        <p>Earn and spend with ease</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature Box End-->
        <!--Footer Start-->
        <footer id="footer">
            <div class="fpart-first">
                <div class="container">
                    <div class="row">
                        <div class="contact col-lg-3 col-md-3 col-sm-12 col-xs-12">
                            <h5>Contact Details</h5>
                            <ul>
                                <li class="address"><i class="fa fa-map-marker"></i>17/1, Monipuripara, Sangshad Avenue 1215 Dhaka, Dhaka Division, Bangladesh</li>
                                <li class="mobile"><i class="fa fa-phone"></i>01977-722530</li>
                                <li class="email"><i class="fa fa-envelope"></i>Send email via our <a
                                        href="contact-us.html">Contact Us</a>
                            </ul>
                        </div>
                        <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <h5>Information</h5>
                            <ul>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="about-us.html">Delivery Information</a></li>
                                <li><a href="about-us.html">Privacy Policy</a></li>
                                <li><a href="about-us.html">Terms &amp; Conditions</a></li>
                            </ul>
                        </div>
                        <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <h5>Customer Service</h5>
                            <ul>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="returns.html">Returns</a></li>
                                <li><a href="sitemap.html">Site Map</a></li>
                            </ul>
                        </div>
                        <div class="column col-lg-2 col-md-2 col-sm-3 col-xs-12">
                            <h5>Extras</h5>
                            <ul>
                                <li><a href="manufacturer.html">Brands</a></li>
                                <li><a href="gift-voucher.html">Gift Vouchers</a></li>
                                <li><a href="#">Affiliates</a></li>
                                <li><a href="#">Specials</a></li>
                            </ul>
                        </div>
                        <div class="column col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <h5>Newsletter</h5>
                            <div class="form-group">
                                <label class="control-label" for="subscribe">Sign up to receive latest news and
                                    updates.</label>
                                <input id="signup" type="email" required="" placeholder="Email address" name="email"
                                    class="form-control">
                            </div>
                            <input type="submit" value="Subscribe" class="btn btn-primary">
                        </div>
                    </div>
                </div>
            </div>
            <div class="fpart-second">
                <div class="container">
                    <div id="powered" class="clearfix">
                        <div class="powered_text pull-left flip">
                            <p>Gauwal © 2020 | Design and Developed By <a href=""
                                    target="_blank">Mohammad Ali</a></p>
                        </div>
                        <div class="social pull-right flip"> <a href="https://www.facebook.com/gauwalbd" target="_blank"> <img data-toggle="tooltip"
                                    src="{{ asset('front') }}/image/socialicons/facebook.png" alt="Facebook" title="Facebook"></a> <a
                                href="#" target="_blank"> <img data-toggle="tooltip" src="{{ asset('front') }}/image/socialicons/twitter.png"
                                    alt="Twitter" title="Twitter"> </a> <a href="#" target="_blank"> <img
                                    data-toggle="tooltip" src="{{ asset('front') }}/image/socialicons/google_plus.png" alt="Google+"
                                    title="Google+"> </a> <a href="#" target="_blank"> <img data-toggle="tooltip"
                                    src="{{ asset('front') }}/image/socialicons/pinterest.png" alt="Pinterest" title="Pinterest"> </a> <a
                                href="#" target="_blank"> <img data-toggle="tooltip" src="{{ asset('front') }}/image/socialicons/rss.png"
                                    alt="RSS" title="RSS"> </a> </div>
                    </div>
                  
                </div>
            </div>
            <div id="back-top"><a data-toggle="tooltip" title="Back to Top" href="javascript:void(0)"
                    class="backtotop"><i class="fa fa-chevron-up"></i></a></div>
        </footer>
        <!--Footer End-->
    </div>
    <!-- JS Part Start-->
    <script type="text/javascript" src="{{ asset('front') }}/js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('front') }}/js/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('front') }}/js/jquery.easing-1.3.min.js"></script>
    <script type="text/javascript" src="{{ asset('front') }}/js/jquery.dcjqaccordion.min.js"></script>
    <script type="text/javascript" src="{{ asset('front') }}/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{ asset('front') }}/js/custom.js"></script>
    <!-- JS Part End-->
</body>
</html>