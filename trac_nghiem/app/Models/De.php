<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class De
 * 
 * @property int $de_id
 * @property string $mark
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User $user
 * @property Collection|DeCauhoi[] $de_cauhois
 *
 * @package App\Models
 */
class De extends Model
{
	protected $table = 'de';
	protected $primaryKey = 'de_id';

	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'mark',
		'id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'id');
	}

	public function de_cauhois()
	{
		return $this->hasMany(DeCauhoi::class);
	}
}
