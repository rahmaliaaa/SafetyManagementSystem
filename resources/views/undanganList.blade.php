@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Daftar Undangan</h3>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Topik</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>File</th>
            </tr>
        </thead>
        <tbody>
            @foreach($invitations as $inv)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $inv->user?->name ?? 'User tidak ditemukan' }}</td>
                    <td>{{ $inv->topik }}</td>
                    <td>{{ $inv->tanggal }}</td>
                    <td>{{ $inv->jam }}</td>
                    <td>
                        <a href="{{ route('undangan.download', $inv->id) }}" class="btn btn-sm btn-primary">Download PDF</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
