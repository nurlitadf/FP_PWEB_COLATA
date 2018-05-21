<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    protected $fillable = [
        'title', 'username', 'background','user_id'
    ];

    public $timestamps = false;
}
