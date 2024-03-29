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
        Schema::create('instalasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategori');
            $table->foreignId('jenis');
            $table->string('unit');
            $table->string('gambar');
            $table->longText('textarea');
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
        Schema::dropIfExists('instalasis');
    }
};
