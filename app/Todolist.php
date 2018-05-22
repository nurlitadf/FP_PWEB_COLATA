<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    //
    protected $fillable = [
        'deadline','board_id', 'keterangan', 'status',
    ];
}
