<?php

namespace App\Imports;

use App\Permission;
use Maatwebsite\Excel\Concerns\ToModel;
use DB;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PermissionsImport implements ToModel ,WithHeadingRow
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
            Permission::create([
                'company_id'         => $row['id_cong_ty'],
                'rules_owner'        => $row['quyen_va_nghia_vu'],
                'note_rule'          => $row['ghi_chu_ve_quyen'],
                'rate_star_nv'       => $row['danh_gia']
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
