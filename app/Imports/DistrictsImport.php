<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Model\District;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use DB;

class DistrictsImport implements ToModel,WithHeadingRow,WithChunkReading
{
    public function model(array $row)
    {
       // dd($row);
        DB::beginTransaction();
        try {
            District::create([
                'location_id'   => $row['id_tinh_thanh'],
                'district'      => $row['quan'],
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
    public function chunkSize(): int
    {
        return 1000;
    }
}
