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
        Schema::create('master_psrt', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mgng');
            $table->foreign('id_mgng')->references('id')->on('master_mgng')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->string('nama_peserta');
            $table->enum('jenis_kelamin', ['pria','wanita'])->default('pria');
            $table->string('nik_peserta');
            $table->string('nis_peserta');
            $table->string('program_studi');
            $table->string('no_handphone_peserta');
            $table->string('email_peserta');
            //data penilaian
            //dikali 10%
            $table->double('nilai_kedisiplinan', 15, 8)->default(0.00000000);
            $table->double('nilai_tanggungjawab', 15, 8)->default(0.00000000);
            $table->double('nilai_kerjasama', 15, 8)->default(0.00000000);
            $table->double('nilai_motivasi', 15, 8)->default(0.00000000);
            $table->double('nilai_kepribadian', 15, 8)->default(0.00000000);
            //dikali 15%
            $table->double('nilai_pengetahuan', 15, 8)->default(0.00000000);
            $table->double('nilai_pelaksanaankerja', 15, 8)->default(0.00000000);
            $table->double('nilai_hasilkerja', 15, 8)->default(0.00000000);
            $table->double('nilai_akhir', 15, 8)->default(0.00000000);
            $table->enum('status_penilaian', ['belum','sudah'])->default('belum');
            $table->string('scan_penilaian')->nullable();
            $table->enum('status_scan_penilaian', ['belum','sudah'])->default('belum');
            $table->text('catatan')->nullable();
            $table->string('scan_sertifikat')->nullable();
            $table->enum('status_sertifikat',['belum','terkirim'])->default('belum');
            $table->unsignedBigInteger('id_bdng_member')->nullable();
            $table->foreign('id_bdng_member')->references('id')->on('master_bdng_member')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_psrt');
    }
};
