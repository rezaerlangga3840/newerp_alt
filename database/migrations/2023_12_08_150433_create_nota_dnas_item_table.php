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
        Schema::create('nota_dnas_item', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_nota_dnas');
            $table->foreign('id_nota_dnas')->references('id')->on('nota_dnas')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->unsignedBigInteger('id_psrt');
            $table->foreign('id_psrt')->references('id')->on('master_psrt')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nota_dnas_item');
    }
};
