@extends('adminlte::page')

@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="fa fa-check-square-o" style="font-size:28px;">
                Tabel Rekaman Kejadian
            </h2>
        </div>
        <div class="pull-right">
            <a href="{{ url('kejadian/create') }}" class="btn btn-success">Tambah Kejadian</a>
        </div>
    </div>
</div>

<table class="table table-bordered">
    <thead>
        <tr style="color: #fff"; bgcolor="#4CAF50">
            <th>No</th>
            <th>Jenis Bencana</th>
            <th>Nama Bencana</th>
            <th>Kode Bencana</th>
            <th>Tanggal Kejadian</th>
            <th>Waktu Kejadian</th>
            <th>Jumlah KK</th>
            <th>Nama Korban</th>
            <th>Alamat</th>
            <th>Jumlah Korban</th>
            <th>Kerugian</th>
            <th>Keterangan</th>
            <th>Dampak Bencana</th>
            <th>Dampak Kerusakan</th>
            <th>Sumber</th>
            <th width="240px">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @php $i=0; @endphp
        @foreach($kejadian as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->jenis_bencana }}</td>
            <td>{{ $value->nama_bencana }}</td>
            <td>{{ $value->kode_bencana }}</td>
            <td>{{ $value->tanggal_kejadian }}</td>
            <td>{{ $value->waktu_kejadian }}</td>
            <td>{{ $value->jumlah_kk }}</td>
            <td>{{ $value->nama_korban }}</td>
            <td>{{ $value->rt.', '.$value->rw.', '.$value->padukuhan.', '.$value->kalurahan.', 
                '.$value->kapanewon.', '.$value->kabupaten }}</td>
            <td>Balita: {{ $value->balita }}<br>
                Anak: {{ $value->anak }}<br>
                Dewasa: {{ $value->dewasa }}<br>
                Bumil: {{ $value->bumil }}<br>
                Lansia: {{ $value->lansia }}<br>
                Disabilitas: {{ $value->disabilitas }}
            </td>
            <td>{{ $value->kerugian }}</td>
            <td>{{ $value->keterangan }}</td>
            <td>Meninggal: {{ $value->meninggal }}<br>
                Hilang: {{ $value->hilang }}<br>
                Luka Ringan: {{ $value->luka_ringan }}<br>
                Luka Sedang: {{ $value->luka_sedang }}<br>
                Luka Berat: {{ $value->luka_berat }}<br>
                Mengungsi: {{ $value->mengungsi }}
            </td>
            <td>Rumah: {{ $value->rumah }}<br>
                Dapur: {{ $value->dapur }}<br>
                Pendidikan: {{ $value->pendidikan }}<br>
                Peribadatan: {{ $value->peribadatan }}<br>
                Fasum: {{ $value->fasum }}<br>
                Perkantoran: {{ $value->perkantoran }}<br>
                Jembatan: {{ $value->jembatan }}<br>
                Prabik: {{ $value->prabik }}<br>
                Kios: {{ $value->kios }}
            </td>
            <td align="center">
                <a class="btn btn-info " href="{{ route('kejadian.show',$value->id) }}">Lihat</a>
                <a class="btn btn-primary" href="{{ route('kejadian.edit',$value->id) }}">Ubah</a>
                {!! Form::open(['method' => 'DELETE','route' => ['kejadian.destroy', $value->id],'style'=>'display:inline']) !!}
                {!! Form::submit('Hapus', ['class' => 'btn btn-danger confirm','data-confirm' => 'Anda yakin ingin menghapus data ini?'])!!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <p>Total Data : {{ $kejadian->total() }}</p>
        </div>
        <div class="pull-right">
            {{ $kejadian->links() }}
        </div>
    </div>
</div>

@endsection