<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $fillable = [
        'name',
        'title',
        'review',
        'rating',
        'img',
    ];
}
