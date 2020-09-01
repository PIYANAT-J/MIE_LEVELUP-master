<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorShoppingCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsor_shopping_cart', function (Blueprint $table) {
            $table->bigIncrements('sponsor_cart_id');
            $table->integer('sponsor_cart_game');
            $table->double('sponsor_cart_price', 15, 4)->default(0);
            $table->string('sponsor_cart_advt')->collation('utf8_unicode_ci')->nullable();
            $table->string('sponsor_cart_package')->collation('utf8_unicode_ci')->nullable();
            $table->dateTime('sponsor_cart_start');
            $table->dateTime('sponsor_cart_deadline');
            $table->integer('sponsor_cart_number');
            $table->set('sponsor_cart_status', ['true', 'false'])->collation('utf8_unicode_ci')->default('false');
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
        Schema::dropIfExists('sponsor_shopping_cart');
    }
}
