<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use DB;
use App\Model\Exclusion;
class ExclusionsImport implements ToModel,WithHeadingRow
{
    public function model(array $row)
    {
        // dd($row);
        DB::beginTransaction();
        try {
            Exclusion::create([
                'product_id'=>$row['id_san_pham'],
                'rules'   => $row['dieu_khoan_loai_tru'],
                'content' => $row['noi_dung'],
                'note'    => $row['ghi_chu'],
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
