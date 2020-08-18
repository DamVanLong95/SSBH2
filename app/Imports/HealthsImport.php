<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Model\Health;
use Maatwebsite\Excel\Concerns\ToModel;
use DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
class HealthsImport implements ToCollection,WithHeadingRow,WithChunkReading
{
    public function collection(Collection $collection)
    {
        // dd($row);
        DB::beginTransaction();
        foreach($collection as $key=> $row){
            if($this->checkEndFile($row)) break;
            try {
                Health::create([
                    'product_id' => $row['id_san_pham'],
                    'program_id' => $row['id_chuong_trinh'],
                    'comparison'  => $row['chi_tieu_so_sanh'],
                    'content'     => $row['noi_dung'],
                    'level'       => $row['phan_cap']
                ]);
    
                DB::commit();
            } catch (Exceptions $e) {
                DB::rollBack();
                Log::debug($e);
            }
        }
       
    }
    public function headingRow(): int

    {
        return 1;
    }
    public function chunkSize(): int
    {
        return 1000;
    }
    private function checkEndFile($row) {
        return (!$row['id_san_pham'] && 
                !$row['id_chuong_trinh'] &&  
                !$row['chi_tieu_so_sanh'] && 
                !$row['noi_dung'] && 
                !$row['postal_code'] && 
                !$row['phan_cap'] 
            );
    }
}
