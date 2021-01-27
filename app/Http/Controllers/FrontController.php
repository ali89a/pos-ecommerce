<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;

class FrontController extends Controller
{
    public function index()
    {
        $best_seller_products = Product::where('status', 'active')->where('best_seller', 'active')->get();
        $feature_products = Product::where('status', 'active')->where('feature', 'active')->get();
        return view('front-home', compact('best_seller_products', 'feature_products'));
    }
    public function bestSeller()
    {
        return view('front.best-seller');
    }
    public function singleProduct()
    {
        return view('front.single-product');
    }
    public function featureProduct()
    {
        return view('front.feature-product');
    }
    public function newArrival()
    {
        return view('front.new-arrival');
    }
    public function offerZone()
    {
        return view('front.offer-zone');
    }
    public function about()
    {
        return view('front.about');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function category()
    {
        return view('front.category');
    }
    public function brand()
    {
        return view('front.brand');
    }
    public function faq()
    {
        return view('front.faq');
    }
    public function specialOffer()
    {
        return view('front.special-offer');
    }
    public function cart()
    {
        return view('front.cart');
    }
    public function checkout()
    {
        return view('front.checkout');
    }
    public function userRegister()
    {
        return view('front.register');
    }
    public function userLogin()
    {
        return view('front.login');
    }
}
