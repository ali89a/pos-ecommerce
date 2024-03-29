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
                        @foreach($category as $catName )
                        <li><a href="#">{{$catName->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                {{-- <div class="module sohomepage-slider ">
                    <div class="yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                        <div class="yt-content-slide">
                            <a href="#"><img src="{{ asset('front') }}/image/slideshow/1.jpg" alt="slider1"
                class="img-responsive"></a>
            </div>
            <div class="yt-content-slide">
                <a href="#"><img src="{{ asset('front') }}/image/slideshow/2.jpg" alt="slider2"
                        class="img-responsive"></a>
            </div>
            <div class="yt-content-slide">
                <a href="#"><img src="{{ asset('front') }}/image/slideshow/3.jpg" alt="slider3"
                        class="img-responsive"></a>
            </div>
        </div>
        <div class="loadeding"></div>
    </div> --}}
    <div class="module sohomepage-slider ">
        <div class="yt-content-slider" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4"
            data-speed="0.6" data-margin="0" data-items_column0="1" data-items_column1="1" data-items_column2="1"
            data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes"
            data-loop="no" data-hoverpause="yes">
            @foreach ($sliders as $item)
            <div class="yt-content-slide">
                <a href="#"><img src="{{ asset( $item->img_url ) }}" alt="slider1" class="img-responsive"></a>
            </div>
            @endforeach
        </div>
        <div class="loadeding"></div>
    </div>
    <div class="block-policy4">
        <div class="inner">
            <div class="policy policy1"><a title="free shipping on all orders" href="#"><span><i
                            class="fa fa-truck"></i>Free Shipping worldwide</span></a>
            </div>
            <div class="policy policy2"><a title="money back guarantee" href="#"><span><i class="fa fa-usd"></i>money
                        back guarantee</span></a>
            </div>
            <div class="policy policy3"><a title="LOWEST PRICE GUARANTEE" href="#"><span><i
                            class="fa fa-calendar"></i>LOWEST PRICE GUARANTEE</span></a>
            </div>
            <div class="policy policy4"><a title="online support 24/24" href="#"><span><i
                            class="fa fa-umbrella"></i>online support 24/24</span></a>
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
                    <div class="extraslider-inner products-list yt-content-slider" data-rtl="yes" data-autoplay="no"
                        data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="0" data-items_column0="1"
                        data-items_column1="1" data-items_column2="1" data-items_column3="1" data-items_column4="1"
                        data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                        @foreach($product as $publishedProduct )
                        <div class="item product-layout product-grid2">
                            <div class="product-thumb transition product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container">
                                        <div class="image">
                                            @if($publishedProduct->discount > 0)
                                            <div class="box-label">
                                                <span class="label label-sale">-{{$publishedProduct->discount}}
                                                    ৳</span>
                                            </div>
                                            @endif
                                            <a href="{{route('single.product',$publishedProduct->slug)}}" target="_self" title="product">
                                                <img src="{{asset('storage/'.$publishedProduct->img_url)}}"
                                                    alt="{{$publishedProduct->name}}" class="img-responsive">
                                            </a>
                                        </div>
                                        <!--quickview-->
                                        <div class="so-quickview">
                                            <a class="btn-button quickview quickview_handler"
                                                href="{{route('single.product',$publishedProduct->slug)}}"
                                                title="Quick view"><i class="fa fa-eye"></i>
                                                <span>Quick view</span>
                                            </a>
                                        </div>
                                        <!--end quickview-->
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="#" target="_self"
                                                title="Ground round enim">{{$publishedProduct->name}}</a>
                                        </h4>
                                        <div class="rating">
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        </div>
                                        <p class="desc">{{$publishedProduct->description}}</p>
                                        <p class="price">
                                            @if($publishedProduct->discount > 0)
                                            <span class="price-new">৳
                                                {{$publishedProduct->selling_price - $publishedProduct->discount}}</span>
                                            <span class="price-old">৳ {{$publishedProduct->selling_price}} </span>
                                            @else
                                            <span class="price-new">৳ {{$publishedProduct->selling_price}} </span>
                                            @endif
                                        </p>
                                        <div class="button-group">
                                            <a href="{{route('add.cart',$publishedProduct->id)}}">
                                                <button class="addToCart" title="Add to Cart" type="button"
                                                    onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>
                                                    <span>Add to Cart</span>
                                                </button>
                                            </a>

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
                    <div class="yt-content-slider extraslider-inner products-list" data-rtl="yes" data-pagination="no"
                        data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="4"
                        data-items_column1="4" data-items_column2="3" data-items_column3="2" data-items_column4="1"
                        data-arrows="yes" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                        @foreach($feature_products as $product)
                        <div class="item ">
                            <div class="product-layout product-grid2 style1">
                                <div class="product-thumb transition product-item-container">
                                    <div class="left-block">
                                        <div class="product-image-container">
                                            <div class="image">
                                                @if($product->new=='active')
                                                <div class="box-label">
                                                    <span class="label-product label-new">New</span>
                                                </div>
                                                @endif
                                                @if($product->discount > 0)
                                                <div class="box-label">
                                                    <span class="label label-sale">-{{$product->discount}}
                                                        ৳</span>
                                                </div>
                                                @endif
                                                <a href="{{route('single.product',$product->slug)}}" target="_self"
                                                    title="product">
                                                    <img src="{{asset('storage/'.$product->img_url)}}"
                                                        alt="Ground round enim" class="img-responsive">
                                                </a>
                                            </div>
                                            <!--quickview-->
                                            <div class="so-quickview">
                                                <a class="btn-button quickview quickview_handler"
                                                    href="{{route('single.product',$product->slug)}}"
                                                    title="Quick view"><i class="fa fa-eye"></i><span>Quick
                                                        view</span></a>
                                            </div>
                                            <!--end quickview-->
                                        </div>
                                    </div>
                                    <div class="right-block">
                                        <div class="caption">
                                            <h4><a href="{{route('single.product',$product->slug)}}" target="_self"
                                                    title="{{$product->name}}">{{$product->name}}</a></h4>
                                            <div class="rating">
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                            </div>
                                            <p class="price">
                                                @if($product->discount > 0)
                                                <span class="price-new">৳
                                                    {{$product->selling_price - $product->discount}}</span>
                                                <span class="price-old">৳ {{$product->selling_price}} </span>
                                                @else
                                                <span class="price-new">৳ {{$product->selling_price}} </span>
                                                @endif
                                            </p>
                                            <div class="button-group">
                                                <a href="{{route('add.cart',$product->id)}}"><button class="addToCart"
                                                        title="Add to Cart" type="button" onclick="cart.add('69');"><i
                                                            class="fa fa-shopping-cart"></i>
                                                        <span>Add to Cart</span>
                                                    </button></a>

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

<div class="module so-extraslider-ltr extra-layout4 cus1">
    <div class="form-group col-pre" style="background-color: #a94442;">
        <div class="m-head">Top Collections<a href="#">View All</a></div>
    </div>
    <div class="modcontent">
        <div class="so-extraslider">
            <div class="yt-content-slider extraslider-inner products-list" data-rtl="yes" data-pagination="no"
                data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="6"
                data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1"
                data-arrows="yes" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                @foreach($top_products as $product)
                <div class="item ">
                    <div class="product-layout product-grid2 style1">
                        <div class="product-thumb transition product-item-container">
                            <div class="left-block">
                                <div class="product-image-container">
                                    <div class="image">
                                        @if($product->new=='active')
                                        <div class="box-label">
                                            <span class="label-product label-new">New</span>
                                        </div>
                                        @endif
                                        @if($product->discount > 0)
                                        <div class="box-label">
                                            <span class="label label-sale">-{{$product->discount}} ৳</span>
                                        </div>
                                        @endif

                                        <a href="{{route('single.product',$product->slug)}}" target="_self"
                                            title="product">
                                            <img src="{{asset('storage/'.$product->img_url)}}" alt="Ground round enim"
                                                class="img-responsive">
                                        </a>
                                    </div>
                                    <!--quickview-->
                                    <div class="so-quickview">
                                        <a class="btn-button quickview quickview_handler"
                                            href="{{route('single.product',$product->slug)}}" title="Quick view"><i
                                                class="fa fa-eye"></i><span>Quick
                                                view</span></a>
                                    </div>
                                    <!--end quickview-->
                                </div>
                            </div>
                            <div class="right-block">
                                <div class="caption">
                                    <h4><a href="#" target="_self" title="{{$product->name}}">{{$product->name}}</a>
                                    </h4>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                    </div>
                                    <p class="price">
                                        @if($product->discount > 0)
                                        <span class="price-new">৳
                                            {{$product->selling_price - $product->discount}}</span>
                                        <span class="price-old">৳ {{$product->selling_price}} </span>
                                        @else
                                        <span class="price-new">৳ {{$product->selling_price}} </span>
                                        @endif
                                    </p>
                                    <div class="button-group">
                                        <a href="{{route('add.cart',$product->id)}}"><button class="addToCart"
                                                title="Add to Cart" type="button" onclick="cart.add('69');"><i
                                                    class="fa fa-shopping-cart"></i>
                                                <span>Add to Cart</span>
                                            </button>
                                        </a>

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
<div class="module so-extraslider-ltr extra-layout4 cus1">
    <div class="form-group col-pre">
        <div class="m-head">Offer Zone<a href="#">View All</a></div>
    </div>
    <div class="modcontent">
        <div class="so-extraslider">
            <div class="yt-content-slider extraslider-inner products-list" data-rtl="yes" data-pagination="no"
                data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="6"
                data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1"
                data-arrows="yes" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                @foreach($offer_zone_products as $product)
                <div class="item ">
                    <div class="product-layout product-grid2 style1">
                        <div class="product-thumb transition product-item-container">
                            <div class="left-block">
                                <div class="product-image-container">
                                    <div class="image">
                                        @if($product->new=='active')
                                        <div class="box-label">
                                            <span class="label-product label-new">New</span>
                                        </div>
                                        @endif
                                        @if($product->discount > 0)
                                        <div class="box-label">
                                            <span class="label label-sale">-{{$product->discount}} ৳</span>
                                        </div>
                                        @endif

                                        <a href="{{route('single.product',$product->slug)}}" target="_self"
                                            title="product">
                                            <img src="{{asset('storage/'.$product->img_url)}}" alt="Ground round enim"
                                                class="img-responsive">
                                        </a>
                                    </div>
                                    <!--quickview-->
                                    <div class="so-quickview">
                                        <a class="btn-button quickview quickview_handler"
                                            href="{{route('single.product',$product->slug)}}"
                                            title="Quick view"><i class="fa fa-eye"></i><span>Quick
                                                view</span></a>
                                    </div>
                                    <!--end quickview-->
                                </div>
                            </div>
                            <div class="right-block">
                                <div class="caption">
                                    <h4><a href="#" target="_self" title="{{$product->name}}">{{$product->name}}</a>
                                    </h4>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                    </div>
                                    <p class="price">
                                        @if($product->discount > 0)
                                        <span class="price-new">৳
                                            {{$product->selling_price - $product->discount}}</span>
                                        <span class="price-old">৳ {{$product->selling_price}} </span>
                                        @else
                                        <span class="price-new">৳ {{$product->selling_price}} </span>
                                        @endif
                                    </p>
                                    <div class="button-group">
                                        <a href="{{route('add.cart',$product->id)}}"><button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>
                                            <span>Add to Cart</span>
                                        </button></a>
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
            <div class="yt-content-slider extraslider-inner products-list" data-rtl="yes" data-pagination="no"
                data-autoplay="no" data-delay="4" data-speed="0.6" data-margin="30" data-items_column0="6"
                data-items_column1="3" data-items_column2="2" data-items_column3="2" data-items_column4="1"
                data-arrows="yes" data-lazyload="yes" data-loop="no" data-buttonpage="top">
                @foreach($best_seller_products as $product)
                <div class="item ">
                    <div class="product-layout product-grid2 style1">
                        <div class="product-thumb transition product-item-container">
                            <div class="left-block">
                                <div class="product-image-container">
                                    <div class="image">
                                        @if($product->new=='active')
                                        <div class="box-label">
                                            <span class="label-product label-new">New</span>
                                        </div>
                                        @endif
                                        @if($product->discount > 0)
                                        <div class="box-label">
                                            <span class="label label-sale">-{{$product->discount}} ৳</span>
                                        </div>
                                        @endif

                                        <a href="{{route('single.product',$product->slug)}}" target="_self"
                                            title="product">
                                            <img src="{{asset('storage/'.$product->img_url)}}" alt="Ground round enim"
                                                class="img-responsive">
                                        </a>
                                    </div>
                                    <!--quickview-->
                                    <div class="so-quickview">
                                        <a class="btn-button quickview quickview_handler"
                                            href="{{route('single.product',$product->slug)}}" title="Quick view"><i
                                                class="fa fa-eye"></i><span>Quick
                                                view</span></a>
                                    </div>
                                    <!--end quickview-->
                                </div>
                            </div>
                            <div class="right-block">
                                <div class="caption">
                                    <h4><a href="#" target="_self" title="{{$product->name}}">{{$product->name}}</a>
                                    </h4>
                                    <div class="rating">
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                    </div>
                                    <p class="price">
                                        @if($product->discount > 0)
                                        <span class="price-new">৳
                                            {{$product->selling_price - $product->discount}}</span>
                                        <span class="price-old">৳ {{$product->selling_price}} </span>
                                        @else
                                        <span class="price-new">৳ {{$product->selling_price}} </span>
                                        @endif
                                    </p>
                                    <div class="button-group">
                                        <a href="{{route('add.cart',$product->id)}}"><button class="addToCart" title="Add to Cart" type="button" onclick="cart.add('69');"><i class="fa fa-shopping-cart"></i>
                                            <span>Add to Cart</span>
                                        </button></a>
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