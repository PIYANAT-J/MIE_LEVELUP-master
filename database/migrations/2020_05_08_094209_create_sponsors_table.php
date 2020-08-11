<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors', function (Blueprint $table) {
            $table->bigIncrements('SPON_ID');
            $table->string('SPON_TEL')->collation('utf8_unicode_ci')->nullable();
            $table->string('SPON_ID_CARD')->collation('utf8_unicode_ci')->nullable();
            $table->string('SPON_IMG')->collation('utf8_unicode_ci')->default('No_Img.jpg');
            $table->date('SPON_BIRTHDAY')->nullable();
            $table->integer('SPON_AGE')->nullable();
            $table->integer('taxID')->nullable();
            $table->set('SPON_GENDER', ['Select','Men', 'Women'])->collation('utf8_unicode_ci')->nullable();
            $table->text('SPON_ADDRESS')->collation('utf8_unicode_ci')->nullable();
            $table->string('ZIPCODE_ID')->collation('utf8_unicode_ci')->nullable();
            $table->integer('USER_ID')->nullable();
            $table->string('USER_EMAIL')->unique()->collation('utf8_unicode_ci');
            $table->timestamp('DATE_CREATE');
            $table->timestamp('DATE_MODIFY')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sponsors');
    }
}
