<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class motociclistas extends Model
{
    protected $table='motociclistas';


	protected $primaryKey='id_motociclista';	

	protected $fillable=['name','ap','am','direccion','fecNac','telefono','email'];
}
