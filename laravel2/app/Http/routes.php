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

Route::get('/', function () {
    return view('welcome');
});

Route::get('users', function()
{
    $users = User::all();

    return View::make('users')->with('users', $users);
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/services/{service_id}/register','Services\ServiceController@index');

Route::match(['get', 'post'],'/services/{id}/register_done', 'Services\ServiceController@register_to_service');

Route::match(['get', 'post'],'/products/{service_id}/{product_id}/register_done', 'Services\ProductController@register_to_product');

require 'Routes/registered_routes.php';
