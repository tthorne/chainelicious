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

/*
 * Home Page
 */

Route::get('/', 'PagesController@home');

/*
 *  Contact Page
 */

Route::get('/contact', 'PagesController@contact');

/*
 * Product Pages
 */
Route::model('categories', 'Category');
Route::model('products', 'Product');


Route::bind('categories', function($value, $route){
    return App\Category::whereSlug($value)->first();

});

Route::bind('products', function($value, $route){
    return App\Product::whereSlug($value)->first();

});

Route::resource('categories', 'CategoriesController');
Route::resource('categories.products', 'ProductsController');

/*
 * User Pages
 */

Route::resource('users', 'UsersController');

/*
 * Wishlists
 */



/**
 * Authentication
 * */
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
