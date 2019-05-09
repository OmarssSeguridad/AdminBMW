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

Route::get('/', function () {return view('welcome');});
Route::get('/galeria', function(){return view('galeria');});
Route::get('/nosotros', function(){return view('nosotros');});
Route::get('/rutas', function(){return view('rutas');});
Route::get('/unete', function(){return view('unete');});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group([
    'middleware' => 'admin',
    'prefix' => 'admin',
], function () {
    Route::get('/dashboard', 'AdminController@admin')->name('admin');
    //ALTAS
    Route::get('/AltaUsuario', 'UserController@create')->name('altaUsuario');
    Route::post('/AltaUsuario', 'UserController@store');

    Route::get('/AltaMotociclista', 'motociclistasController@create')->name('altaMotociclista');
    Route::post('/AltaMotociclista', 'motociclistasController@store');

	Route::get('/AltaPago', 'detallepagoController@create')->name('altaPago');
	Route::post('/AltaPago','detallepagoController@store');
		
	Route::get('/AltaRuta', 'rutaController@create')->name('altaRuta');

	Route::get('/AltaProducto', 'productoController@create')->name('altaProducto');
	Route::post('/AltaProducto', 'productoController@store');
	
	Route::get('/AltaCategoria', 'categoriaController@create')->name('altaCategoria');
	Route::post('/AltaCategoria', 'categoriaController@store');

	Route::get('/AltaModoPago', 'modoPagoController@create')->name('altaModoPago');
	Route::post('/AltaModoPago', 'modoPagoController@store');

	//BAJAS
	Route::delete('/bajaUsuario/{id}', 'AdminController@destroy');

	//MODIFICAIONES
	Route::get('/editaUsuario/{id}','adminController@edit')->name('editarUsuario');
	Route::put('/editarUsuario/{id}','adminController@update');


	//CONSULTAS
    Route::get('/Usuarios', 'AdminController@mostrarUsers');
	Route::get('/Motociclistas', 'motociclistasController@mostrarMotociclistas');
	Route::get('/Pagos', 'pagosController@create');
	Route::get('/Rutas', 'rutaController@mostrarRutas');
	Route::get('/Productos', 'productoController@mostrarProductos');
	Route::get('/Categorias', 'categoriaController@mostrarCategorias');
	Route::get('/ModoPago', 'modoPagoController@mostrarModoPago');
});

Route::group([
    'middleware' => 'user',
    'prefix' => 'user',
], function () {
    Route::get('/dashboard', 'userController@user')->name('user');
});
