<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as AuthUser;
/**
 * Class User
 * 
 * @property int $id
 * @property string $username
 * @property string $birth
 * @property string $unit
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|De[] $des
 *
 * @package App\Models
 */
class User extends AuthUser
{
	protected $table = 'users';

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'username',
		'birth',
		'unit',
		'password',
		'remember_token'
	];

	public function des()
	{
		return $this->hasMany(De::class, 'id');
	}
}
