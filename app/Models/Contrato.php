<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $table = 'contratos';
    protected $fillable = ['id','tipo_contrato','envolvido1','envolvido2','tabeliao', 'data_contrato','valor'];
}
