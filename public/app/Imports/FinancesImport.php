<?php

namespace App\Imports;

use App\Finance;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Support\Facades\DB;
class FinancesImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        DB::beginTransaction();
        try {
            Finance::create([

                'company_id' => $row['id_cong_ty'],
                'finance'   => $row['nang_luc_tai_chinh'],
                'money'     => $row['so_tien']
            ]);

            DB::commit();
        } catch (Exceptions $e) {
            DB::rollBack();
            Log::debug($e);
        }
       
    }
    public function chunkSize(): int
    {
        return 500;
    }
    public function headingRow(): int

    {
        return 1;
    }
  
}
