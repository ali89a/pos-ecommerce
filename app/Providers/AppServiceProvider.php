<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use View;
use App\Model\ProductCategory;
use DB;


use App\Model\Product;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer('*', function ($view) {
            //  $category = ProductCategory::where('publicationStatus', 1)->get();
            $category = ProductCategory::all();
            $view->with('category', $category);
        });



        View::composer('front-home', function ($view) {
            //  $category = ProductCategory::where('publicationStatus', 1)->get();
            // $product = Product::all();
            $product = Product::whereStatus('active')->get();
            $view->with('product', $product);
        });

        view()->composer('*', function ($view) {
            $view->with('menu_categories', ProductCategory::latest()->limit(10)->get());
        });
    }
}
