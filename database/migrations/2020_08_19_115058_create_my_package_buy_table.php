<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyPackageBuyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_package_buy', function (Blueprint $table) {
            $table->bigIncrements('packageBuy_id');
            $table->string('packageBuy_name')->collation('utf8_unicode_ci');
            $table->integer('packageBuy_amount');
            $table->integer('packageBuy_season');
            $table->string('packageBuy_game')->collation('utf8_unicode_ci')->nullable();
            $table->json('packageBuy_gameSpon')->collation('utf8_unicode_ci')->nullable();
            $table->string('packageBuy_linkAdvt')->collation('utf8_unicode_ci')->nullable();
            $table->string('packageBuy_invoice')->collation('utf8_unicode_ci');
            $table->set('packageBuy_status', ['true', 'false'])->collation('utf8_unicode_ci')->default('false');
            $table->date('packageBuy_start')->nullable();
            $table->date('packageBuy_deadline')->nullable();
            $table->integer('package_id');
            $table->integer('USER_ID');
            $table->string('USER_EMAIL')->collation('utf8_unicode_ci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('my_package_buy');
    }
}
