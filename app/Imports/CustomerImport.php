<?php

namespace App\Imports;

Use App\Models\Customer;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

// use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CustomerImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            Customer::create([
                'ptc_situacao' => $row[0],
                'ptc_id' => $row[1],
                'ptc_dtcadastro' => $row[2],
                'ptc_respcadastro' => $row[3],
                'ptc_titulo' => $row[4],
                // 'ptc_status' => $row[5],
                // 'ptc_nota' => $row[6],
            ]);
        }
    }
}
