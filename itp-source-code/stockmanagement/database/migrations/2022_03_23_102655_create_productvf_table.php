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
        Schema::create('productvf', function (Blueprint $table) {
            $table->id();
            $table->string('itemcodevf');
            $table->string('itemnamevf');
            $table->date('dateoftakenvf');
            $table->integer('quantityvf');
            $table->integer('priceperunitvf');
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
        Schema::dropIfExists('productvf');
    }
};
