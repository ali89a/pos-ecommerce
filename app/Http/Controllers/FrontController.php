<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
   public function index(){
       return view('front-home');

   }
   public function bestSeller(){
       return view('front.best-seller');
   }
   public function featureProduct(){
       return view('front.feature-product');
   }
   public function newArrival(){
       return view('front.new-arrival');
   }
   public function offerZone(){
       return view('front.offer-zone');
   }
   public function about(){
       return view('front.about');
   }
   public function contact(){
       return view('front.contact');

   }
   public function category(){
       return view('front.category');

   }
   public function brand(){
       return view('front.brand');

   }
   public function specialOffer(){
       return view('front.special-offer');

   }
   public function cart(){
       return view('front.cart');

   }
   public function userRegister(){
       return view('front.register');

   }
   public function userLogin(){
       return view('front.login');

   }
}
