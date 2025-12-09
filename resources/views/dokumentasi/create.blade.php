@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h3>Upload Dokumentasi Kegiatan: {{ $invitation->topik }}</h3>

    <form action="{{ route('dokumentasi.store', $invitation->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul Dokumentasi</label>
            <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">File (jpg/png/pdf)</label>
            <input type="file" name="file" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Upload</button>
    </form>
</div>
@endsection
