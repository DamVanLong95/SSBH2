<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilterBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filter_banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('company_id');
            $table->integer('product_longevity_id');
            $table->string('invest')->nullable();
            $table->string('edu')->nullable();
            $table->string('retire')->nullable();
            $table->string('concern')->nullable();
            $table->string('age_to_eightten')->nullable();
            $table->string('eightten_to_sixtyfive')->nullable();
            $table->string('over_sixtyfive')->nullable();
            $table->string('bh_die')->nullable();
            $table->string('bh_poor')->nullable();
            $table->string('benifit_free')->nullable();
            $table->string('benifit_medical')->nullable();
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
        Schema::dropIfExists('filter_banners');
    }
}
