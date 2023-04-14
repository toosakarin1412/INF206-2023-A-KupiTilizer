<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('request_jemputs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('np_hp');
            $table->string('alamat');
            $table->string('jenis_sampah');
            $table->integer('total_sampah');
            $table->date('tanggal_jemput');
            $table->time('waktu_jemput');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_jemputs');
    }
};
