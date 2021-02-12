@extends('layouts.front-app')

@section('front-content')
<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="{{ route('front') }}"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Category Name</a></li>
        <li><a href="#">{{$product->name}}</a></li>
    </ul>
    <div class="row">
        <!--Left Part Start -->
        <aside class="col-sm-4 col-md-3 content-aside" id="column-left">
            @include('front.partials.page-category')
        </aside>
        <!--Left Part End -->

        <!--Middle Part Start-->
        <div id="content" class="col-md-9 col-sm-8">

            <div class="product-view row">
                <div class="left-content-product">

                    <div class="content-product-left class-honizol col-md-5 col-sm-12 col-xs-12">
                        <div class="large-image  ">
                            <img itemprop="image" class="product-image-zoom" src="{{asset('storage/'.$product->img_url)}}" data-zoom-image="{{asset('storage/'.$product->img_url)}}" title="Chicken swinesha" alt="Chicken swinesha">
                        </div>
                        <!-- <a class="thumb-video pull-left" href="https://www.youtube.com/watch?v=HhabgvIIXik"><i class="fa fa-youtube-play"></i></a> -->

                        <div id="thumb-slider" class="yt-content-slider full_slider owl-drag" data-rtl="yes" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="10" data-items_column0="4" data-items_column1="3" data-items_column2="4" data-items_column3="1" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="yes">
                            <a data-index="0" class="img thumbnail " data-image="{{asset('storage/'.$product->img_url)}}" title="Chicken swinesha">
                                <img src="{{asset('storage/'.$product->img_url)}}" title="{{$product->name}}" alt="{{$product->name}}">
                            </a>
                        </div>

                    </div>

                    <div class="content-product-right col-md-7 col-sm-12 col-xs-12">
                        <div class="title-product">
                            <h1>{{$product->name}}</h1>
                        </div>
                        <!-- Review ---->
                        <div class="box-review form-group">
                            <div class="ratings">
                                <div class="rating-box">
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                    <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                </div>
                            </div>

                            <a class="reviews_button" href="#" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">0 reviews</a> |
                            <a class="write_review_button" href="#" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">Write a review</a>
                        </div>

                        <div class="product-label form-group">
                            <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                <span class="price-new" itemprop="price">{{$product->selling_price - $product->discount}}</span>
                                <span class="price-old">{{$product->selling_price}}</span>
                            </div>
                            <div class="stock"><span>Availability:</span> <span class="status-stock">In Stock</span></div>
                        </div>

                        <div class="product-box-desc">
                            <div class="inner-box-desc">
                                <!-- <div class="price-tax"><span>Ex Tax:</span> $60.00</div>
                                <div class="reward"><span>Price in reward points:</span> 400</div>
                                <div class="brand"><span>Brand:</span><a href="#">Apple</a> </div> -->
                                <div class="model"><span>Product Code:</span> {{$product->code}}</div>
                                <!-- <div class="reward"><span>Reward Points:</span> 100</div> -->
                            </div>
                        </div>


                        <div id="product">
                            <!-- <h4>Available Options</h4> -->
                            <!-- <div class="image_option_type form-group required">
                                <label class="control-label">Colors</label>
                                <ul class="product-options clearfix" id="input-option231">
                                    <li class="radio">
                                        <label>
                                            <input class="image_radio" type="radio" name="option[231]" value="33">
                                            <img src="{{ asset('front') }}/image/demo/colors/blue.jpg" data-original-title="blue +$12.00" class="img-thumbnail icon icon-color"> <i class="fa fa-check"></i>
                                            <label> </label>
                                        </label>
                                    </li>
                                    <li class="radio">
                                        <label>
                                            <input class="image_radio" type="radio" name="option[231]" value="34">
                                            <img src="{{ asset('front') }}/image/demo/colors/brown.jpg" data-original-title="brown -$12.00" class="img-thumbnail icon icon-color"> <i class="fa fa-check"></i>
                                            <label> </label>
                                        </label>
                                    </li>
                                    <li class="radio">
                                        <label>
                                            <input class="image_radio" type="radio" name="option[231]" value="35">
                                            <img src="{{ asset('front') }}/image/demo/colors/green.jpg" data-original-title="green +$12.00" class="img-thumbnail icon icon-color"> <i class="fa fa-check"></i>
                                            <label> </label>
                                        </label>
                                    </li>
                                    <li class="selected-option">
                                    </li>
                                </ul>
                            </div> -->

                            <!-- <div class="box-checkbox form-group required">
                                <label class="control-label">Checkbox</label>
                                <div id="input-option232">
                                    <div class="checkbox">
                                        <label for="checkbox_1"><input type="checkbox" name="option[232][]" value="36" id="checkbox_1"> Checkbox 1 (+$12.00)</label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox_2"><input type="checkbox" name="option[232][]" value="36" id="checkbox_2"> Checkbox 2 (+$36.00)</label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox_3"><input type="checkbox" name="option[232][]" value="36" id="checkbox_3"> Checkbox 3 (+$24.00)</label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="checkbox_4"><input type="checkbox" name="option[232][]" value="36" id="checkbox_4"> Checkbox 4 (+$48.00)</label>
                                    </div>
                                </div>
                            </div> -->

                            <div class="form-group box-info-product" id="vue_app">
                                <div class="option quantity">
                                    <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
                                        <label>Qty</label>
                                        <input class="form-control" type="text" name="quantity" value="1">
                                        <input type="hidden" name="product_id" value="50">
                                        <span class="input-group-addon product_quantity_down">−</span>
                                        <span class="input-group-addon product_quantity_up">+</span>
                                    </div>
                                </div>
                                <div class="cart">
                                    <input type="button" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" @click="add_cart" data-original-title="Add to Cart">
                                </div>
                                <div class="add-to-links wish_comp">
                                    <!-- <ul class="blank list-inline">
                                        <li class="wishlist">
                                            <a class="icon" data-toggle="tooltip" title="" onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
                                            </a>
                                        </li>
                                        <li class="compare">
                                            <a class="icon" data-toggle="tooltip" title="" onclick="compare.add('50');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i>
                                            </a>
                                        </li>
                                    </ul> -->
                                </div>

                            </div>

                        </div>
                        <!-- end box info product -->

                    </div>

                </div>
            </div>
            <!-- Product Tabs -->
            <div class="producttab ">
                <div class="tabsslider  vertical-tabs col-xs-12">
                    <ul class="nav nav-tabs col-lg-2 col-sm-3">
                        <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                        <li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Reviews (1)</a></li>
                        <li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Tags</a></li>
                    </ul>
                    <div class="tab-content col-lg-10 col-sm-9 col-xs-12">
                        <div id="tab-1" class="tab-pane fade active in">

                            {{$product->description ?? ''}}

                        </div>
                        <div id="tab-review" class="tab-pane fade">
                            <form>
                                <div id="review">
                                    <table class="table table-striped table-bordered">
                                        <tbody>
                                            <tr>
                                                <td style="width: 50%;"><strong>Super Administrator</strong></td>
                                                <td class="text-right">29/07/2015</td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <p>Best this product opencart</p>
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="text-right"></div>
                                </div>
                                <h2 id="review-title">Write a review</h2>
                                <div class="contacts-form">
                                    <div class="form-group"> <span class="icon icon-user"></span>
                                        <input type="text" name="name" class="form-control" value="Your Name" onblur="if (this.value == '') {this.value = 'Your Name';}" onfocus="if(this.value == 'Your Name') {this.value = '';}">
                                    </div>
                                    <div class="form-group"> <span class="icon icon-bubbles-2"></span>
                                        <textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = 'Your Review';}" onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
                                    </div>
                                    <span style="font-size: 11px;"><span class="text-danger">Note:</span> HTML is not translated!</span>

                                    <div class="form-group">
                                        <b>Rating</b> <span>Bad</span>&nbsp;
                                        <input type="radio" name="rating" value="1"> &nbsp;
                                        <input type="radio" name="rating" value="2"> &nbsp;
                                        <input type="radio" name="rating" value="3"> &nbsp;
                                        <input type="radio" name="rating" value="4"> &nbsp;
                                        <input type="radio" name="rating" value="5"> &nbsp;<span>Good</span>

                                    </div>
                                    <div class="buttons clearfix"><a id="button-review" class="btn buttonGray">Continue</a></div>
                                </div>
                            </form>
                        </div>
                        <div id="tab-4" class="tab-pane fade">
                            <a href="#">Monitor</a>,
                            <a href="#">Apple</a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- //Product Tabs -->


        </div>
    </div>
</div>
<!--Middle Part End-->
</div>
<!-- //Main Container -->
@endsection
@push('js')

<script src="{{ asset('vue-js/vue/dist/vue.js') }}"></script>
<script src="{{ asset('vue-js/axios/dist/axios.min.js') }}"></script>
<script src="{{ asset('vue-js/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>

<script>
    $(document).ready(function() {

        var vue = new Vue({
            el: '#vue_app',
            data: {
                config: {

                    get_product_info_by_category_id_url: "{{ url('fetch-product-by-category-id') }}",
                    get_product_info_url: "{{ url('fetch-product-info-for-sale') }}",
                },
                category_id: '',
                product_id: '',
                products: [],
                items: [],
                quantity: 0,
                price: 0,
                discount: 0,
                receive_amount: 0,
                selling_price: 0,

            },
            computed: {

                subtotal: function() {
                    return this.items.reduce((total, item) => {
                        return total + item.quantity * item.price
                    }, 0)
                },
                grandtotal: function() {
                    return this.subtotal - this.discount
                },
                change_amount: function() {
                    return this.grandtotal - this.receive_amount
                },

            },
            methods: {

                add_cart() {
                    toastr.options = {
                        "closeButton": false,
                        "debug": false,
                        "newestOnTop": false,
                        "progressBar": true,
                        "preventDuplicates": true,
                        "onclick": null,
                        "showDuration": "100",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "show",
                        "hideMethod": "hide"
                    };
                    toastr.success('The process has been saved.', 'Success');

                },
                fetch_product() {

                    var vm = this;

                    var slug = vm.category_id;
                    //    alert(slug);
                    if (slug) {
                        axios.get(this.config.get_product_info_by_category_id_url + '/' + slug).then(function(response) {

                            vm.products = response.data.products;

                        }).catch(function(error) {

                            toastr.error('Something went to wrong', {
                                closeButton: true,
                                progressBar: true,
                            });

                            return false;

                        });
                    }

                },
                data_input() {

                    var vm = this;
                    if (!vm.product_id) {

                        toastr.error('Enter product', {
                            closeButton: true,
                            progressBar: true,
                        });

                        return false;

                    } else {

                        var slug = vm.product_id;

                        if (slug) {
                            axios.get(this.config.get_product_info_url + '/' + slug).then(function(response) {

                                product_details = response.data;
                                vm.items.push({
                                    product_id: product_details.product_id,
                                    product_name: product_details.product_name,
                                    unit: product_details.unit,
                                    stock: product_details.stock,
                                    price: product_details.sale_price,
                                    quantity: 0,


                                    subtotal: 0,
                                });

                                vm.product_id = '';
                                vm.category_id = '';

                            }).catch(function(error) {

                                toastr.error('Something went to wrong', {
                                    closeButton: true,
                                    progressBar: true,
                                });

                                return false;

                            });
                        }

                    }

                },

                delete_row: function(row) {
                    this.items.splice(this.items.indexOf(row), 1);
                },
                itemtotal: function(index) {

                    console.log(index.quantity * index.price);
                    return index.quantity * index.price;


                    //   alert(quantity);
                    //  var total= row.quantity);
                    //  row.itemtotal=total;
                },

            },

            updated() {
                $('.bSelect').selectpicker('refresh');
            }

        });

        $('.bSelect').selectpicker({
            liveSearch: true,
            size: 5
        });

    });
</script>
@endpush