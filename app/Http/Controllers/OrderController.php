<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Gloudemans\Shoppingcart\Facades\Cart;
use Session;

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
        $paymentType = $request->Cash_On_Delivery;
        if ($paymentType == 'Cash') {
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
            $order->Cash_On_Delivery = $request->Cash_On_Delivery;
            $order->subtotal = $request->subtotal;
            $order->grandtotal = $request->grandtotal;
            $order->comments = $request->comments;
            $order->save();
         
            Toastr::success('Sale Order Successful!.', '', ["progressBar" => true]);
            return redirect('/checkout/my-home')->with('message', 'Order info saved successfully');
            // }
        }
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
