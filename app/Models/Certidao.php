<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certidao extends Model
{
    protected $table = 'certidoes';
    protected $fillable = ['id','tipo_certidao','envolvido','envolvido2','tabeliao','data_certidao'];
}
