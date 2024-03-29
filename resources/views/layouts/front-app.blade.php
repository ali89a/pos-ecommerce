<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>Gauwal</title>
    <meta charset="utf-8">
    <meta name="keywords"
        content="html5 template, best html5 template, best html template, html5 basic template, multipurpose html5 template, multipurpose html template, creative html templates, creative html5 templates" />
    <meta name="description"
        content="eMarket is a powerful Multi-purpose HTML5 Template with clean and user friendly design. It is definite a great starter for any eCommerce web project." />
    <meta name="author" content="Magentech">
    <meta name="robots" content="index, follow" />
    <!-- Mobile specific metas=========== -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon========= -->
    <link rel="shortcut icon" type="{{ asset('front') }}/image/png" href="ico/favicon.ico" />
    <!-- Libs CSS=========== -->
    <link href="{{ asset('front') }}/css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('front') }}/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{ asset('front') }}/js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/themecss/lib.css" rel="stylesheet">
    <link href="{{ asset('front') }}/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link href="{{ asset('front') }}/js/minicolors/miniColors.css" rel="stylesheet">
    <!-- Theme CSS============= -->
    <link href="{{ asset('front') }}/css/themecss/so_searchpro.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/themecss/so-categories.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/themecss/so-newletter-popup.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/footer/footer.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/header/header.css" rel="stylesheet">
    <link id="color_scheme" href="{{ asset('front') }}/css/home.css" rel="stylesheet">
    <link href="{{ asset('front') }}/css/responsive.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('toastr/toastr.min.css')}}">
    <!-- Google web fonts====== -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    <style type="text/css">
        body {
            font-family: 'Open Sans', sans-serif;
        }
    </style>
    @stack('css')
</head>

<body class="common-home res layout-4">
    <div id="wrapper" class="wrapper-fluid banners-effect-10">
        <!-- Header Container  -->
        <header id="header" class=" typeheader-4">
            <!-- Header Top -->
            <div class="header-top hidden-compact">
                <div class="container">
                    <div class="row">
                        <div class="header-top-left col-lg-6 col-md-4 col-sm-6 col-xs-7">
                            <ul class="top-link list-inline">
                                <li class="checkout hidden-sm hidden-xs"><a href="#" class="btn-link"
                                        title="mobile "><span><i class="fa fa-phone"></i>+880 1977-722531 </span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="header-top-right collapsed-block col-lg-6 col-md-8 col-sm-6 col-xs-5">
                            <ul class="top-link list-inline">
                                <!-- <li class="account" id="my_account">
                                    <a href="#" title="My Account " class="btn-xs dropdown-toggle"
                                        data-toggle="dropdown"> <span>My Account </span> <span
                                            class="fa fa-caret-down"></span>
                                    </a>
                                    <ul class="dropdown-menu " style="display: none;">
                                        <li><a href="#">Register</a>
                                        </li>
                                        <li><a href="#">Login</a>
                                        </li>
                                    </ul>
                                </li> -->
                                <li class="wishlist hidden-sm hidden-xs">
                                    <a href="#" id="wishlist-total" class="top-link-wishlist" title="Wish List (0) ">
                                        <!-- <i class="fa fa-heart"></i> -->Wish List (0)
                                    </a>
                                </li>
                                <li class="checkout hidden-sm hidden-xs"><a href="#" class="btn-link"
                                        title="Checkout "><span><i class="fa fa-check-square-o"></i>Checkout </span></a>
                                </li>
                                <li class="hidden-xs">
                                    {{-- <a href="{{ url('/checkoutReg') }}"><i class="fa fa-lock"></i>Login</a> --}}

                                    @if(Session::get('customerId') && Session::get('shippingId'))
                                    <a href="{{route('checkout-payment')}}"
                                        class="fa fa-lock">Payment</a>
                                    @elseif(Session::get('customerId'))
                                    <a href="{{route('checkout-shipping')}}"
                                        class="fa fa-lock">Payment</a>
                                    @else
                                    <a href="{{route('checkout-reg')}}" class="fa fa-lock">Register Here</a>
                                    @endif
                                   
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Header Top -->
            <!-- Header center -->
            <div class="header-middle">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="navbar-logo col-lg-2 col-md-3 col-sm-12 col-xs-12">
                            <div class="logo">
                                <a href="{{ route('front') }}"><img src="{{ asset('front') }}/logo4.png"
                                        title="Your Store" alt="Your Store" /></a>
                            </div>
                        </div>
                        <!-- //end Logo -->


                        <!-- Search -->
                        <div class="middle2 col-lg-7 col-md-6">
                            <div class="search-header-w">
                                <div class="icon-search hidden-lg hidden-md hidden-sm"><i class="fa fa-search"></i>
                                </div>
                                <div id="sosearchpro" class="sosearchpro-wrapper so-search ">
                                    <form method="GET" action="">
                                        <div id="search0" class="search input-group form-group">
                                            <input class="autosearch-input form-control" type="text" value="" size="50"
                                                autocomplete="off" placeholder="Keyword here..." id="txtSearch"
                                                name="txtSearch">
                                        </div>
                                        <input type="hidden" name="route" value="product/search" />
                                    </form>
                                    <div id="result" style="background-color: #fff">
                                    </div>
                                </div>
                                <div id="suggestions" style="margin-left:-35px;display:block"></div>
                            </div>
                        </div>

                        <!-- //end Search -->
                        <div class="middle3 col-lg-3 col-md-3">
                            <!--cart-->
                            <div class="shopping_cart">
                                <div id="cart" class="btn-shopping-cart">
                                    <a data-loading-text="Loading... " class="btn-group top_cart dropdown-toggle"
                                        data-toggle="dropdown" aria-expanded="true">
                                        <div class="shopcart">
                                            <span class="icon-c">
                                                <i class="fa fa-shopping-bag"></i>
                                            </span>
                                            <div class="shopcart-inner">
                                                <p class="text-shopping-cart">
                                                    My cart
                                                </p>
                                                <span class="total-shopping-cart cart-total-full">
                                                    <span class="items_cart">{{ Cart::content()->count() }}</span><span
                                                        class="items_cart2">
                                                        item(s)</span>
                                                </span>
                                            </div>
                                        </div>
                                    </a>
                                    <ul class="dropdown-menu pull-right shoppingcart-box" role="menu">
                                        <li>
                                            @php
                                            $content=Cart::content();
                                            @endphp
                                            <table class="table table-striped">
                                                <tbody>
                                                    @php

                                                    $total = 0;
                                                    @endphp
                                                    @foreach ($content as $row)
                                                    <tr>
                                                        <td class="text-center" style="width:70px">
                                                            <a href="{{route('single.product',$row->options->slug)}}">
                                                                <img src="{{asset('storage/'.$row->options->img_url)}}"
                                                                    style="width:70px" alt="Yutculpa ullamcon"
                                                                    title="Yutculpa ullamco" class="preview">
                                                            </a>
                                                        </td>
                                                        <td class="text-left"> <a class="cart_product_name"
                                                                href="{{route('single.product',$row->options->slug)}}"><?php echo $row->name; ?></a>
                                                        </td>
                                                        <td class="text-center">x<?php echo $row->qty; ?></td>
                                                        <td class="text-center"><?php echo $row->price; ?></td>
                                                        <td class="text-right">
                                                            <a href="#" class="fa fa-edit"></a>
                                                        </td>
                                                        <td class="text-right">
                                                            <a href="{{route('remove.product',$row->rowId )}}"
                                                                class="fa fa-times fa-delete"></a>
                                                        </td>
                                                    </tr>
                                                    @php
                                                    $total += $row->subtotal;
                                                    @endphp
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </li>
                                        <li>
                                            <div>
                                                <table class="table table-bordered">
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-left"><strong>Sub-Total</strong>

                                                            </td>
                                                            <td class="text-right">${{$total}}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <p class="text-right"> <a class="btn view-cart"
                                                        href="{{ route('shopping.cart') }}"><i
                                                            class="fa fa-shopping-cart"></i>View
                                                        Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart"
                                                        href="{{ route('checkout') }}"><i
                                                            class="fa fa-share"></i>Checkout</a>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--//cart-->
                        </div>
                    </div>
                </div>
            </div>
            <!-- //Header center -->
            <!-- Header Bottom -->
            <div class="header-bottom hidden-compact">
                <div class="container">
                    <div class="row">
                        <div class="bottom1 menu-vertical col-lg-2 col-md-3">
                            <!-- Secondary menu -->
                            @include('front.partials.category')
                            <!-- // end Secondary menu -->
                        </div>
                        <!-- Main menu -->
                        <div class="main-menu col-lg-10 col-md-9">
                            <div class="responsive so-megamenu megamenu-style-dev">
                                <nav class="navbar-default">
                                    <div class=" container-megamenu  horizontal open ">
                                        <div class="navbar-header">
                                            <button type="button" id="show-megamenu" data-toggle="collapse"
                                                class="navbar-toggle">
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                                <span class="icon-bar"></span>
                                            </button>
                                        </div>
                                        <div class="megamenu-wrapper">
                                            <span id="remove-megamenu" class="fa fa-times"></span>
                                            <div class="megamenu-pattern">
                                                <div class="container-mega">
                                                    <ul class="megamenu" data-transition="slide"
                                                        data-animationtime="250">
                                                        <li class="home hover">
                                                            <a href="{{ route('front') }}">Home</a>
                                                        </li>
                                                        <li class="">
                                                            <a href="{{ route('shop.page') }}">Shop Page</a>
                                                        </li>
                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="{{ route('new.arrival') }}" class="clearfix">
                                                                <strong>New Arrival</strong>
                                                                <img class="label-hot"
                                                                    src="{{ asset('front') }}/image/catalog/menu/new-icon.png"
                                                                    alt="icon items">
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="{{ route('best.seller') }}" class="clearfix">
                                                                <strong>Best Sellers</strong>
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="{{ route('feature.product') }}" class="clearfix">
                                                                <strong>Featured Products</strong>
                                                                <span class="label"></span>
                                                            </a>
                                                        </li>
                                                        <li class="">
                                                            <p class="close-menu"></p>
                                                            <a href="{{ route('offer.zone') }}" class="clearfix">
                                                                <strong>Offer Zone</strong>
                                                                <span class="label"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </div>
                        <!-- //end Main menu -->
                    </div>
                </div>
            </div>
        </header>
        <!-- //Header Container  -->
        <!-- Main Container  -->

        @yield('front-content')

        <!-- //Main Container -->
        <!-- Footer Container -->
        <footer class="footer-container typefooter-4">
            <!-- Footer Top Container -->
            <section class="footer-top">
                <div class="container">
                    <div class="module newsletter-footer4">
                        <div class="newsletter" style="width:100%; background-color: #fff; ">
                            <div class="title-block">
                                <div class="page-heading font-title">Sign up for newsletter & get 30% off</div>
                                <div class="promotext">Trade Alert - Delivering the latest product trends and industry
                                    news straight to your inbox.</div>
                            </div>
                            <div class="block_content">
                                <form method="post" id="signup" name="signup"
                                    class="form-group form-inline signup send-mail">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input type="email" placeholder="Your email address..." value=""
                                                class="form-control" id="txtemail" name="txtemail" size="55">
                                        </div>
                                        <div class="subcribe">
                                            <button class="btn btn-primary btn-default font-title" type="submit"
                                                onclick="return subscribe_newsletter();" name="submit">
                                                Subscribe
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!--/.modcontent-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Footer Top Container -->
            <section class="footer-middle ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col_4202  col-style">
                            <div class="infos-footer box-footer">
                                <div class="module">
                                    <h3 class="modtitle">Contact Info</h3>
                                    <ul>
                                        <li class="adres"><i class="fa fa-map-marker">1</i>Address : 17/1, Monipuripara,
                                            Sangshad Avenue, Dhaka-1215 Bangladesh
                                        </li>
                                        <li class="mail"><i class="fa fa-envelope">2</i>Email : info.gauwal@gmail.com
                                        </li>
                                        <li class="phone"><i class="fa fa-phone">3</i>Hotline : +880 1977-722531</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col_bko7  col-style">
                            <div class="box-account box-footer">
                                <div class="module clearfix">
                                    <h3 class="modtitle">My Account</h3>
                                    <div class="modcontent">
                                        <ul class="menu">
                                            <li><a href="#">Brands</a>
                                            </li>
                                            <li><a href="#">Gift Certificates</a>
                                            </li>
                                            <li><a href="#">Affiliates</a>
                                            </li>
                                            <li><a href="#">Specials</a>
                                            </li>
                                            <li><a href="{{ route('faq') }}">FAQs</a>
                                            </li>
                                            <li><a href="#">Custom Link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col_6urb  col-style">
                            <div class="box-information box-footer">
                                <div class="module clearfix">
                                    <h3 class="modtitle">Information</h3>
                                    <div class="modcontent">
                                        <ul class="menu">
                                            <li><a href="{{ route('about') }}">About Us</a>
                                            </li>
                                            <li><a href="{{ route('faq') }}">FAQ</a>
                                            </li>
                                            <li><a href="{{ route('about') }}">Warranty And Services</a>
                                            </li>
                                            <li><a href="{{ route('contact') }}">Support 24/7 page</a>
                                            </li>
                                            <li><a href="#">Product Registration</a>
                                            </li>
                                            <li><a href="{{ route('contact') }}">Product Support</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col_3d8g  col-style">
                            <div class="box-service box-footer">
                                <div class="module clearfix">
                                    <h3 class="modtitle">Services</h3>
                                    <div class="modcontent">
                                        <ul class="menu">
                                            <li><a href="{{ route('contact') }}">Contact Us</a>
                                            </li>
                                            <li><a href="{{ route('contact') }}">Returns</a>
                                            </li>
                                            <li><a href="{{ route('contact') }}">Support</a>
                                            </li>
                                            <li><a href="{{ route('contact') }}">Site Map</a>
                                            </li>
                                            <li><a href="{{ route('contact') }}">Customer Service</a>
                                            </li>
                                            <li><a href="{{ route('contact') }}">Custom Link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row middle2 ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-style">

                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="socials-w module">
                                <h3 class="modtitle">Follow Us:</h3>
                                <ul class="socials">
                                    <li class="facebook"><a class="_blank" href="#" target="_blank"><i
                                                class="fa fa-facebook"></i></a>
                                    </li>
                                    <li class="twitter"><a class="_blank" href="#" target="_blank"><i
                                                class="fa fa-twitter"></i></a>
                                    </li>
                                    <li class="google_plus"><a class="_blank" href="#" target="_blank"><i
                                                class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li class="pinterest"><a class="_blank" href="#" target="_blank"><i
                                                class="fa fa-pinterest"></i></a>
                                    </li>
                                    <li class="youtube"><a class="_blank" href="#" target="_blank"><i
                                                class="fa fa-youtube-play"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Footer Bottom Container -->
            <section class="footer-bottom ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-sm-12 col-xs-12 copyright-w">
                            <div class="copyright">Gauwal © 2021. All Rights Reserved. Developed by <a href="#"
                                    target="_blank">Mohammad Ali</a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-12 col-xs-12 payment-w">
                            <img src="{{ asset('front') }}/image/catalog/demo/payment/payment-4.png" alt="imgpayment">
                        </div>
                    </div>
                </div>
            </section>
            <!-- /Footer Bottom Container -->
            <!--Back To Top-->
            <div class="back-to-top"><i class="fa fa-angle-up"></i></div>
        </footer>
        <!-- //end Footer Container -->
    </div>
    <!-- Include Libs & Plugins=========== -->
    <script type="text/javascript" src="{{ asset('front') }}/js/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="{{ asset('front') }}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('front') }}/js/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="{{ asset('front') }}/js/themejs/libs.js"></script>
    <script type="text/javascript" src="{{ asset('front') }}/js/unveil/jquery.unveil.js"></script>
    <script type="text/javascript" src="{{ asset('front') }}/js/countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="{{ asset('front') }}/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
    <script type="text/javascript" src="{{ asset('front') }}/js/datetimepicker/moment.js"></script>
    <script type="text/javascript" src="{{ asset('front') }}/js/datetimepicker/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript" src="{{ asset('front') }}/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ asset('front') }}/js/modernizr/modernizr-2.6.2.min.js"></script>
    <script type="text/javascript" src="{{ asset('front') }}/js/minicolors/jquery.miniColors.min.js"></script>
    <!-- Theme files============ -->
    <script type="text/javascript" src="{{ asset('front') }}/js/themejs/application.js"></script>
    <script type="text/javascript" src="{{ asset('front') }}/js/themejs/homepage.js"></script>
    <script type="text/javascript" src="{{ asset('front') }}/js/themejs/toppanel.js"></script>
    <script type="text/javascript" src="{{ asset('front') }}/js/themejs/so_megamenu.js"></script>
    <!-- <script type="text/javascript" src="{{ asset('front') }}/js/themejs/addtocart.js"></script> -->
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>





    <!-- Ajax search code -->

    <script type="application/javascript">
        $(document).ready(function(){
			$('#txtSearch').on('keyup', function(){
				var text = $('#txtSearch').val();
			
				$.ajax({
					type:"GET",
					url: '/search-results',
					data: {text: text},
					success: function(data) {
						console.log(data);
						$('#result').html(data);
					}
				});
			});
		  });
    </script>



    {!! Toastr::message() !!}


    @stack('js')
</body>

</html>