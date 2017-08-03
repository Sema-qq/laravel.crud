<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'description'];

    public static function create($request)
    {
        $task = new Task();
        $task->fill($request);

        return $task->save();
    }
}
