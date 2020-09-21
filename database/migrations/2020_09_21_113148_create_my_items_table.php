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
            $table->set('my_item_type', ['head', 'clothing', 'weapon'])->collation('utf8_unicode_ci');
            $table->text('my_item_description')->collation('utf8_unicode_ci')->nullable();
            $table->integer('my_item_level')->default(1);
            $table->integer('my_item_amount')->default(1);
            // $table->string('my_item_invoice')->collation('utf8_unicode_ci')->nullable();
            $table->set('my_item_status', ['true', 'false'])->collation('utf8_unicode_ci')->default('true');
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
