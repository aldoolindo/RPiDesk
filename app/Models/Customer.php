<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'protocolos';

    protected $fillable = [
        'ptc_situacao',
        'ptc_id',
        'ptc_dtcadastro',
        'ptc_respcadastro',
        'ptc_titulo',
        'ptc_status',
        'ptc_nota',
    ];
}
