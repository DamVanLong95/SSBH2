<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    //
    protected $table='treatments';
    protected $guarded = ['id'];
    public function advisor(){
        return $this->belongsTo('App\Model\Advisor');
    }
}
