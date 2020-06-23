<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('COMMENT_ID');
            $table->text('COMMENT')->collation('utf8_unicode_ci')->nullable();
            $table->integer('RATING');
            $table->timestamp('COMMENT_DATE');
            $table->integer('USER_ID')->nullable();
            $table->string('USER_EMAIL')->collation('utf8_unicode_ci');
            $table->integer('GAME_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
