<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $table = 'TableName';
    protected $fillable = ['title', 'body'];
}
