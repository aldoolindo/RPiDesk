<?php

namespace App\Imports;

use App\Models\Protocols;
use Maatwebsite\Excel\Concerns\ToModel;

class ProtocolImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Protocol([
            'ptc_id' => $row['ID'],
            'ptc_titulo' => $row['Título'],
            'ptc_situacao' => $row['Situação'],
            'ptc_usucadastro' => $row['Responsável Cadastro'],
            'ptc_datacadastro' => $row['Data Cadastro'],
        ]);
    }
}
