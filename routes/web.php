<?php

// Route::get('/', function (){
//     return view('auth/login');
// });
// Route::get('/welcome', 'TestController@welcome');
//Route::get('mail/send', 'TestController@correo');// Email related routes

//----*****************************************Manuel Gastelum*********************************------
//rutas de autentificacion

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
 //fin

Route::get('/DetallesOrden/{id}', 'TestController@cargarDetalles')
	->name('Detalle');

Route::get('/autorizaciones', 'TestController@cargarAuto')
->name('Autorizaciones');

Route::get('/autorizaciones', 'TestController@cargarAuto')
	->name('Autorizaciones');

Route::get('/calificarServicio', 'TestController@cargarCalificaciones')
	->name('Servicios_Calificados');

Route::get('/detalleOrden', 'TestController@detallesOrden')
	->name('detallesOrden');

Route::get('/', 'HomeController@index')->name('/');

Route::get('/misOrdenes', 'TestController@ordenes');

Route::get('/miHistorial', 'TestController@miHist');


//Manuel Villanueva

Route::get('/Empleados','EmpleadoController@index')->name('Empleados');
Route::get('/Productos','ProductoController@index')->name('Productos');
Route::get('/Marcas','MarcasController@index')->name('Marcas');
Route::get('/Estados','EstadosController@index')->name('Estados');
Route::get('/Equipos','EquiposController@index')->name('Equipos');
Route::get('/Servicios','ServiciosController@index')->name('Servicios');
Route::get('/RegistrarEmpleado','RegistrarEmpleadoController@index')->name('RegistrarEmpleado');
Route::post('/RegistrarEmpleado','RegistrarEmpleadoController@create')->name('AgregarEmpleado');

//Maribel Montes
Route::get('/Reportes/Ordenes/{id}', 'ReportesController@showOrden')
	->name('ReporteOrden');
	
Route::get('/Reportes/Ordenes','ReportesController@MostrarOrdenes' )
    ->name('ReporteOrdenes');

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


