<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SickGroup extends Model
{
    //
    protected $guarded = ['id'];
    protected  $table = 'group_sicks';
}
