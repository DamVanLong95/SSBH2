<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBenifitsMoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('benifits_mores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('product_longevity_name')->nullable();
            $table->tinyInteger('product_longevity_id');//important SPBT
            $table->string('product_group_name')->nullable();
            $table->tinyInteger('product_group_id');//important nhom SPBT
            $table->string('product_more_name')->nullable();//san pham bo tro
            $table->string('group_child')->nullable();
            $table->tinyInteger('group_child_id');//important nhom con
            $table->text('content')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('benifits_mores');
    }
}
