<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //
    // Apuntar a una tabla
	protected $table='categoria';
	//Especificar la clave primaria
	protected $primaryKey='idcategoria';

	//Deshabilitar marcado de registros
	public $timestamps=false;

	//Defino los campos que contendran algun valor

	protected $fillable=[
		'nombre',
		'descripcion',
		'condicion'
	];



}
