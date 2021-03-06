<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitaTransporte extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'solicitartransporte';
	protected $primaryKey = 'id';
    //public $timestamps = false;

    protected $fillable = [
        'id',
        'cedula',
        'name',
        'apellido1',
        'apellido2',
        'tipo',
        'cantidad',
        'ubicacion',
    ];
}
