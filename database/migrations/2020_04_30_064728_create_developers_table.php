<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevelopersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developers', function (Blueprint $table) {
            $table->bigIncrements('DEV_ID');
            $table->string('DEV_TEL')->collation('utf8_unicode_ci')->nullable();
            $table->string('DEV_ID_CARD')->collation('utf8_unicode_ci')->nullable();
            $table->string('DEV_IMG')->collation('utf8_unicode_ci')->nullable();
            $table->date('DEV_BIRTHDAY')->nullable();
            $table->integer('DEV_AGE')->nullable();
            $table->set('DEV_GENDER', ['Select','Men', 'Women'])->collation('utf8_unicode_ci')->default('Select');
            $table->text('DEV_ADDRESS')->collation('utf8_unicode_ci')->nullable();
            $table->string('ZIPCODE_ID')->collation('utf8_unicode_ci')->nullable();
            $table->integer('USER_ID');
            $table->string('USER_EMAIL')->unique()->collation('utf8_unicode_ci');
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
        Schema::dropIfExists('developers');
    }
}
