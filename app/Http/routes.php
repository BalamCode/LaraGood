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

//La ruta de tipo resource permite agrupar todas las operaciones CRUD

Route::resource('almacen/categoria','CategoriaController');
Route::resource('almacen/articulo','ArticuloController');

Route::get('reporte',function()
{
	//return view('almacen.categoria.reporte');
	$categorias=App\Categoria::All();
	
	$pdf=PDF::loadview('almacen.categoria.reporte',["categorias"=>$categorias]);
	
	return $pdf->download('reporte.pdf');
}
);




