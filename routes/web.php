<?php

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
Route::group(['middleware' => ['auth']], function () {

    Route::get('/', 'BookController@index')->name('index');

    Route::get('/cart', 'BookController@cart')->name('cart');

    Route::get('/add-cart/{id}', 'BookController@addNewCart')->name('addNewCart');

    Route::get('/delete/{id}', 'BookController@delete')->name('delete');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/facebook', 'SocialAuthController@redirectToFacebook')->name('auth.facebook');
Route::get('auth/facebook/callback', 'SocialAuthController@handleFacebookCallback');