<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class todolist extends Model
{
    protected $fillable = ['taskAuthor', 'taskTitle', 'taskDescription', 'taskDate'];
}
