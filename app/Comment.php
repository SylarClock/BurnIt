<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

    protected $fillable = [
        'description', 'rate', 'active', 'user_id', 'post_id',
    ];
}
