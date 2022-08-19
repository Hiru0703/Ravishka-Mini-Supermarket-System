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
        Schema::create('interestirates', function (Blueprint $table) {
            $table->id('irateid');
            $table->double('cusmonth1');
            $table->double('cusmonth2');
            $table->double('cusmonth3');
            $table->double('whbmonth1');
            $table->double('whbmonth2');
            $table->double('whbmonth3');
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
        Schema::dropIfExists('interestirates');
    }
};
