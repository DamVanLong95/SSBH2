<?php

namespace App\Imports;

use App\Company;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class CompaniesImport implements ToModel, WithHeadingRow,WithValidation
{

    public function model(array $row)
    {

        DB::beginTransaction();
        try {
            Company::create([
                'name' => $row['name'],
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
    public function rules(): array
    {
        return [
            'name'=>'required|unique:companies'
        ];

    }
}
