<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping_cart', function (Blueprint $table) {
            $table->bigIncrements('shopping_cart_id');
            $table->integer('shopping_cart_amount');
            $table->double('shopping_cart_price', 15, 4)->default(0);
            $table->set('shopping_cart_status', ['true', 'false'])->collation('utf8_unicode_ci')->default('false');
            $table->integer('item_id');
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
        Schema::dropIfExists('shopping_cart');
    }
}
