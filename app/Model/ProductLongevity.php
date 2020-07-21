<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductLongevity extends Model
{
    //
    protected  $table = 'product_longevities';
    public function company(){
        return $this->belongsTo('App\Company');
    }
    public function type(){
        return $this->hasMany('App\Model\TypeLongevity');;
    }
}
