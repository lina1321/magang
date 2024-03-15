@extends('adminlte::page')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tambah Kejadian</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('kejadian.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        {!! Form::label('jenis_bencana', 'Jenis Bencana:', ['class' => 'control-label']) !!}
                        {!! Form::text('jenis_bencana', null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
    {!! Form::label('nama_bencana', 'Nama Bencana:',
    ['class' => 'control-label']) !!}
    {!! Form::text('nama_bencana', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('kode_bencana', 'Kode Bencana:',
    ['class' => 'control-label']) !!}
    {!! Form::text('kode_bencana', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('tanggal_kejadian', 'Tanggal Kejadian:',
    ['class' => 'control-label']) !!}
    {!! Form::date('tanggal_kejadian', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('waktu_kejadian', 'Waktu Kejadian:',
    ['class' => 'control-label']) !!}
    {!! Form::time('waktu_kejadian', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('jumlah_kk', 'Jumlah KK/JIWA:',
    ['class' => 'control-label']) !!}
    {!! Form::number('jumlah_kk', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('nama_korban', 'Nama Korban:',
    ['class' => 'control-label']) !!}
    {!! Form::text('nama_korban', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('kabupaten', 'Kabupaten:',
    ['class' => 'control-label']) !!}
    {!! Form::text('kabupaten', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('kapanewon', 'Kapanewon:',
    ['class' => 'control-label']) !!}
    {!! Form::text('kapanewon', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('kalurahan', 'Kalurahan:',
    ['class' => 'control-label']) !!}
    {!! Form::text('kalurahan', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('padukuhan', 'Padukuhan:',
    ['class' => 'control-label']) !!}
    {!! Form::text('padukuhan', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('rt', 'RT:',
    ['class' => 'control-label']) !!}
    {!! Form::text('rt', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('rw', 'RW:',
    ['class' => 'control-label']) !!}
    {!! Form::text('rw', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('balita', 'Balita:',
    ['class' => 'control-label']) !!}
    {!! Form::number('balita', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('anak', 'Anak:',
    ['class' => 'control-label']) !!}
    {!! Form::number('anak', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('dewasa', 'Dewasa:',
    ['class' => 'control-label']) !!}
    {!! Form::number('dewasa', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('bumil', 'Bumil:',
    ['class' => 'control-label']) !!}
    {!! Form::number('bumil', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('lansia', 'Lansia:',
    ['class' => 'control-label']) !!}
    {!! Form::number('lansia', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('disabilitas', 'Disabilitas:',
    ['class' => 'control-label']) !!}
    {!! Form::number('disabilitas', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('kerugian', 'Kerugian:',
    ['class' => 'control-label']) !!}
    {!! Form::textarea('kerugian', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('keterangan', 'Keterangan:',
    ['class' => 'control-label']) !!}
    {!! Form::textarea('keterangan', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('dampak', 'Dampak Bencana:',
    ['class' => 'control-label']) !!}
    <div class="row">
        <div class="col-md-2">
            {!! Form::label('meninggal', 'Meninggal:',
            ['class' => 'control-label']) !!}
            {!! Form::number('meninggal', null, ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('hilang', 'Hilang:',
            ['class' => 'control-label']) !!}
            {!! Form::number('hilang', null, ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('luka_ringan', 'Luka Ringan:',
            ['class' => 'control-label']) !!}
            {!! Form::number('luka_ringan', null, ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('luka_sedang', 'Luka Sedang:',
            ['class' => 'control-label']) !!}
            {!! Form::number('luka_sedang', null, ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('luka_berat', 'Luka Berat:',
            ['class' => 'control-label']) !!}
            {!! Form::number('luka_berat', null, ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('mengungsi', 'Mengungsi:',
            ['class' => 'control-label']) !!}
            {!! Form::number('mengungsi', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="form-group">
    {!! Form::label('rumah', 'Dampak Kerusakan:',
    ['class' => 'control-label']) !!}
    <div class="row">
        <div class="col-md-2">
            {!! Form::label('rumah', 'Rumah:',
            ['class' => 'control-label']) !!}
            {!! Form::number('rumah', null, ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('dapur', 'Dapur:',
            ['class' => 'control-label']) !!}
            {!! Form::number('dapur', null, ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('pendidikan', 'Pendidikan:',
            ['class' => 'control-label']) !!}
            {!! Form::number('pendidikan', null, ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('peribadatan', 'Peribadatan:',
            ['class' => 'control-label']) !!}
            {!! Form::number('peribadatan', null, ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('fasum', 'Fasum:',
            ['class' => 'control-label']) !!}
            {!! Form::number('fasum', null, ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('perkantoran', 'Perkantoran:',
            ['class' => 'control-label']) !!}
            {!! Form::number('perkantoran', null, ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('jembatan', 'Jembatan:',
            ['class' => 'control-label']) !!}
            {!! Form::number('jembatan', null, ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('pabrik', 'Pabrik:',
            ['class' => 'control-label']) !!}
            {!! Form::number('pabrik', null, ['class' => 'form-control']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::label('kios', 'Kios:',
            ['class' => 'control-label']) !!}
            {!! Form::number('kios', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div> 
<div class="form-group">
    {!! Form::label('sumber', 'Sumber:',
    ['class' => 'control-label']) !!}
    {!! Form::text('sumber', null, ['class' => 'form-control']) !!}
</div>                  
                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Simpan</button>
                        <a href="{{ route('kejadian.index') }}" class="btn btn-default">Kembali</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
