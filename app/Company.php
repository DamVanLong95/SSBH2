<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Company extends Model
{
    //
    protected $guarded = ['id'];
    protected  $table = 'companies';
    public function products(){
        return $this->hasMany('App\Product');
    }
    public function types(){
        return $this->hasMany('App\Model\CompanyType');
    }

}
