<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//use App\Customer;
//use App\Shipping;
use App\Order;

//use App\Payment;
//use App\OrderDetail;
//use Mail;
use Session;
//use Cart;
use Gloudemans\Shoppingcart\Facades\Cart;



class CheckoutController extends Controller
{


    public function newOrder(Request $request)
    {
        $paymentType = $request->Cash_On_Delivery;
        if ($paymentType == 'Cash On Delivery') {
            $order = new Order();
           // $order->customer_id  = Session::get('customerId');
           // $order->shipping_id  = Session::get('shippingId');
            $order->order_total = Session::get('subtotal');

            // $order = new Order();
            // $order->fill($request->all());
            // $order->save();
           

            // $payment = new Payment();
            // $payment->order_id  = $order->id;
            // $payment->payment_type  = $paymentType;
            // $payment->save();

            $cartProducts = Cart::content();
            foreach ($cartProducts as $cartProduct) {
              // $order = new OrderDetail();

                $order = new Order();

                $order->fill($request->all());
                $order->save();


                // $orderDetail->order_id  = $order->id;
                // $orderDetail->product_id  = $cartProduct->id;
                // $orderDetail->product_name  = $cartProduct->name;
                // $orderDetail->product_price  = $cartProduct->price;
                // $orderDetail->product_quantity  = $cartProduct->qty;
                // $orderDetail->save();
            }
            Cart::destroy();
          //  return redirect()->route('complete-order');
          return redirect('/checkout/my-home')->with('message', 'Order info saved successfully');
        //     //return redirect('/complete/order');

         } 
         //else if ($paymentType == 'Paypal') {
        //     $order = new Order();
        //     $order->customer_id  = Session::get('customerId');
        //     $order->shipping_id  = Session::get('shippingId');
        //     $order->order_total = Session::get('orderTotal');
        //     $order->save();

        //     $payment = new Payment();
        //     $payment->order_id  = $order->id;
        //     $payment->payment_type  = $paymentType;
        //     $payment->save();

        //     $cartProducts = Cart::content();
        //     foreach ($cartProducts as $cartProduct) {
        //         $orderDetail = new OrderDetail();
        //         $orderDetail->order_id  = $order->id;
        //         $orderDetail->product_id  = $cartProduct->id;
        //         $orderDetail->product_name  = $cartProduct->name;
        //         $orderDetail->product_price  = $cartProduct->price;
        //         $orderDetail->product_quantity  = $cartProduct->qty;
        //         $orderDetail->save();
        //     }
        //     Cart::destroy();
       // } 
        else if ($paymentType == 'Paypal') {
            return redirect('/checkout/my-home')->with('message', 'Order info saved successfully');
        }
    }
    // public function completeOrder()
    // {
    // 	return 'Success';
    // }







}
