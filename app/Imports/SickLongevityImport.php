<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use DB;
use App\Model\SickLongevity;
class SickLongevityImport implements ToModel,WithHeadingRow
{
   public function model(array $row){

        DB::beginTransaction();
        try {
            $sick = SickLongevity::create([
                'insurance'     => $row['bao_hiem'],
                'company_id'    => $row['id_doanh_nghiep'],
                'group_sick_id' => $row['nhom_benh'],
                'content'       => $row['noi_dung']

            ]);
            $sick->save();
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
