<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLongevitiesTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('longevities_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('product_longevity_id');
            $table->tinyInteger('type');
            $table->timestamps();
        });
        Schema::table('longevities_types', function(Blueprint $table){
            $table->foreign('product_longevity_id')->references('id')->on('product_longevities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('longevities_types');
    }
}
