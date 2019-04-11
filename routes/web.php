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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group([
    'middleware' => 'admin',
    'prefix' => 'admin',
], function () {
    Route::get('/dashboard', 'AdminController@admin')->name('admin');

    Route::get('/AltaUsuario', 'AdminController@create')->name('altaUsuario');
    Route::post('/AltaUsuario', 'AdminController@store');

});


Route::group([
    'middleware' => 'user',
    'prefix' => 'user',
], function () {
    Route::get('/dashboard', 'userController@user')->name('user');
});
