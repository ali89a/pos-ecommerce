<div class="module category-style">
    <h3 class="modtitle">Categories</h3>
    <div class="modcontent">
        <div class="box-category">
            <ul id="cat_accordion" class="list-group">
                @foreach($menu_categories as $category)
                <li class="hadchild"><a href="category.html" class="cutom-parent">{{$category->name??''}}</a>
                    @php
                    $children=\App\Model\SubCategory::where('category_id',$category->id)->get();
                    @endphp
                    @if($children->isNotEmpty())
                    <span class="button-view  fa fa-plus-square-o"></span>

                    <ul style="display: none;">


                        @foreach($children as $c)
                        <li> <a href="#"> {{ $c->name ?? '' }} </a> </li>
                        @endforeach

                    </ul>
                    @endif
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
<div class="module product-simple">
    <h3 class="modtitle">
        <span>Latest products</span>
    </h3>
    <div class="modcontent">
        <div class="extraslider">
            <!-- Begin extraslider-inner -->
            <div class="yt-content-slider extraslider-inner">
                <div class="item ">
                    @foreach($letest_products as $product)
                    <div class="product-layout item-inner style1 ">
                        <div class="item-image">
                            <div class="item-img-info">
                                <a href="#" target="_self" title="Mandouille short ">
                                    <img src="{{asset('storage/'.$product->img_url)}}" alt="{{$product->name}}">
                                </a>
                            </div>
                        </div>
                        <div class="item-info">
                            <div class="item-title"> <a href="{{route('single.product',$product->slug)}}" target="_self" title="{{$product->name}}">{{$product->name}}</a>
                            </div>
                            <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i></span>
                            </div>
                            <div class="content_price price"> <span class="price-new product-price">{{$product->selling_price}}
                                </span>&nbsp;&nbsp; <span class="price-old">{{$product->selling_price}} </span>&nbsp;</div>
                        </div>
                        <!-- End item-info -->
                        <!-- End item-wrap-inner -->
                    </div>
                    @endforeach
                </div>
            </div>
            <!--End extraslider-inner -->
        </div>
    </div>
</div>