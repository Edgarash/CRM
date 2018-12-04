<?php

// Route::middleware('auth')->get('/', function (){
//     return view('welcome');
// });

//Manuel Gastelum

Route::get('/welcome', 'TestController@welcome');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/misOrdenes', 'TestController@ordenes');

Route::get('/miHistorial', 'TestController@miHist');

//Manuel Villanueva


//Maribel Montes
Route::get('/Reportes/Ordenes/{id}', 'ReportesController@showOrden')
	->name('ReporteOrden');

Route::get('/Reportes/Ordenes','ReportesController@MostrarOrdenes' )
    ->name('ReporteOrdenes');

Route::get('/Reportes/Productividad', 'ReportesController@MostrarProductividad')
    ->name('ReporteProductividad');

Route::get('/Reportes/EquiposEstados', 'ReportesController@MostrarEquiposEstado')
->name('ReporteEquiposEstado');

Route::get('/Reportes/Productividad/O', 'ReportesController@Productividad');

//Adalberto Palafox


//Edgar Cisneros

Route::get('/Ordenes', 'OrdenesController@index')
	->name('Ordenes');

Route::get('/Fallas', 'FallasController@index')
	->name('Fallas');

Route::get('/Fallas/Registrar', 'FallasController@nuevaFalla')
	->name('registrarFalla');

Route::get('/Forms/Registrar/Falla', 'FallasController@formRegistrarFalla')
	->name('formRegistrarFalla');

Route::delete('/Fallas/{falla}', 'FallasController@action');


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



Route::get('/documentation', function()
{
	return View::make('documentation');
});
