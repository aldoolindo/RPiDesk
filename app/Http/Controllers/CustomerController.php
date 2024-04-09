<?php

namespace App\Http\Controllers;

use Excel;
use App\Imports\CustomerImport;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('site.importacoes');
    }

    public function importExcelData(Request $request)
    {
        $request->validate([
            'import_file'=> [
                'required',
                'file'
            ],
        ]);

        Excel::import(new CustomerImport, $request->file('import_file'));

        return redirect()->back()->with('status', 'Imported Succssfully');

    }
}
