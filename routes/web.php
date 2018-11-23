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
})->name('home');

//Manuel Gastelum



//Manuel Villanueva



//Maribel Montes
Route::get('Reportes/Orden/{id}', 'ReportesController@showOrden')
    ->name('ReporteOrden');
Route::get('/Ordenes','ReportesController@MostrarOrdenes' )
    ->name('Ordenes');

//Adalberto Palafox



//Edgar Cisneros

Route::get('/Fallas', 'FallaController@index')
	->name('Fallas');

Route::get('/Fallas/Registrar', 'FallaController@nuevaFalla')
	->name('registrarFalla');

Route::get('/Forms/Registrar/Falla', 'FallaController@formRegistrarFalla')
	->name('formRegistrarFalla');

Route::post('/Fallas/Accion', 'FallaController@accion');


//Rutas de la plantilla

Route::get('/charts', function()
{
	return View::make('mcharts');
});

Route::get('/tables', function()
{
	return View::make('table');
});

Route::get('/forms', function()
{
	return View::make('form');
});

Route::get('/grid', function()
{
	return View::make('grid');
});

Route::get('/buttons', function()
{
	return View::make('buttons');
});


Route::get('/icons', function()
{
	return View::make('icons');
});

Route::get('/panels', function()
{
	return View::make('panel');
});

Route::get('/typography', function()
{
	return View::make('typography');
});

Route::get('/notifications', function()
{
	return View::make('notifications');
});

Route::get('/blank', function()
{
	return View::make('blank');
});

Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/documentation', function()
{
	return View::make('documentation');
});
