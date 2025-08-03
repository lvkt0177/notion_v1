<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_list_id',
        'title',
        'description',
        'is_done',
        'due_date',
        'completed_at',
    ];

    public function taskList()
    {
        return $this->belongsTo(TaskList::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'task_tag');
    }

    public function reminders()
    {
        return $this->hasMany(Reminder::class);
    }
}
