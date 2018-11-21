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
// use Anouar\Fpdf\Facades\Fpdf;

Route::get('/nel', function() {
	$pdf = new Fpdf();
	$pdf::AddPage();
	$pdf::SetFont('Arial','B',18);
	$pdf::Cell(0,10,"Title",0,"","C");
	$pdf::Ln();
	$pdf::Ln();
	$pdf::SetFont('Arial','B',12);
	$pdf::cell(25,8,"ID",1,"","C");
	$pdf::cell(45,8,"Name",1,"","L");
	$pdf::cell(35,8,"Address",1,"","L");
	$pdf::Ln();
	$pdf::SetFont("Arial","",10);
	$pdf::cell(25,8,"1",1,"","C");
	$pdf::cell(45,8,"John",1,"","L");
	$pdf::cell(35,8,"New York",1,"","L");
	$pdf::Ln();
	$pdf::Output();
	exit;
});

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

Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/documentation', function()
{
	return View::make('documentation');
});