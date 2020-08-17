<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('product_id');
            $table->string('product_name')->collation('utf8_unicode_ci');
            $table->string('product_img')->collation('utf8_unicode_ci');
            $table->integer('product_amount');
            $table->integer('product_point');
            $table->text('product_description')->collation('utf8_unicode_ci')->nullable();
            $table->set('product_status', ['อนุมัติ', 'ไม่อนุมัติ', 'รออนุมัติ', 'หมดอายุ', 'สินค้าหมด'])->collation('utf8_unicode_ci')->default('รออนุมัติ');
            $table->string('product_game')->nullable();
            $table->timestamp('product_date_create');
            $table->date('product_deadline');
            $table->timestamp('product_date_approve')->nullable();
            $table->set('product_type', ['ของกิน', 'ของใช้'])->collation('utf8_unicode_ci')->nullable();
            $table->integer('USER_ID');
            $table->string('USER_EMAIL')->collation('utf8_unicode_ci');
            $table->string('ADMIN_NAME')->collation('utf8_unicode_ci')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
