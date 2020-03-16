<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublishmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Bang che tai
        Schema::create('publishment', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id');
            $table->text('sanction');//che tai
            $table->text('content');//ghi chu
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
        Schema::dropIfExists('publishment');
    }
}
