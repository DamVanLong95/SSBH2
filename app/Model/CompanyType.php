<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CompanyType extends Model
{
    //
    protected $guarded = ['id','type'];
    protected  $table = 'companies_types';
    
}
