@extends('adminlte::page')
@section('content')
<!DOCTYPE html>
<html lang="en">
@csrf
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Kegiatan</title>
</head>
<body>
    <h1>Create Kegiatan</h1>

    <form action="{{ route('kegiatan.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="jenis_kegiatan">Jenis Kegiatan:</label>
            <input type="text" name="jenis_kegiatan" id="jenis_kegiatan" class="form-control @error('jenis_kegiatan') is-invalid @enderror" required value="{{ old('jenis_kegiatan') }}">
            @error('jenis_kegiatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="kode">Kode:</label>
            <input type="text" name="kode" id="kode" class="form-control @error('kode') is-invalid @enderror" required value="{{ old('kode') }}">
            @error('kode')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="hari">Hari:</label>
            <input type="text" name="hari" id="hari" class="form-control @error('hari') is-invalid @enderror" required value="{{ old('hari') }}">
            @error('hari')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="tanggal">Tanggal:</label>
            <input type="date" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" required value="{{ old('tanggal') }}">
            @error('tanggal')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="waktu">Waktu:</label>
            <input type="text" name="waktu" id="waktu" class="form-control @error('waktu') is-invalid @enderror" required value="{{ old('waktu') }}">
            @error('waktu')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="nama_kegiatan">Nama Kegiatan:</label>
            <input type="text" name="nama_kegiatan" id="nama_kegiatan" class="form-control @error('nama_kegiatan') is-invalid @enderror" required value="{{ old('nama_kegiatan') }}">
            @error('nama_kegiatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="lokasi">Lokasi:</label>
            <input type="text" name="lokasi" id="lokasi" class="form-control @error('lokasi') is-invalid @enderror" required value="{{ old('lokasi') }}">
            @error('lokasi')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="peserta_terlibat">Peserta Terlibat:</label>
            <input type="text" name="peserta_terlibat" id="peserta_terlibat" class="form-control @error('peserta_terlibat') is-invalid @enderror" required value="{{ old('peserta_terlibat') }}">
            @error('peserta_terlibat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="uraian_kegiatan">Uraian Kegiatan:</label>
            <textarea name="uraian_kegiatan" id="uraian_kegiatan" class="form-control @error('uraian_kegiatan') is-invalid @enderror" required>{{ old('uraian_kegiatan') }}</textarea>
            @error('uraian_kegiatan')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="personil_terlibat">Personil Terlibat:</label>
            <input type="text" name="personil_terlibat" id="personil_terlibat" class="form-control @error('personil_terlibat') is-invalid @enderror" required value="{{ old('personil_terlibat') }}">
            @error('personil_terlibat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <form action="/index" method="get">
    <!-- isi form disini -->
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
          </form>
</body>
</html>
@endsection