<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 * 
 * @property int $idProducto
 * @property string $nombre
 * @property string $imagen
 * @property int $precio
 * @property string $descripcion
 * @property string|null $informacionA
 * @property string $opcion
 * 
 * @property Collection|Detalleproducto[] $detalleproductos
 *
 * @package App\Models
 */
class Producto extends Model
{
	protected $table = 'productos';
	protected $primaryKey = 'idProducto';
	public $timestamps = false;

	protected $casts = [
		'precio' => 'int'
	];

	protected $fillable = [
		'nombre',
		'imagen',
		'precio',
		'descripcion',
		'informacionA',
		'opcion'
	];

	public function detalleproductos()
	{
		return $this->hasMany(Detalleproducto::class, 'id_producto');
	}
}
