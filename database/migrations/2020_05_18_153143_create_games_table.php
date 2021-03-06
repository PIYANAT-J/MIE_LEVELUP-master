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
            $table->string('GAME_IMG_PROFILE')->collation('utf8_unicode_ci');
            $table->text('GAME_DESCRIPTION')->collation('utf8_unicode_ci')->nullable();
            $table->text('GAME_DESCRIPTION_FULL')->collation('utf8_unicode_ci')->nullable();
            $table->set('GAME_STATUS', ['อนุมัติ', 'ไม่อนุมัติ', 'รออนุมัติ'])->collation('utf8_unicode_ci')->default('รออนุมัติ');
            $table->timestamp('GAME_DATE');
            $table->timestamp('GAME_EDIT_DATE')->nullable();
            $table->timestamp('GAME_APPROVE_DATE')->nullable();
            $table->string('GAME_FILE')->collation('utf8_unicode_ci');
            $table->string('GAME_SIZE')->collation('utf8_unicode_ci')->nullable();
            $table->string('GAME_VDO_LINK')->collation('utf8_unicode_ci')->nullable();
            $table->string('GAME_TYPE')->nullable();
            $table->double('GAME_PRICE', 15, 4)->default(0);
            $table->integer('GAME_DISCOUNT')->nullable();
            $table->text('GAME_COMMENT')->collation('utf8_unicode_ci')->nullable();
            $table->string('RATED_ESRB')->nullable();
            $table->string('RATED_B_L')->nullable();
            $table->integer('USER_ID');
            $table->string('USER_EMAIL')->collation('utf8_unicode_ci');
            $table->string('ADMIN_NAME')->collation('utf8_unicode_ci')->nullable();
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
