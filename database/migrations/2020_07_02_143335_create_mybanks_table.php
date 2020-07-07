<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMybanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mybanks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bankName', 255)->collation('utf8_unicode_ci');
            $table->string('accountName', 255)->collation('utf8_unicode_ci');
            $table->string('accountNumber', 10)->collation('utf8_unicode_ci');
            $table->set('accountType',['เงินฝากออมทรัพย์', 'เงินฝากประจำ', 'เงินฝากกระแสรายวันหรือบัญชีเดินสะพัด', 'เงินฝากสกุนเงินตราต่างประเทศ', 'ตั๋วแลกเงิน', 'สลากออมทรัพย์', 'พันธบัตรรัฐบาลหรือรัฐวิสาหกิจ'])->collation('utf8_unicode_ci');
            $table->string('accountBranch')->collation('utf8_unicode_ci')->nullable();
            $table->integer('user_id');
            $table->string('user_email')->collation('utf8_unicode_ci');
            $table->dateTime('createAccount');
            $table->dateTime('updateAccount')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mybanks');
    }
}
