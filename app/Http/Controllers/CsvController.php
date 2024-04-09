<?php

namespace App\Http\Controllers;

use App\Imports\ProtocolImport;
use Illuminate\Http\Request;
use App\Models\Protocols;
use Maatwebsite\Excel\Facades\Excel;

class CsvController extends Controller
{
    public function index() {
        $protocols = Protocols::all();
        return view('pendencias', compact('protocols'));
    }

    public function importacoes(Request $request){
        $request->validate([
            'documento_csv' => 'required|mimes:csv'
        ]);  

        try{
            $file = $request->file('documento_csv');
            Excel::import(new ProtocolImport, $file);
            return redirect()->route('index');
        } catch(\Exception $e) {
            dd("Error");
        }
    }

    public function exportacoes(){
        dd("TODO");
    }
}
