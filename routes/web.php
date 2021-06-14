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

// Route::get('/', function() {
//     if(Auth()->user())
//         return view('dashboard.index');
//     // return view('pages.dashboard.index');
// });


Route::prefix('admin')->group(function() {
    // Route::get('/login', function() {
    //     if(Auth()->user())
    //         return view('dashboard.index');
    //     return view('auth.login');
    // });
    
    // Route::post('/login', 'AuthController@postLogin')->name('admin.login');
    Route::match(['get', 'post'], '/login', 'AuthController@login')->name('admin.login');

    Route::get('/logout', 'AuthController@logout')->name('admin.logout');
    
    Route::get('/', 'HomeController@index')->name('admin.home');
    
    Route::group(['middleware' => ['auth']], function() {
    
        Route::resource('roles','RoleController');
        Route::resource('users','UserController');
        Route::resource('products','ProductController');
        Route::resource('banners','BannerController');
        Route::resource('categories','CategoryController');
        Route::resource('permissions','PermissionController');
        Route::resource('orders','OrderControlle');
        
        // Route::post('/export-csv','ExcelController@export_csv');
        // Route::post('/import-csv','ExcelController@import_csv');
    });
});

Route::get('get_media','MediaController@getmedia');
Route::resource('media','MediaController');
 

// ckeditor
Route::post('/upload-ckeditor', 'CkeditorController@upload_ckeditor');
Route::get('/upload-browser', 'CkeditorController@upload_browser');
Route::get('/del-ckeditor/{filename}', 'CkeditorController@del_ckeditor');

Route::get('/','FrontController@home')->name('home');
Route::get('category/{id}','FrontController@category')->name('category');
Route::get('product','FrontController@product')->name('product');
Route::get('product_detail/{id}','FrontController@product_detail')->name('product_detail');
Route::get('contact','FrontController@contact')->name('contact');
Route::get('about','FrontController@about')->name('about');

Route::match(['get', 'post'], '/signup', 'FrontController@signup')->name('signup');
Route::match(['get', 'post'], '/login', 'FrontController@login')->name('login');
Route::match(['get', 'post'], '/forgot_password', 'FrontController@forgot_password')->name('forgot_password');
Route::get('/search', 'FrontController@search')->name('search');

Route::group(['middleware' => ['auth:customer']], function() {
    Route::match(['get', 'post'], '/info', 'FrontController@info')->name('info');
    Route::match(['get', 'post'], '/order', 'FrontController@order')->name('order');
    Route::get('/logout', 'FrontController@logout')->name('logout');
    Route::get('/list', 'FrontController@list')->name('list');
    Route::get('/delcart/{id}', 'FrontController@delcart')->name('delcart');
    Route::get('/changeqty/{id}/{qty}', 'FrontController@changeqty')->name('changeqty');
    Route::get('/cart/{product}/add', 'FrontController@add_cart')->name('shop.add_cart');
    Route::post('payment/online','FrontController@createPayment')->name('payment.online');
    Route::get('payment/return','FrontController@returnPayment')->name('vnpay.return');
});