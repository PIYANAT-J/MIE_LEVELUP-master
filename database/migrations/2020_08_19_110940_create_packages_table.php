<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('package_id');
            $table->string('package_name')->collation('utf8_unicode_ci');
            $table->integer('package_amount');
            $table->integer('package_season');
            $table->integer('package_game');
            $table->integer('package_length');
            $table->integer('package_advt')->nullable();
            $table->text('package_description')->collation('utf8_unicode_ci')->nullable();
            $table->set('package_status', ['true', 'false'])->collation('utf8_unicode_ci')->default('true');
            $table->timestamp('package_date_create');
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
        Schema::dropIfExists('packages');
    }
}
