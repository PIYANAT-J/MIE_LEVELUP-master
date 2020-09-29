<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('market_items', function (Blueprint $table) {
            $table->bigIncrements('item_id');
            $table->string('item_name')->collation('utf8_unicode_ci');
            $table->double('item_price', 15, 4)->default(0);
            $table->double('item_discount', 10, 2)->default(0);
            $table->string('item_img')->collation('utf8_unicode_ci');
            $table->set('item_gender', ['man', 'woman', 'all'])->collation('utf8_unicode_ci');
            $table->set('item_type', ['clothes', 'eyes', 'glasses', 'hair', 'other', 'weapon'])->collation('utf8_unicode_ci');
            $table->set('item_other', ['armor', 'crown', 'glove', 'hat', 'shoes', 'sword', 'hero'])->collation('utf8_unicode_ci')->nullable();
            $table->text('item_description')->collation('utf8_unicode_ci')->nullable();
            $table->integer('item_level')->default(1);
            $table->integer('item_amount')->default(1);
            $table->integer('item_amount_discount')->default(0);
            $table->set('item_status', ['true', 'false'])->collation('utf8_unicode_ci')->default('true');
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
        Schema::dropIfExists('market_items');
    }
}
