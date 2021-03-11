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

//Route::get('/', function () {
//    return view('layout');
//});
Route::get('/', 'Web\LandingController@index');
Route::get('/listventa', 'Web\LandingController@listsale');
Route::get('/newventa', 'Web\LandingController@newsale');
Route::get('/listproducto', 'Web\LandingController@listproduct');
Route::get('index', function(){return view('cliente/index');});
Route::get('login', function(){return view('cliente/login');});
Route::get('register', function(){return view('cliente/register');});
Route::get('about-us', function(){return view('cliente/about-us');});
Route::get('cart', function(){return view('cliente/cart');});
Route::get('checkout', function(){return view('cliente/checkout');});
Route::get('contact-us', function(){return view('cliente/contact-us');});
Route::get('detail', function(){return view('cliente/detail');});
Route::get('privacy-policy', function(){return view('cliente/privacy-policy');});
Route::get('return-policy', function(){return view('cliente/return-policy');});
Route::get('shop', function(){return view('cliente/shop');});
Route::get('terms-conditions', function(){return view('cliente/terms-conditions');});
Route::get('thankyou', function(){return view('cliente/thankyou');});
//Route::get('/administrator', 'Web\Administrator\DashController@paneladmin');