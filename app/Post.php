<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable =['title','auth_id','slug','content','posted_at'];
    protected  $table = 'posts';
}
