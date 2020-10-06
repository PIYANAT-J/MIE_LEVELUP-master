<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefaultItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('default_items', function (Blueprint $table) {
            $table->bigIncrements('default_id');
            $table->string('default_name')->collation('utf8_unicode_ci');
            $table->string('default_img')->collation('utf8_unicode_ci');
            $table->set('default_gender', ['man', 'woman', 'all'])->collation('utf8_unicode_ci');
            $table->set('default_type', ['clothes', 'eyes', 'glasses', 'hair', 'other', 'weapon'])->collation('utf8_unicode_ci');
            $table->set('default_other', ['armor', 'crown', 'glove', 'hat', 'shoes', 'sword', 'hero'])->collation('utf8_unicode_ci')->nullable();
            $table->text('default_description')->collation('utf8_unicode_ci')->nullable();
            $table->set('default_status', ['true', 'false'])->collation('utf8_unicode_ci')->default('true');
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
        Schema::dropIfExists('default_items');
    }
}
