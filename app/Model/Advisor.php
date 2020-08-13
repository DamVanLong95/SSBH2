<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Advisor extends Model
{
    //
    protected $guarded=['id'];
    protected $table = 'advisors';
    // public $timestamps = false;
}
