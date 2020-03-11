<?php

namespace App\Imports;

use App\Summary;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SummariesImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        DB::beginTransaction();
//        dd($row);
        try {
            Summary::create([
                'company_id'    => $row['id_cong_ty'],
                'uses'          => $row['muc_dich_su_dung'],
                'brand_car'     => $row['hang_xe'],
                'cate_car'      =>$row['loai_xe'] ,
                'year_sx'       =>$row['nam_san_xuat'],
                'exception'     =>$row['dieu_khoan_loai_tru'],
                'note_more'     =>$row['ghi_chu'],
                'price_car'     =>$row['gia_tri_xe']
            ]);

            DB::commit();
        } catch (Exceptions $e) {
            DB::rollBack();
            Log::debug($e);
        }

    }
    public function headingRow(): int
    {
        return 2;
    }
}
