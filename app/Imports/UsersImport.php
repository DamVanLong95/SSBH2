<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithValidation;

class UsersImport implements ToModel,WithValidation
{
    public function model(array $row)

    {
        DB::beginTransaction();

            try {
                User::create([
                    'name' => $row[1],
                    'email' => $row[2],
                    'password' =>Hash::make($row[0]) ,
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
            '1' =>'required',
            '2' => 'required|unique:users,email'
        ];

    }
    public function chunkSize(): int
    {
        return 500;
    }



}
