@extends('layouts.front-app')

@section('front-content')
<div id="content" class="">
    <div class="so-page-builder">
        <div class="container page-builder-ltr">
            <div class="row row_po9u  box-content1 ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_aa3q  col-style">
                    <div class="top-tags container">
                        <ul class="">
                            <li>
                                <h2>Go Quickly to:</h2>
                            </li>
                            <li><a
                                    href="/ytc_templates/opencart3/so3_emarket/index.php?route=product/category&path=34">Fashions,</a>
                            </li>
                            <li><a
                                    href="/ytc_templates/opencart3/so3_emarket/index.php?route=product/category&path=25">Electronic,</a>
                            </li>
                            <li><a
                                    href="/ytc_templates/opencart3/so3_emarket/index.php?route=product/category&path=20">Furniture,</a>
                            </li>
                            <li><a
                                    href="/ytc_templates/opencart3/so3_emarket/index.php?route=product/category&path=24">Accessories,</a>
                            </li>
                            <li><a
                                    href="/ytc_templates/opencart3/so3_emarket/index.php?route=product/category&path=57">Shoes,</a>
                            </li>
                            <li><a
                                    href="/ytc_templates/opencart3/so3_emarket/index.php?route=product/category&path=33">Smartphone,</a>
                            </li>
                            <li><a
                                    href="/ytc_templates/opencart3/so3_emarket/index.php?route=product/category&path=76">Cellphone,</a>
                            </li>
                            <li><a href="#">Cameras,</a></li>
                            <li><a href="#">Latops,</a></li>
                            <li><a href="#">Tablets,</a></li>
                            <li><a href="#">Makeup,</a></li>
                            <li><a href="#">iPhone</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_6s4m  slideshow-full">
                    <div class="module sohomepage-slider ">
                        <div class="modcontent">
                            <div id="sohomepage-slider1">
                                <div class="so-homeslider sohomeslider-inner-1">
                                    <div class="item">
                                        <a href="#" title="slide 1" target="_self">
                                            <img class="lazyload" data-sizes="auto"
                                                src="{{ asset('front') }}/img/slide1-1680x500.jpg"
                                                data-src="{{ asset('front') }}/img/slide1-1680x500.jpg" alt="slide 1" />
                                        </a>
                                        <div class="sohomeslider-description">
                                            <h2></h2>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#" title="slide 2" target="_self">
                                            <img class="lazyload" data-sizes="auto"
                                                src="{{ asset('front') }}/img/slide2-1680x500.jpg"
                                                data-src="{{ asset('front') }}/img/slide2-1680x500.jpg" alt="slide 2" />
                                        </a>
                                        <div class="sohomeslider-description">
                                            <h2></h2>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <a href="#" title="slide 3" target="_self">
                                            <img class="lazyload" data-sizes="auto"
                                                src="{{ asset('front') }}/img/slide3-1680x500.jpg"
                                                data-src="{{ asset('front') }}/img/slide3-1680x500.jpg" alt="slide 3" />
                                        </a>
                                        <div class="sohomeslider-description">
                                            <h2></h2>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    var total_item = 3 ;
                              $(".sohomeslider-inner-1").owlCarousel2({
                                  animateOut: 'fadeOut',
                                  animateIn: 'fadeIn',
                                  autoplay: true,
                                  autoplayTimeout: 5000,
                                  autoplaySpeed:  1000,
                                  smartSpeed: 500,
                                  autoplayHoverPause: true,
                                  startPosition: 0,
                                  mouseDrag:  true,
                                  touchDrag: true,
                                  dots: false,
                                  autoWidth: false,
                                  dotClass: "owl2-dot",
                                  dotsClass: "owl2-dots",
                                  loop: false,
                                  navText: ["Next", "Prev"],
                                  navClass: ["owl2-prev", "owl2-next"],
                                  responsive: {
                                  0:{ items: 1,
                                    nav: total_item <= 1 ? false : ((true ) ? true: false),
                                  },
                                  480:{ items: 1,
                                    nav: total_item <= 1 ? false : ((true ) ? true: false),
                                  },
                                  768:{ items: 1,
                                    nav: total_item <= 1 ? false : ((true ) ? true: false),
                                  },
                                  992:{ items: 1,
                                    nav: total_item <= 1 ? false : ((true ) ? true: false),
                                  },
                                  1200:{ items: 1,
                                    nav: total_item <= 1 ? false : ((true ) ? true: false),
                                  }
                                },
                              });
                                </script>
                            </div>
                        </div>
                        <!--/.modcontent-->
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_pfg8  col-style">
                    <div class="block-policy4">
                        <div class="inner">
                            <div class="policy policy1"><a title="free shipping on all orders" href="#"><span><i
                                            class="fa fa-truck"></i>Free Shipping worldwide</span></a></div>
                            <div class="policy policy2"><a title="money back guarantee" href="#"><span><i
                                            class="fa fa-usd"></i>money back guarantee</span></a></div>
                            <div class="policy policy3"><a title="LOWEST PRICE GUARANTEE" href="#"><span><i
                                            class="fa fa-calendar"></i>LOWEST PRICE GUARANTEE</span></a></div>
                            <div class="policy policy4"><a title="online support 24/24" href="#"><span><i
                                            class="fa fa-umbrella"></i>online support 24/24</span></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_og38  col-style">
                </div>
            </div>
        </div>
        <div class="container page-builder-ltr">
            <div class="row row_wpmy  box-content2 ">
                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 col_ego2  box-left">
                    <script>
                        //<![CDATA[
                     	var listdeal1 = [];
                     //]]>
                    </script>
                    <div class="module so-deals-ltr deals-layout4">
                        <h3 class="modtitle">
                            <a
                                href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/special"><span>Deals
                                    of the days</span></a>
                        </h3>
                        <div class="modcontent">
                            <div id="so_deals_122235103301062021172942"
                                class="so-deal clearfix preset00-1 preset01-1 preset02-1 preset03-1 preset04-1  button-type1  style2">
                                <div class="products-list  extraslider-inner" data-effect="none">
                                    <div class="item product-layout product-grid2">
                                        <div class="product-thumb transition product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container">
                                                    <div class="image">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=96"
                                                            target="_self">
                                                            <img src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/10-330x330.jpg"
                                                                alt="Doenpuis consuat" class="img-responsive">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="box-label">
                                                    <span class="label label-sale">
                                                        -17%
                                                    </span>
                                                </div>
                                                <div class="so-quickview">
                                                    <a class="hidden" data-product='96'
                                                        href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=96"
                                                        target="_self"></a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <h4><a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=96"
                                                            target="_self" title="Doenpuis consuat">Doenpuis
                                                            consuat</a></h4>
                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                        sed do eiusmod tempor incididunt ut labore..</p>
                                                    <p class="price">
                                                        <span class="price-new">$50.00</span>
                                                        <span class="price-old">$60.00</span>
                                                    </p>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('96');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button class="btn-button wishlist" type="button"
                                                            title="Add to Wish List" onclick="wishlist.add('96');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button class="btn-button compare" type="button"
                                                            title="Compare this Product" onclick="compare.add('96');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                                <div class="item-time-w">
                                                    <div class="item-time">
                                                        <div class="item-timer product_time_96"></div>
                                                        <script type="text/javascript">
                                                            //<![CDATA[
                                                listdeal1.push('product_time_96|2021/11/03 00:00:00')
                                                //]]>
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item product-layout product-grid2">
                                        <div class="product-thumb transition product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container">
                                                    <div class="image">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=91"
                                                            target="_self">
                                                            <img src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/8-330x330.jpg"
                                                                alt="Mapicola incididuv" class="img-responsive">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="box-label">
                                                    <span class="label label-sale">
                                                        -12%
                                                    </span>
                                                </div>
                                                <div class="so-quickview">
                                                    <a class="hidden" data-product='91'
                                                        href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=91"
                                                        target="_self"></a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <h4><a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=91"
                                                            target="_self" title="Mapicola incididuv">Mapicola
                                                            incididuv</a></h4>
                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                        sed do eiusmod tempor incididunt ut labore..</p>
                                                    <p class="price">
                                                        <span class="price-new">$90.00</span>
                                                        <span class="price-old">$102.00</span>
                                                    </p>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('91');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button class="btn-button wishlist" type="button"
                                                            title="Add to Wish List" onclick="wishlist.add('91');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button class="btn-button compare" type="button"
                                                            title="Compare this Product" onclick="compare.add('91');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                                <div class="item-time-w">
                                                    <div class="item-time">
                                                        <div class="item-timer product_time_91"></div>
                                                        <script type="text/javascript">
                                                            //<![CDATA[
                                                listdeal1.push('product_time_91|2021/06/16 00:00:00')
                                                //]]>
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item product-layout product-grid2">
                                        <div class="product-thumb transition product-item-container">
                                            <div class="left-block">
                                                <div class="product-image-container">
                                                    <div class="image">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=101"
                                                            target="_self">
                                                            <img src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/14-330x330.jpg"
                                                                alt="Corem ipsum dolor" class="img-responsive">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="box-label">
                                                    <span class="label label-sale">
                                                        -45%
                                                    </span>
                                                </div>
                                                <div class="so-quickview">
                                                    <a class="hidden" data-product='101'
                                                        href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=101"
                                                        target="_self"></a>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <div class="caption">
                                                    <h4><a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=101"
                                                            target="_self" title="Corem ipsum dolor">Corem ipsum
                                                            dolor</a></h4>
                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i
                                                                class="fa fa-star fa-stack-2x"></i><i
                                                                class="fa fa-star-o fa-stack-2x"></i></span>
                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                                        sed do eiusmod tempor incididunt ut labore..</p>
                                                    <p class="price">
                                                        <span class="price-new">$90.00</span>
                                                        <span class="price-old">$165.00</span>
                                                    </p>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('101');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button class="btn-button wishlist" type="button"
                                                            title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button class="btn-button compare" type="button"
                                                            title="Compare this Product"
                                                            onclick="compare.add('101');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                                <div class="item-time-w">
                                                    <div class="item-time">
                                                        <div class="item-timer product_time_101"></div>
                                                        <script type="text/javascript">
                                                            //<![CDATA[
                                                listdeal1.push('product_time_101|2021/11/04 00:00:00')
                                                //]]>
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                //<![CDATA[
                           jQuery(document).ready(function ($) {  ;
                           (function (element) {
                           	var $element = $(element),
                           			$extraslider = $('.extraslider-inner', $element),
                           			$featureslider = $('.product-feature', $element),
                           			_delay = 500,
                           			_duration = 800,
                           			_effect = 'none';
                           
                           	$extraslider.on('initialized.owl.carousel2', function () {
                           		var $item_active = $('.extraslider-inner .owl2-item.active', $element);
                           		if ($item_active.length > 1 && _effect != 'none') {
                           			_getAnimate($item_active);
                           		}
                           		else {
                           			var $item = $('.extraslider-inner .owl2-item', $element);
                           			$item.css({'opacity': 1, 'filter': 'alpha(opacity = 100)'});
                           		}
                           					$('.extraslider-inner .owl2-dots', $element).insertAfter($('.extraslider-inner .owl2-prev', $element));
                           			$('.extraslider-inner .owl2-controls', $element).insertBefore($extraslider).addClass('extraslider');
                           			});
                           
                           	$extraslider.owlCarousel2({
                           		rtl: false,
                           		margin: 0,
                           		slideBy: 1,
                           		autoplay: false,
                           		autoplayHoverPause: 0,
                           		autoplayTimeout: 5000,
                           		autoplaySpeed: 1000,
                           		startPosition: 0,
                           		mouseDrag: true,
                           		touchDrag: true,
                           		autoWidth: false,
                           		responsive: {
                           			0: 	{ items: 1 } ,
                           			480: { items: 1 },
                           			768: { items: 1 },
                           			992: { items: 1 },
                           			1200: {items: 1 }
                           		},
                           		dotClass: 'owl2-dot',
                           		dotsClass: 'owl2-dots',
                           		dots: false,
                           		dotsSpeed: 500,
                           		nav: true,
                           		loop: true,
                           		navSpeed: 500,
                           		navText: ['&#171;', '&#187;'],
                           		navClass: ['owl2-prev', 'owl2-next']
                           	});
                           
                           	$extraslider.on('translated.owl.carousel2', function (e) {
                           		var $item_active = $('.extraslider-inner .owl2-item.active', $element);
                           		var $item = $('.extraslider-inner .owl2-item', $element);
                           
                           		_UngetAnimate($item);
                           
                           		if ($item_active.length > 1 && _effect != 'none') {
                           			_getAnimate($item_active);
                           		} else {
                           			$item.css({'opacity': 1, 'filter': 'alpha(opacity = 100)'});
                           		}
                           	});
                           	/*feature product*/
                           	$featureslider.on('initialized.owl.carousel2', function () {
                           		var $item_active = $('.product-feature .owl2-item.active', $element);
                           		if ($item_active.length > 1 && _effect != 'none') {
                           			_getAnimate($item_active);
                           		}
                           		else {
                           			var $item = $('.owl2-item', $element);
                           			$item.css({'opacity': 1, 'filter': 'alpha(opacity = 100)'});
                           		}
                           					$('.product-feature .owl2-dots', $element).insertAfter($('.product-feature .owl2-prev', $element));
                           			$('.product-feature .owl2-controls', $element).insertBefore($featureslider).addClass('featureslider');	
                           			});
                           
                           	$featureslider.owlCarousel2({
                           		rtl: false,
                           		margin: 0,
                           		slideBy: 1,
                           		autoplay: false,
                           		autoplayHoverPause: 0,
                           		autoplayTimeout: 5000,
                           		autoplaySpeed: 1000,
                           		startPosition: 0,
                           		mouseDrag: true,
                           		touchDrag: true,
                           		autoWidth: false,
                           		responsive: {
                           			0: 	{ items: 1 } ,
                           			480: { items: 1 },
                           			768: { items: 1 },
                           			992: { items: 1 },
                           			1200: {items: 1}
                           		},
                           		dotClass: 'owl2-dot',
                           			dotsClass: 'owl2-dots',
                           		dots: false,
                           		dotsSpeed: 500,
                           		nav: true,
                           		loop: true,
                           		navSpeed: 500,
                           		navText: ['&#171;', '&#187;'],
                           		navClass: ['owl2-prev', 'owl2-next']
                           	});
                           
                           	$featureslider.on('translated.owl.carousel2', function (e) {
                           		var $item_active = $('.product-feature .owl2-item.active', $element);
                           		var $item = $('.product-feature .owl2-item', $element);
                           
                           		_UngetAnimate($item);
                           
                           		if ($item_active.length > 1 && _effect != 'none') {
                           			_getAnimate($item_active);
                           		} else {
                           			$item.css({'opacity': 1, 'filter': 'alpha(opacity = 100)'});
                           		}
                           	});
                           	
                           	function _getAnimate($el) {
                           		if (_effect == 'none') return;
                           		$extraslider.removeClass('extra-animate');
                           		$el.each(function (i) {
                           			var $_el = $(this);
                           			$(this).css({
                           				'-webkit-animation': _effect + ' ' + _duration + "ms ease both",
                           				'-moz-animation': _effect + ' ' + _duration + "ms ease both",
                           				'-o-animation': _effect + ' ' + _duration + "ms ease both",
                           				'animation': _effect + ' ' + _duration + "ms ease both",
                           				'-webkit-animation-delay': +i * _delay + 'ms',
                           				'-moz-animation-delay': +i * _delay + 'ms',
                           				'-o-animation-delay': +i * _delay + 'ms',
                           				'animation-delay': +i * _delay + 'ms',
                           				'opacity': 1
                           			}).animate({
                           				opacity: 1
                           			});
                           
                           			if (i == $el.size() - 1) {
                           				$extraslider.addClass("extra-animate");
                           			}
                           		});
                           	}
                           
                           	function _UngetAnimate($el) {
                           		$el.each(function (i) {
                           			$(this).css({
                           				'animation': '',
                           				'-webkit-animation': '',
                           				'-moz-animation': '',
                           				'-o-animation': '',
                           				'opacity': 1
                           			});
                           		});
                           	}
                           	data = new Date(2013, 10, 26, 12, 00, 00);
                           	function CountDown(date, id) {
                           		dateNow = new Date();
                           		amount = date.getTime() - dateNow.getTime();
                           		if (amount < 0 && $('#' + id).length) {
                           			$('.' + id).html("Now!");
                           		} else {
                           			days = 0;
                           			hours = 0;
                           			mins = 0;
                           			secs = 0;
                           			out = "";
                           			amount = Math.floor(amount / 1000);
                           			days = Math.floor(amount / 86400);
                           			amount = amount % 86400;
                           			hours = Math.floor(amount / 3600);
                           			amount = amount % 3600;
                           			mins = Math.floor(amount / 60);
                           			amount = amount % 60;
                           			secs = Math.floor(amount);
                           
                           			out += "<div class='time-item time-day'>" + "<div class='num-time'>" + days + "</div>" + " <div class='name-time'>" + ((days == 1) ? "Day" : "Days") + "</div>" + "</div> ";
                           			out += "<div class='time-item time-hour'>" + "<div class='num-time'>" + hours + "</div>" + " <div class='name-time'>" + ((hours == 1) ? "Hour" : "Hours") + "</div>" + "</div> ";
                           			out += "<div class='time-item time-min' >" + "<div class='num-time'>" + mins + "</div>" + " <div class='name-time'>" + ((mins == 1) ? "Min" : "Mins") + "</div>" + "</div> ";
                           			out += "<div class='time-item time-sec' >" + "<div class='num-time'>" + secs + "</div>" + " <div class='name-time'>" + ((secs == 1) ? "Sec" : "Secs") + "</div>" + "</div> ";
                           			out = out.substr(0, out.length - 2);
                           			
                           
                           			$('.' + id).html(out);
                           
                           			setTimeout(function () {
                           				CountDown(date, id);
                           			}, 1000);
                           		}
                           	}
                           	if (listdeal1.length > 0) {
                           		for (var i = 0; i < listdeal1.length; i++) {
                           			var arr = listdeal1[i].split("|");
                           			if (arr[1].length) {
                           				var data = new Date(arr[1]);
                           				CountDown(data, arr[0]);
                           			}
                           		}
                           	}
                           	})('#so_deals_122235103301062021172942');
                           });
                           //]]>
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 col_mokk  extra-right">
                    <!-- default Grid  -->
                    <div class="module so-extraslider-ltr ">
                        <h3 class="modtitle">
                            <a
                                href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=custom/featured"><span>Featured
                                    products</span></a>
                        </h3>
                        <div class="modcontent">
                            <div id="so_extra_slider_18074743311609954182"
                                class="so-extraslider button-type2 preset00-4 preset01-4 preset02-3 preset03-2 preset04-1 button-type2">
                                <!-- Begin extraslider-inner -->
                                <div class="extraslider-inner products-list " data-effect="none">
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=103"
                                                            target="_self" title="Ullamco occaeca ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/17-270x270.jpg"
                                                                alt="Ullamco occaeca" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='103'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=103"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=103"
                                                                target="_self" title="Ullamco occaeca ">
                                                                Ullamco occaeca
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">
                                                                $66.00
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('103');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('103');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product"
                                                            onclick="compare.add('103');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=51"
                                                            target="_self" title="Ground round enim ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/2-270x270.jpg"
                                                                alt="Ground round enim" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='51'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=51"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=51"
                                                                target="_self" title="Ground round enim ">
                                                                Ground round enim
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">
                                                                $76.00
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('51');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('51');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product" onclick="compare.add('51');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=91"
                                                            target="_self" title="Mapicola incididuv ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/8-270x270.jpg"
                                                                alt="Mapicola incididuv" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label-product label-sale"> -12% </span>
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='91'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=91"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=91"
                                                                target="_self" title="Mapicola incididuv ">
                                                                Mapicola incididuv
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">$90.00 </span>&nbsp;&nbsp;
                                                            <span class="price-old">$102.00 </span>&nbsp;
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('91');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('91');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product" onclick="compare.add('91');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=98"
                                                            target="_self" title="Rumstick shankle ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/9-270x270.jpg"
                                                                alt="Rumstick shankle" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='98'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=98"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=98"
                                                                target="_self" title="Rumstick shankle ">
                                                                Rumstick shankle
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">
                                                                $132.00
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('98');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('98');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product" onclick="compare.add('98');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=84"
                                                            target="_self" title="Benderloin officia ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/1-270x270.jpg"
                                                                alt="Benderloin officia" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='84'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=84"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=84"
                                                                target="_self" title="Benderloin officia ">
                                                                Benderloin officia
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">
                                                                $36.00
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('84');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('84');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product" onclick="compare.add('84');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=101"
                                                            target="_self" title="Corem ipsum dolor ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/14-270x270.jpg"
                                                                alt="Corem ipsum dolor" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label-product label-sale"> -45% </span>
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='101'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=101"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=101"
                                                                target="_self" title="Corem ipsum dolor ">
                                                                Corem ipsum dolor
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">$90.00 </span>&nbsp;&nbsp;
                                                            <span class="price-old">$165.00 </span>&nbsp;
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('101');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product"
                                                            onclick="compare.add('101');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                </div>
                                <!--End extraslider-inner -->
                                <script type="text/javascript">
                                    //<![CDATA[
                              jQuery(document).ready(function ($) {
                              	(function (element) {
                              		var $element = $(element),
                              				$extraslider = $(".extraslider-inner", $element),
                              				_delay = 500 ,
                              				_duration = 800 ,
                              				_effect = 'none ';
                              
                              		$extraslider.on("initialized.owl.carousel2", function () {
                              			var $item_active = $(".owl2-item.active", $element);
                              			if ($item_active.length > 1 && _effect != "none") {
                              				_getAnimate($item_active);
                              			}
                              			else {
                              				var $item = $(".owl2-item", $element);
                              				$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
                              			}
                              			
                              			  
                              				$(".owl2-nav", $element).insertBefore($extraslider);
                              				$(".owl2-controls", $element).insertAfter($extraslider);
                              			
                              		});
                              
                              		$extraslider.owlCarousel2({
                              			rtl: false,
                              			margin: 20,
                              			slideBy: 1,
                              			autoplay: 0,
                              			autoplayHoverPause: 0,
                              			autoplayTimeout: 0 ,
                              			autoplaySpeed: 1000 ,
                              			startPosition: 0 ,
                              			mouseDrag: 1,
                              			touchDrag: 1 ,
                              			autoWidth: false,
                              			responsive: {
                              				0: 	{ items: 1 } ,
                              				480: { items: 2 },
                              				768: { items: 3 },
                              				992: { items: 4 },
                              				//1200: {items: 4},
                              				1200: {items: 3 },
                              				1367: {items: 4}							
                              			},
                              			dotClass: "owl2-dot",
                              			dotsClass: "owl2-dots",
                              			dots: false ,
                              			dotsSpeed:500 ,
                              			nav: true ,
                              			loop: false ,
                              			navSpeed: 500 ,
                              			navText: ["&#139 ", "&#155 "],
                              			navClass: ["owl2-prev", "owl2-next"]
                              
                              		});
                              
                              		$extraslider.on("translate.owl.carousel2", function (e) {
                                      	 
                                      	var $item_active = $(".owl2-item.active", $element);
                                      	_UngetAnimate($item_active);
                                      	_getAnimate($item_active);
                                      });
                                      $extraslider.on("translated.owl.carousel2", function (e) {
                                      	 
                                      	var $item_active = $(".owl2-item.active", $element);
                                      	var $item = $(".owl2-item", $element);
                                      	_UngetAnimate($item);
                                      	if ($item_active.length > 1 && _effect != "none") {
                                      		_getAnimate($item_active);
                                      	} else {
                                      		$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
                                      	}
                                      });
                                      function _getAnimate($el) {
                                      	if (_effect == "none") return;
                                      	//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
                                      	$extraslider.removeClass("extra-animate");
                                      	$el.each(function (i) {
                                      		var $_el = $(this);
                                      		var i= i + 1;
                                      		$(this).css({
                                      			"-webkit-animation": _effect + " " + _duration + "ms ease both",
                                      			"-moz-animation": _effect + " " + _duration + "ms ease both",
                                      			"-o-animation": _effect + " " + _duration + "ms ease both",
                                      			"animation": _effect + " " + _duration + "ms ease both",
                                      			"-webkit-animation-delay": +i * _delay + "ms",
                                      			"-moz-animation-delay": +i * _delay + "ms",
                                      			"-o-animation-delay": +i * _delay + "ms",
                                      			"animation-delay": +i * _delay + "ms",
                                      			
                                      		}).animate({
                                      			
                                      		});
                                      		if (i == $el.size() - 1) {
                                      			$extraslider.addClass("extra-animate");
                                      		}
                                      	});
                                      }
                                      function _UngetAnimate($el) {
                                      	$el.each(function (i) {
                                      		$(this).css({
                                      			"animation": "",
                                      			"-webkit-animation": "",
                                      			"-moz-animation": "",
                                      			"-o-animation": "",
                                      		});
                                      	});
                                      } 
                              	})("#so_extra_slider_18074743311609954182 ");
                              });
                              //]]>
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container page-builder-ltr">
            <div class="row row_7qar  row-style ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_vnrl  col-style">
                    <!--[if lt IE 9]>
                  <div id="so_categories_19332079051609954182" class="so-categories module theme3 custom-slidercates preset01-5 preset02-4 preset03-3 preset04-2 preset05-1 msie lt-ie9">
                     <![endif]-->
                    <!--[if IE 9]>
                     <div id="so_categories_19332079051609954182" class="so-categories module theme3 custom-slidercates preset01-5 preset02-4 preset03-3 preset04-2 preset05-1 msie">
                        <![endif]-->
                    <!--[if gt IE 9]><!-->
                    <div id="so_categories_19332079051609954182"
                        class="so-categories module theme3 custom-slidercates preset01-5 preset02-4 preset03-3 preset04-2 preset05-1">
                        <h3 class="modtitle"><span>Top collections</span></h3>
                        <div class="form-group">
                        </div>
                        <div class="modcontent">
                            <div class="cat-wrap theme3 font-title">
                                <div class="content-box">
                                    <div class="image-cat">
                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=77"
                                            title="Smartphone" target="_self">
                                            <img class="lazyload" data-sizes="auto"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/category/id4-cat1-308x230.jpg"
                                                title="Smartphone" alt="Smartphone" />
                                        </a>
                                    </div>
                                    <div class="cat-content">
                                        <div class="cat-title">
                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=77"
                                                title="Smartphone " target="_self">
                                                Smartphone
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="clr1"></div> -->
                                <div class="content-box">
                                    <div class="image-cat">
                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=78"
                                            title="Fashion" target="_self">
                                            <img class="lazyload" data-sizes="auto"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/category/id4-cat2-308x230.jpg"
                                                title="Fashion" alt="Fashion" />
                                        </a>
                                    </div>
                                    <div class="cat-content">
                                        <div class="cat-title">
                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=78"
                                                title="Fashion " target="_self">
                                                Fashion
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="clr1 clr2"></div> -->
                                <div class="content-box">
                                    <div class="image-cat">
                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=79"
                                            title="Sport bikes" target="_self">
                                            <img class="lazyload" data-sizes="auto"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/category/id4-cat3-308x230.jpg"
                                                title="Sport bikes" alt="Sport bikes" />
                                        </a>
                                    </div>
                                    <div class="cat-content">
                                        <div class="cat-title">
                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=79"
                                                title="Sport bikes " target="_self">
                                                Sport bikes
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="clr1 clr3"></div> -->
                                <div class="content-box">
                                    <div class="image-cat">
                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=80"
                                            title="Furniture & Decor" target="_self">
                                            <img class="lazyload" data-sizes="auto"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/category/id4-cat4-308x230.jpg"
                                                title="Furniture & Decor" alt="Furniture & Decor" />
                                        </a>
                                    </div>
                                    <div class="cat-content">
                                        <div class="cat-title">
                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=80"
                                                title="Furniture & Decor " target="_self">
                                                Furniture &amp; Decor
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="clr1 clr2 clr4"></div> -->
                                <div class="content-box">
                                    <div class="image-cat">
                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=81"
                                            title="Appliances" target="_self">
                                            <img class="lazyload" data-sizes="auto"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/category/id4-cat5-308x230.jpg"
                                                title="Appliances" alt="Appliances" />
                                        </a>
                                    </div>
                                    <div class="cat-content">
                                        <div class="cat-title">
                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=81"
                                                title="Appliances " target="_self">
                                                Appliances
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="clr1 clr5"></div> -->
                                <div class="content-box">
                                    <div class="image-cat">
                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=82"
                                            title="Sine engain" target="_self">
                                            <img class="lazyload" data-sizes="auto"
                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/category/id4-cat2-308x230.jpg"
                                                title="Sine engain" alt="Sine engain" />
                                        </a>
                                    </div>
                                    <div class="cat-content">
                                        <div class="cat-title">
                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=82"
                                                title="Sine engain " target="_self">
                                                Sine engain
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="clr1 clr2 clr3 clr6"></div> -->
                            </div>
                        </div>
                        <div class="form-group">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_4xg8  col-style">
                </div>
            </div>
        </div>
        <div class="container page-builder-ltr">
            <div class="row row_akx2  row-style ">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_0u8f  col-style">
                    <!-- Home 4  -->
                    <div class="module so-extraslider-ltr extra-layout4 cus1">
                        <div class="form-group col-pre">
                            <div class="m-head">The best of smartphone<a href="#">View All</a></div>
                        </div>
                        <div class="modcontent">
                            <div id="so_extra_slider_13749699581609954182"
                                class="so-extraslider button-type2 preset00-6 preset01-3 preset02-2 preset03-2 preset04-1 button-type2">
                                <!-- Begin extraslider-inner -->
                                <div class="extraslider-inner products-list " data-effect="none">
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=104"
                                                            target="_self" title="Ninim spareri magna aliqua ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/19-270x270.jpg"
                                                                alt="Ninim spareri magna aliqua" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='104'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=104"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=104"
                                                                target="_self" title="Ninim spareri magna aliqua ">
                                                                Ninim spareri magna aliqua
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">
                                                                $96.00
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('104');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('104');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product"
                                                            onclick="compare.add('104');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=103"
                                                            target="_self" title="Ullamco occaeca ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/17-270x270.jpg"
                                                                alt="Ullamco occaeca" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='103'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=103"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=103"
                                                                target="_self" title="Ullamco occaeca ">
                                                                Ullamco occaeca
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">
                                                                $66.00
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('103');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('103');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product"
                                                            onclick="compare.add('103');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=102"
                                                            target="_self" title="Pariatur porking ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/18-270x270.jpg"
                                                                alt="Pariatur porking" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='102'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=102"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=102"
                                                                target="_self" title="Pariatur porking ">
                                                                Pariatur porking
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">
                                                                $98.00
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('102');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('102');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product"
                                                            onclick="compare.add('102');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=101"
                                                            target="_self" title="Corem ipsum dolor ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/14-270x270.jpg"
                                                                alt="Corem ipsum dolor" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label-product label-sale"> -45% </span>
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='101'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=101"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=101"
                                                                target="_self" title="Corem ipsum dolor ">
                                                                Corem ipsum dolor
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">$90.00 </span>&nbsp;&nbsp;
                                                            <span class="price-old">$165.00 </span>&nbsp;
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('101');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('101');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product"
                                                            onclick="compare.add('101');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=100"
                                                            target="_self" title="Cupim should ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/16-270x270.jpg"
                                                                alt="Cupim should" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='100'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=100"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=100"
                                                                target="_self" title="Cupim should ">
                                                                Cupim should
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">
                                                                $68.00
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('100');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('100');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product"
                                                            onclick="compare.add('100');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=99"
                                                            target="_self" title="Fatback picanha ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/15-270x270.jpg"
                                                                alt="Fatback picanha" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='99'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=99"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=99"
                                                                target="_self" title="Fatback picanha ">
                                                                Fatback picanha
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">
                                                                $46.00
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('99');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('99');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product" onclick="compare.add('99');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=98"
                                                            target="_self" title="Rumstick shankle ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/9-270x270.jpg"
                                                                alt="Rumstick shankle" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='98'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=98"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=98"
                                                                target="_self" title="Rumstick shankle ">
                                                                Rumstick shankle
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">
                                                                $132.00
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('98');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('98');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product" onclick="compare.add('98');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=97"
                                                            target="_self" title="Proident laborum ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/20-270x270.jpg"
                                                                alt="Proident laborum" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='97'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=97"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=97"
                                                                target="_self" title="Proident laborum ">
                                                                Proident laborum
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">
                                                                $169.00
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('97');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('97');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product" onclick="compare.add('97');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                </div>
                                <!--End extraslider-inner -->
                                <script type="text/javascript">
                                    //<![CDATA[
                                    jQuery(document).ready(function ($) {
                                    	(function (element) {
                                    		var $element = $(element),
                                    				$extraslider = $(".extraslider-inner", $element),
                                    				_delay = 500 ,
                                    				_duration = 800 ,
                                    				_effect = 'none ';
                                    
                                    		$extraslider.on("initialized.owl.carousel2", function () {
                                    			var $item_active = $(".owl2-item.active", $element);
                                    			if ($item_active.length > 1 && _effect != "none") {
                                    				_getAnimate($item_active);
                                    			}
                                    			else {
                                    				var $item = $(".owl2-item", $element);
                                    				$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
                                    			}
                                    			
                                    			  
                                    				$(".owl2-nav", $element).insertBefore($extraslider);
                                    				$(".owl2-controls", $element).insertAfter($extraslider);
                                    			
                                    		});
                                    
                                    		$extraslider.owlCarousel2({
                                    			autoWidth: false,
                                    			rtl: false,
                                    			margin: 19,
                                    			slideBy: 1,
                                    			autoplay: 0,
                                    			autoplayHoverPause: 0,
                                    			autoplayTimeout: 0 ,
                                    			autoplaySpeed: 1000 ,
                                    			startPosition: 0 ,
                                    			mouseDrag: 1,
                                    			touchDrag: 1 ,
                                    			autoWidth: false,
                                    			responsive: {
                                    				0: 	{ items: 1 } ,
                                    				480: { items: 2 },
                                    				768: { items: 2 },
                                    				992: { items: 3 },
                                    				1650: {items: 6},
                                    				1200: {items: 4 },
                                    				1365: {items: 5 },
                                    			},
                                    			dotClass: "owl2-dot",
                                    			dotsClass: "owl2-dots",
                                    			dots: false ,
                                    			dotsSpeed:500 ,
                                    			nav: true ,
                                    			loop: false ,
                                    			navSpeed: 500 ,
                                    			navText: ["&#139 ", "&#155 "],
                                    			navClass: ["owl2-prev", "owl2-next"]
                                    
                                    		});
                                    
                                    		$extraslider.on("translate.owl.carousel2", function (e) {
                                            	 
                                            	var $item_active = $(".owl2-item.active", $element);
                                            	_UngetAnimate($item_active);
                                            	_getAnimate($item_active);
                                            });
                                            $extraslider.on("translated.owl.carousel2", function (e) {
                                            	 
                                            	var $item_active = $(".owl2-item.active", $element);
                                            	var $item = $(".owl2-item", $element);
                                            	_UngetAnimate($item);
                                            	if ($item_active.length > 1 && _effect != "none") {
                                            		_getAnimate($item_active);
                                            	} else {
                                            		$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
                                            	}
                                            });
                                            function _getAnimate($el) {
                                            	if (_effect == "none") return;
                                            	//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
                                            	$extraslider.removeClass("extra-animate");
                                            	$el.each(function (i) {
                                            		var $_el = $(this);
                                            		var i= i + 1;
                                            		$(this).css({
                                            			"-webkit-animation": _effect + " " + _duration + "ms ease both",
                                            			"-moz-animation": _effect + " " + _duration + "ms ease both",
                                            			"-o-animation": _effect + " " + _duration + "ms ease both",
                                            			"animation": _effect + " " + _duration + "ms ease both",
                                            			"-webkit-animation-delay": +i * _delay + "ms",
                                            			"-moz-animation-delay": +i * _delay + "ms",
                                            			"-o-animation-delay": +i * _delay + "ms",
                                            			"animation-delay": +i * _delay + "ms",
                                            			
                                            		}).animate({
                                            			
                                            		});
                                            		if (i == $el.size() - 1) {
                                            			$extraslider.addClass("extra-animate");
                                            		}
                                            	});
                                            }
                                            function _UngetAnimate($el) {
                                            	$el.each(function (i) {
                                            		$(this).css({
                                            			"animation": "",
                                            			"-webkit-animation": "",
                                            			"-moz-animation": "",
                                            			"-o-animation": "",
                                            		});
                                            	});
                                            } 
                                    	})("#so_extra_slider_13749699581609954182 ");
                                    });
                                    //]]>
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_llqj  col-style">
                    <!-- Home 4  -->
                    <div class="module so-extraslider-ltr extra-layout4 cus2">
                        <div class="form-group col-pre">
                            <div class="m-head">Fashion & Jewelry<a href="#">View All</a></div>
                        </div>
                        <div class="modcontent">
                            <div id="so_extra_slider_15402129361609954183"
                                class="so-extraslider button-type2 preset00-6 preset01-3 preset02-2 preset03-2 preset04-1 button-type2">
                                <!-- Begin extraslider-inner -->
                                <div class="extraslider-inner products-list " data-effect="none">
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=51"
                                                            target="_self" title="Ground round enim ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/2-270x270.jpg"
                                                                alt="Ground round enim" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='51'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=51"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=51"
                                                                target="_self" title="Ground round enim ">
                                                                Ground round enim
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">
                                                                $76.00
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('51');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('51');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product" onclick="compare.add('51');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=52"
                                                            target="_self" title="Ercitation incididunt ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/12-270x270.jpg"
                                                                alt="Ercitation incididunt" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='52'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=52"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=52"
                                                                target="_self" title="Ercitation incididunt ">
                                                                Ercitation incididunt
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">
                                                                $45.00
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('52');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('52');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product" onclick="compare.add('52');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=66"
                                                            target="_self" title="Jalapeno dolore ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/5-270x270.jpg"
                                                                alt="Jalapeno dolore" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='66'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=66"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=66"
                                                                target="_self" title="Jalapeno dolore ">
                                                                Jalapeno dolore
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">
                                                                $100.00
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('66');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('66');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product" onclick="compare.add('66');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=82"
                                                            target="_self" title="Hofficia chicken ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/3-270x270.jpg"
                                                                alt="Hofficia chicken" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='82'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=82"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=82"
                                                                target="_self" title="Hofficia chicken ">
                                                                Hofficia chicken
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">
                                                                $100.00
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('82');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('82');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product" onclick="compare.add('82');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=86"
                                                            target="_self" title="Drutick lanaeger ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/11-270x270.jpg"
                                                                alt="Drutick lanaeger" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='86'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=86"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=86"
                                                                target="_self" title="Drutick lanaeger ">
                                                                Drutick lanaeger
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">
                                                                $64.00
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('86');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('86');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product" onclick="compare.add('86');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=91"
                                                            target="_self" title="Mapicola incididuv ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/8-270x270.jpg"
                                                                alt="Mapicola incididuv" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label-product label-sale"> -12% </span>
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='91'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=91"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=91"
                                                                target="_self" title="Mapicola incididuv ">
                                                                Mapicola incididuv
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">$90.00 </span>&nbsp;&nbsp;
                                                            <span class="price-old">$102.00 </span>&nbsp;
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('91');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('91');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product" onclick="compare.add('91');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=95"
                                                            target="_self" title="Lommodo quiutvenia ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/7-270x270.jpg"
                                                                alt="Lommodo quiutvenia" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='95'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=95"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=95"
                                                                target="_self" title="Lommodo quiutvenia ">
                                                                Lommodo quiutvenia
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">
                                                                $59.00
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('95');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('95');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product" onclick="compare.add('95');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1 ">
                                            <div class="product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container 	">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=96"
                                                            target="_self" title="Doenpuis consuat ">
                                                            <img data-sizes="auto"
                                                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                                data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/demo/product/index2/10-270x270.jpg"
                                                                alt="Doenpuis consuat" class="lazyload">
                                                        </a>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label-product label-sale"> -17% </span>
                                                    </div>
                                                    <div class="so-quickview">
                                                        <a class="hidden" data-product='96'
                                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=96"
                                                            target="_self"></a>
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4>
                                                            <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/product&amp;product_id=96"
                                                                target="_self" title="Doenpuis consuat ">
                                                                Doenpuis consuat
                                                            </a>
                                                        </h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">$50.00 </span>&nbsp;&nbsp;
                                                            <span class="price-old">$60.00 </span>&nbsp;
                                                        </div>
                                                    </div>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button"
                                                            onclick="cart.add('96');"><i
                                                                class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span></button>
                                                        <button type="button" class="wishlist btn-button"
                                                            title="Add to Wish List" onclick="wishlist.add('96');"><i
                                                                class="fa fa-heart"></i><span>Add to Wish
                                                                List</span></button>
                                                        <button type="button" class="compare btn-button"
                                                            title="Compare this Product" onclick="compare.add('96');"><i
                                                                class="fa fa-refresh"></i><span>Compare this
                                                                Product</span></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End item-wrap-inner -->
                                        </div>
                                        <!-- End item-wrap -->
                                    </div>
                                </div>
                                <!--End extraslider-inner -->
                                <script type="text/javascript">
                                    //<![CDATA[
                                    jQuery(document).ready(function ($) {
                                    	(function (element) {
                                    		var $element = $(element),
                                    				$extraslider = $(".extraslider-inner", $element),
                                    				_delay = 500 ,
                                    				_duration = 800 ,
                                    				_effect = 'none ';
                                    
                                    		$extraslider.on("initialized.owl.carousel2", function () {
                                    			var $item_active = $(".owl2-item.active", $element);
                                    			if ($item_active.length > 1 && _effect != "none") {
                                    				_getAnimate($item_active);
                                    			}
                                    			else {
                                    				var $item = $(".owl2-item", $element);
                                    				$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
                                    			}
                                    			
                                    			  
                                    				$(".owl2-nav", $element).insertBefore($extraslider);
                                    				$(".owl2-controls", $element).insertAfter($extraslider);
                                    			
                                    		});
                                    
                                    		$extraslider.owlCarousel2({
                                    			autoWidth: false,
                                    			rtl: false,
                                    			margin: 19,
                                    			slideBy: 1,
                                    			autoplay: 0,
                                    			autoplayHoverPause: 0,
                                    			autoplayTimeout: 0 ,
                                    			autoplaySpeed: 1000 ,
                                    			startPosition: 0 ,
                                    			mouseDrag: 1,
                                    			touchDrag: 1 ,
                                    			autoWidth: false,
                                    			responsive: {
                                    				0: 	{ items: 1 } ,
                                    				480: { items: 2 },
                                    				768: { items: 2 },
                                    				992: { items: 3 },
                                    				1650: {items: 6},
                                    				1200: {items: 4 },
                                    				1365: {items: 5 },
                                    			},
                                    			dotClass: "owl2-dot",
                                    			dotsClass: "owl2-dots",
                                    			dots: false ,
                                    			dotsSpeed:500 ,
                                    			nav: true ,
                                    			loop: false ,
                                    			navSpeed: 500 ,
                                    			navText: ["&#139 ", "&#155 "],
                                    			navClass: ["owl2-prev", "owl2-next"]
                                    
                                    		});
                                    
                                    		$extraslider.on("translate.owl.carousel2", function (e) {
                                            	 
                                            	var $item_active = $(".owl2-item.active", $element);
                                            	_UngetAnimate($item_active);
                                            	_getAnimate($item_active);
                                            });
                                            $extraslider.on("translated.owl.carousel2", function (e) {
                                            	 
                                            	var $item_active = $(".owl2-item.active", $element);
                                            	var $item = $(".owl2-item", $element);
                                            	_UngetAnimate($item);
                                            	if ($item_active.length > 1 && _effect != "none") {
                                            		_getAnimate($item_active);
                                            	} else {
                                            		$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
                                            	}
                                            });
                                            function _getAnimate($el) {
                                            	if (_effect == "none") return;
                                            	//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
                                            	$extraslider.removeClass("extra-animate");
                                            	$el.each(function (i) {
                                            		var $_el = $(this);
                                            		var i= i + 1;
                                            		$(this).css({
                                            			"-webkit-animation": _effect + " " + _duration + "ms ease both",
                                            			"-moz-animation": _effect + " " + _duration + "ms ease both",
                                            			"-o-animation": _effect + " " + _duration + "ms ease both",
                                            			"animation": _effect + " " + _duration + "ms ease both",
                                            			"-webkit-animation-delay": +i * _delay + "ms",
                                            			"-moz-animation-delay": +i * _delay + "ms",
                                            			"-o-animation-delay": +i * _delay + "ms",
                                            			"animation-delay": +i * _delay + "ms",
                                            			
                                            		}).animate({
                                            			
                                            		});
                                            		if (i == $el.size() - 1) {
                                            			$extraslider.addClass("extra-animate");
                                            		}
                                            	});
                                            }
                                            function _UngetAnimate($el) {
                                            	$el.each(function (i) {
                                            		$(this).css({
                                            			"animation": "",
                                            			"-webkit-animation": "",
                                            			"-moz-animation": "",
                                            			"-o-animation": "",
                                            		});
                                            	});
                                            } 
                                    	})("#so_extra_slider_15402129361609954183 ");
                                    });
                                    //]]>
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_s95i  col-style">
                    <div class="module so-latest-blog blog-home preset01-5 preset02-3 preset03-3 preset04-2 preset05-1">
                        <h3 class="modtitle"><span>Latest Blogs</span></h3>
                        <div class="modcontent clearfix">
                            <div id="so_latest_blog_129_1772260961609954183"
                                class="so-blog-external buttom-type1 button-type1">
                                <div class="blog-external" data-effect="none">
                                    <div class="media">
                                        <div class="item">
                                            <div class="media-left">
                                                <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=extension/simple_blog/article/view&amp;simple_blog_article_id=2"
                                                    target="_self">
                                                    <img data-sizes="auto"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/blog/2-310x215.jpg"
                                                        alt="Biten demons lector in henderit in vulp" class="lazyload">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="media-content">
                                                    <div class="media-date-added idx8"><b>25</b> / September
                                                    </div>
                                                    <h4 class="media-heading font-title">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=extension/simple_blog/article/view&amp;simple_blog_article_id=2"
                                                            title="Biten demons lector in henderit in vulp"
                                                            target="_self">Biten demons lector in henderit in
                                                            vulp</a>
                                                    </h4>
                                                    <div class="media-date-added idx-other">
                                                        <i class="fa fa-calendar"></i><span class="media-date-added">
                                                            September 25th,
                                                            2018</span>
                                                    </div>
                                                    <div class="media-date-added idx4"><b>25</b> Sep</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="item">
                                            <div class="media-left">
                                                <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=extension/simple_blog/article/view&amp;simple_blog_article_id=3"
                                                    target="_self">
                                                    <img data-sizes="auto"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/blog/10-310x215.jpg"
                                                        alt="Commodo laoreet semper tincidun	sit" class="lazyload">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="media-content">
                                                    <div class="media-date-added idx8"><b>25</b> / September
                                                    </div>
                                                    <h4 class="media-heading font-title">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=extension/simple_blog/article/view&amp;simple_blog_article_id=3"
                                                            title="Commodo laoreet semper tincidun	sit"
                                                            target="_self">Commodo laoreet semper tincidun
                                                            sit</a>
                                                    </h4>
                                                    <div class="media-date-added idx-other">
                                                        <i class="fa fa-calendar"></i><span class="media-date-added">
                                                            September 25th,
                                                            2018</span>
                                                    </div>
                                                    <div class="media-date-added idx4"><b>25</b> Sep</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="item">
                                            <div class="media-left">
                                                <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=extension/simple_blog/article/view&amp;simple_blog_article_id=5"
                                                    target="_self">
                                                    <img data-sizes="auto"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/blog/4-310x215.jpg"
                                                        alt="Duis autem vel eum irure sed diam nonumy" class="lazyload">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="media-content">
                                                    <div class="media-date-added idx8"><b>25</b> / September
                                                    </div>
                                                    <h4 class="media-heading font-title">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=extension/simple_blog/article/view&amp;simple_blog_article_id=5"
                                                            title="Duis autem vel eum irure sed diam nonumy"
                                                            target="_self">Duis autem vel eum irure sed diam
                                                            nonumy</a>
                                                    </h4>
                                                    <div class="media-date-added idx-other">
                                                        <i class="fa fa-calendar"></i><span class="media-date-added">
                                                            September 25th,
                                                            2018</span>
                                                    </div>
                                                    <div class="media-date-added idx4"><b>25</b> Sep</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="item">
                                            <div class="media-left">
                                                <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=extension/simple_blog/article/view&amp;simple_blog_article_id=8"
                                                    target="_self">
                                                    <img data-sizes="auto"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/blog/7-310x215.jpg"
                                                        alt="Duis autem vel eum tempor invidunt ut labore et "
                                                        class="lazyload">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="media-content">
                                                    <div class="media-date-added idx8"><b>17</b> / December
                                                    </div>
                                                    <h4 class="media-heading font-title">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=extension/simple_blog/article/view&amp;simple_blog_article_id=8"
                                                            title="Duis autem vel eum tempor invidunt ut labore et "
                                                            target="_self">Duis autem vel eum tempor invidunt ut
                                                            labore et </a>
                                                    </h4>
                                                    <div class="media-date-added idx-other">
                                                        <i class="fa fa-calendar"></i><span class="media-date-added">
                                                            December 17th, 2020</span>
                                                    </div>
                                                    <div class="media-date-added idx4"><b>17</b> Dec</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="item">
                                            <div class="media-left">
                                                <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=extension/simple_blog/article/view&amp;simple_blog_article_id=7"
                                                    target="_self">
                                                    <img data-sizes="auto"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/blog/6-310x215.jpg"
                                                        alt="enim ad minim veniam  justo duo dolores et ea"
                                                        class="lazyload">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="media-content">
                                                    <div class="media-date-added idx8"><b>25</b> / September
                                                    </div>
                                                    <h4 class="media-heading font-title">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=extension/simple_blog/article/view&amp;simple_blog_article_id=7"
                                                            title="enim ad minim veniam  justo duo dolores et ea"
                                                            target="_self">enim ad minim veniam justo duo
                                                            dolores et ea</a>
                                                    </h4>
                                                    <div class="media-date-added idx-other">
                                                        <i class="fa fa-calendar"></i><span class="media-date-added">
                                                            September 25th,
                                                            2018</span>
                                                    </div>
                                                    <div class="media-date-added idx4"><b>25</b> Sep</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="item">
                                            <div class="media-left">
                                                <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=extension/simple_blog/article/view&amp;simple_blog_article_id=1"
                                                    target="_self">
                                                    <img data-sizes="auto"
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                                        data-src="https://opencart.opencartworks.com/themes/so_emarket/layout4/image/cache/catalog/blog/1-310x215.jpg"
                                                        alt="Kire tuma demons vel eum iriure dolor" class="lazyload">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <div class="media-content">
                                                    <div class="media-date-added idx8"><b>25</b> / September
                                                    </div>
                                                    <h4 class="media-heading font-title">
                                                        <a href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=extension/simple_blog/article/view&amp;simple_blog_article_id=1"
                                                            title="Kire tuma demons vel eum iriure dolor"
                                                            target="_self">Kire tuma demons vel eum iriure
                                                            dolor</a>
                                                    </h4>
                                                    <div class="media-date-added idx-other">
                                                        <i class="fa fa-calendar"></i><span class="media-date-added">
                                                            September 25th,
                                                            2018</span>
                                                    </div>
                                                    <div class="media-date-added idx4"><b>25</b> Sep</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                //<![CDATA[
                                 jQuery(document).ready(function ($) {
                                 	;(function (element) {
                                 		var $element = $(element),
                                 				$extraslider = $(".blog-external", $element),
                                 				_delay = 500,
                                 		_duration = 800,
                                 		_effect = 'none';
                                 
                                 		this_item = $extraslider.find('div.media');
                                 		this_item.find('div.item:eq(0)').addClass('head-button');
                                 		this_item.find('div.item:eq(0) .media-heading').addClass('head-item');
                                 		this_item.find('div.item:eq(0) .media-left').addClass('so-block');
                                 		this_item.find('div.item:eq(0) .media-content').addClass('so-block');
                                 		$extraslider.on("initialized.owl.carousel2", function () {
                                 			var $item_active = $(".owl2-item.active", $element);
                                 			if ($item_active.length > 1 && _effect != "none") {
                                 				_getAnimate($item_active);
                                 			}
                                 			else {
                                 				var $item = $(".owl2-item", $element);
                                 				$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
                                 			}
                                 			
                                 											$(".owl2-controls", $element).insertBefore($extraslider);
                                 				$(".owl2-dots", $element).insertAfter($(".owl2-prev", $element));
                                 									});
                                 
                                 		$extraslider.owlCarousel2({
                                 			margin: 20,
                                 			slideBy: 1,
                                 			autoplay: false,
                                 			autoplayHoverPause: false,
                                 			autoplayTimeout: 0,
                                 			autoplaySpeed: 1000,
                                 			startPosition: 0,
                                 			mouseDrag: true,
                                 			touchDrag: true,
                                 			autoWidth: false,
                                 			rtl: false,
                                 			responsive: {
                                 				0: 	{ items: 1 } ,
                                 				480: { items: 2 },
                                 				768: { items: 3 },
                                 				992: { items: 3 },
                                 				1200: {items: 5},
                                 			},
                                 			dotClass: "owl2-dot",
                                 			dotsClass: "owl2-dots",
                                 			dots: false,
                                 			dotsSpeed:500,
                                 			nav: true,
                                 			loop: false,
                                 			navSpeed: 500,
                                 			navText: ["&#171;", "&#187;"],
                                 			navClass: ["owl2-prev", "owl2-next"]
                                 		});
                                 
                                 		$extraslider.on("translate.owl.carousel2", function (e) {
                                 			
                                 			//var $item_active = $(".owl2-item.active", $element);
                                 			//_UngetAnimate($item_active);
                                 			//_getAnimate($item_active);
                                 		});
                                 
                                 		$extraslider.on("translated.owl.carousel2", function (e) {
                                 			
                                 			var $item_active = $(".owl2-item.active", $element);
                                 			var $item = $(".owl2-item", $element);
                                 
                                 			_UngetAnimate($item);
                                 
                                 			if ($item_active.length > 1 && _effect != "none") {
                                 				_getAnimate($item_active);
                                 			} else {
                                 				$item.css({"opacity": 1, "filter": "alpha(opacity = 100)"});
                                 			}
                                 		});
                                 
                                 		function _getAnimate($el) {
                                 			if (_effect == "none") return;
                                 			//if ($.browser.msie && parseInt($.browser.version, 10) <= 9) return;
                                 			$extraslider.removeClass("extra-animate");
                                 			$el.each(function (i) {
                                 				var $_el = $(this);
                                 				$(this).css({
                                 					"-webkit-animation": _effect + " " + _duration + "ms ease both",
                                 					"-moz-animation": _effect + " " + _duration + "ms ease both",
                                 					"-o-animation": _effect + " " + _duration + "ms ease both",
                                 					"animation": _effect + " " + _duration + "ms ease both",
                                 					"-webkit-animation-delay": +i * _delay + "ms",
                                 					"-moz-animation-delay": +i * _delay + "ms",
                                 					"-o-animation-delay": +i * _delay + "ms",
                                 					"animation-delay": +i * _delay + "ms",
                                 					"opacity": 1
                                 				}).animate({
                                 					opacity: 1
                                 				});
                                 
                                 				if (i == $el.size() - 1) {
                                 					$extraslider.addClass("extra-animate");
                                 				}
                                 			});
                                 		}
                                 
                                 		function _UngetAnimate($el) {
                                 			$el.each(function (i) {
                                 				$(this).css({
                                 					"animation": "",
                                 					"-webkit-animation": "",
                                 					"-moz-animation": "",
                                 					"-o-animation": "",
                                 					"opacity": 1
                                 				});
                                 			});
                                 		}
                                 	})("#so_latest_blog_129_1772260961609954183");
                                 });
                                 //]]>
                            </script>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_vxsa  col-style">
                    <div class="slider-brands">
                        <div class="contentslider" data-rtl="no" data-loop="yes" data-autoplay="no" data-autoheight="no"
                            data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="7"
                            data-items_column1="6" data-items_column2="3" data-items_column3="2" data-items_column4="1"
                            data-arrows="yes" data-pagination="no" data-lazyload="yes" data-hoverpause="yes">
                            <div class="item">
                                <a href="#"><img src="{{ asset('front') }}/img/id4-brand1.jpg" alt="brand"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('front') }}/img/id4-brand2.jpg" alt="brand"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('front') }}/img/id4-brand3.jpg" alt="brand"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('front') }}/img/id4-brand4.jpg" alt="brand"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('front') }}/img/id4-brand5.jpg" alt="brand"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('front') }}/img/id4-brand6.jpg" alt="brand"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('front') }}/img/id4-brand7.jpg" alt="brand"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('front') }}/img/id4-brand8.jpg" alt="brand"></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="{{ asset('front') }}/img/id4-brand5.jpg" alt="brand"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col_3r5f  col-style">
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function _SoQuickView(){
               	var windowWidth = window.innerWidth || document.documentElement.clientWidth;
               	if (windowWidth > 1200 ) {
               		var $item_class = $('.so-quickview');
               		if ($item_class.length > 0) {
               			for (var i = 0; i < $item_class.length; i++) {
               				if($($item_class[i]).find('.quickview_handler').length <= 0){
               					var $product_id = $($item_class[i]).find('a', $(this)).attr('data-product');
               					if($.isNumeric($product_id) ){
               						var _quickviewbutton = "<a class='visible-lg btn-button quickview quickview_handler' href='https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=extension/soconfig/quickview&amp;product_id="+$product_id+"' title=\"Quick view\" data-title =\"Quick view\" data-fancybox-type=\"iframe\" ><i class=\"fa fa-eye\"></i><span>Quick view</span></a>";
               						$($item_class[i]).append(_quickviewbutton);
               					}
               				}
               			}
               		}
               	}
               	
               }
               
               jQuery(document).ready(function ($) {
               	_SoQuickView();
               	// Hide tooltip when clicking on it
               	var hasTooltip = $("[data-toggle='tooltip']").tooltip({container: 'body'});
               	hasTooltip.on('click', function () {
               			$(this).tooltip('hide')
               	});
               });
               
               
    </script>
    <div id="so-groups" class="right so-groups-sticky hidden-xs" style="top: 196px">
        <a class="sticky-categories" data-target="popup" data-popup="#popup-categories"><span>Categories</span><i
                class="fa fa-align-justify"></i></a>
        <a class="sticky-mycart" data-target="popup" data-popup="#popup-mycart"><span>Cart</span><i
                class="fa fa-shopping-cart"></i></a>
        <a class="sticky-myaccount" data-target="popup" data-popup="#popup-myaccount"><span>Account</span><i
                class="fa fa-user"></i></a>
        <a class="sticky-mysearch" data-target="popup" data-popup="#popup-mysearch"><span>Search</span><i
                class="fa fa-search"></i></a>
        <a class="sticky-recent" data-target="popup" data-popup="#popup-recent"><span>Recent View</span><i
                class="fa fa-recent"></i></a>
        <div class="popup popup-categories popup-hidden" id="popup-categories">
            <div class="popup-screen">
                <div class="popup-position">
                    <div class="popup-container popup-small">
                        <div class="popup-header">
                            <span><i class="fa fa-align-justify"></i>All Categories</span>
                            <a class="popup-close" data-target="popup-close"
                                data-popup-close="#popup-categories">&times;</a>
                        </div>
                        <div class="popup-content">
                            <div class="nav-secondary">
                                <ul>
                                    <li>
                                        <span class="nav-action">
                                            <i class="fa fa-plus more"></i>
                                            <i class="fa fa-minus less"></i>
                                        </span>
                                        <a
                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=24"><i
                                                class="fa fa-chevron-down nav-arrow"></i>Accessories</a>
                                        <ul class="level-2">
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=24_76"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Cellphone</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=24_85"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Cosmetics</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=24_74"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Electronics</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=24_73"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Fashion</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=24_75"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Handbags</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=24_84"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Jewelry</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=24_83"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Smart
                                                    TVs</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="nav-action">
                                            <i class="fa fa-plus more"></i>
                                            <i class="fa fa-minus less"></i>
                                        </span>
                                        <a
                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=57"><i
                                                class="fa fa-chevron-down nav-arrow"></i>Collections</a>
                                        <ul class="level-2">
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=57_81"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Appliances</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=57_78"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Fashion</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=57_80"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Furniture
                                                    &amp; Decor</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=57_82"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Sine
                                                    engain</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=57_77"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Smartphone</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=57_79"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Sport
                                                    bikes</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="nav-action">
                                            <i class="fa fa-plus more"></i>
                                            <i class="fa fa-minus less"></i>
                                        </span>
                                        <a
                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=34"><i
                                                class="fa fa-chevron-down nav-arrow"></i>Fashion</a>
                                        <ul class="level-2">
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=34_43"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>
                                                    Accessories</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=34_44"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Bags</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=34_47"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Jewelry</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=34_39"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Men's
                                                    Clothing</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=34_48"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Shoes</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=34_38"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Watches</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=34_37"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Women's
                                                    Wear</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="nav-action">
                                            <i class="fa fa-plus more"></i>
                                            <i class="fa fa-minus less"></i>
                                        </span>
                                        <a
                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=20"><i
                                                class="fa fa-chevron-down nav-arrow"></i>Furnitures</a>
                                        <ul class="level-2">
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=20_67"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Bathroom</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=20_68"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Bedroom</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=20_27"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Decor</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=20_65"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Furniture</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=20_26"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Living
                                                    room</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=20_66"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Theid
                                                    cupensg</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a
                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=98"><i
                                                class="fa fa-chevron-down nav-arrow"></i>Handbags</a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=100"><i
                                                class="fa fa-chevron-down nav-arrow"></i>Headphone</a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=99"><i
                                                class="fa fa-chevron-down nav-arrow"></i>Health &amp; Beauty</a>
                                    </li>
                                    <li>
                                        <a
                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=97"><i
                                                class="fa fa-chevron-down nav-arrow"></i>Kitchenwares</a>
                                    </li>
                                    <li>
                                        <span class="nav-action">
                                            <i class="fa fa-plus more"></i>
                                            <i class="fa fa-minus less"></i>
                                        </span>
                                        <a
                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=86"><i
                                                class="fa fa-chevron-down nav-arrow"></i>Shop</a>
                                        <ul class="level-2">
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=86_89"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Bag &amp;
                                                    backpacks</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=86_93"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Decor</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=86_87"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Fashion
                                                    Kids</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=86_92"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Food
                                                    &amp; Organic</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=86_91"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Furniture</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=86_90"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Mom &amp;
                                                    Baby</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=86_88"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Smartphone</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="nav-action">
                                            <i class="fa fa-plus more"></i>
                                            <i class="fa fa-minus less"></i>
                                        </span>
                                        <a
                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=33"><i
                                                class="fa fa-chevron-down nav-arrow"></i>Smartphone</a>
                                        <ul class="level-2">
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=33_59"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Apple</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=33_60"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Dell</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=33_64"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Esdipiscing</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=33_62"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Scanners</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=33_63"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Sony</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=33_61"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Toshiba</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <span class="nav-action">
                                            <i class="fa fa-plus more"></i>
                                            <i class="fa fa-minus less"></i>
                                        </span>
                                        <a
                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=18"><i
                                                class="fa fa-chevron-down nav-arrow"></i>Towels Cloud</a>
                                        <ul class="level-2">
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=18_101"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Appliances</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=18_46"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Furniture
                                                    &amp; Decors</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=18_45"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Lamp
                                                    &amp; Lighting</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=18_70"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Punge
                                                    nenune</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=18_71"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Qunge
                                                    genga</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=18_72"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Sofa
                                                    &amp; Chairs</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=18_69"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Sound
                                                    &amp; Life</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a
                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=17"><i
                                                class="fa fa-chevron-down nav-arrow"></i>Watches</a>
                                    </li>
                                    <li>
                                        <span class="nav-action">
                                            <i class="fa fa-plus more"></i>
                                            <i class="fa fa-minus less"></i>
                                        </span>
                                        <a
                                            href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=25"><i
                                                class="fa fa-chevron-down nav-arrow"></i>Electronics</a>
                                        <ul class="level-2">
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=25_29"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Asdipiscing</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=25_95"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Consectetur</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=25_35"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Diam
                                                    sit</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=25_36"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Labore
                                                    et</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=25_96"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Reprehenderit
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=25_94"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Sit
                                                    amet</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=25_28"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Monitors</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=25_30"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Printers</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=25_31"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Scanners</a>
                                            </li>
                                            <li>
                                                <a
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=product/category&amp;path=25_32"><i
                                                        class="fa fa-chevron-right flip nav-arrow"></i>Web
                                                    Cameras</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup popup-mycart popup-hidden" id="popup-mycart">
            <div class="popup-screen">
                <div class="popup-position">
                    <div class="popup-container popup-small">
                        <div class="popup-html">
                            <div class="popup-header">
                                <span><i class="fa fa-shopping-cart"></i>Shopping Cart</span>
                                <a class="popup-close" data-target="popup-close"
                                    data-popup-close="#popup-mycart">&times;</a>
                            </div>
                            <div class="popup-content">
                                <div class="cart-header">
                                    <div class="notification gray">
                                        <i class="fa fa-shopping-cart info-icon"></i>
                                        <p>Your shopping cart is empty!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup popup-myaccount popup-hidden" id="popup-myaccount">
            <div class="popup-screen">
                <div class="popup-position">
                    <div class="popup-container popup-small">
                        <div class="popup-html">
                            <div class="popup-header">
                                <span><i class="fa fa-user"></i>My Account</span>
                                <a class="popup-close" data-target="popup-close"
                                    data-popup-close="#popup-myaccount">&times;</a>
                            </div>
                            <div class="popup-content">
                                <div class="form-content">
                                    <div class="row space">
                                        <div class="col col-sm-6 col-xs-12">
                                            <div class="form-box">
                                                <form
                                                    action="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=common/currency/currency"
                                                    method="post" enctype="multipart/form-data"
                                                    id="sticky-form-currency">
                                                    <label class="label-top"
                                                        for="input-language"><span>Currency</span></label>
                                                    <select name="select-currency" id="input-currency"
                                                        class="field icon dark arrow">
                                                        <option value="EUR">€ Euro</option>
                                                        <option value="GBP">£ Pound Sterling</option>
                                                        <option value="USD" selected="selected">$ US Dollar
                                                        </option>
                                                    </select>
                                                    <input type="hidden" name="code" value="">
                                                    <input type="hidden" name="redirect"
                                                        value="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=common/home">
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col col-sm-6 col-xs-12">
                                            <div class="form-box">
                                                <form
                                                    action="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=common/language/language"
                                                    method="post" enctype="multipart/form-data"
                                                    id="sticky-form-language">
                                                    <label class="label-top"
                                                        for="input-language"><span>Language</span></label>
                                                    <select name="select-language" id="input-language"
                                                        class="field icon dark arrow">
                                                        <option value="ar-ar">Arabic</option>
                                                        <option value="en-gb" selected="selected">English
                                                        </option>
                                                    </select>
                                                    <input type="hidden" name="code" value="">
                                                    <input type="hidden" name="redirect"
                                                        value="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=common/home">
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col col-sm-12">
                                            <div class="form-box">
                                                <div class="hr show"></div>
                                            </div>
                                        </div>
                                        <div class="col col-sm-4 col-xs-6 txt-center">
                                            <div class="form-box">
                                                <a class="account-url"
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/order">
                                                    <span class="ico ico-32 ico-sm"><i
                                                            class="fa fa-history"></i></span><br>
                                                    <span class="account-txt">History</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col col-sm-4 col-xs-6 txt-center">
                                            <div class="form-box">
                                                <a class="account-url"
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=checkout/cart">
                                                    <span class="ico ico-32 ico-sm"><i
                                                            class="fa fa-shoppingcart"></i></span><br>
                                                    <span class="account-txt">Shopping Cart</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col col-sm-4 col-xs-6 txt-center">
                                            <div class="form-box">
                                                <a class="account-url"
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/register">
                                                    <span class="ico ico-32 ico-sm"><i
                                                            class="fa fa-register"></i></span><br>
                                                    <span class="account-txt">Register</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col col-sm-4 col-xs-6 txt-center">
                                            <div class="form-box">
                                                <a class="account-url"
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/account">
                                                    <span class="ico ico-32 ico-sm"><i
                                                            class="fa fa-account"></i></span><br>
                                                    <span class="account-txt">Account</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col col-sm-4 col-xs-6 txt-center">
                                            <div class="form-box">
                                                <a class="account-url"
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/download">
                                                    <span class="ico ico-32 ico-sm"><i
                                                            class="fa fa-download"></i></span><br>
                                                    <span class="account-txt">Download</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col col-sm-4 col-xs-6 txt-center">
                                            <div class="form-box">
                                                <a class="account-url"
                                                    href="https://opencart.opencartworks.com/themes/so_emarket/layout4/index.php?route=account/login">
                                                    <span class="ico ico-32 ico-sm"><i
                                                            class="fa fa-login"></i></span><br>
                                                    <span class="account-txt">Login</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup popup-mysearch popup-hidden" id="popup-mysearch">
            <div class="popup-screen">
                <div class="popup-position">
                    <div class="popup-container popup-small">
                        <div class="popup-html">
                            <div class="popup-header">
                                <span><i class="fa fa-search"></i>Search</span>
                                <a class="popup-close" data-target="popup-close"
                                    data-popup-close="#popup-mysearch">&times;</a>
                            </div>
                            <div class="popup-content">
                                <div class="form-content">
                                    <div class="row space">
                                        <div class="col">
                                            <div class="form-box">
                                                <input type="text" name="search" value="" placeholder="Search"
                                                    id="input-search" class="field" />
                                                <i class="fa fa-search sbmsearch"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-box">
                                                <button type="button" id="button-search"
                                                    class="btn button-search">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup popup-recent popup-hidden" id="popup-recent">
            <div class="popup-screen">
                <div class="popup-position">
                    <div class="popup-container popup-small">
                        <div class="popup-html">
                            <div class="popup-header">
                                <span><i class="fa fa-recent"></i>Recent View Products</span>
                                <a class="popup-close" data-target="popup-close"
                                    data-popup-close="#popup-recent">&times;</a>
                            </div>
                            <div class="popup-content">
                                <div class="form-content">
                                    <div class="row space">
                                        <div class="col col-xs-12">Has no content to show !</div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="fb-root"></div>
            <script>(function(d, s, id) {
               var js, fjs = d.getElementsByTagName(s)[0];
               if (d.getElementById(id)) return;
               js = d.createElement(s); js.id = id;
               js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10";
               fjs.parentNode.insertBefore(js, fjs);
               }(document, 'script', 'facebook-jssdk'));
            </script>
            <div class="so-fb-message right-bottom" style="width: 300px">
               <div class="so-fb-ms-inner" style="display: none;">
                  <div class="offline_heading" style="width: 298px">
                     <label class="button_chat_offline_text">Chat with Us</label>
                     <i class="fa fa-angle-down shrink_icon"></i>
                  </div>
                  <div class="fb-page" 
                     data-href="https://www.facebook.com/smartaddons.page" 
                     data-tabs="messages" 
                     data-width="300" 
                     data-height="250" 
                     data-small-header="true" 
                     data-adapt-container-width="true" 
                     data-hide-cover="false" 
                     data-show-facepile="false">
                     <blockquote cite="https://www.facebook.com/smartaddons.page" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/smartaddons.page">Facebook Message</a>
                     </blockquote>
                  </div>
               </div>
               <div class="so-fb-ms-bottom so-fb-message-style-default">
                  <div class="so-fb-ms-heading so-fb-message-head">
                     <img class="online" src="catalog/view/theme/default/image/so_facebook_message/da.png">Chat with Us
                  </div>
               </div>
            </div>
            <script type="text/javascript">
               jQuery(document).ready(function($) {
               	$(document).on('click', '.so-fb-ms-bottom', function() {
               		$(this).prev('.so-fb-ms-inner').show();
               		$(this).hide();
               	})
               
               	$(document).on('click', '.offline_heading', function() {
               		$(this).parent('.so-fb-ms-inner').hide();
               		$(this).parent().next('.so-fb-ms-bottom').show();
               	})
               })
            </script> -->
</div>
@endsection