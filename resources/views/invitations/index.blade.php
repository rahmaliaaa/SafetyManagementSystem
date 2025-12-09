<!DOCTYPE html>
<html>
<head>
    <title>Daftar Undangan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Daftar Undangan</h2>

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Keperluan</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($invitations as $index => $inv)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $inv->user->name }}</td>
                    <td>{{ $inv->topik }}</td>
                    <td>{{ $inv->tanggal }}</td>
                    <td>{{ $inv->jam }}</td>
                    <td>
                        <a href="{{ route('invitations.download', $inv->id) }}" class="btn btn-primary btn-sm">Download PDF</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
