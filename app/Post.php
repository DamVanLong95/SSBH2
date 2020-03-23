<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =['title','auth_id','slug','content','posted_at','avatar'];
    protected  $table = 'posts';
    public function user(){
        return $this->belongsTo('App\User','author_id');
    }
}
