@extends('layouts.front-app')

@section('front-content')
<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="{{ route('front') }}"><i class="fa fa-home"></i></a>
        </li>
        <li><a href="{{ route('offer.zone') }}">Offer Zone</a>
        </li>
    </ul>
    <div class="row">
        <!--Left Part Start -->
        <aside class="col-sm-4 col-md-3 content-aside" id="column-left">
            @include('front.partials.page-category')
        </aside>
        <!--Left Part End -->
        <!--Middle Part Start-->
        <div id="content" class="col-md-9 col-sm-8">
            <div class="products-category">
                <h3 class="title-category ">Offer Zone</h3>
                <div class="category-derc">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="banners">
                                <div>
                                    <a href="#">
                                        <img src="{{ asset('front') }}/image/catalog/demo/category/img-cate.jpg" alt="img cate">
                                        <br>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Filters -->
                <div class="product-filter product-filter-top filters-panel">
                    <div class="row">
                        <div class="col-md-5 col-sm-3 col-xs-12 view-mode">
                            <div class="list-view">
                                <button class="btn btn-default grid active" data-view="grid" data-toggle="tooltip" data-original-title="Grid"><i class="fa fa-th"></i>
                                </button>
                                <button class="btn btn-default list" data-view="list" data-toggle="tooltip" data-original-title="List"><i class="fa fa-th-list"></i>
                                </button>
                            </div>
                        </div>
                        <div class="short-by-show form-inline text-right col-md-7 col-sm-9 col-xs-12">
                            <div class="form-group short-by">
                                <label class="control-label" for="input-sort">Sort By:</label>
                                <select id="input-sort" class="form-control" onchange="location = this.value;">
                                    <option value="" selected="selected">Default</option>
                                    <option value="">Name (A - Z)</option>
                                    <option value="">Name (Z - A)</option>
                                    <option value="">Price (Low &gt; High)</option>
                                    <option value="">Price (High &gt; Low)</option>
                                    <option value="">Rating (Highest)</option>
                                    <option value="">Rating (Lowest)</option>
                                    <option value="">Model (A - Z)</option>
                                    <option value="">Model (Z - A)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="input-limit">Show:</label>
                                <select id="input-limit" class="form-control" onchange="location = this.value;">
                                    <option value="" selected="selected">15</option>
                                    <option value="">25</option>
                                    <option value="">50</option>
                                    <option value="">75</option>
                                    <option value="">100</option>
                                </select>
                            </div>
                        </div>
                        <!-- <div class="box-pagination col-md-3 col-sm-4 col-xs-12 text-right">
                            <ul class="pagination">
                                <li class="active"><span>1</span></li>
                                <li><a href="">2</a></li><li><a href="">&gt;</a></li>
                                <li><a href="">&gt;|</a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                <!-- //end Filters -->
                <!--changed listings-->
                <div class="products-list row nopadding-xs so-filter-gird">
                    @forelse($offer_zone_products as $product)
                    <div class="product-layout col-lg-15 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-item-container">
                            <div class="left-block">
                                <div class="product-image-container second_img">
                                    <a href="{{route('single.product',$product->slug)}}" target="_self" title="Doenpuis consuat ">
                                        <img src="{{asset('storage/'.$product->img_url)}}" class="img-1 img-responsive" alt="image">
                                        <img src="{{asset('storage/'.$product->img_url)}}" class="img-2 img-responsive" alt="image">
                                    </a>
                                </div>
                                <div class="box-label"> <span class="label-product label-sale"> {{$product->discount}}% </span><span class="label-product label-new"> New </span>
                                </div>
                                <div class="button-group so-quickview cartinfo--left">
                                    <a href="{{route('add.cart',$product->id)}}"><button type="button" class="addToCart btn-button" title="Add to cart" onclick="cart.add('60 ');"> <i class="fa fa-shopping-basket"></i>
                                            <span>Add to cart </span>
                                        </button></a>
                                    <button type="button" class="wishlist btn-button" title="Add to Wish List" onclick="wishlist.add('60');"><i class="fa fa-heart"></i><span>Add to Wish List</span>
                                    </button>
                                    <button type="button" class="compare btn-button" title="Compare this Product " onclick="compare.add('60');"><i class="fa fa-refresh"></i><span>Compare this Product</span>
                                    </button>
                                    <!--quickview--> <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i><span>Quick view</span></a>
                                    <!--end quickview-->
                                </div>
                            </div>
                            <div class="right-block">
                                <div class="caption">
                                    <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                        <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                    </div>
                                    <h4><a href="{{route('single.product',$product->slug)}}" title="Doenpuis consuat " target="_self">{{$product->name}}</a></h4>
                                    <div class="price"> <span class="price-new">{{$product->selling_price}}</span>
                                        <span class="price-old">{{$product->selling_price}}</span>
                                    </div>
                                    <div class="description item-desc">
                                        <p>{{$product->description}}</p>
                                    </div>
                                    <div class="list-block">
                                        <button class="addToCart btn-button" type="button" title="Add to Cart"><i class="fa fa-shopping-basket"></i>
                                        </button>
                                        <button class="wishlist btn-button" type="button" title="Add to Wish List" onclick="wishlist.add('101');"><i class="fa fa-heart"></i>
                                        </button>
                                        <button class="compare btn-button" type="button" title="Compare this Product" onclick="compare.add('101');"><i class="fa fa-refresh"></i>
                                        </button>
                                        <!--quickview-->
                                        <a class="iframe-link btn-button quickview quickview_handler visible-lg" href="quickview.html" title="Quick view" data-fancybox-type="iframe"><i class="fa fa-eye"></i></a>
                                        <!--end quickview-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    @endforelse
                </div>
                <!--// End Changed listings-->
                <!-- Filters -->
                <div class="product-filter product-filter-bottom filters-panel">
                    <div class="row">
                        <div class="col-sm-6 text-left"></div>
                        <div class="col-sm-6 text-right">Showing 1 to 15 of 15 (1 Pages)</div>
                    </div>
                </div>
                <!-- //end Filters -->
            </div>
        </div>
        <!--Middle Part End-->
    </div>
</div>
<!-- //Main Container -->
@endsection
@push('js')
<script type="text/javascript">
    if ($.cookie('display')) {
        view = $.cookie('display');
    } else {
        view = 'grid';
    }
    if (view) display(view);
</script>
@endpush