<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detallesRuta extends Model
{
	protected $table='detalles_rutas';


	protected $primaryKey='id_detalleruta';	

	protected $fillable=['id_ruta','id_motociclista','status'];

}
