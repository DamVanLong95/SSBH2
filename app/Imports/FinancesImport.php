<?php

namespace App\Imports;

use App\Finance;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Support\Facades\DB;
class FinancesImport implements ToModel,WithValidation
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        DB::beginTransaction();
        // dd($row[0]);
       
        try {
            Finance::create([
                'company_id' => $row[0],
                'finance'   => $row[1],
                'money'     => $row[2]
            ]);

            DB::commit();
        } catch (Exceptions $e) {
            DB::rollBack();
            Log::debug($e);
        }
       
    }
    public function rules(): array
    {
        return [
            '0'=>'required',
            '1'=>'required',
            '2'=>'required'
        ];

    }
    public function chunkSize(): int
    {
        return 500;
    }
  
}
