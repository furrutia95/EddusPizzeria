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

Route::get('/gestion', 'InicioController@index')->name('inicio_gestion');
Auth::routes();
Route::get('seguridad/login', 'Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login', 'Seguridad\LoginController@login')->name('login_post');
Route::get('seguridad/logout', 'Seguridad\LoginController@logout')->name('logout');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'superadmin']], function(){
	Route::get('/', 'AdminController@index');
	/*RUTAS DE USUARIO*/
	Route::get('usuario', 'UsuarioController@index')->name('usuario');
	Route::get('usuario/crear', 'UsuarioController@crear')->name('crear_usuario');
	Route::post('usuario', 'UsuarioController@guardar')->name('guardar_usuario');
	Route::get('usuario/{id}/editar', 'UsuarioController@editar')->name('editar_usuario');
	Route::put('usuario/{id}', 'UsuarioController@actualizar')->name('actualizar_usuario');
	Route::delete('usuario/{id}', 'UsuarioController@eliminar')->name('eliminar_usuario');
	/*RUTAS DE PERMISO*/
	Route::get('permiso', 'PermissionController@index')->name('permiso');
	Route::get('permiso/crear', 'PermissionController@crear')->name('crear_permiso');
	Route::post('permiso', 'PermissionController@guardar')->name('guardar_permiso');
	Route::get('permiso/{id}/editar', 'PermissionController@editar')->name('editar_permiso');
	Route::put('permiso/{id}', 'PermissionController@actualizar')->name('actualizar_permiso');
    Route::delete('permiso/{id}', 'PermissionController@eliminar')->name('eliminar_permiso');
    /*RUTAS PERMISO-ROL*/
	Route::get('permiso-rol', 'PermisoRolController@index')->name('menu_rol');
	Route::post('permiso-rol', 'PermisoRolController@guardar')->name('guardar_menu_rol');
	/*RUTAS DEL MENU*/
	Route::get('menu', 'MenuController@index')->name('menu');
	Route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
	Route::post('menu', 'MenuController@guardar')->name('guardar_menu');
	Route::post('menu/guardar-orden', 'MenuController@guardarOrden')->name('guardar_orden');
	Route::get('menu/{id}/editar', 'MenuController@editar')->name('editar_menu');
	Route::put('menu/{id}', 'MenuController@actualizar')->name('actualizar_menu');
	Route::get('menu/{id}', 'MenuController@eliminar')->name('eliminar_menu');
	/*RUTAS ROL*/
	Route::get('rol', 'RolController@index')->name('rol');
	Route::get('rol/crear', 'RolController@crear')->name('crear_rol');
	Route::post('rol', 'RolController@guardar')->name('guardar_rol');
	Route::get('rol/{id}/editar', 'RolController@editar')->name('editar_rol');
	Route::put('rol/{id}', 'RolController@actualizar')->name('actualizar_rol');
	Route::delete('rol/{id}', 'RolController@eliminar')->name('eliminar_rol');
	/*RUTAS MENU-ROL*/
	Route::get('menu-rol', 'MenuRolController@index')->name('menu_rol');
	Route::post('menu-rol', 'MenuRolController@guardar')->name('guardar_menu_rol');
	/*Rutas Producto*/
	Route::get('producto','Productos\ProductController@index')->name('producto');
	Route::get('producto/crear','Productos\ProductController@create')->name('crear_producto');
	Route::post('producto','Productos\ProductController@store','Productos\ProductIngredientController@store')->name('guardar_producto');
	Route::get('producto','Productos\ProductController@search')->name('buscar_producto');
	Route::get('producto/modificar/{id}','Productos\ProductController@edit')->name('modificar_producto');
	Route::post('producto/actualizar/{id}','Productos\ProductController@update')->name('actualizar_producto');
	Route::get('producto/eliminar/{id}','Productos\ProductController@destroy')->name('eliminar_producto');
	/*Rutas Ingrediente*/
	Route::get('ingrediente','Productos\IngredientController@index')->name('ingrediente');
	Route::get('ingrediente/crear','Productos\IngredientController@create')->name('crear_ingrediente');
	Route::post('ingrediente','Productos\IngredientController@store')->name('guardar_ingrediente');
	Route::get('ingrediente','Productos\IngredientController@search')->name('buscar_ingrediente');
	Route::get('ingrediente/modificar/{id}','Productos\IngredientController@edit')->name('modificar_ingrediente');
	Route::post('ingrediente/actualizar/{id}','Productos\IngredientController@update')->name('actualizar_ingrediente');
	Route::get('ingrediente/eliminar/{id}','Productos\IngredientController@destroy')->name('eliminar_ingrediente');
	/*Rutas Producto Ingrediente*/
	Route::get('proding/crear','Productos\ProductIngredientController@create')->name('crear_pizza');
	Route::post('proding/guardar','Productos\ProductIngredientController@store')->name('guardar_pizza');
	Route::get('proding/modificar/{id}','Productos\ProductIngredientController@edit')->name('modificar_pizza');
	Route::post('proding/actualizar/{id}','Productos\ProductIngredientController@update')->name('actualizar_pizza');
	/*Rutas Pedidos*/
	Route::get('pedido','OrderController@index')->name('pedido');
	Route::get('pedido/crear','OrderController@create')->name('crear_pedido');
	Route::post('pedido','OrderController@store')->name('guardar_pedido');
	Route::get('pedido','OrderController@search')->name('buscar_pedido');
	Route::get('pedido/detallar/{id}','OrderController@show')->name('detallar_pedido');
	Route::get('pedido/finalizar/{id}','OrderController@end')->name('finalizar_pedido');
	Route::get('pedido/eliminar/{id}','OrderController@destroy')->name('eliminar_pedido');
	/*Rutas Reportes*/
	Route::get('reporte','OrderController@listadoReporte')->name('reporte');
	Route::post('reporte/buscar','OrderController@busquedaReporte')->name('buscar_reporte');
	Route::post('reporte/generar','OrderController@generarReporte')->name('generar_reporte');
});
	/*Ruta de Promociones*/
	Route::get('promocion', 'PromocionController@index')->name('promocion');
	Route::get('promocion/crear', 'PromocionController@crear')->name('crear_promocion');
	Route::post('promocion', 'PromocionController@guardar')->name('guardar_promocion');
	Route::post('promocion/{promocion}', 'PromocionController@ver')->name('ver_promocion');
	Route::get('promocion/{id}/editar', 'PromocionController@editar')->name('editar_promocion');
	Route::put('promocion/{id}', 'PromocionController@actualizar')->name('actualizar_promocion');
	Route::delete('promocion/{id}', 'PromocionController@eliminar')->name('eliminar_promocion');

	/*Ruta del apartado Visual*/
	Route::get('/', 'PublicidadController@index')->name('inicio');
	Route::get('/menu', 'PublicidadController@menu')->name('menu_p');
	Route::get('/promociones', 'PublicidadController@promocion')->name('promocion_p');
	Route::get('/nosotros', 'PublicidadController@nosotros')->name('nosotros');
	
	/*Ruta Cocina*/
	Route::get('cocina','CocinaController@index')->name('cocina');
	Route::get('cocina','CocinaController@search')->name('buscar_cocina');
	Route::get('cocina/detallar/{id}','CocinaController@show')->name('detallar_cocina');
