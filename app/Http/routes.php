<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middlewaregroups'=>['web']], function(){
   Route::get('/',[
   'uses' => 'ProductController@getIndex',
   'as'   => 'product.index'
]);

Route::get('/add-to-cart/{id}',[
   'uses' => 'ProductController@getAddToCart',
   'as'   => 'product.getAddToCart'
]);


Route::get('/shopping-cart',[
   'uses' => 'ProductController@getCart',
   'as'   => 'product.shoppingCart'
]);


Route::group(['prefix'=>'user'],function(){
 Route::group(['middleware' => 'guest'],function(){
     //sign Up
Route::get('/signup',[
   'uses'       => 'UserController@getSignup',
   'as'         => 'user.signup'
   ]);

   Route::post('/signup',[
   'uses' => 'UserController@postSignup',
   'as'   => 'user.signup'
   ]);

//sign In
Route::get('/signin',[
   'uses' => 'UserController@getSignin',
   'as'   => 'user.signin'
   ]);

Route::post('/signin',[
   'uses' => 'UserController@postSignin',
   'as'   => 'user.signin'
   ]);
 });

Route::group(['middleware' => 'auth'],function(){
//user profile
Route::get('/profile',[
   'uses' => 'UserController@getProfile',
   'as'   => 'user.profile'
   ]);

// user log out
Route::get('/logout',[
   'uses' => 'UserController@getLogout',
   'as'   => 'user.logout'
   ]);
});
});
});




