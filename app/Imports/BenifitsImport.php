<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use DB;
use App\Model\Benifit;
class BenifitsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        DB::beginTransaction();
        // dd($row);
        try {
            Benifit::create([
                'product_longevity_name' => $row['ten_san_pham_nhan_tho'],
                'product_longevity_id' => $row['id_san_pham_nhan_tho'],
                'product_group_name' => $row['nhom_spbt'],
                'product_group_id'   => $row['id_nhom_san_pham_bo_tro'],
                'product_more_name'  => $row['san_pham_bo_tro'],
                'group_child' => $row['chi_tieu_chung'],
                'group_child_id'  => $row['id_chi_tieu_chung'],
                'content' => $row['noi_dung']
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
