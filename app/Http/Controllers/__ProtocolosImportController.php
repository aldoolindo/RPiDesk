<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;


class ProtocolosImportController extends Controller
{
    public function import() 
    {
        Excel::import(new UsersImport, 'automacao.xlsx');
        
        return redirect('/')->with('success', 'All good!');
    }
}
