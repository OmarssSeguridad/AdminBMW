<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $table='productos';


	protected $primaryKey='id_producto';	

	protected $fillable=['name','precio','stock','id_categoria',];
}
