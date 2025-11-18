<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Struktur Organisasi K3 - Pentol BALL</title>

  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background: #f4f6f8;
      color: #333;
      line-height: 1.6;
    }

    /* Header */
    header {
      background: #fff;
      border-bottom: 1px solid #ddd;
      padding: 12px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .brand { display: flex; align-items: center; gap: 12px; }
    header img { height: 42px; }

    .back-button {
      text-decoration: none;
      color: #007BFF !important;
      padding: 6px 10px;
      border-radius: 6px;
      font-weight: 600;
      border: 1px solid #ddd;
      background-color: #f9f9f9;
    }

    nav a {
      margin-left: 20px;
      text-decoration: none;
      color: #333;
      font-weight: 500;
    }

    /* HERO */
    .hero {
      text-align: center;
      padding: 160px 30px;
      color: #fff;
      position: relative;
      background-image: url('{{ asset('images/simulasi-kebakaran.jpg') }}');
      background-size: cover;
      background-position: center;
    }

    .hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.5);
    }

    .hero h1, .hero p { position: relative; z-index: 2; }

    /* ===== STRUKTUR ORGANISASI ===== */
    #struktur-k3 {
      padding: 60px 30px;
      background: #fff;
      text-align: center;
    }

    #struktur-k3 h2 {
      font-size: 2rem;
      color: #007BFF;
      padding-bottom: 6px;
      border-bottom: 2px solid #007BFF;
      display: inline-block;
    }

    .org-container { margin-top: 40px; }
    .org-level {
      display: flex;
      justify-content: center;
      gap: 40px;
      margin-bottom: 40px;
    }

    .org-box {
      padding: 18px 20px;
      border-radius: 10px;
      font-weight: bold;
      text-align: center;
      color: #333;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    /* ===== WARNA SESUAI GAMBAR ===== */
    .manager {
      background: #a6d5ff; /* biru pastel */
    }

    .kepala-1 {
      background: #c4f7c5; /* hijau pastel */
    }

    .kepala-2 {
      background: #c7f0d8; /* hijau muda */
    }

    .kepala-3 {
      background: #f7f38b; /* kuning pastel */
    }

    .detail.orange {
      background: #f7b26a; /* orange deep */
    }

    .detail.yellow {
      background: #f5bd7a; /* orange soft */
    }

    .detail.red {
      background: #e84b48; /* merah */
      color: white;
    }

    .org-box.detail {
      width: 300px;
      text-align: left;
      font-weight: normal;
    }

    .org-box.detail ul { padding-left: 18px; }

    /* ===== PENJELASAN ===== */
    #penjelasan-k3 {
      padding: 60px 30px;
      background: #fff;
    }

    #penjelasan-k3 h2 {
      color: #007BFF;
      text-align: center;
      margin-bottom: 30px;
    }

    .penjelasan-box {
      background: #f9f9f9;
      padding: 25px;
      border-left: 6px solid #007BFF;
      border-radius: 8px;
      margin-bottom: 25px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.05);
    }

    /* Footer */
    footer {
      background: #007BFF;
      color: #ddd;
      text-align: center;
      padding: 20px;
      margin-top: 40px;
    }

  </style>
</head>

<body>

<header>
  <div class="brand">
    <a href="/" class="back-button">&larr; Kembali</a>
    <img src="{{ asset('images/Ball.png') }}">
    <div>
      <strong>Pentol BALL</strong>
      
    </div>
  </div>

  <nav>
    <a href="/">Beranda</a>
     <a href="/landasan-hukum">Landasan Hukum</a>
      <a href="/penerapan-k3">Penerapan K3</a>
    <a href="/manajemen-risk">Manajemen Risiko</a>
    <a href="{{ url('/sop') }}">SOP</a>
      <a href="{{ url('#statistik-laporan') }}">Statistik</a>
  </nav>
</header>

<section class="hero">
  <h1>Struktur Organisasi K3</h1>
  <p>Struktur & Penjelasan Tugas SMK3 Pabrik Pentol BALL</p>
</section>

<!-- ================= STRUKTUR ORGANISASI ================= -->
<section id="struktur-k3">
  <h2>Struktur Organisasi K3</h2>

  <div class="org-container">

    <!-- Manager -->
    <div class="org-level">
      <div class="org-box manager">Manager K3</div>
    </div>

    <!-- Kepala -->
    <div class="org-level">
      <div class="org-box kepala-1">Kepala Operasi K3</div>
      <div class="org-box kepala-2">Kepala Audit dan Evaluasi K3</div>
      <div class="org-box kepala-3">Ketua Petugas K3</div>
    </div>

    <!-- Detail -->
    <div class="org-level">

      <div class="org-box detail orange">
        <ul>
          <li>Departemen Perencanaan & Produksi Aman</li>
          <li>Departemen Pelaksanaan K3 di Produksi</li>
          <li>Petugas Pelaksana Produksi</li>
        </ul>
      </div>

      <div class="org-box detail yellow">
        <ul>
          <li>Departemen Pengecekan & Pengawasan K3</li>
          <li>Departemen Audit & Laporan Insiden</li>
          <li>Petugas Pelaksana Kebersihan & Sanitasi</li>
        </ul>
      </div>

      <div class="org-box detail red">
        <ul>
          <li>Departemen Kesehatan & Pertolongan Pertama (P3K)</li>
          <li>Departemen Tanggap Darurat & Pemadam Kebakaran</li>
          <li>Petugas Kesehatan & Keselamatan Kerja</li>
        </ul>
      </div>

    </div>

  </div>
</section>

<!-- ===================== PENJELASAN ===================== -->
<section id="penjelasan-k3">
  <h2>Penjelasan Organisasi SMK3 Pabrik Pentol BALL</h2>

  <!-- Manager -->
  <div class="penjelasan-box">
    <h3>🟦 Manager K3</h3>
    <p><strong>Peran:</strong> Pemimpin utama SMK3.</p>
    <p><strong>Tanggung Jawab:</strong></p>
    <ul>
      <li>Menetapkan kebijakan K3 perusahaan.</li>
      <li>Menyediakan APD, APAR, P3K, dan fasilitas sanitasi.</li>
      <li>Mengawasi dan mengevaluasi K3 secara menyeluruh.</li>
      <li>Memimpin rapat dan evaluasi rutin.</li>
    </ul>
    <p><strong>Tujuan:</strong> Membangun budaya kerja aman & higienis.</p>
  </div>

  <!-- Kepala Operasi -->
  <div class="penjelasan-box">
    <h3>🟩 Kepala Operasi K3</h3>
    <p><strong>Peran:</strong> Pengawas implementasi K3 di area produksi.</p>
    <p><strong>Tanggung Jawab:</strong></p>
    <ul>
      <li>Mengatur rencana K3 di proses produksi.</li>
      <li>Menjadwalkan sanitasi & rotasi kerja.</li>
      <li>Memastikan penggunaan APD.</li>
      <li>Mengawasi penggilingan, pencampuran & perebusan.</li>
    </ul>
    <p><strong>Contoh Implementasi:</strong> Cek kebersihan alat & kondisi lantai.</p>
  </div>

  <!-- Kepala Audit -->
  <div class="penjelasan-box">
    <h3>🟧 Kepala Audit & Evaluasi K3</h3>
    <p><strong>Peran:</strong> Pengawas dan evaluator mutu & keselamatan.</p>
    <p><strong>Tanggung Jawab:</strong></p>
    <ul>
      <li>Audit dan inspeksi rutin.</li>
      <li>Pencatatan potensi bahaya & insiden.</li>
      <li>Evaluasi higienitas area produksi.</li>
      <li>Rekomendasi perbaikan keselamatan.</li>
    </ul>
    <p><strong>Contoh Implementasi:</strong> Pemeriksaan mesin & sterilisasi.</p>
  </div>

  <!-- Ketua Petugas -->
  <div class="penjelasan-box">
    <h3>🟥 Ketua Petugas K3</h3>
    <p><strong>Peran:</strong> Penanggung jawab darurat & kesehatan pekerja.</p>
    <p><strong>Tanggung Jawab:</strong></p>
    <ul>
      <li>Pertolongan pertama (P3K).</li>
      <li>Menyiapkan SOP evakuasi.</li>
      <li>Memastikan APAR, jalur evakuasi & P3K siap pakai.</li>
      <li>Penyuluhan kesehatan pekerja.</li>
    </ul>
    <p><strong>Contoh Implementasi:</strong> Simulasi pemadaman kebakaran.</p>
  </div>

</section>

<footer>
  <p>© 2025 Pentol BALL — Keselamatan Dimulai dari Kesadaran</p>
</footer>

</body>
</html>
