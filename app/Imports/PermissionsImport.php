<?php

namespace App\Imports;

use App\Permission;
use Maatwebsite\Excel\Concerns\ToModel;

class PermissionsImport implements ToModel
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
            Permission::create([
                vdsfs
            ]);

            DB::commit();
        } catch (Exceptions $e) {
            DB::rollBack();
            Log::debug($e);
        }
    }
}
