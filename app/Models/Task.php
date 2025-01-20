<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Task
 * 
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $description
 * @property int $status
 * @property Carbon|null $due_date
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 * @property Collection|File[] $files
 *
 * @package App\Models
 */
class Task extends Model
{
	protected $table = 'tasks';

	protected $casts = [
		'user_id' => 'int',
		'status' => 'int',
		'due_date' => 'datetime'
	];

	protected $fillable = [
		'user_id',
		'title',
		'description',
		'status',
		'due_date'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function files()
	{
		return $this->hasMany(File::class);
	}
}
