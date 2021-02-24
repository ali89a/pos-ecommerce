<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Gloudemans\Shoppingcart\Facades\Cart;
use Session;
use App\OrderItem;


class OrderController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    // public function store(Request $request)
    // {
    //   //  dd($request->all());
    //     $order=new Order();
    //     $order->fill($request->all());
    //     $order->save();
    //     Toastr::success('Sale Order Successful!.', '', ["progressBar" => true]);
    //   //  return redirect()->back();
    //   //return redirect('/checkout/my-home');
    //   return redirect('/checkout/my-home')->with('message', 'Order info saved successfully');
    // }


    public function store(Request $request)
    {
        //dd($request->all());
       
            $order = new Order();
            //$order->fill($request->all());
            $order->name = $request->name;
            $order->mobile = $request->mobile;
            $order->address = $request->address;
            $order->city = $request->city;
            $order->email = $request->email;
            $order->postcode = $request->postcode;
            $order->coupon = $request->coupon;
            $order->invoice_number = $request->invoice_number;
            $order->payment_method = $request->payment_method ?? '';
            $order->delivery_method = $request->delivery_method ?? '';
            $order->shipping_method = $request->shipping_method ?? '';
            $order->subtotal = $request->subtotal;
            $order->grandtotal = $request->grandtotal;
            $order->save();

            $cartProducts = Cart::content();
            foreach ($cartProducts as $cartProduct) {
                $orderDetail = new OrderItem();
                $orderDetail->order_id  = $order->id;
                $orderDetail->product_id  = $cartProduct->id;
                $orderDetail->product_name  = $cartProduct->name;
                $orderDetail->product_price  = $cartProduct->price;
                $orderDetail->product_Quantity  = $cartProduct->qty;
                $orderDetail->save();
            }
            Cart::destroy();

            Toastr::success('Sale Order Successful!.', '', ["progressBar" => true]);
            return redirect('/checkout/my-home')->with('message', 'Order info saved successfully');
            // }
       
    }


    public function customerHome()
    {
        return view('front.customer.customerHome');
    }


    public function show(Order $order)
    {
    }


    public function edit(Order $order)
    {
        //
    }


    public function update(Request $request, Order $order)
    {
        //
    }


    public function destroy(Order $order)
    {
        //
    }
}
