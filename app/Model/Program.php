<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Program extends Model
{
    //
    protected $guarded = ['id'];
    protected  $table = 'programs';
    public function product(){
        return $this->belongsTo('App\Product');
    }
}
