<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{   
    protected $TABLE='likes';
    protected $filleable=[
        'post_id'
    ];
}
