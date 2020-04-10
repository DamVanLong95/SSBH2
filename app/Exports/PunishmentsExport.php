<?php

namespace App\Exports;
use App\Punishment;

use Maatwebsite\Excel\Concerns\FromCollection;

class PunishmentsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return Punishment::orderBy('created_at','DESC')->get();
    }
}
