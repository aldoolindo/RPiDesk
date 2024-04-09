<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportacoesController extends Controller
{
    public function importacoes() {
        return view('site.importacoes');
    }
}
