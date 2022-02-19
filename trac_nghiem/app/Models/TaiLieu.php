<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TaiLieu
 * 
 * @property int $id
 * @property string $content
 * @property string $title
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class TaiLieu extends Model
{
	protected $table = 'tai_lieu';

	protected $fillable = [
		'content',
		'title'
	];
}
