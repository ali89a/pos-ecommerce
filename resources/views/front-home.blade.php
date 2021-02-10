@extends('layouts.front-app')

@section('front-content')
<div class="main-container">
    <div id="content">
        <div class="container">
            <div class="box-content1">
                <div class="top-tags">
                    <ul>
                        <li>
                            <h2>Go Quickly to:</h2>
                        </li>




                        {{-- <li><a href="#">Fashions,</a></li> --}}

                        @foreach($category as $catName )
                        
                        <li><a href="#">{{$catName->name}}</a></li>

                       
                          @endforeach
                       



                    </ul>
                </div>
                <div class="module sohomepage-slider ">
                    <div class="yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                        <div class="yt-content-slide">
                            <a href="#"><img src="{{ asset('front') }}/image/slideshow/1.jpg" alt="slider1" class="img-responsive"></a>
                        </div>
                        <div class="yt-content-slide">
                            <a href="#"><img src="{{ asset('front') }}/image/slideshow/2.jpg" alt="slider2" class="img-responsive"></a>
                        </div>
                        <div class="yt-content-slide">
                            <a href="#"><img src="{{ asset('front') }}/image/slideshow/3.jpg" alt="slider3" class="img-responsive"></a>
                        </div>
                    </div>
                    <div class="loadeding"></div>
                </div>
                <div class="block-policy4">
                    <div class="inner">
                        <div class="policy policy1"><a title="free shipping on all orders" href="#"><span><i class="fa fa-truck"></i>Free Shipping worldwide</span></a>
                        </div>
                        <div class="policy policy2"><a title="money back guarantee" href="#"><span><i class="fa fa-usd"></i>money back guarantee</span></a>
                        </div>
                        <div class="policy policy3"><a title="LOWEST PRICE GUARANTEE" href="#"><span><i class="fa fa-calendar"></i>LOWEST PRICE GUARANTEE</span></a>
                        </div>
                        <div class="policy policy4"><a title="online support 24/24" href="#"><span><i class="fa fa-umbrella"></i>online support 24/24</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row box-content2">
                <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12 box-left">
                    <!-- Deals -->
                    <div class="module deals-layout4">



                        <h3 class="modtitle"><span>Deals of the days</span></h3>



                       

                        <div class="modcontent">
                            <div class="so-deal style2">
                                <div class="extraslider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                                    
                                    
                                    



                                    

                                      @foreach($product as $publishedProduct )

                                    <div class="item product-layout product-grid2">
                                        <div class="product-thumb transition product-item-container">
                                            
                                            <div class="left-block">
                                                <div class="product-image-container">
                                                    <div class="image">
                                                        <div class="box-label">
                                                            <span class="label label-sale">-13%</span>
                                                        </div>
                                                        <a href="#" target="_self" title="product">
                                                            <img src="{{asset('storage/'.$publishedProduct->img_url)}}" alt="{{$publishedProduct->name}}" class="img-responsive">
                                                        </a>
                                                    </div>
                                                    <!--quickview-->
                                                    <div class="so-quickview">
                                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{route('quick.product',$publishedProduct->slug)}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                                view</span></a>
                                                    </div>
                                                    <!--end quickview-->
                                                </div>
                                            </div>

                                            <div class="right-block">
                                                <div class="caption">



                                                    <h4><a href="#" target="_self" title="Ground round enim">{{$publishedProduct->name}}</a></h4>



                                                    <div class="rating">
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    </div>
                                                    <p class="desc">{{$publishedProduct->description}}</p>
                                                    <p class="price"> <span class="price-new">{{$publishedProduct->selling_price}}</span>
                                                        <span class="price-old">{{$publishedProduct->selling_price}}</span>
                                                    </p>
                                                    <div class="button-group">
                                                        <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i> <span>Add to
                                                                Cart</span>
                                                        </button>
                                                        <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish
                                                                List</span>
                                                        </button>
                                                        <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this
                                                                Product</span>
                                                        </button>
                                                    </div>
                                                    <!--countdown box-->
                                                    <div class="item-time-w">
                                                        <div class="item-time">
                                                            <div class="item-timer">
                                                                <div class="defaultCountdown-30"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end countdown box-->
                                                </div>
                                            </div>

                                        </div>
                                    </div>


                                    @endforeach







                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Deals -->
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 extra-right">
                    <div class="module so-extraslider-ltr ">
                        <h3 class="modtitle"><span>Featured products</span></h3>
                        <div class="modcontent">
                            <div class="so-extraslider">
                                <div class="yt-content-slider extraslider-inner products-list" data-rtl="yes" data-pagination="no" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="4" data-items_column1="4" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                                    @foreach($feature_products as $product)
                                    <div class="item ">
                                        <div class="product-layout product-grid2 style1">
                                            <div class="product-thumb transition product-item-container">
                                                <div class="left-block">
                                                    <div class="product-image-container">
                                                        <div class="image">
                                                            <div class="box-label">
                                                                <span class="label-product label-new">New</span>
                                                            </div>
                                                            <div class="box-label">
                                                                <span class="label label-sale">-13%</span>
                                                            </div>
                                                            <a href="{{route('single.product',$product->slug)}}" target="_self" title="product">
                                                                <img src="{{asset('storage/'.$product->img_url)}}" alt="Ground round enim" class="img-responsive">
                                                            </a>
                                                        </div>
                                                        <!--quickview-->
                                                        <div class="so-quickview">
                                                            <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{route('quick.product',$product->slug)}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                                    view</span></a>
                                                        </div>
                                                        <!--end quickview-->
                                                    </div>
                                                </div>
                                                <div class="right-block">
                                                    <div class="caption">
                                                        <h4><a href="{{route('single.product',$product->slug)}}" target="_self" title="Ground round enim">{{$product->name}}</a></h4>
                                                        <div class="rating">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                        </div>
                                                        <p class="price"> <span class="price-new">$66.00</span>
                                                            <span class="price-old">$76.00</span>
                                                        </p>
                                                        <div class="button-group">
                                                            <a href="{{route('add.cart',$product->id)}}"><button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>
                                                                <span>Add to
                                                                    Cart</span>
                                                            </button></a>
                                                            <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish
                                                                    List</span>
                                                            </button>
                                                            <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this
                                                                    Product</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="so-categories custom-slidercates module clearfix">
                <h3 class="modtitle"><span>Top collections</span></h3>
                <div class="modcontent">
                    <div class="cat-wrap theme3 font-title yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="5" data-items_column1="4" data-items_column2="3" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                        <div class="content-box">
                            <div class="image-cat">
                                <a href="#" title="Smartphone" target="_self">
                                    <img src="{{ asset('front') }}/image/catalog/demo/category/id4-cat1.jpg" title="Smartphone" alt="Smartphone" />
                                </a>
                            </div>
                            <div class="cat-title">
                                <a href="#" title="Smartphone " target="_self"> Smartphone</a>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="image-cat">
                                <a href="#" title="Fashion" target="_self">
                                    <img src="{{ asset('front') }}/image/catalog/demo/category/id4-cat2.jpg" title="Fashion" alt="Fashion" />
                                </a>
                            </div>
                            <div class="cat-title">
                                <a href="#" title="Fashion" target="_self"> Fashion</a>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="image-cat">
                                <a href="#" title="Sport bikes " target="_self">
                                    <img src="{{ asset('front') }}/image/catalog/demo/category/id4-cat3.jpg" title="Sport bikes " alt="Sport bikes " />
                                </a>
                            </div>
                            <div class="cat-title">
                                <a href="#" title="Sport bikes " target="_self"> Sport bikes </a>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="image-cat">
                                <a href="#" title="Furniture & Decor" target="_self">
                                    <img src="{{ asset('front') }}/image/catalog/demo/category/id4-cat4.jpg" title="Furniture & Decor" alt="Furniture & Decor" />
                                </a>
                            </div>
                            <div class="cat-title">
                                <a href="#" title="Furniture & Decor " target="_self"> Furniture & Decor</a>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="image-cat">
                                <a href="#" title="Appliances" target="_self">
                                    <img src="{{ asset('front') }}/image/catalog/demo/category/id4-cat5.jpg" title="Appliances" alt="Appliances" />
                                </a>
                            </div>
                            <div class="cat-title">
                                <a href="#" title="Appliances" target="_self">Appliances</a>
                            </div>
                        </div>
                        <div class="content-box">
                            <div class="image-cat">
                                <a href="#" title="Sine engain" target="_self">
                                    <img src="{{ asset('front') }}/image/catalog/demo/category/id4-cat3.jpg" title="Sine engain" alt="Sine engain" />
                                </a>
                            </div>
                            <div class="cat-title">
                                <a href="#" title="Sine engain " target="_self"> Smartphone</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="module so-extraslider-ltr extra-layout4 cus1">
                <div class="form-group col-pre">
                    <div class="m-head">Offer Zone<a href="#">View All</a></div>
                </div>
                <div class="modcontent">
                    <div class="so-extraslider">
                        <div class="yt-content-slider extraslider-inner products-list" data-rtl="yes" data-pagination="no" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="6" data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                            @foreach($offer_zone_products as $item)
                            <div class="item ">
                                <div class="product-layout product-grid2 style1">
                                    <div class="product-thumb transition product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container">
                                                <div class="image">
                                                    <div class="box-label">
                                                        <span class="label-product label-new">New</span>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label label-sale">-13%</span>
                                                    </div>
                                                    <a href="#" target="_self" title="product">
                                                        <img src="{{ asset('front') }}/image/product/4.jpg" alt="Ground round enim" class="img-responsive">
                                                    </a>
                                                </div>
                                                <!--quickview-->
                                                <div class="so-quickview">
                                                    <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{route('quick.product',$publishedProduct->slug)}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                            view</span></a>
                                                </div>
                                                <!--end quickview-->
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <div class="caption">
                                                <h4><a href="#" target="_self" title="Ground round enim">Ground
                                                        round enim</a></h4>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                </div>
                                                <p class="price"> <span class="price-new">$66.00</span>
                                                    <span class="price-old">$76.00</span>
                                                </p>
                                                <div class="button-group">
                                                    <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>
                                                        <span>Add to
                                                            Cart</span>
                                                    </button>
                                                    <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish
                                                            List</span>
                                                    </button>
                                                    <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this
                                                            Product</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="module so-extraslider-ltr extra-layout4 cus2">
                <div class="form-group col-pre">
                    <div class="m-head">Best Seller<a href="#">View All</a></div>
                </div>
                <div class="modcontent">
                    <div class="so-extraslider">
                        <div class="yt-content-slider extraslider-inner products-list" data-rtl="yes" data-pagination="no" data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="6" data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1" data-arrows="yes" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                            @foreach($best_seller_products as $item)
                            <div class="item ">
                                <div class="product-layout product-grid2 style1">
                                    <div class="product-thumb transition product-item-container">
                                        <div class="left-block">
                                            <div class="product-image-container">
                                                <div class="image">
                                                    <div class="box-label">
                                                        <span class="label-product label-new">New</span>
                                                    </div>
                                                    <div class="box-label">
                                                        <span class="label label-sale">-13%</span>
                                                    </div>
                                                    <a href="#" target="_self" title="product">
                                                        <img src="{{ asset('front') }}/image/product/4.jpg" alt="Ground round enim" class="img-responsive">
                                                    </a>
                                                </div>
                                                <!--quickview-->
                                                <div class="so-quickview">
                                                    <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="{{route('quick.product',$publishedProduct->slug)}}" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick
                                                            view</span></a>
                                                </div>
                                                <!--end quickview-->
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <div class="caption">
                                                <h4><a href="#" target="_self" title="Ground round enim">Ground
                                                        round enim</a></h4>
                                                <div class="rating">
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                </div>
                                                <p class="price"> <span class="price-new">$66.00</span>
                                                    <span class="price-old">$76.00</span>
                                                </p>
                                                <div class="button-group">
                                                    <button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>
                                                        <span>Add to
                                                            Cart</span>
                                                    </button>
                                                    <button class="btn-button wishlist" type="button" title="Add to Wish List" onclick="wishlist.add('69');"><i class="fa fa-heart"></i><span>Add to Wish
                                                            List</span>
                                                    </button>
                                                    <button class="btn-button compare" type="button" title="Compare this Product" onclick="compare.add('69');"><i class="fa fa-refresh"></i><span>Compare this
                                                            Product</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="slider-brands clearfix">
                <div class="yt-content-slider contentslider" data-rtl="no" data-loop="yes" data-autoplay="no"
                    data-autoheight="no" data-autowidth="no" data-delay="4" data-speed="0.6" data-margin="0"
                    data-items_column0="7" data-items_column1="6" data-items_column2="3" data-items_column3="2"
                    data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes"
                    data-hoverpause="yes">
                    <div class="item">
                        <a href="#"><img src="{{ asset('front') }}/image/catalog/brands/id4-brand1.jpg" alt="brand"></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ asset('front') }}/image/catalog/brands/id4-brand2.jpg" alt="brand"></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ asset('front') }}/image/catalog/brands/id4-brand3.jpg" alt="brand"></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ asset('front') }}/image/catalog/brands/id4-brand4.jpg" alt="brand"></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ asset('front') }}/image/catalog/brands/id4-brand5.jpg" alt="brand"></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ asset('front') }}/image/catalog/brands/id4-brand6.jpg" alt="brand"></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ asset('front') }}/image/catalog/brands/id4-brand7.jpg" alt="brand"></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ asset('front') }}/image/catalog/brands/id4-brand8.jpg" alt="brand"></a>
                    </div>
                    <div class="item">
                        <a href="#"><img src="{{ asset('front') }}/image/catalog/brands/id4-brand5.jpg" alt="brand"></a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
@endsection