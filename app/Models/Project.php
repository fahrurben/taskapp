<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'code',
    ];

    public function tasks()
    {
        $this->hasMany(Task::class, 'task_id', 'id');
    }
}
