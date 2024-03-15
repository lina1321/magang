@extends('adminlte::page')

@section('content')

<!DOCTYPE html>
<html lang="en">
@csrf
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kegiatan</title>
</head>
<body>
    <h1>Daftar Kegiatan</h1>

    <div class="row">
    <div class="col-lg-12 margin-tb">
    <div class="pull-left">
    <h2 class="fa fa-check-square-o" style="font-size:28px;">
    Daftar Kegiatan</h2>
    </div>
    </div>
    <a href="{{ url('kegiatan/create') }}"
    class="btn btn-primary btn-sm">
    <span class="glyphicon glyphicon-plus"></span> Tambah Kegiatan</a>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
            <tr style="color: #fff"; bgcolor="#4CAF50">
                <th>Jenis Kegiatan</th>
                <th>Kode</th>
                <th>Hari</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Nama Kegiatan</th>
                <th>Lokasi</th>
                <th>Peserta Terlibat</th>
                <th>Uraian Kegiatan</th>
                <th>Personil Terlibat</th>
                <th width="240px">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kegiatans as $kegiatan)
            <tr>
                <td>{{ $kegiatan->jenis_kegiatan }}</td>
                <td>{{ $kegiatan->kode }}</td>
                <td>{{ $kegiatan->hari }}</td>
                <td>{{ $kegiatan->tanggal }}</td>
                <td>{{ $kegiatan->waktu }}</td>
                <td>{{ $kegiatan->nama_kegiatan }}</td>
                <td>{{ $kegiatan->lokasi }}</td>
                <td>{{ $kegiatan->peserta_terlibat }}</td>
                <td>{{ $kegiatan->uraian_kegiatan }}</td>
                <td>{{ $kegiatan->personil_terlibat }}</td>
                <td><td align="center">
                    <a class="btn btn-info " href="{{
                    route('kegiatan.show',$kegiatan->id) }}">Lihat</a>
                    <a class="btn btn-primary" href="{{
                    route('kegiatan.edit',$kegiatan->id) }}">Ubah</a>
                    {!! Form::open(['method' => 'DELETE','route' =>
                    ['kegiatan.destroy', $kegiatan->id],
                    'style'=>'display:inline']) !!}
                    {!! Form::submit('Hapus', ['class' =>
                    'btn btn-danger confirm','data-confirm' =>
                    'Are you sure you want to delete?'])!!}
                    {!! Form::close() !!}
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
@endsection