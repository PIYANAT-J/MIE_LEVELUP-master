<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->collation('utf8_unicode_ci');
            $table->string('surname')->collation('utf8_unicode_ci')->nullable();
            $table->string('email')->collation('utf8_unicode_ci')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('facebook_id')->nullable();
            $table->string('google_id')->nullable();
            $table->string('password')->collation('utf8_unicode_ci')->nullable();
            $table->string('api_token')->collation('utf8_unicode_ci')->nullable();
            $table->integer('users_type');
            $table->enum('updateData', ['true', 'false'])->collation('utf8_unicode_ci')->default('false');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
