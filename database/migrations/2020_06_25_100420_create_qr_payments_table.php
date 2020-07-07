<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQrPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qr_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('qrType')->collation('utf8_unicode_ci');
            $table->set('paymentType', ['KD', 'DP', 'QrCode'])->collation('utf8_unicode_ci')->nullable();
            $table->double('amount', 15, 4)->default(0);
            $table->char('note', 255)->collation('utf8_unicode_ci')->nullable();
            $table->string('bank_name', 10)->collation('utf8_unicode_ci')->nullable();
            $table->char('rawQrCode', 255)->collation('utf8_unicode_ci')->nullable();
            $table->char('invoice', 255)->collation('utf8_unicode_ci')->nullable();
            $table->string('qr_invoice');
            $table->dateTime('confirm_at')->nullable();
            $table->set('status', ['true', 'false', '99'])->default('false');
            $table->char('blockchain', 255)->collation('utf8_unicode_ci')->nullable();
            $table->integer('user_id');
            $table->string('user_email')->nullable();
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
        Schema::dropIfExists('qr_payments');
    }
}
