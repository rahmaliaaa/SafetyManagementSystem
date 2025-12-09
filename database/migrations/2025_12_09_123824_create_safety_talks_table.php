<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('safety_talks', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->date('tanggal');
        $table->string('waktu_mulai');
        $table->string('waktu_selesai');

        // upload bukti
        $table->string('bukti_undangan')->nullable();
        $table->string('bukti_notulensi')->nullable();
        $table->string('bukti_dokumentasi')->nullable();
        $table->string('bukti_absensi')->nullable();

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('safety_talks');
    }
};
