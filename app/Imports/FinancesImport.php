<?php

namespace App\Imports;

use App\finances;
use Maatwebsite\Excel\Concerns\ToModel;

class FinancesImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new finances([
            //
        ]);
    }
}
