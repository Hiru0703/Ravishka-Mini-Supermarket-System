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
        Schema::create('customerprofiles', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table -> string('name');
            $table -> string('surname');
            $table -> string('mobile_phone');
            $table -> string('land_phone');
            $table -> string('address_line1');
            $table -> string('address_line2');
            $table -> string('city');
            $table -> string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customerprofiles');
    }
};
