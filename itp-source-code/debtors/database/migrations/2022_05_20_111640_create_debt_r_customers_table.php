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
        Schema::create('debtrcustomers', function (Blueprint $table) {
            $table->id('rcusrecordNo');
            $table->string('rcusD_CID');
            $table->string('rcusName');
            $table->string('rcusPlan');
            $table->double('rcusAmount');
            $table->double('rcusIrate');
            $table->double('rcus_D_Amount');
            $table->double('rcus_T_Amount');
            $table->date('rcusBuydate');
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
        Schema::dropIfExists('debtrcustomers');
    }
};
