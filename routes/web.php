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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function() {
//     return view('dashboard');
// });

Route::get('/', function () {
    return view('index');
});
Route::get('/urls', 'UrlController@index');
Route::get('/store-url', 'UrlController@store');


Route::get('/url2', function () {
    return view('index2');
});
Route::get('/bitly', 'Url2Controller@index');
Route::get('/store-bitly-url', 'Url2Controller@store');
