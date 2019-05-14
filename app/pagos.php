<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pagos extends Model
{
    protected $table='pagos';


	protected $primaryKey='id_pago';	
	protected $fillable=['id_motociclista','fecha','id_modoPago'];

}