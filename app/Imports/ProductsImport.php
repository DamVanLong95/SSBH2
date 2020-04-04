<?php

namespace App\Imports;

use App\products;
use Maatwebsite\Excel\Concerns\ToModel;
use DB;

class ProductsImport implements ToModel
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
                    'company_id' => $row['id_cong_ty'],
                    'location_id'   => $row['id_khu_vuc'],
                    'amount'     => $row['so_luong'],
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
