<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table="posts";
    protected $fileable=[
    'title',
    'description',
    'img',
    'content',
    'likes',
    'slug',
    'user_id',
    'categorie_id'
    ];
}
