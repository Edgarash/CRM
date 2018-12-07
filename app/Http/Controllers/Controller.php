<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AjaxErrorResponse($message = null, $code = 10, $title = 'ERROR') {
        return json_encode([
            'code' => $code,
            'title' => $title,
            'message' => $message != null ? $message.' no especificado' : 'No se especificó'
        ]);
    }

    public function AjaxResponse($message = null, $code = 1, $title = 'SUCCESS') {
        return json_encode([
            'code' => $code,
            'title' => $title,
            'message' => $message != null ? json_encode($message) : null
        ]);
    }

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
