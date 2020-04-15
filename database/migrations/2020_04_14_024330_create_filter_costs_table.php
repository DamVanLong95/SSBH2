<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilterCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filter_costs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('product_id');
            // $table->integer('program_id');
            $table->string('cost_one')->nullable();
            $table->string('cost_two')->nullable();
            $table->string('cost_three')->nullable();
            $table->string('cost_four')->nullable();
            $table->string('cost_five')->nullable();
            $table->string('cost_six')->nullable();
            $table->string('cost_seven')->nullable();
            $table->string('cost_eight')->nullable();
            $table->string('cost_night')->nullable();
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
        Schema::dropIfExists('filter_costs');
    }
}
