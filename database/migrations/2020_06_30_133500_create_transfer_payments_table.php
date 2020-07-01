<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransferPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('transferAmount', 15, 4)->default(0);
            $table->string('transferNote', 255)->collation('utf8_unicode_ci')->nullable();
            $table->string('transferฺBank_name', 10)->collation('utf8_unicode_ci')->nullable();
            $table->string('transferImg')->collation('utf8_unicode_ci')->nullable();
            $table->string('transferInvoice', 255)->collation('utf8_unicode_ci');
            $table->set('transferStatus', ['ยืนยันการโอน', 'รอการอนุมัติ', 'อนุมัติแล้ว'])->collation('utf8_unicode_ci')->nullable();
            $table->dateTime('confirm_at')->nullable();
            $table->string('blockchain', 255)->collation('utf8_unicode_ci')->nullable();
            $table->integer('user_id');
            $table->string('user_email')->collation('utf8_unicode_ci');
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
        Schema::dropIfExists('transfer_payments');
    }
}
