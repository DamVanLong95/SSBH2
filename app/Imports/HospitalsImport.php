<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Model\Hospital;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use DB;

class HospitalsImport implements ToModel,WithHeadingRow,WithChunkReading
{
    public function model(array $row)
    {
        // dd($row);
        DB::beginTransaction();
        try {
            Hospital::create([
                'product_id'  => $row['id_san_pham'],
                'location_id' => $row['id_tinh_thanh'],
                'district_id' => $row['quan'],
                'name' => $row['ten_benh_vien'],
                'address' => $row['dia_chi'],
                'phonenumber' => $row['so_dien_thoai'],
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
