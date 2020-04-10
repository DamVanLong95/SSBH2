<?php

namespace App\Imports;

use App\Punishment;
use Maatwebsite\Excel\Concerns\ToModel;
use DB;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PunishmentsImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {
        DB::beginTransaction();
        // dd($row);
        try {
            Punishment::create([
                'company_id'         => $row['id_cong_ty'],
                'sanction'           => $row['che_tai_trong_cac_truong_hop'],
                'content'            => $row['ghi_chu_ve_che_tai'],
                'rate_star_ct'       => $row['danh_gia'],
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
