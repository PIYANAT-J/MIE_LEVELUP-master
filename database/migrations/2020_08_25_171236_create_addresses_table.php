<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->bigIncrements('addresses_id');
            $table->text('addresses')->collation('utf8_unicode_ci');
            $table->string('province')->collation('utf8_unicode_ci');
            $table->string('amphure')->collation('utf8_unicode_ci');
            $table->string('district')->collation('utf8_unicode_ci');
            $table->string('zipcode')->collation('utf8_unicode_ci');
            $table->set('addresses_status', ['true', 'false'])->collation('utf8_unicode_ci')->default('true');
            $table->integer('USER_ID');
            $table->string('USER_EMAIL')->unique()->collation('utf8_unicode_ci');
            $table->timestamp('DATE_CREATE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
