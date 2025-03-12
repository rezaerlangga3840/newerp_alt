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
        Schema::create('nota_dnas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mgng');
            $table->foreign('id_mgng')->references('id')->on('master_mgng')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->unsignedBigInteger('id_bdng');
            $table->foreign('id_bdng')->references('id')->on('master_bdng')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->string('nomor_nota_dinas')->nullable();
            $table->date('tanggal_nota_dinas')->nullable();
            $table->enum('sifat_nota_dinas',['biasa','penting','segera'])->default('biasa');
            $table->enum('lampiran_nota_dinas',['tidakada','selembar'])->default('tidakada');
            $table->string('scan_nota_dinas')->nullable();
            $table->enum('status_nota_dinas',['belum','terkirim'])->default('belum');
            $table->unsignedBigInteger('id_bdng_member')->nullable();
            $table->foreign('id_bdng_member')->references('id')->on('master_bdng_member')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->string('scan_laporan_magang')->nullable();
            $table->enum('status_laporan',['belum','terkirim'])->default('belum');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota_dnas');
    }
};
