<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TypeLongevity extends Model
{
    //
    protected $guarded = ['id'];
    protected  $table = 'longevities_types';
    public function product(){
        return $this->belongsTo('App\Model\ProductLongevity');
    }

}
