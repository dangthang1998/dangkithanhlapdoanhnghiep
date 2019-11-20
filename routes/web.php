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

Route::get('/', function () {
    return view('home');
});

// Auth::routes();
Route::get('/admin/login','AuthController@getLogin')->name('admin.login');
Route::post('/admin/login','AuthController@postLogin')->name('admin.login');

Route::get('/admin/register','AuthController@getRegister')->name('admin.register');
Route::post('/admin/register','AuthController@postRegister')->name('admin.register');
Route::get('/admin/logout','AuthController@logout')->name('admin.logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/admin', 'HomeController@dashboard')->name('admin.dashboard');
Route::get('/admin/{any}', 'HomeController@dashboard')->where('any', '.*');

