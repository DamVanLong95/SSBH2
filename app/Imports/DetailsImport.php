<?php

namespace App\Imports;

use App\Detail;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use DB;
class DetailsImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {
        // dd($row);
        DB::beginTransaction();
        try {
            Detail::create([
                'company_id'    => $row['id_cong_ty'],
                'location_id'   => $row['id_khu_vuc'],
                'content'       => $row['chi_tiet'],
                'address'       => $row['dia_chi'],
                'phone'         => $row['so_dien_thoai']
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
