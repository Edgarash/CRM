<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orden;
class AutorizacionesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


}
