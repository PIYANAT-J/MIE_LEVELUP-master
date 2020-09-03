<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisingLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertising_links', function (Blueprint $table) {
            $table->bigIncrements('advertising_id');
            $table->string('advertising_name')->collation('utf8_unicode_ci');
            $table->string('advertising_link');
            $table->set('advertising_status', ['true', 'false', 'รออนุมัติ'])->collation('utf8_unicode_ci')->default('รออนุมัติ');
            $table->dateTime('advertising_create');
            $table->dateTime('advertising_update')->nullable();
            $table->string('admin_name')->nullable();
            $table->text('advertising_comment')->nullable();
            $table->integer('USER_ID');
            $table->string('USER_EMAIL')->collation('utf8_unicode_ci');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('advertising_links');
    }
}
