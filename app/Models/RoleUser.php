<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RoleUser
 * 
 * @property int $id
 * @property int $user_id
 * @property int $role_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Role $role
 * @property User $user
 *
 * @package App\Models
 */
class RoleUser extends Model
{
	protected $table = 'role_user';

	protected $casts = [
		'user_id' => 'int',
		'role_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'role_id'
	];

	public function role()
	{
		return $this->belongsTo(Role::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
