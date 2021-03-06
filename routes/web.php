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
	
	Route::post('/carrito','detallepagoController@carrito')->name('carrito');

		
	Route::get('/AltaRuta', 'detalleRutaController@create')->name('altaRuta');
	Route::post('/AltaRuta', 'detalleRutaController@store');

	Route::get('/AltaProducto', 'productoController@create')->name('altaProducto');
	Route::post('/AltaProducto', 'productoController@store');
	
	Route::get('/AltaCategoria', 'categoriaController@create')->name('altaCategoria');
	Route::post('/AltaCategoria', 'categoriaController@store');

	Route::get('/AltaModoPago', 'modoPagoController@create')->name('altaModoPago');
	Route::post('/AltaModoPago', 'modoPagoController@store');

	//BAJAS
	Route::delete('/bajaUsuario/{id}', 'AdminController@destroy');
	Route::delete('/bajaMotociclista/{id}', 'motociclistasController@destroy');
	Route::delete('/bajaPago/{id}/{id2}', 'detallepagoController@destroy');
	Route::delete('/bajaRuta/{id}/{id2}/{id3}','detalleRutaController@destroy');
	Route::delete('/bajaModoPago/{id}','modoPagoController@destroy');

	//MODIFICAIONES
	Route::get('/editaUsuario/{id}','adminController@edit')->name('editarUsuario');
	Route::put('/editarUsuario/{id}','adminController@update');
	Route::get('/editaRuta/{id} ','detalleRutaController@edit')->name('editarUsuario');
	Route::put('/editarRuta/{id}','detalleRutaController@update');
	Route::get('/editaModoPago/{id}','modoPagoController@edit')->name('editarModoPago');
	Route::put('/editarModoPago/{id}','modoPagoController@update');

	//CONSULTAS
    Route::get('/Usuarios', 'AdminController@mostrarUsers');
	Route::get('/Motociclistas', 'motociclistasController@mostrarMotociclistas');
	Route::get('/Pagos', 'detallePagoController@mostrarPagos')->name('pagos');
	Route::get('/Rutas', 'detalleRutaController@mostrarRutas')->name('rutas');
	Route::get('/Productos', 'productoController@mostrarProductos');
	Route::get('/Categorias', 'categoriaController@mostrarCategorias');
	Route::get('/ModoPago', 'modoPagoController@mostrarModoPago')->name('modoPagos');


	//Consultas PDF
	Route::get('/Pagos/imp/{id}', 'PdfController@imprimir')->name('pdfpagos');
	Route::get('/Motociclistas/imp', 'PdfController@imprimirmotociclistas')->name('pdfmotociclista');
	Route::get('/Productos/imp', 'PdfController@imprimirproductos')->name('pdfproducto');

 //graficas
	Route::get('graficas','GraficasController@graficas');
	Route::get('grafica_areas', 'GraficasController@grafica_areas');
	Route::get('grafica_barras', 'GraficasController@grafica_barras');
	Route::get('grafica_pie', 'GraficasController@grafica_pie');
	Route::get('grafica_3d', 'GraficasController@grafica_3d');
	Route::get('grafica_3ddin', 'GraficasController@grafica_3ddin');

	//Muchas Rutas xD
	Route::resource('Categoria', 'CategoriaController')->except([
	    'create', 'store'
	]);
	Route::resource('motociclista', 'motociclistasController')->except([
	    'create', 'store'
	]);
	Route::resource('producto', 'productoController')->except([
	    'create', 'store'
	]);
	Route::resource('pago', 'detallePagoController')->except([
	    'create', 'store','index'
	]);

//carrito
Route::bind('producto', function($id_producto){
	return App\Productos::where('id_producto', $id_producto)->first();
});

Route::get('cart/show', [
	'as' => 'cart-show',
	'uses' => 'CartController@show'
]);

Route::get('cart/add/{producto}', [
	'as' => 'cart-add',
	'uses' => 'CartController@add'
]);

Route::get('cart/delete/{producto}',[
	'as' => 'cart-delete',
	'uses' => 'CartController@delete'
]);

Route::get('cart/trash', [
	'as' => 'cart-trash',
	'uses' => 'CartController@trash'
]);

Route::get('cart/update/{producto}/{cantidad?}', [
	'as' => 'cart-update',
	'uses' => 'CartController@update'
]);

Route::get('order-detail', [
	'as' => 'order-detail',
	'uses' => 'CartController@orderDetail'
]);
Route::get('combo_moto_email/{id_motociclista}', 'AjaxController@combo');

/*

Verb	     URI	                  Action	     Route Name
GET	        /photos	                  index	         photos.index
GET	        /photos/create	          create	     photos.create
POST	    /photos         	      store	         photos.store
GET	        /photos/{photo}  	      show	         photos.show
GET	        /photos/{photo}/edit	  edit	         photos.edit
PUT/PATCH	/photos/{photo}	          update	     photos.update
DELETE	    /photos/{photo}	          destroy	     photos.destroy
*/


});

Route::group([
    'middleware' => 'user',
    'prefix' => 'user',
], function () {
    Route::get('/dashboard', 'userController@user')->name('user');
});

