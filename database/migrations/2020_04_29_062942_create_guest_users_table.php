<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guest_users', function (Blueprint $table) {
            $table->bigIncrements('GUEST_USERS_ID');
            $table->string('GUEST_USERS_TEL')->collation('utf8_unicode_ci')->nullable();
            $table->string('GUEST_USERS_ID_CARD')->collation('utf8_unicode_ci')->nullable();
            $table->string('GUEST_USERS_IMG')->collation('utf8_unicode_ci')->default('No_Img.jpg');
            $table->date('GUEST_USERS_BIRTHDAY')->nullable();
            $table->integer('GUEST_USERS_AGE')->nullable();
            $table->set('GUEST_USERS_GENDER', ['Select','Men', 'Women'])->collation('utf8_unicode_ci')->nullable();
            $table->text('GUEST_USERS_ADDRESS')->collation('utf8_unicode_ci')->nullable();
            $table->string('ZIPCODE_ID')->collation('utf8_unicode_ci')->nullable();
            $table->json('AVATAR')->nullable();
            $table->integer('USER_ID')->nullable();
            $table->string('USER_EMAIL')->unique()->collation('utf8_unicode_ci');
            $table->timestamp('DATE_CREATE')->nullable();
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
        Schema::dropIfExists('guest_users');
    }
}
