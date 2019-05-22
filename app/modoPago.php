<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modoPago extends Model
{
    protected $table='modo_pagos';


	protected $primaryKey='id_modoPago';	
	protected $fillable=['name','detalles'];
}
