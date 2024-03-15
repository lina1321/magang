@extends('adminlte::page')

@section('content')

<h4>Menajemen Tabel Kegiatan</h4>
    <a href="{{ route('kegiatan.create') }}" class="btn btn-info btn-sm">Kegiatan Baru</a>
 
    @if ($message = Session::get('message'))
    <div class="alert alert-success martop-sm">
        <p>{{ $message }}</p>
    </div>
 
    @endif
<table class="table table-striped table-bordered">
    <thead>
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
        @foreach ($kegiatan as $item)
        <tr>
            <td>{{ $item->jenis_kegiatan }}</td>
            <td>{{ $item->kode }}</td>
            <td>{{ $item->hari }}</td>
            <td>{{ $item->tanggal }}</td>
            <td>{{ $item->waktu }}</td>
            <td>{{ $item->nama_kegiatan }}</td>
            <td>RW: {{ $item->rw }}<br>
                RT: {{ $item->rt }}<br>
                Padukuhan: {{ $item->padukuhan }}<br>
                Kalurahan  : {{ $item->kalurahan }}<br>
                Kapanewon : {{ $item->kapanewon }}<br>
                Kabupaten : {{ $item->kabupaten }}
            </td>
            <td>{{ $item->peserta_terlibat }}</td>
            <td>{{ $item->uraian_kegiatan }}</td>
            <td>{{ $item->personil_terlibat }}</td>
            <td>
                <form action="{{ route('kegiatan.destroy', $item->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route('kegiatan.edit', $item->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
