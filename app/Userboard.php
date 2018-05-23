<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userboard extends Model
{
    protected $fillable = [
        'board_id', 'user_id',
    ];
}
