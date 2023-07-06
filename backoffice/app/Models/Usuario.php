<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $fillable = ['foto', 'nome','sobrenome','email','cpf', 'uf', 'celular', 'senha', 'idade', 'sexo', 'tipo_usuario', 'status'];
    public $timestamps = false;


}
