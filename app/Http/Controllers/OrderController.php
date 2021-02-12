<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;


use Gloudemans\Shoppingcart\Facades\Cart;
use Session;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            $order->subtotal = Session::get('subtotal');
            $cartProducts = Cart::content();
            foreach ($cartProducts as $cartProduct) {
                $order = new Order();
                //$order->fill($request->all());
                $order->name=$request->name;
                $order->mobile=$request->mobile;
                $order->address=$request->address;
                $order->city=$request->city;
                $order->email=$request->email;
                $order->postcode=$request->postcode;
                $order->coupon=$request->coupon;
                $order->invoice_number=$request->invoice_number;
                $order->Cash_On_Delivery=$request->Cash_On_Delivery;

                $order->subtotal=$request->subtotal;
               
                $order->comments=$request->comments;

                $order->save();
                Toastr::success('Sale Order Successful!.', '', ["progressBar" => true]);
                return redirect('/checkout/my-home')->with('message', 'Order info saved successfully');
            }
       }
    }

    public function customerHome()
    {

        return view('front.customer.customerHome');
    }






    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
