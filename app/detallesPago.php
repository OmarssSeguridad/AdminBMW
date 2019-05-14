<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detallesPago extends Model
{
    protected $table='detalles_pagos';


	protected $primaryKey='id_detalle';	

	protected $fillable=['id_pago','id_producto','cantidad','precio'];

}
