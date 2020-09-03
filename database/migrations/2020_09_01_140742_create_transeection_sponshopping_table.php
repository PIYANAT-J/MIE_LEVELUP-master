<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranseectionSponshoppingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transeection_sponshopping', function (Blueprint $table) {
            $table->bigIncrements('transeection_id');
            $table->double('transeection_amount', 15, 4);
            $table->string('transeection_gameSpon')->nullable();
            $table->string('transeection_type')->nullable();
            $table->string('transeection_invoice')->collation('utf8_unicode_ci')->nullable();
            $table->set('transeection_status', ['true', 'false'])->collation('utf8_unicode_ci')->default('false');
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
        Schema::dropIfExists('transeection_sponshopping');
    }
}
