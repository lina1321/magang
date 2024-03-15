@extends('adminlte::page')
@section('content')
    <h4>Detail Kejadian</h4>
    <form>
        <table class="table table-responsive">
            <tbody>
                <tr>
                    <th>Jenis Kegiatan:</th>
                    <td>{{ $kejadian->jenis_kegiatan }}</td>
                </tr>
                <tr>
                    <th>Kode:</th>
                    <td>{{ $kejadian->kode }}</td>
                </tr>
                <tr>
                    <th>Hari:</th>
                    <td>{{ $kejadian->hari }}</td>
                </tr>
                <tr>
                    <th>Tanggal:</th>
                    <td>{{ $kejadian->tanggal }}</td>
                </tr>
                <tr>
                    <th>Waktu:</th>
                    <td>{{ $kejadian->waktu }}</td>
                </tr>
                <tr>
                    <th>Nama Kegiatan:</th>
                    <td>{{ $kejadian->nama_kegiatan }}</td>
                </tr>
                <tr>
                    <th>Lokasi:</th>
                    <td>
                        ART: {{ $kejadian->lokasi['art'] }},
                        RW: {{ $kejadian->lokasi['rw'] }},
                        Padukuhan: {{ $kejadian->lokasi['padukuhan'] }},
                        Kalurahan: {{ $kejadian->lokasi['kalurahan'] }},
                        Kapanewon: {{ $kejadian->lokasi['kapanewon'] }}
                    </td>
                </tr>
                <tr>
                    <th>Peserta Terlibat:</th>
                    <td>{{ $kejadian->peserta_terlibat }}</td>
                </tr>
                <tr>
                    <th>Uraian Kegiatan:</th>
                    <td>{{ $kejadian->uraian_kegiatan }}</td>
                </tr>
                <tr>
                    <th>Personil Terlibat:</th>
                    <td>{{ $kejadian->personil_terlibat }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('kejadian.index') }}" class="btn btn-default">Kembali</a>
    </form>
@endsection
