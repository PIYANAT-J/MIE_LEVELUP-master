<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('credit_card')->collation('utf8_unicode_ci')->nullable();
            $table->string('paymentType')->collation('utf8_unicode_ci')->nullable();
            $table->string('useType')->collation('utf8_unicode_ci')->nullable();
            $table->double('amount', 15, 4)->default(0);
            $table->char('note', 255)->collation('utf8_unicode_ci')->nullable();
            $table->string('bank_name', 10)->collation('utf8_unicode_ci')->nullable();
            $table->char('invoice', 255)->collation('utf8_unicode_ci')->nullable();
            $table->char('tno', 255)->collation('utf8_unicode_ci')->nullable();
            $table->dateTime('confirm_at')->nullable();
            $table->set('status', ['true', 'false', 'W999'])->default('false');
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
        Schema::dropIfExists('credit_payments');
    }
}
