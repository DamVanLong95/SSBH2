<?php

namespace App\Imports;

use App\Summation;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use DB;
class SummationsImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        DB::beginTransaction();
        // dd($row['2017']);
        try {
            Summation::create([
                'brand_id' => $row['id_hang_xe'],
                'cate_car' => $row['loai_xe'],
                'price_ten' => $row['2010'],
                'price_eleven' => $row['2011'],
                'price_twelve' => $row['2012'],
                'price_thirt' => $row['2013'],
                'price_four' => $row['2014'],
                'price_five' => $row['2015'],
                'price_six' => $row['2016'],
                'price_seven' => $row['2017'],
                'price_eight' => $row['2018'],
                'price_night' => $row['2019'],
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
