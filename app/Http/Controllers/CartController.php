<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Model\Product;

class CartController extends Controller
{
    public function removeProduct($rowId)
    {

        Cart::remove($rowId);
        return redirect()->route('shopping.cart');
    }
    public function addCart($id)
    {
        $product = Product::find($id);
        Cart::add([
            'id' => $id,
            'name' => $product->name,
            'price' => $product->selling_price,
            'qty' => 1,
            'weight' => 550,
            'options' => [
                'slug' => $product->slug,
                'img_url' => $product->img_url,
            ],
        ]);
        return redirect()->route('shopping.cart');
    }

    public function addToCart(Request $request){
        $product = Product::find($request->id);
        Cart::add([
            'id' => $request->id,
            'name' => $product->name, 
            'price' => $product->selling_price,
            'weight' => 100,
            'qty' => $request->qty, 
            'options' => [
                'slug' => $product->slug,
                'img_url' => $product->img_url,
            ] 
        ]);

        return redirect()->route('shopping.cart');
    }

    public function clearCart()
    {

        Cart::destroy();
        return redirect()->route('shopping.cart');
    }
    public function updateCart(Request $request)
    {

        $qty = $request->qty;
        $rowId = $request->rowId;

        /*echo $qty;
    echo "<br>";
    echo $id;*/
        Cart::update($rowId, $qty);
        return redirect()->route('shopping.cart');
    }
    public function shoppingCart()
    {

        return view('front.pages.shopping-cart');
    }
}
