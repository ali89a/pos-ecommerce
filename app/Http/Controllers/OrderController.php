<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Gloudemans\Shoppingcart\Facades\Cart;
use Session;
use App\OrderItem;
use Illuminate\Support\Facades\Mail;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

class OrderController extends Controller
{

    protected function path(string $suffix)
    {
        return "admin.order.{$suffix}";
    }

    public function index()
    {
        $data = [
            'orders' => Order::all(),
        ];
        return view($this->path('index'), $data);
    }


    public function create()
    {
        //
    }

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

        $user = $order->toArray();

        // Mail::send('front.mail', $user, function ($message) use ($user) {
        //     $message->to($user['email']);
        //     $message->subject('Welcome Mail');

        $pdf = PDF::loadView('front.mail', $user);

        Mail::send('front.mail', $user, function ($message) use ($user, $pdf) {
            $message->to($user['email']);
            $message->subject('Welcome Mail');

            $message->attachData($pdf->output(), "text.pdf");
        });
        // dd('Mail Send Successfully');
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
