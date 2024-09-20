<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Detalleproducto
 * 
 * @property int $idDetalle
 * @property int $id_producto
 * @property string $elementos
 * @property string $unidades
 * @property int $cantidad
 * 
 * @property Producto $producto
 *
 * @package App\Models
 */
class Detalleproducto extends Model
{
	protected $table = 'detalleproducto';
	protected $primaryKey = 'idDetalle';
	public $timestamps = false;

	protected $casts = [
		'id_producto' => 'int',
		'cantidad' => 'int'
	];

	protected $fillable = [
		'id_producto',
		'elementos',
		'unidades',
		'cantidad'
	];

	public function producto()
	{
		return $this->belongsTo(Producto::class, 'id_producto');
	}
}
