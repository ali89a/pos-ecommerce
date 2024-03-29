<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('migrate');
    return 'done'; //Return anything
});

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'FrontController@index')->name('front');

Route::get('/search-results', 'FrontController@searchResult');
Route::post('/cart/add', [
    'uses'  =>  'CartController@addToCart',
    'as'    =>  'addTocart'
]);

Route::get('/checkoutReg', [
    'uses'  =>  'CheckoutController@index',
    'as'    =>  'checkout-reg'
]);
Route::post('/customer/registration', [
    'uses'  =>  'CheckoutController@customerSignUp',
    'as'    =>  'customer-sign-up'
]);
Route::post('/checkout/customer-login', [
    'uses'  =>  'CheckoutController@customerLoginCheck',
    'as'    =>  'customer-login'
]);
Route::get('/checkout/shipping', [
    'uses'  =>  'CheckoutController@shippingForm',
    'as'    =>  'checkout-shipping'
]);
Route::post('/shipping/save', [
    'uses'  =>  'CheckoutController@saveShippingInfo',
    'as'    =>  'new-shipping'
]);
Route::get('/checkout/payment', [
    'uses'  =>  'CheckoutController@paymentForm',
    'as'    =>  'checkout-payment'
]);
Route::post('/checkout/order', [
    'uses'  =>  'CheckoutController@newOrder',
    'as'    =>  'new-order'
]);

Route::get('/complete/order', [
    'uses'  =>  'CheckoutController@completeOrder',
    'as'    =>  'complete-order'
]);




Route::get('/add-to-cart/{slug}', 'CartController@addCart')->name('add.cart');

Route::get('/shopping-cart', 'CartController@shoppingCart')->name('shopping.cart');

Route::get('/clear-cart', 'CartController@clearCart')->name('clear.cart');
Route::post('/update-cart', 'CartController@updateCart')->name('update.cart');
Route::get('/remove-product/{slug}', 'CartController@removeProduct')->name('remove.product');

Route::get('/about', 'FrontController@about')->name('about');
Route::get('/best-sellers', 'FrontController@bestSeller')->name('best.seller');
Route::get('/feature-products', 'FrontController@featureProduct')->name('feature.product');
Route::get('/new-arrivals', 'FrontController@newArrival')->name('new.arrival');
Route::get('/offer-zones', 'FrontController@offerZone')->name('offer.zone');
Route::get('/about', 'FrontController@about')->name('about');
Route::get('/contact', 'FrontController@contact')->name('contact');
Route::get('/brand', 'FrontController@brand')->name('brand');
Route::get('/faq', 'FrontController@faq')->name('faq');
Route::get('/single-product/{slug}', 'FrontController@singleProduct')->name('single.product');
Route::get('/quick-product/{slug}', 'FrontController@quickProduct')->name('quick.product');
Route::get('/shop-page', 'FrontController@shopPage')->name('shop.page');
Route::get('/special-offer', 'FrontController@specialOffer')->name('special.offer');
Route::get('/cart', 'FrontController@cart')->name('cart');
Route::get('/user-register', 'FrontController@userRegister')->name('user.register');
Route::get('/user-login', 'FrontController@userLogin')->name('user.login');
Route::get('/cart', 'FrontController@cart')->name('cart');
Route::get('/checkout', 'FrontController@checkout')->name('checkout');

Route::resource('orders', 'OrderController');


Route::get('/checkout/my-home', 'OrderController@customerHome');
//Route::get('/customerHome', 'FrontController@customer');





Auth::routes();
Route::get('lang/{locale}', 'HomeController@lang');

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('auth')->group(function () {


    Route::resource('pos', 'PosController');
    Route::resource('product', 'ProductController');
    Route::get('fetch-product-by-category-id/{id}', 'ProductController@fetch_products_by_cat_id')->name('fetch-product-info');
    Route::get('fetch-product-info/{id}', 'ProductController@fetch_product')->name('fetch-product-info');
    Route::get('fetch-product-info-for-sale/{id}', 'ProductController@fetch_product_sale')->name('fetch-product-info-for-sale');
    Route::resource('label', 'LabelController');

    Route::get('vuejs/autocomplete/search', 'LabelController@autocompleteSearch')->name('vuejs.autocomplete.search');
    Route::get('fetch-product-info-for-gatepass/{id}', 'LabelController@fetch_product_info');
    Route::get('report/purchase', 'ReportController@purchase')->name('purchase.report');
    Route::get('report/profit', 'ReportController@profit')->name('profit.report');
    Route::get('report/sale', 'ReportController@sale')->name('sale.report');
    Route::resource('category', 'ProductCategoryController');
    Route::resource('sub-category', 'SubCategoryController');
    Route::resource('unit', 'UnitOfMeasurementController');
    Route::resource('product', 'ProductController');
    Route::resource('purchase', 'PurchaseController');
    Route::resource('stock-in', 'StockInController');
    Route::resource('expense', 'ExpenseController');
    Route::resource('stock-out', 'StockOutController');
    Route::resource('sale', 'SaleController');
    Route::get('sale-pdf/{id}', 'SaleController@pdf')->name('sale.pdf');
    Route::get('sale-pdf-download/{id}', 'SaleController@pdfDownload')->name('sale.pdf-download');
});
Route::middleware('auth')->namespace('AccessControl')->prefix('access-control')->group(function () {
    Route::resource('user', 'UserController');
    Route::resource('role', 'RoleController');

    Route::resource('slider', 'SliderController');

    Route::resource('permission', 'PermissionController');
    Route::resource('matrix', 'AclController');
    Route::post('change-role-permission', 'AclController@change_role_permission');
    Route::resource('route-permit', 'RoutePermitController');
    Route::get('user-permission-matrix', 'AclController@user_permission_matrix')->name('user-permission-matrix');
    Route::post('user-permission-matrix', 'AclController@store_user_permission_matrix')->name('user-permission-matrix.store');
});
