<?php

namespace App\Exports;
use App\Brand;

use Maatwebsite\Excel\Concerns\FromCollection;

class BrandsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return Brand::select('id','name')->where('status','=',1)->get();
    }
}
