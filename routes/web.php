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

Route::get('/', function () {
    return view('welcome');
});

Route::livewire('/home', 'index')->name('home');
Route::livewire('/shop', 'shop');
Route::livewire('/shop-single', 'product-single');
Route::livewire('/cart', 'cart');
Route::livewire('/checkout', 'checkout');
Route::livewire('/about', 'about');
Route::livewire('/contact', 'contact');
Route::get('/login', 'RouteController@login');
Route::get('/signup', 'RouteController@signup');
Route::post('/signup', [
    'uses' => 'RouteController@postSignup',
    'as' => 'signup'
]);
