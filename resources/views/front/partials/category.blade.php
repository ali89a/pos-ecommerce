<div class="responsive so-megamenu  megamenu-style-dev">
    <div class="so-vertical-menu ">
        <nav class="navbar-default">
            <div class="container-megamenu vertical">
                <div id="menuHeading">
                    <div class="megamenuToogle-wrapper">
                        <div class="megamenuToogle-pattern">
                            <div class="container">
                                <div>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                All Categories
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbar-header">
                    <button type="button" id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle">
                        <i class="fa fa-bars"></i>
                        <span> All Categories </span>
                    </button>
                </div>
                <div class="vertical-wrapper">
                    <span id="remove-verticalmenu" class="fa fa-times"></span>
                    <div class="megamenu-pattern">
                        <div class="container-mega">
                            <ul class="megamenu">
                                @foreach($menu_categories as $category)
                                <li class="item-vertical css-menu with-sub-menu hover">
                                    <p class="close-menu"></p>
                                    <a href="#" class="clearfix">
                                        <img src="{{ asset('front') }}/image/catalog/menu/icons/ico6.png" alt="icon">
                                        <span>{{$category->name??''}}</span>
                                        <b class="caret"></b>
                                    </a>
                                    @php
                                    $children=\App\Model\SubCategory::where('category_id',$category->id)->get();
                                    @endphp
                                    @if($children->isNotEmpty())
                                    <div class="sub-menu" data-subwidth="20">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="row">
                                                        <div class="col-sm-12 hover-menu">
                                                            <div class="menu">
                                                                <ul>

                                                                    @foreach($children as $c)




                                                                    <li>
                                                                        <a href="#" class="main-menu">
                                                                            {{ $c->name ?? '' }}
                                                                        </a>
                                                                    </li>
                                                                    @endforeach
                                                                                                                                  </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </li>
                                @endforeach
                               

                                <li class="loadmore">
                                    <i class="fa fa-plus-square-o"></i>
                                    <span class="more-view">More Categories</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>