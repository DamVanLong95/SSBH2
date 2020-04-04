<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Activity;
class ActivitiesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return Activity::all();
    }
}
