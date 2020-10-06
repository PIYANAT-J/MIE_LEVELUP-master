<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_items', function (Blueprint $table) {
            $table->bigIncrements('my_item_id');
            $table->string('my_item_name')->collation('utf8_unicode_ci');
            $table->string('my_item_img')->collation('utf8_unicode_ci');
            $table->set('my_item_gender', ['man', 'woman', 'all'])->collation('utf8_unicode_ci');
            $table->set('my_item_type', ['clothes', 'eyes', 'glasses', 'hair', 'other', 'weapon'])->collation('utf8_unicode_ci');
            $table->set('my_item_other', ['armor', 'crown', 'glove', 'hat', 'shoes', 'sword', 'hero'])->collation('utf8_unicode_ci')->nullable();
            $table->text('my_item_description')->collation('utf8_unicode_ci')->nullable();
            $table->integer('my_item_level')->default(1);
            $table->integer('my_item_amount')->default(1);
            $table->integer('my_item_amount_discount')->default(0);
            $table->integer('item_id')->collation('utf8_unicode_ci')->nullable();
            $table->set('my_item_status', ['true', 'false'])->collation('utf8_unicode_ci')->default('false');
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
        Schema::dropIfExists('my_items');
    }
}
