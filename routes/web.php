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
//Static Pages
Route::get('/', 'StaticPagesController@home');
Route::get('/menu','StaticPagesController@menu');
Route::get('/menu/{slug}', 'StaticPagesController@singleMenu');
Route::get('/reservations', 'StaticPagesController@reservations');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/about', 'StaticPagesController@about');
Route::get('/offers', 'StaticPagesController@offers');
Route::get('/admin', 'admin\AdminController@dashboard');

Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});
//Admin food pages
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create', 'admin\FoodCategoriesController@create');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit');
Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit');
Route::get('/admin/food-items/create', 'admin\FoodItemsController@create');
Route::get('/admin/food-items', 'admin\FoodItemsController@index');
//Admin Customer pages
Route::get('/admin/all-members', 'admin\CustomersController@index');
Route::get('/admin/reservations', 'admin\CustomersController@reservations');
//Admin Users pages
Route::get('/admin/users', 'admin\UsersController@index');
Route::get('/admin/users/create', 'admin\UsersController@create');
Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit');


