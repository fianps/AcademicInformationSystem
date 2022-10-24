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
        Schema::create('p_k_l_s', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('status');
            $table->char('nilai', 2)->nullable();
            $table->string('file_pkl')->nullable();
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
        Schema::dropIfExists('p_k_l_s');
    }
};
