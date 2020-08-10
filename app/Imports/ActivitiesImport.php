<?php

namespace App\Imports;

use App\Activity;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use DB;
class ActivitiesImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        DB::beginTransaction();
        try {
            Activity::create([
                'company_id'    => $row['id_cong_ty'],
                'location_id'   => $row['id_khu_vuc'],
                'amount'        => $row['so_luong'],
            ]);

            DB::commit();
        } catch (Exceptions $e) {
            DB::rollBack();
            throw new Exception($e->getMessage());
        }
    }
    public function headingRow(): int

    {
        return 1;
    }
}
