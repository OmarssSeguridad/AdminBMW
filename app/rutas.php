<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rutas extends Model
{
    protected $table='rutas';


	protected $primaryKey='id_ruta';	

	protected $fillable=['name','detalle'];
}
