<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSimulatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_simulator', function (Blueprint $table) {
            $table->id('id');
            $table->string('symbol');
            $table->date('date');
            $table->double('prior', 15, 2);
            $table->double('open', 15, 2);
            $table->double('high', 15, 2);
            $table->double('low', 15, 2);
            $table->double('close', 15, 2);
            $table->double('chg_', 15, 2)->nullable();
            $table->double('p_chg_', 15, 2)->nullable();
            $table->double('avg', 15, 2);
            $table->double('bid', 15, 2);
            $table->double('offer', 15, 2);
            $table->double('aom_volume', 15, 2);
            $table->double('aom_value', 15, 2);
            $table->double('total_volume', 15, 2);
            $table->double('total_value', 15, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_simulator');
    }
}
