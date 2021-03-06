<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //

    protected $table = 'posts';

    protected $fillable = [
        'title', 'descripcion', 'portada', 'description', 'block', 'block2', 'block3', 'path_media', 'path_media2', 'path_media3', 'rate', 'category_id', 'activo',
        'user_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'updated_at',
    ];
}
