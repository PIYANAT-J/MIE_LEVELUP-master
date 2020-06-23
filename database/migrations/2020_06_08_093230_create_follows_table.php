<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follows', function (Blueprint $table) {
            $table->bigIncrements('FOLLOW_ID');
            $table->integer('GAME_ID')->collation('utf8_unicode_ci');
            $table->string('GAME_NAME')->collation('utf8_unicode_ci');
            $table->timestamp('FOLLOW_DATE')->collation('utf8_unicode_ci');
            $table->integer('USER_ID')->collation('utf8_unicode_ci');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('follows');
    }
}
