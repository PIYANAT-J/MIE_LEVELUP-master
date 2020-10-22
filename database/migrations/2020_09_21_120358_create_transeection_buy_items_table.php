<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranseectionBuyItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transeection_buy_items', function (Blueprint $table) {
            $table->bigIncrements('transeection_id');
            $table->double('transeection_price', 15, 4);
            $table->json('transeection_items')->collation('utf8_unicode_ci')->nullable();
            $table->string('transeection_type')->collation('utf8_unicode_ci')->nullable();
            $table->string('transeection_invoice')->collation('utf8_unicode_ci')->nullable();
            $table->set('transeection_status', ['true', 'false'])->collation('utf8_unicode_ci')->default('false');
            $table->integer('USER_ID');
            $table->string('USER_EMAIL')->collation('utf8_unicode_ci');
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
        Schema::dropIfExists('transeection_buy_items');
    }
}
