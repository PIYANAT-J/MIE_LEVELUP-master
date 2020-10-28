<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimulatorTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('simulator_trades', function (Blueprint $table) {
            $table->id('id');
            $table->string('symbol');
            $table->date('date');
            $table->double('prior', 15, 2)->comment('ราคาก่อนหน้า');
            $table->double('open', 15, 2)->comment('ราคาเริ่ม Trade');
            $table->double('high', 15, 2)->comment('ขึ้นสูงสุดของวัน');
            $table->double('low', 15, 2)->comment('ราคาต่ำสุดของวัน');
            $table->double('close', 15, 2)->comment('ราคาปิดวัน');
            $table->double('chg_', 15, 2)->nullable()->comment('ค่าการเปลี่ยนแปลง = Close - Open');
            $table->double('p_chg_', 15, 2)->nullable()->comment('% เปลี่ยนแปลง');
            $table->double('avg', 15, 2)->comment('ค่าเฉลี่ยการซื้อขาย');
            $table->double('bid', 15, 2)->comment('อยากซื้อ');
            $table->double('offer', 15, 2)->comment('อยากเสนอขาย');
            $table->double('aom_volume', 15, 2)->comment('จำนวนหุ้นขายต่อวัน');
            $table->double('aom_value', 15, 2)->comment('ราคาที่ได้ต่อวัน');
            $table->double('total_volume', 15, 2)->comment('ราคาซื้อขายนอก AOM');
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
        Schema::dropIfExists('simulator_trades');
    }
}
