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
            $table->tinyInteger('invest')->nullable();
            $table->tinyInteger('edu')->nullable();
            $table->tinyInteger('retire')->nullable();
            $table->tinyInteger('concern')->nullable();
            $table->tinyInteger('age_to_eightten')->nullable();
            $table->tinyInteger('eightten_to_sixtyfive')->nullable();
            $table->tinyInteger('over_sixtyfive')->nullable();
            $table->tinyInteger('bh_die')->nullable();
            $table->tinyInteger('bh_poor')->nullable();
            $table->tinyInteger('benifit_free')->nullable();
            $table->tinyInteger('benifit_medical')->nullable();
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
