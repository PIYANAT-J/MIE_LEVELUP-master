<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGameImgaesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('game_imgaes', function (Blueprint $table) {
            $table->bigIncrements('GAME_IMG_ID');
            $table->string('GAME_IMG_NAME')->collation('utf8_unicode_ci')->nullable();
            $table->integer('GAME_ID')->collation('utf8_unicode_ci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('game_imgaes');
    }
}
