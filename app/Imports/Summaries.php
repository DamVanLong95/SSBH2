<?php

namespace App\Imports;

use App\Summary;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Summaries implements ToModel,WithHeadingRow
{

    public function model(array $row)
    {
        DB::beginTransaction();
//        dd($row['don_vi_bao_hiem']);
        try {
            Summary::create([
                'dvbaohiem' => $row['don_vi_bao_hiem'],
                'mdsudung'  => $row['muc_dich_su_dung'],
                'hxe'       => $row['hang_xe'],
                'loaixe'    =>$row['loai_xe'] ,
                'namsx'     =>$row['nam_san_xuat'],
                'dkloaitru' =>$row['dieu_khoan_loai_tru'],
                'ghchu'     =>$row['ghi_chu'],
                'giaxe'     =>$row['gia_tri_xe']
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
