<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Undangan Resmi - Pabrik Pentol BALL</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 40px;
            font-size: 14px;
        }
        h1, h2 {
            text-align: center;
        }
        .header {
            text-align: center;
            margin-bottom: 40px;
        }
        .header hr {
            border: 1px solid #000;
            margin-top: 10px;
        }
        .content {
            margin-top: 20px;
        }
        .signature {
            margin-top: 60px;
            text-align: right;
        }
        .table-info {
            margin-top: 15px;
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>PABRIK PENTOL BALL</h2>
        <p>Jl. Industri No. 123, Kota Wlingi</p>
        <hr>
    </div>

    <div class="content">
        <p>Nomor: UND/{{ date('Ymd') }}/PPB</p>
        <p>Hal: Undangan {{ $keperluan }}</p>

        <p>Dengan hormat,</p>

        <p>Sehubungan dengan kegiatan <strong>{{ $keperluan }}</strong>, kami mengundang:</p>

        <ul class="table-info">
            <li><strong>Nama:</strong> {{ $nama }}</li>
            @isset($jabatan)
            <li><strong>Jabatan:</strong> {{ $jabatan }}</li>
            @endisset
            @isset($departemen)
            <li><strong>Departemen:</strong> {{ $departemen }}</li>
            @endisset
        </ul>

        <p>Untuk hadir pada kegiatan yang akan diselenggarakan pada:</p>

        <ul class="table-info">
            <li><strong>Tanggal:</strong> {{ $tanggal }}</li>
            <li><strong>Waktu:</strong> {{ $jam }}</li>
            <li><strong>Tempat:</strong> Kantor Pusat Pabrik Pentol BALL</li>
        </ul>

        <p>Demikian undangan ini kami sampaikan. Kehadiran Anda sangat kami harapkan.</p>
    </div>

    <div class="signature">
        <p>Hormat kami,</p>
        <p><strong>Manajer HRD Pabrik Pentol BALL</strong></p>
    </div>
</body>
</html>
