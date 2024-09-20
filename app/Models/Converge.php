<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;


class Converge extends Model
{
	protected $table = 'converge';

	protected $fillable = [
		'nombre_noticia', 
		'descripcion_noticia', 
		'foto', 
		'video', 
		'opcion', 
		'author', 
		'url'
	];
	
}