<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class imagenes extends Model
{
    	protected $table='imagenes';


	protected $primaryKey='id_imagenes';	

	protected $fillable=['name','ruta'];}
