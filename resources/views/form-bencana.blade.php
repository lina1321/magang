@extends('adminlte::page')

@section('content')
<!DOCTYPE html>
<html lang="en">
@csrf
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Bencana</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="{{ asset('vendor/admin-lte/dist/css/adminlte.min.css') }}">
<script src="{{ asset('vendor/admin-lte/dist/js/adminlte.min.js') }}"></script>
  <script src="https://unpkg.com/xlsx@0.16.8/dist/xlsx.full.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl7/1L_dstPt3HV5HzF6Gvk/e3s4Wz6iJgD/+ub2oU" crossorigin="anonymous">
  <form class="row g-3 needs-validation" novalidate action="{{ route('form-bencana.submit') }}" method="POST">
  <style>
    body {
        font-family: 'Roboto', sans-serif;
        background-color: #f5f5f5;
    }

    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 2rem;
        background-color: #fff;
        border-radius: 4px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-weight: 500;
        margin-bottom: 2rem;
        color: #333;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    label {
        font-weight: 500;
        display: block;
        margin-bottom: 0.5rem;
        color: #333;
    }

    input[type="text"],
    input[type="date"],
    input[type="time"],
    input[type="number"],
    textarea {
        width: 100%;
        padding: 0.5rem;
        border-radius: 4px;
        border: 1px solid #ccc;
        font-size: 1rem;
        line-height: 1.5;
        color: #333;
        background-color: #fff;
    }

    input[type="submit"] {
        width: 100%;
        padding: 0.5rem;
        border-radius: 4px;
        border: none;
        font-size: 1rem;
        line-height: 1.5;
        color: #fff;
        background-color: #4CAF50;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #3e8e41;
    }

    a {
        display: inline-block;
        padding: 0.5rem;
        border-radius: 4px;
        border: none;
        font-size: 1rem;
        line-height: 1.5;
        color: #fff;
        background-color: #007bff;
        text-decoration: none;
        margin-top: 1.5rem;
        cursor: pointer;
    }

    a:hover {
        background-color: #0069d9;
    }
</style>
</head>
<body style="background-color: #f5f5f5;">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBud7TlRbs/ic4AwGcFZOxg5DpPt8EgeUIgIwzjWfXQKWA3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
  <div class="container mt-5">
    <h1 class="text-center mb-5" style="font-size: 3rem; color: #333;">Form Bencana</h1>
    <form class="row g-3">
      <!-- Add Bootstrap classes to form elements for styling -->
      <div class="col-md-6 form-group">
    <label for="kategori" class="form-label">Kategori Bencana</label>
    <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukkan kategori bencana" required>
    <div class="invalid-feedback">
        Kategori bencana harus diisi.
    </div>
</div>
      <div class="col-md-6">
        <label for="jenis" class="form-label">Jenis Bencana</label>
        <input type="text" class="form-control" id="jenis" placeholder="Masukkan jenis bencana">
      </div>
      <div class="col-md-6">
        <label for="jenis_bencana" class="form-label">Kode</label>
        <input type="text" class="form-control" id="jenis_bencana" placeholder="Masukkan kode bencana">
      </div>
      <div class="col-md-6">
        <label for="tanggal" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="tanggal">
      </div>
      <div class="col-md-6">
        <label for="jam" class="form-label">Waktu Kejadian</label>
        <input type="time" class="form-control" id="jam">
      </div>
      <div class="col-md-6">
        <label for="number" class="form-label">Jml KK/JJIWA</label>
        <input type="number" class="form-control" id="number" placeholder="Masukkan jumlah korban jiwa">
      </div>
      <div class="col-md-6">
        <label for="nama" class="form-label">Nama Korban</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan jenis bencana">
      </div>
      <div class="col-md-6">
        <label for="alamat" class="form-label">Kabupaten</label>
        <input type="text" class="form-control" id="alamat" placeholder="Masukkan Kabupaten">
      </div>
      <div class="col-md-6">
        <label for="alamat" class="form-label">Kepanewon</label>
        <input type="text" class="form-control" id="alamat" placeholder="Masukkan kapanewon">
      </div>
      <div class="col-md-6">
        <label for="alamat" class="form-label">Kalurahan</label>
        <input type="text" class="form-control" id="alamat" placeholder="Masukkan kalurahan">
      </div>
      <div class="col-md-6">
        <label for="alamat" class="form-label">Padukuhan</label>
        <input type="text" class="form-control" id="alamat" placeholder="Masukkan padukuhan">
      </div>
      <div class="col-md-2">
        <label for="rt" class="form-label">RT:</label>
        <input type="text" class="form-control" id="rt" placeholder="Masukkan RT wilayah">
      </div>
      <div class="col-md-2">
        <label for="rw" class="form-label">RW:</label>
        <input type="text" class="form-control" id="rw" placeholder="Masukkan RW wilayah">
      </div>
      <div class="col-md-12">
        <label for="kerentanan" class="form-label">Kerentanan</label>
        <div class="row g-3">
          <div class="col-md-2">
            <label for="kerentanan" class="form-label">Balita</label>
            <input type="number" class="form-control" id="kerentanan" placeholder="Masukkan jumlah balita yang terkena kerentanan">
          </div>
          <div class="col-md-2">
            <label for="kerentanan" class="form-label">Anak</label>
            <input type="number" class="form-control" id="kerentanan" placeholder="Masukkan jumlah anak yang terkena kerentanan">
          </div>
          <div class="col-md-2">
            <label for="kerentanan" class="form-label">Dewasa</label>
            <input type="number" class="form-control" id="kerentanan" placeholder="Masukkan jumlah dewasa yang terkena kerentanan">
          </div>
          <div class="col-md-2">
            <label for="kerentanan" class="form-label">Bumil</label>
            <input type="number" class="form-control" id="kerentanan" placeholder="Masukkan jumlah bumil yang terkena kerentanan">
          </div>
          <div class="col-md-2">
            <label for="kerentanan" class="form-label">Lansia</label>
            <input type="number" class="form-control" id="kerentanan" placeholder="Masukkan jumlah lansia yang terkena kerentanan">
          </div>
          <div class="col-md-2">
            <label for="kerentanan" class="form-label">Disabilitas</label>
            <input type="number" class="form-control" id="kerentanan" placeholder="Masukkan jumlah disabilitas yang terkena kerentanan">
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <label for="kerugian" class="form-label">Kerugian</label>
        <textarea class="form-control" id="kerugian" rows="3" placeholder="Masukkan kerugian"></textarea>
      </div>
      <div class="col-md-12">
        <label for="keterangan" class="form-label">Keterangan</label>
        <textarea class="form-control" id="keterangan" rows="3" placeholder="Masukkan keterangan"></textarea>
      </div>
      <div class="col-md-12">
        <label for="dampak" class="form-label">Dampak Bencana</label>
        <div class="row g-3">
          <div class="col-md-2">
            <label for="dampak" class="form-label">Meninggal</label>
            <input type="number" class="form-control" id="dampak" placeholder="Masukkan jumlah orang yang meninggal">
          </div>
          <div class="col-md-2">
            <label for="dampak" class="form-label">Hilang</label>
            <input type="number" class="form-control" id="dampak" placeholder="Masukkan jumlah orang yang hilang">
          </div>
          <div class="col-md-2">
            <label for="dampak" class="form-label">Luka Ringan</label>
            <input type="number" class="form-control" id="dampak" placeholder="Masukkan jumlah orang yang luka ringan">
          </div>
          <div class="col-md-2">
            <label for="dampak" class="form-label">Luka Sedang</label>
            <input type="number" class="form-control" id="dampak" placeholder="Masukkan jumlah orang yang luka sedang">
          </div>
          <div class="col-md-2">
            <label for="dampak" class="form-label">Luka berat</label>
            <input type="number" class="form-control" id="dampak" placeholder="Masukkan jumlah orang yang luka berat">
          </div>
          <div class="col-md-2">
            <label for="dampak" class="form-label">Mengungsi</label>
            <input type="number" class="form-control" id="dampak" placeholder="Masukkan jumlah orang yang mengungsi">
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <label for="rusak" class="form-label">Dampak Kerusakan</label>
        <div class="row g-3">
          <div class="col-md-2">
            <label for="rusak" class="form-label">Rumah</label>
            <input type="number" class="form-control" id="rusak" placeholder="Masukkan jumlah  rumah rusak">
          </div>
          <div class="col-md-2">
            <label for="rusak" class="form-label">Dapur</label>
            <input type="number" class="form-control" id="rusak" placeholder="Masukkan jumlah  dapur rusak">
          </div>
          <div class="col-md-2">
            <label for="rusak" class="form-label">Pendidikan</label>
            <input type="number" class="form-control" id="rusak" placeholder="Masukkan jumlah  pendidikan yang rusak">
          </div>
          <div class="col-md-2">
            <label for="rusak" class="form-label">Peribadatan</label>
            <input type="number" class="form-control" id="rusak" placeholder="Masukkan jumlah  peribadatan yang rusak">
          </div>
          <div class="col-md-2">
            <label for="rusak" class="form-label">Fasum</label>
            <input type="number" class="form-control" id="rusak" placeholder="Masukkan jumlah fasum">
          </div>
          <div class="col-md-2">
            <label for="rusak" class="form-label">Perkantoran</label>
            <input type="number" class="form-control" id="rusak" placeholder="Masukkan jumlah  perkantoran yang rusak">
          </div>
          <div class="col-md-2">
            <label for="rusak" class="form-label">Jembatan</label>
            <input type="number" class="form-control" id="rusak" placeholder="Masukkan jumlah  jembatan yang rusak">
          </div>
          <div class="col-md-2">
            <label for="rusak" class="form-label">Pabrik</label>
            <input type="number" class="form-control" id="rusak" placeholder="Masukkan jumlah pabrik yang rusak">
          </div>
          <div class="col-md-2">
            <label for="rusak" class="form-label">Kios</label>
            <input type="number" class="form-control" id="rusak" placeholder="Masukkan jumlah kios yang rusak">
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <label for="sumber" class="form-label">Sumber</label>
        <textarea class="form-control" id="sumber" rows="3" placeholder="Masukkan "></textarea>
      </div>

      <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <button id="export-btn" type="button" class="btn btn-secondary">Laporan</button>
      </div>
    </form>
    <form class="row g-3" action="{{ route('form-bencana.submit') }}" method="POST">
    <a href="{{ route('form-bencana.export') }}" class="btn btn-secondary">Export Data</a>
  </div>
  <script src="https://unpkg.com/xlsx@0.16.8/dist/xlsx.full.min.js"></script>
  <script src="script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
@endsection