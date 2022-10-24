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
        Schema::create('k_h_s', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->integer('semester');
            $table->string('sks_smt');
            $table->string('sks_total');
            $table->string('ips');
            $table->string('ipk');
            $table->string('file_khs')->nullable();
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
        Schema::dropIfExists('k_h_s');
    }
};
