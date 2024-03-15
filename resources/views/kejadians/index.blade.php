@extends('adminlte::page')

@section('content')
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Tabel Rekaman Kejadian</h3>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kejadian as $key => $value)
                    <tr>
                        <td>
                            <div class="btn-group">
                                <a href="{{ route('kejadian.index') }}" class="btn btn-primary">Semua</a>
                                <a href="{{ route('kejadian.index', ['jenis_bencana' => 'Alam']) }}" class="btn btn-primary">Alam</a>
                                <a href="{{ route('kejadian.index', ['jenis_bencana' => 'Sosial']) }}" class="btn btn-primary">Sosial</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
