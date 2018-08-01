

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
Route::get('/imagen', function () {
    return view('imagen/index');
});
Route::post('/imagen','ImagenController@store');
Route::get('/imagen/listaImagen',[
	'uses'=>'ImagenController@index',
	'as'=>'imagen.listaImagen'
]
);
Route::get('/tipoGasto',[
	'uses'=>'GastoController@index',
	'as'=>'tipoGasto.index'
]
);
Route::post('/tipoGasto',[
	'uses'=>'GastoController@saveGasto',
	'as'=>'tipoGasto.index'
]
);


