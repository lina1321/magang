<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KegiatansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('kegiatans')->insert([
            [
                'jenis_kegiatan' => 'Training',
                'kode' => 'TRN001',
                'hari' => 'Senin',
                'tanggal' => '2023-03-01',
                'waktu' => '08:00:00',
                'nama_kegiatan' => 'Laravel Training',
                'lokasi' => 'Padukuhan A',
                'peserta_terlibat' => 'John Doe, Jane Doe',
                'uraian_kegiatan' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'personil_terlibat' => 'John Doe, Jane Doe'

            ],
            // Add more seeded data as needed
        ]);
    }
}
