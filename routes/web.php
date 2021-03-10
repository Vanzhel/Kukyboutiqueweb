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
//Route::get('/administrator', 'Web\Administrator\DashController@paneladmin');