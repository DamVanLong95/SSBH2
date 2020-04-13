<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Exclusion extends Model
{
    //
    protected $guarded=['id'];
    protected $table = 'exclusions';
}
