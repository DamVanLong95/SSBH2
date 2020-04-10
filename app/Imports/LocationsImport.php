<?php

namespace App\Imports;

use App\Location;
use Maatwebsite\Excel\Concerns\ToModel;
use DB;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class LocationsImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {

        DB::beginTransaction();
        try {
            Location::create([
                'name' => $row['khu_vuc'],
            ]);

            DB::commit();
        } catch (Exceptions $e) {
            DB::rollBack();
            Log::debug($e);
        }
    }
    public function headingRow(): int

    {
        return 1;
    }
}
