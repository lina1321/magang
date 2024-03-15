<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    public $timestamps = false;
    protected $table = 'kegiatan';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = [
        'jenis_kegiatan',
        'kode',
        'hari',
        'tanggal',
        'waktu',
        'nama_kegiatan',
        'rt',
        'rw',
        'padukuhan',
        'kalurahan',
        'kapanewon',
        'kabupaten',
        'peserta_terlibat',
        'uraian_kegiatan',
        'personil_terlibat',
    ];
}
