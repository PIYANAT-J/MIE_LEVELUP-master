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
            $table->string('useTransferType')->collation('utf8_unicode_ci')->nullable();
            $table->double('transferAmount', 15, 4)->default(0);
            $table->string('transferNote', 255)->collation('utf8_unicode_ci')->nullable();
            $table->string('transferฺBank_name', 10)->collation('utf8_unicode_ci')->nullable();
            $table->string('transferImg')->collation('utf8_unicode_ci')->nullable();
            $table->string('invoice', 255)->collation('utf8_unicode_ci');
            $table->string('transferInvoice');
            $table->set('transferStatus', ['ยืนยันการโอน', 'รอการอนุมัติ', 'อนุมัติแล้ว', 'ไม่อนุมัติ'])->collation('utf8_unicode_ci')->nullable();
            $table->dateTime('confirm_at')->nullable();
            $table->string('blockchain', 255)->collation('utf8_unicode_ci')->nullable();
            $table->integer('user_id');
            $table->string('user_email')->collation('utf8_unicode_ci');
            $table->string('admin_name')->collation('utf8_unicode_ci')->nullable();
            $table->dateTime('create_at')->nullable();
            $table->dateTime('update_at')->nullable();
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
