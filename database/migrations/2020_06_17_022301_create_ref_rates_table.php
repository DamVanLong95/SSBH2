<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_rates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type_car')->nullable();
            $table->float('less_than_three');
            $table->float('from_three_six');
            $table->float('from_six_ten');
            $table->float('from_ten_fifteen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ref_rates');
    }
}
