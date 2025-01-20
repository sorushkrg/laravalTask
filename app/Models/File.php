<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class File
 * 
 * @property int $id
 * @property int $task_id
 * @property string $file_path
 * @property string $original_name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Task $task
 *
 * @package App\Models
 */
class File extends Model
{
	protected $table = 'files';

	protected $casts = [
		'task_id' => 'int'
	];

	protected $fillable = [
		'task_id',
		'file_path',
		'original_name'
	];

	public function task()
	{
		return $this->belongsTo(Task::class);
	}
}
