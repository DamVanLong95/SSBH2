<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use DB;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Model\Longevity;

class LongevitiesImport implements ToModel, WithHeadingRow
{
    
    public function model(array $row)
    {
        dd($row);
        DB::beginTransaction();
        try {
            Longevity::create([
                'product_id' => $row['id_san_pham_nhan_tho'],
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
