<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orden;

class OrdenesController extends Controller
{
    function index() {
        $ordenes = Orden::paginate(5);
        return view('ordenes.index', compact('ordenes'));
    }
}
