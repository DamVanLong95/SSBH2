<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded = ['id'];
    protected  $table = 'products';
    public function company(){
        return $this->belongsTo('App\Company','company_id');
    }
}
