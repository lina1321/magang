@extends('adminlte::page')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2><i class="fa fa-pencil-square-o" style="font-size:28px;"></i> Detail Kejadian</h2>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jenis Bencana:</strong>
            {{ $kejadian->jenis_bencana }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Bencana:</strong>
            {{ $kejadian->nama_bencana }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kode Bencana:</strong>
            {{ $kejadian->kode_bencana }}
        </div> 
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group"> 
            <strong>Tanggal Kejadian:</strong> 
            {{ $kejadian->tanggal_kejadian }}
        </div> 
    </div> 
    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group"> 
            <strong>Waktu Kejadian:</strong> 
            {{ $kejadian->waktu_kejadian }}
        </div> 
    </div> 
    <div class="col-md-6">
        <div class="form-group">
            <strong>Jumlah KK/JJIWA:</strong>
            {{ $kejadian->jumlah_kk }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <strong>Nama Korban:</strong>
            {{ $kejadian->nama_korban }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <strong>Kabupaten:</strong>
            {{ $kejadian->kabupaten }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <strong>Kapanewon:</strong>
            {{ $kejadian->kapanewon }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <strong>Kalurahan:</strong>
            {{ $kejadian->kalurahan }}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <strong>Padukuhan:</strong>
            {{ $kejadian->padukuhan }}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <strong>RT:</strong>
            {{ $kejadian->rt }}
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <strong>RW:</strong>
            {{ $kejadian->rw }}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Kerentanan:</strong>
            <ul>
                <li>Balita: {{ $kejadian->balita }}</li>
                <li>Anak: {{ $kejadian->anak }}</li>
                <li>Dewasa: {{ $kejadian->dewasa }}</li>
                <li>Bumil: {{ $kejadian->bumil }}</li>
                <li>Lansia: {{ $kejadian->lansia }}</li>
                <li>Disabilitas: {{ $kejadian->disabilitas }}</li>
            </ul>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Kerugian:</strong>
            {{ $kejadian->kerugian }}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Keterangan:</strong>
            {{ $kejadian->keterangan }}
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Dampak Bencana:</strong>
            <ul>
                <li>Meninggal: {{ $kejadian->meninggal }}</li>
                <li>Hilang: {{ $kejadian->hilang }}</li>
                <li>Luka Ringan: {{ $kejadian->luka_ringan }}</li>
                <li>Luka Sedang: {{ $kejadian->luka_sedang }}</li>
                <li>Luka Berat: {{ $kejadian->luka_berat }}</li>
                <li>Mengungsi: {{ $kejadian->mengungsi }}</li>
            </ul>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <strong>Dampak Kerusakan:</strong>
            <ul>
                <li>Rumah: {{ $kejadian->rumah }}</li>
                <li>Dapur: {{ $kejadian->dapur }}</li>
                <li>Pendidikan: {{ $kejadian->pendidikan }}</li>
                <li>Peribadatan: {{ $kejadian->peribadatan }}</li>
                <li>Fasum: {{ $kejadian->fasum }}</li>
                <li>Perkantoran: {{ $kejadian->perkantoran }}</li>
                <li>Jembatan: {{ $kejadian->jembatan }}</li>
                <li>Pabrik: {{ $kejadian->pabrik }}</li>
                <li>Kios: {{ $kejadian->kios }}</li>
            </ul>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12"> 
        <div class="form-group"> 
            <strong>Sumber:</strong>
            {{ $kejadian->sumber }}
        </div> 
    </div> 
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 text-center"> 
        <a class="btn btn-primary" href="{{ route('kejadian.index') }}"> Kembali</a> 
    </div> 
</div>
@endsection
