@extends('adminlte::page')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kegiatan</title>
</head>
<body>
    <h1>Detail Kegiatan</h1>

    <table class="table">
        <tbody>
            <tr>
                <th>Jenis Kegiatan:</th>
                <td>{{ $kegiatan->jenis_kegiatan }}</td>
            </tr>
            <tr>
                <th>Kode:</th>
                <td>{{ $kegiatan->kode }}</td>
            </tr>
            <tr>
                <th>Hari:</th>
                <td>{{ $kegiatan->hari }}</td>
            </tr>
            <tr>
                <th>Tanggal:</th>
                <td>{{ $kegiatan->tanggal }}</td>
            </tr>
            <tr>
                <th>Waktu:</th>
                <td>{{ $kegiatan->waktu }}</td>
            </tr>
            <tr>
                <th>Nama Kegiatan:</th>
                <td>{{ $kegiatan->nama_kegiatan }}</td>
            </tr>
            <tr>
                <th>Lokasi:</th>
                <td>{{ $kegiatan->lokasi }}</td>
            </tr>
            <tr>
                <th>Peserta Terlibat:</th>
                <td>{{ $kegiatan->peserta_terlibat }}</td>
            </tr>
            <tr>
                <th>Uraian Kegiatan:</th>
                <td>{{ $kegiatan->uraian_kegiatan }}</td>
            </tr>
            <tr>
                <th>Personil Terlibat:</th>
                <td>{{ $kegiatan->personil_terlibat }}</td>
            </tr>
        </tbody>
    </table>

    <a href="{{ route('kegiatan.index') }}" class="btn btn-primary">Kembali</a>
</body>
</html>