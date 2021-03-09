@extends('layouts.front-app')

@section('front-content')


<div id="checkout-cart" class="container">
    <ul class="breadcrumb">
        <li><a href="{{ route('front') }}"><i class="fa fa-home"></i></a></li>
        <li><a href="{{ route('cart') }}">Shopping Cart</a></li>
    </ul>
    <div class="row">
        @php
        $content=Cart::content();
        @endphp

        <div id="content" class="col-sm-12" style="margin-bottom: 20px;">
            <h1>Shopping Cart
            </h1>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td class="text-center">Image</td>
                            <td class="text-left">Product Name</td>
                            <td class="text-left">Quantity</td>
                            <td class="text-right">Unit Price</td>
                            <td class="text-right">Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        @php

                        $total = 0;
                        @endphp
                        @foreach ($content as $row)
                        <tr>
                            <td class="text-center"> <a href="{{route('single.product',$row->options->slug)}}"><img src="{{asset('storage/'.$row->options->img_url)}}" style="height: 50px;" alt="Pariatur porking" title="Pariatur porking" class="img-thumbnail"></a>
                            </td>
                            <td class="text-left"><a href="{{route('single.product',$row->options->slug)}}"><?php echo $row->name; ?></a>
                            </td>
                            <td class="text-left">
                                <form action="{{route('update.cart',$row->rowId )}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-group btn-block" style="max-width: 200px;">
                                        <input type="hidden" name="rowId" value="<?php echo $row->rowId; ?>">
                                        <input type="text" name="qty" value="<?php echo $row->qty; ?>" size="1" class="form-control">

                                        <span class="input-group-btn">
                                            <button type="submit" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Update"><i class="fa fa-refresh"></i></button>
                                            <a href="{{route('remove.product',$row->rowId )}}"><button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="cart.remove('1059');" data-original-title="Remove"><i class="fa fa-times-circle"></i></button></a>
                                        </span>
                                    </div>
                                </form>
                            </td>
                            <td class="text-right">&#x9F3; <?php echo $row->price; ?></td>
                            <td class="text-right">&#x9F3; <?php echo $row->priceTotal; ?></td>
                        </tr>
                        @php
                        $total += $row->subtotal;
                        @endphp
                        @endforeach
                    </tbody>

                </table>
            </div>
            </form>

            <br>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-8">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td class="text-right"><strong>Sub-Total:</strong></td>
                                <td class="text-right">&#x9F3;<?php echo Cart::subtotal(); ?></td>
                                {{Session::put('subtotal',$total)}}
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="buttons clearfix">
                {{-- <div class="pull-left"><a href="{{ route('shop.page') }}" class="btn btn-default">Continue Shopping</a></div>
                <div class="pull-right"><a href="{{ route('checkout') }}" class="btn btn-primary">Checkout</a></div> --}}

                {{-- <div class="row">
                    <div class="col-md-11 col-md-offset-1"> --}}
                        @if(Session::get('customerId') && Session::get('shippingId'))
                        <a href="{{route('checkout-payment')}}"
                            class="btn btn-warning pull-right">Checkout</a>
                        @elseif(Session::get('customerId'))
                        <a href="{{route('checkout-shipping')}}"
                            class="btn btn-warning pull-right">Checkout</a>
                        @else
                        <a href="{{route('checkout-reg')}}"
                            class="btn btn-warning pull-right">Checkout</a>
                        @endif
                        <a href="" class="btn btn-warning">Continue Shopping</a>
                    {{-- </div>
                </div> --}}
                
            </div>
        </div>
    </div>
</div>

@endsection