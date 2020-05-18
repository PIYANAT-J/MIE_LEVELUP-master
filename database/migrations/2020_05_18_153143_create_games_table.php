<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->bigIncrements('GAME_ID');
            $table->string('GAME_NAME')->collation('utf8_unicode_ci');
            $table->text('GAME_DESCRIPTION')->collation('utf8_unicode_ci')->nullable();
            $table->set('GAME_STATUS', ['อนุมัติ', 'ไม่อนุมัติ', 'รออนุมัติ'])->collation('utf8_unicode_ci')->default('รออนุมัติ');
            $table->timestamp('GAME_DATE');
            $table->timestamp('GAME_APPROVE_DATE')->nullable();
            $table->string('GAME_FILE')->collation('utf8_unicode_ci');
            $table->string('GAME_SIZE')->collation('utf8_unicode_ci');
            $table->integer('GAME_TYPE_ID')->nullable();
            $table->integer('RATE_ID')->nullable();
            $table->integer('USER_ID');
            $table->string('USER_EMAIL')->unique()->collation('utf8_unicode_ci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
