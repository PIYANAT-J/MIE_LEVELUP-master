<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdraws', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('withdrawAmount', 15, 4)->default(0);
            $table->string('withdrawNote', 255)->collation('utf8_unicode_ci')->nullable();
            $table->string('withdrawฺBank_name', 10)->collation('utf8_unicode_ci');
            $table->string('withdrawBank_account')->collation('utf8_unicode_ci');
            $table->string('withdrawInvoice')->collation('utf8_unicode_ci');
            $table->set('withdrawStatus', ['รอการอนุมัติ', 'อนุมัติแล้ว'])->collation('utf8_unicode_ci')->default('รอการอนุมัติ');
            $table->dateTime('confirm_at')->nullable();
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
        Schema::dropIfExists('withdraws');
    }
}
