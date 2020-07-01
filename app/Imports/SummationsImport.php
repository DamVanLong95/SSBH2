<?php

namespace App\Imports;

use App\Summation;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use DB;
class SummationsImport implements ToModel,WithHeadingRow,WithChunkReading
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        DB::beginTransaction();
        // dd($row);
        try {
            Summation::create([
                'brand_id' => $row['id_hang_xe'],
                'cate_car' => $row['loai_xe'],
                'price_two' => $row['2002'],
                'price_three' => $row['2003'],
                'price_four' => $row['2004'],
                'price_five' => $row['2005'],
                'price_six' => $row['2006'],
                'price_seven' => $row['2007'],
                'price_eight' => $row['2008'],
                'price_night' => $row['2009'],
                'price_ten' => $row['2010'],
                'price_eleven' => $row['2011'],
                'price_twelve' => $row['2012'],
                'price_thirt' => $row['2013'],
                'price_fourteen' => $row['2014'],
                'price_fifteen' => $row['2015'],
                'price_sixteen' => $row['2016'],
                'price_seventeen' => $row['2017'],
                'price_eighteen' => $row['2018'],
                'price_nineteen' => $row['2019'],
                'price_twenty' => $row['2020'],
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
    public function chunkSize(): int
    {
        return 1000;
    }
}
