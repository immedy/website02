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
        Schema::create('dokters', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->boolean('residen');
            $table->foreignId('smf');
            $table->foreignId('poliklinik');
            $table->string('gambar');
            $table->boolean('senin');
            $table->boolean('selasa');
            $table->boolean('rabu');
            $table->boolean('kamis');
            $table->boolean('jumat');
            $table->foreignId('user_id');
            $table->boolean('status');
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
        Schema::dropIfExists('dokters');
    }
};
