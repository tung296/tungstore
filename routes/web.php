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
Auth::routes();

// Route::get('/', function() {
//     if(Auth()->user())
//         return view('dashboard.index');
//     // return view('pages.dashboard.index');
// });


Route::get('/login', function() {
    if(Auth()->user())
        return view('dashboard.index');
    return view('auth.login');
});

Route::post('/login', 'AuthController@postLogin')->name('login');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles','RoleController');
    Route::resource('users','UserController');
    Route::resource('products','ProductController');
    Route::resource('banners','BannerController');
    Route::resource('categories','CategoryController');
    Route::resource('permissions','PermissionController');
    Route::resource('media','MediaController');
    Route::get('get_media','MediaController@getmedia');

    // Route::post('/export-csv','ExcelController@export_csv');
    // Route::post('/import-csv','ExcelController@import_csv');
}); 

// ckeditor
Route::post('/upload-ckeditor', 'CkeditorController@upload_ckeditor');
Route::get('/upload-browser', 'CkeditorController@upload_browser');
Route::get('/del-ckeditor/{filename}', 'CkeditorController@del_ckeditor');

Route::get('/','FrontController@home')->name('home');
Route::get('product-type','FrontController@product_type')->name('product_type');
Route::get('product','FrontController@product')->name('product');
Route::get('contact','FrontController@contact')->name('contact');
Route::get('about','FrontController@about')->name('about');