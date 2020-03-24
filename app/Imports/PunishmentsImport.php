<?php

namespace App\Imports;

use App\punishment;
use Maatwebsite\Excel\Concerns\ToModel;

class PunishmentsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        dd($row);
        return new punishment([
            //
        ]);
    }
}
