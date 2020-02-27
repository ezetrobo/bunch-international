<?php

/**
 * Ruta del home
 */

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/error', 'ErrorController@error');


/**
 * Rutas de Catalogo
 */

/**
* Rutas del carrito
*/

/**  
* csrf Token
*/
Route::get('refresh-csrf', function(){
    return csrf_token();
});