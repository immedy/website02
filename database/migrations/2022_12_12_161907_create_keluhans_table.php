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
        Schema::create('keluhans', function (Blueprint $table) {
            $table->id();
            $table->string('namapelapor');
            $table->string('alamtpelapor');
            $table->string('nohandphone');
            $table->foreignId('hubungan');
            $table->string('namapasien');
            $table->decimal('norm');
            $table->string('tempatlahir');
            $table->date('tanggallahir');
            $table->string('alamatpasien');
            $table->longText('keluhan');
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
        Schema::dropIfExists('keluhans');
    }
};
