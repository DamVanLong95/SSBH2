<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('summaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id');
            $table->string('brand_car');//hang xe
            $table->string('cate_car');//loai xe
            $table->string('uses');//muc dich su dung
            $table->string('year_sx');//nam sx
            $table->text('exception')->nullable();//dieu khoan loai tru
            $table->text('note_more')->nullable();//ghi chu
            $table->decimal('price_car');//gia
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
        Schema::dropIfExists('summaries');
    }
}
