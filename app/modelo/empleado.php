<?php
namespace App\Modelo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Passport\HasApiTokens;

class Empleado extends Model 
{
    use SoftDeletes, HasApiTokens;


    protected $table = 'Empleado';

    protected $fillable = [
        'Empleadoid',
		'Empresaid',
        'Nombres',
        'Apellidos',
        'Telefono'
		'Cedula',
        'Area',
        'Sueldo',
        'Telefono'
		'timestamps'
    ];

}