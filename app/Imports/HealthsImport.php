<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Model\Health;
use Maatwebsite\Excel\Concerns\ToModel;
use DB;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class HealthsImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {
        // dd($row);
        DB::beginTransaction();
        try {
            Health::create([
                'product_id' => $row['id_san_pham'],
                'program_id' => $row['id_chuong_trinh'],
                'comparison'  => $row['chi_tieu_so_sanh'],
                'content'     => $row['noi_dung'],
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
