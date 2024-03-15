<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kegiatan');
            $table->string('kode');
            $table->string('hari');
            $table->date('tanggal');
            $table->string('waktu');
            $table->string('nama_kegiatan');
            $table->string('lokasi');
            $table->string('peserta_terlibat');
            $table->text('uraian_kegiatan');
            $table->text('personil_terlibat');
            $table->timestamps();
        });
    
        DB::table('kegiatans')->insert(
            [
                'jenis_kegiatan' => 'Pelatihan',
                'kode' => 'PL001',
                'hari' => 'Senin',
                'tanggal' => '2022-03-01',
                'waktu' => '10:00:00',
                'nama_kegiatan' => 'Pelatihan Pengolahan Bahan Pangan',
                'lokasi' => 'Padukuhan 1',
                'peserta_terlibat' => '100',
                'uraian_kegiatan' => 'Pelatihan Pengolahan Bahan Pangan untuk Pengusaha Kecil dan Menengah',
                'personil_terlibat' => 'Personil 1, Personil 2, Personil 3',
                'email' => 'admin@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kegiatans');
    }
};
