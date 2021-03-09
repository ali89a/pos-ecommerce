<?php

namespace App\Http\Controllers;

use App\Model\Customer;
use App\NewOrder;
use App\Shipping;
use Session;
use Illuminate\Http\Request;


use App\Order;
use App\OrderDetail;
use Brian2694\Toastr\Facades\Toastr;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\OrderItem;
use App\Payment;
use Illuminate\Support\Facades\Mail;
use niklasravnsborg\LaravelPdf\Facades\Pdf;




class CheckoutController extends Controller
{
    public function index(){
    	return view('front.checkout.checkout-content');
    }
    public function customerSignUp(Request $request){
        $request->validate([
            'email' => 'required|email|unique:customers,email',
        ]);
        //dd($request->all());
    	$customer = new Customer();
    	$customer->name = $request->name;
    	$customer->short_name = $request->short_name;
    	$customer->email = $request->email;
    	$customer->password = bcrypt($request->password);
    	$customer->mobile = $request->mobile;
        $customer->address = $request->address;

      //  $data = $customer->toArray();
        // echo "<pre>";
        // print_r($data);
        // exit();
 ////   	Mail::send('front-end.mails.confirmation-mail',$data, function($message) use ($data){
 ////   		$message->to($data['email_address']);
 ////   		$message->subject('Confirmation Mail');
 ////       });
        $customer->save();
    	$customerId = $customer->id;
    	Session::put('customerId',$customerId);
    	Session::put('customerName',$customer->name.' '.$customer->short_name);
        return redirect()->route('checkout-shipping');
    	//return redirect('/checkout/shipping');
    }

    public function customerLoginCheck(Request $request){
        $customer = Customer::where('email', $request->email)->first();
        if (isset($customer) && password_verify($request->password, $customer->password) ) {
        Session::put('customerId',$customer->id);
        Session::put('customerName',$customer->name.' '.$customer->short_name);
        return redirect()->route('checkout-shipping');
        //return redirect('/checkout/shipping');
        } else {
            Session::flash('invalid_email','Please, Enter valid Email Address or Password.');
            return redirect()->route('checkout');
            //return redirect('/checkout')->with('message','Please, Enter valid Email Address or Password.');
        }        
    }


    public function shippingForm(){
    	$customer = Customer::find(Session::get('customerId'));
    	return view('front.checkout.shipping',[
    		'customer' => $customer
    	]);
    }

    public function saveShippingInfo(Request $request){
    	$shipping = new Shipping();
    	$shipping->full_name = $request->full_name; 
    	$shipping->email = $request->email; 
    	$shipping->mobile = $request->mobile; 
    	$shipping->address = $request->address;
    	$shipping->save(); 

        Session::put('shippingId',$shipping->id);
        return redirect()->route('checkout-payment');
    	// return redirect('/checkout/payment'); 
    }

    public function paymentForm()
    {
    	return view('front.checkout.payment');
    }

    public function newOrder(Request $request){
       // dd($request->all());
         $paymentType = $request->payment_type;
         if ($paymentType=='Cash') {
             $order = new NewOrder();
          //   dd($order);
             $order->customer_id  = Session::get('customerId');
             $order->shipping_id  = Session::get('shippingId');
             $order->order_total = Session::get('subtotal');
             $order->save();

           //  dd($request->all());

             $payment = new Payment();
             $payment->order_id  = $order->id;
             $payment->payment_type  = $paymentType;
             $payment->save();

            $cartProducts = Cart::content();
            foreach ($cartProducts as $cartProduct) {
                $orderDetail = new OrderDetail();
                $orderDetail->order_id  = $order->id;
                $orderDetail->product_id  = $cartProduct->id;
                $orderDetail->product_name  = $cartProduct->name;
                $orderDetail->product_price  = $cartProduct->price;
                $orderDetail->product_quantity  = $cartProduct->qty;
                $orderDetail->save();
           }
            Cart::destroy();
            return redirect()->route('complete-order');
           // //return redirect('/complete/order');

         }
         //else if($paymentType=='Paypal'){
        //     $order = new NewOrder();
        //     $order->customer_id  = Session::get('customerId');
        //     $order->shipping_id  = Session::get('shippingId');
        //     $order->order_total = Session::get('subtotal');
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
         //   Cart::destroy();
        // }
        // else if($paymentType=='Bkash'){
            
        //  }



        //dd($request->all());
        // $order = new Order();
        // //$order->fill($request->all());
        // $order->name = $request->name;
        // $order->mobile = $request->mobile;
        // $order->address = $request->address;
        // $order->city = $request->city;
        // $order->email = $request->email;
        // $order->postcode = $request->postcode;
        // $order->coupon = $request->coupon;
        // $order->invoice_number = $request->invoice_number;
        // $order->payment_method = $request->payment_method ?? '';
        // $order->delivery_method = $request->delivery_method ?? '';
        // $order->shipping_method = $request->shipping_method ?? '';
        // $order->subtotal = $request->subtotal;
        // $order->grandtotal = $request->grandtotal;

       // $user = $order->toArray();

        // Mail::send('front.mail', $user, function ($message) use ($user) {
        //     $message->to($user['email']);
        //     $message->subject('Welcome Mail');

      //  $pdf = PDF::loadView('front.mail', $user);

        // Mail::send('front.mail', $user, function ($message) use ($user, $pdf) {
        //     $message->to($user['email']);
        //     $message->subject('Welcome Mail');

        //     $message->attachData($pdf->output(), "text.pdf");
        // });
        // dd('Mail Send Successfully');
        // $order->save();

        // $cartProducts = Cart::content();
        // foreach ($cartProducts as $cartProduct) {
        //     $orderDetail = new OrderItem();
        //     $orderDetail->order_id  = $order->id;
        //     $orderDetail->product_id  = $cartProduct->id;
        //     $orderDetail->product_name  = $cartProduct->name;
        //     $orderDetail->product_price  = $cartProduct->price;
        //     $orderDetail->product_Quantity  = $cartProduct->qty;
        //     $orderDetail->save();
        // }
        // Cart::destroy();
        // Toastr::success('Sale Order Successful!.', '', ["progressBar" => true]);
        // return redirect('/checkout/my-home')->with('message', 'Order info saved successfully');
        // // }


        
    }
    public function completeOrder()
    {
    	return 'Success';
    }









}
