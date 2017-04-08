<?php
namespace App\Modelo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class Empresa extends Model 
{
    use SoftDeletes, HasApiTokens;


    protected $table = 'Empresa';

    protected $fillable = [
        'Empresaid',
        'Nombre',
        'Ciudad',
        'Telefono'
    ];

}