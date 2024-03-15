<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kejadian extends Model
{
    public $timestamps = false;
    protected $table = 'kejadian';
    protected $primaryKey = 'id';
    public $incrementing = true;

    protected $fillable = [
        'jenis_bencana',
        'nama_bencana',
        'kode_bencana',
        'tanggal_kejadian',
        'waktu_kejadian',
        'jumlah_kk',
        'nama_korban',
        'rt',
        'rw',
        'padukuhan',
        'kalurahan',
        'kapanewon',
        'kabupaten',
        'balita',
        'anak',
        'dewasa',
        'bumil',
        'lansia',
        'disabilitas',
        'kerugian',
        'keterangan',
        'meninggal',
        'hilang',
        'luka_ringan',
        'luka_sedang',
        'luka_berat',
        'mengungsi',
        'rumah',
        'dapur',
        'pendidikan',
        'peribadatan',
        'fasum',
        'perkantoran',
        'jembatan',
        'pabrik',
        'kios',
        'sumber'
    ];
}