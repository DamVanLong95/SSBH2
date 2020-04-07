<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeductibleToSummaries extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('summaries', function (Blueprint $table) {
            //
            $table->text('deductible')->after('note_more')->nullable();//muc khau tru
            $table->string('note_dkkt')->after('note_more')->nullable();//ghi chu khau tru
            $table->string('note_dklt')->after('note_more')->nullable();//ghi chu dieu khoan loai tru
            $table->text('terms')->nullable()->after('exception');//dieu khoan bo sung

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('summaries', function (Blueprint $table) {
            //
        });
    }
}
