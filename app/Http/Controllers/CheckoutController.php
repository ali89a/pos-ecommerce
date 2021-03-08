<?php

namespace App\Http\Controllers;

use App\Model\Customer;
use App\Shipping;
use Session;
use Illuminate\Http\Request;

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

    








}
