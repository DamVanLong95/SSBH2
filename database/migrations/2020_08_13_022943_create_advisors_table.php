<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advisors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullname')->nullable();
            $table->string('avatar')->nullable();
            $table->string('address')->nullable();
            $table->string('working_process')->nullable();
            $table->string('work')->nullable();
            $table->tinyInteger('major')->default(0);
            $table->string('area')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->text('note')->nullable();
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
        Schema::dropIfExists('advisors');
    }
}
