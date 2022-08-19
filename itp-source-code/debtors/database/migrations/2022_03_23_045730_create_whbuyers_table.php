<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whbuyers', function (Blueprint $table) {
            $table->id('recordNo');
            $table->string('D_CID');
            $table->string('whName');
            $table->string('whPlan');
            $table->double('whAmount');
            $table->double('whIrate');
            $table->double('wh_D_Amount');
            $table->double('wh_T_Amount');
            $table->date('whBuydate');
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
        Schema::dropIfExists('whbuyers');
    }
};
