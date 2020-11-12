<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKycsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kycs', function (Blueprint $table) {
            $table->bigIncrements('KYC_ID');
            $table->string('KYC_ID_CARD')->collation('utf8_unicode_ci')->nullable();
            $table->string('KYC_IMG')->collation('utf8_unicode_ci')->nullable();
            $table->set('KYC_STATUS', ['อนุมัติ', 'ไม่อนุมัติ', 'รออนุมัติ'])->collation('utf8_unicode_ci')->nullable();
            $table->timestamp('KYC_CREATE_DATE')->nullable();
            $table->timestamp('KYC_APPROVE_DATE')->nullable();
            $table->integer('USER_ID')->nullable();
            $table->string('USER_EMAIL')->unique()->collation('utf8_unicode_ci');
            $table->string('ADMIN_NAME')->collation('utf8_unicode_ci')->nullable();
            $table->text('COMMENT')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kycs');
    }
}
