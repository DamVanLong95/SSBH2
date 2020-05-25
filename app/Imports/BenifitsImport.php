<?php

namespace App\Imports;

use App\Benifit;
use Maatwebsite\Excel\Concerns\ToModel;

class BenifitsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Benifit([
            //
        ]);
    }
}
