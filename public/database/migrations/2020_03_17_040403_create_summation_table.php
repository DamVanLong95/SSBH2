<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSummationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('brand_id');
            $table->string('cate_car');
            $table->double('price_ten')->nullable();
            $table->double('price_eleven')->nullable();
            $table->double('price_twelve')->nullable();
            $table->double('price_thirt')->nullable();
            $table->double('price_four')->nullable();
            $table->double('price_five')->nullable();
            $table->double('price_six')->nullable();
            $table->double('price_seven')->nullable();
            $table->double('price_eight')->nullable();
            $table->double('price_night')->nullable();
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
        Schema::dropIfExists('summations');
    }
}
