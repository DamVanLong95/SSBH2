<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Product;
class ProductsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return Product::all();
    }
}
