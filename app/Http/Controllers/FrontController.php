<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;

class FrontController extends Controller
{
    public function index()
    {
        $best_seller_products = Product::where('status', 'active')->where('best_seller', 'active')->get();
        $offer_zone_products = Product::where('status', 'active')->where('discount', '>', 0)->get();
        $feature_products = Product::where('status', 'active')->where('feature', 'active')->get();
        return view('front-home', compact('best_seller_products', 'feature_products','offer_zone_products'));
    }
    public function bestSeller()
    {
        $best_seller_products = Product::where('status', 'active')->where('best_seller', 'active')->get();
        return view('front.best-seller',compact('best_seller_products'));
    }
    public function singleProduct($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('front.single-product',compact('product'));
    }
    public function quickProduct($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('quickview',compact('product'));
    }
    public function featureProduct()
    {
        $feature_products = Product::where('status', 'active')->where('feature', 'active')->get();
        return view('front.feature-product',compact('feature_products'));
    }
    public function newArrival()
    {
        $new_products = Product::where('status', 'active')->where('best_seller', 'active')->get();
        return view('front.new-arrival',compact('new_products'));
    }
    public function offerZone()
    {
        $offer_zone_products = Product::where('status', 'active')->where('discount', '>', 0)->get();
        return view('front.offer-zone',compact('offer_zone_products'));
    }
    public function about()
    {
        return view('front.about');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function shopPage()
    {
        $all_products = Product::where('status', 'active')->get();
        return view('front.shop-page',compact('all_products'));
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
