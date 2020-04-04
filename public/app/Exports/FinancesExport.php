<?php

namespace App\Exports;
use App\Finance;

use Maatwebsite\Excel\Concerns\FromCollection;

class FinancesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return Finance::orderBy('created_at','desc')->get();
    }
}
