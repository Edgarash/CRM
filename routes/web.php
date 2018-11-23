<?php


Route::get('/', 'TestController@welcome');

Route::get('/misOrdenes', 'TestController@ordenes');

Route::get('/miHistorial', 'TestController@miHist');

/*Route::get('/welcome', function (){
    return view('welcome2');
})->name('Incio');*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Manuel Gastelum



//Manuel Villanueva



//Maribel Montes



//Adalberto Palafox



//Edgar Cisneros



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