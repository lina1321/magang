@extends('adminlte::page')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kegiatan</title>
</head>
<body>
    <h1>Edit Kegiatan</h1>

    <form action="{{ route('kegiatan.update', $kegiatan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="jenis_kegiatan">Jenis Kegiatan:</label>
        <input type="text" name="jenis_kegiatan" id="jenis_kegiatan" value="{{ old('jenis_kegiatan', $kegiatan->jenis_kegiatan) }}" required>

        <label for="kode">Kode:</label>
        <input type="text" name="kode" id="kode" value="{{ old('kode', $kegiatan->kode) }}" required>

        <label for="hari">Hari:</label>
        <input type="text" name="hari" id="hari" value="{{ old('hari', $kegiatan->hari) }}" required>

        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal', $kegiatan->tanggal) }}" required>

        <label for="waktu">Waktu:</label>
        <input type="text" name="waktu" id="waktu" value="{{ old('waktu', $kegiatan->waktu) }}" required>

        <label for="nama_kegiatan">Nama Kegiatan:</label>
        <input type="text" name="nama_kegiatan" id="nama_kegiatan" value="{{ old('nama_kegiatan', $kegiatan->nama_kegiatan) }}" required>

        <label for="lokasi">Lokasi:</label>
        <input type="text" name="lokasi" id="lokasi" value="{{ old('lokasi', $kegiatan->lokasi) }}" required>

        <label for="peserta_terlibat">Peserta Terlibat:</label>
        <input type="text" name="peserta_terlibat" id="peserta_terlibat" value="{{ old('peserta_terlibat', $kegiatan->peserta_terlibat) }}" required>

        <label for="uraian_kegiatan">Uraian Kegiatan:</label>
        <textarea name="uraian_kegiatan" id="uraian_kegiatan" required>{{ old('uraian_kegiatan', $kegiatan->uraian_kegiatan) }}</textarea>

        <label for="personil_terlibat">Personil Terlibat:</label>
        <input type="text" name="personil_terlibat" id="personil_terlibat" value="{{ old('personil_terlibat', $kegiatan->personil_terlibat) }}" required>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>