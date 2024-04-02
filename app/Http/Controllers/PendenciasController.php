<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendenciasController extends Controller
{
    public function pendencias() {
        return view('site.pendencias');
    }
}
