<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdmModulos extends Model
{
    protected $table = 'adm_modulos';
    protected $primaryKey = 'id';
    protected $fillable = ['nomePrimario','nomeSecundario','icone', 'rota_modulo'];
    public $timestamps = false;


}
