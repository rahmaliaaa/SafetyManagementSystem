<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landasan Hukum & Kebijakan K3 - Pentol BALL</title>
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

    header .brand {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    header img {
      height: 42px;
    }

    header .brand div {
      display: flex;
      flex-direction: column;
      line-height: 1.1;
    }

    header .brand div strong {
      font-size: 18px;
      color: #333;
    }

    header .brand div small {
      font-size: 12px;
      color: #777;
    }

    /* Tombol Kembali */
    .back-button {
      text-decoration: none;
      color: #007BFF !important;
      padding: 6px 10px;
      border-radius: 6px;
      font-weight: 600;
      border: 1px solid #ddd;
      background-color: #f9f9f9;
      transition: all 0.2s;
      white-space: nowrap;
      margin-right: 10px;
    }

    .back-button:hover {
      background-color: #e9ecef;
      border-color: #ccc;
      box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    }

    nav a {
      margin-left: 20px;
      text-decoration: none;
      color: #333;
      font-weight: 500;
      transition: color 0.3s;
    }

    nav a:hover {
      color: #007BFF;
      text-decoration: underline;
    }

    .hero {
      text-align: center;
      padding: 200px 30px;
      color: #fff;
      position: relative;
      background-image: url('{{ asset('images/simulasi-kebakaran.jpg') }}');
      background-size: cover;
      background-position: center center;
      background-repeat: no-repeat;
      overflow: hidden;
    }

    .hero::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      z-index: 1;
    }

    .hero h1, .hero p {
      position: relative;
      z-index: 2;
    }

    .hero h1 {
      font-size: 3rem;
      margin-bottom: 15px;
      font-weight: 700;
    }

    .hero p {
      font-size: 1.3rem;
      font-weight: 300;
      max-width: 800px;
      margin: 0 auto;
    }

    section {
      padding: 60px 30px;
      margin: 0;
      background: #fff;
      border-top: 1px solid #e0e0e0;
      text-align: center;
    }

    section h2 {
      margin-bottom: 25px;
      color: #007BFF;
      font-size: 2rem;
      padding-bottom: 10px;
      border-bottom: 2px solid #007BFF;
      display: inline-block;
    }

    ul {
      max-width: 900px;
      margin: 0 auto;
      text-align: left;
      padding-left: 40px;
    }

    ul li {
      margin-bottom: 15px;
    }

    /* Footer */
    footer {
      text-align: center;
      padding: 20px;
      border-top: 1px solid #ddd;
      margin-top: 30px;
      background: #007BFF;
      color: #ddd;
    }

    footer .content-info {
      display: flex;
      justify-content: space-around;
      align-items: flex-start;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: 0 auto;
      text-align: left;
    }

    footer .column {
      padding: 15px;
      flex: 1;
      min-width: 200px;
    }

    footer h4 {
      color: #fff;
      margin-bottom: 15px;
      border-bottom: 2px solid #007BFF;
      padding-bottom: 5px;
    }

    .copyright {
      text-align: center;
      padding: 15px 30px;
      border-top: 1px solid #444;
      margin-top: 10px;
      color: #aaa;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <div class="brand">
      <a href="/" class="back-button" title="Kembali ke Halaman Utama">&larr; Kembali</a>
      <img src="{{ asset('images/Ball.png') }}" alt="Logo Pentol BALL">
      <div>
        <strong>Pentol BALL</strong>
        <small>Landasan Hukum & Kebijakan K3</small>
      </div>
    </div>
    <nav>
      <a href="{{ url('/') }}">Beranda</a>
      <a href="{{ url('/manajemen-risk') }}">Manajemen Risiko</a>
      <a href="{{ url('/penerapan-k3') }}">Penerapan K3</a>
    </nav>
  </header>

  <!-- Section Landasan Hukum (tetap ada) -->
  <section class="hero">
    <h1>Landasan Hukum K3 di Pabrik Pentol</h1>
    <p>Dasar hukum yang menjadi pedoman penerapan Keselamatan dan Kesehatan Kerja (K3)</p>
  </section>

  <section id="landasan">
    <h2>Dasar Hukum Penerapan K3</h2>
    <ul>
      <li><strong>Undang-Undang No. 1 Tahun 1970 tentang Keselamatan Kerja</strong><br>
      Menjadi dasar utama penerapan K3 di semua tempat kerja, termasuk pabrik pengolahan makanan, agar pekerja terlindungi dari kecelakaan dan penyakit akibat kerja.</li>

      <li><strong>Undang-Undang No. 13 Tahun 2003 tentang Ketenagakerjaan</strong><br>
      Menjamin hak pekerja atas keselamatan, kesehatan kerja, dan lingkungan kerja yang layak.</li>

      <li><strong>Undang-Undang No. 36 Tahun 2009 tentang Kesehatan</strong><br>
      Mengatur kewajiban perusahaan dalam menciptakan lingkungan kerja yang sehat dan mendukung kesehatan pekerja.</li>

      <li><strong>Peraturan Pemerintah No. 50 Tahun 2012 tentang Penerapan Sistem Manajemen K3 (SMK3)</strong><br>
      Mengatur kewajiban perusahaan dalam menerapkan sistem manajemen K3 untuk mencegah kecelakaan dan meningkatkan produktivitas.</li>

      <li><strong>Peraturan Menteri Ketenagakerjaan No. 5 Tahun 2018 tentang Keselamatan dan Kesehatan Kerja Lingkungan Kerja</strong><br>
      Menetapkan standar lingkungan kerja yang aman, termasuk faktor fisik, kimia, dan biologi yang dapat mempengaruhi kesehatan pekerja di pabrik.</li>

      <li><strong>Peraturan Menteri Kesehatan No. 1096 Tahun 2011 tentang Higiene Sanitasi Jasa Boga</strong><br>
      Mengatur aspek kebersihan, sanitasi, dan keamanan pangan dalam industri makanan, termasuk pabrik pentol, agar produk yang dihasilkan aman dikonsumsi.</li>

      <li><strong>Standar Nasional Indonesia (SNI) tentang Keamanan Pangan dan APD</strong><br>
      Memberikan standar teknis terkait produksi makanan yang aman serta penggunaan Alat Pelindung Diri (APD) dalam lingkungan kerja.</li>
    </ul>
  </section>

  <!-- Section Kebijakan K3 (baru ditambahkan) -->
  <section id="kebijakan-k3">
    <h2>Kebijakan K3 Pabrik Pentol “Ball”</h2>
    <ul>
      <li><strong>1. Tujuan</strong><br>
        Menjamin keselamatan, kesehatan, dan kesejahteraan seluruh pekerja serta menciptakan lingkungan kerja yang aman dan sehat sesuai ketentuan perundang-undangan yang berlaku.</li>

      <li><strong>2. Dasar Hukum</strong><br>
        <ul>
          <li>Undang-Undang No. 1 Tahun 1970 tentang Keselamatan Kerja</li>
          <li>Undang-Undang No. 13 Tahun 2003 tentang Ketenagakerjaan</li>
          <li>Undang-Undang No. 36 Tahun 2009 tentang Kesehatan</li>
          <li>Peraturan Pemerintah No. 50 Tahun 2012 tentang Penerapan SMK3</li>
          <li>Peraturan Menteri Ketenagakerjaan No. 5 Tahun 2018 tentang Keselamatan dan Kesehatan Kerja Lingkungan Kerja</li>
          <li>Peraturan Menteri Kesehatan No. 1096 Tahun 2011 tentang Higiene Sanitasi Jasa Boga</li>
          <li>Standar Nasional Indonesia (SNI) tentang Keamanan Pangan dan APD</li>
        </ul>
      </li>

      <li><strong>3. Ruang Lingkup</strong><br>
        Seluruh area kerja Pabrik Pentol “Ball”, termasuk area produksi, gudang, kantor, ruang istirahat, dan kantin pekerja.</li>

      <li><strong>4. Kebijakan Umum K3</strong><br>
        <ul>
          <li><strong>Keselamatan Kerja:</strong> Menyediakan APD sesuai kebutuhan, pengaman mesin, dan pelatihan K3 bagi seluruh pekerja.</li>
          <li><strong>Kesehatan Kerja:</strong> Menjaga lingkungan kerja bersih, pemeriksaan kesehatan rutin, dan pengendalian bahaya fisik, kimia, dan biologis.</li>
          <li><strong>Sistem Manajemen K3 (SMK3):</strong> Menerapkan SMK3, melakukan audit berkala, dan perbaikan berkelanjutan.</li>
          <li><strong>Keselamatan Pangan:</strong> Mengikuti SNI Keamanan Pangan, menjaga proses produksi, penyimpanan, dan distribusi sesuai standar sanitasi.</li>
          <li><strong>Pelaporan dan Penanganan Insiden:</strong> Melaporkan kecelakaan dan kondisi tidak aman, serta menetapkan prosedur tanggap darurat dan evakuasi.</li>
          <li><strong>Komitmen Perusahaan:</strong> Manajemen mendukung penuh penerapan K3 dan mendorong partisipasi aktif pekerja.</li>
        </ul>
      </li>
    </ul>
  </section>

  <!-- Footer -->
  <footer>
    <div style="max-width: 900px; margin: 0 auto; text-align: center;">
      <p><strong>Pentol BALL</strong> — Keselamatan Dimulai dari Kesadaran.</p>
      <p style="font-style: italic; color: #007BFF; margin: 10px 0;">
        "Kualitas dan Keselamatan Adalah Rasa Utama Kami."
      </p>
      <p>
        <strong>Alamat:</strong> Jl. Mawar No. 1<br>
        <strong>Email:</strong> info@pentolBALL.com<br>
        <strong>Telepon:</strong> +62 812 3456 7890
      </p>
      <div style="margin-top: 10px;">
        <a href="https://www.instagram.com/pentolball" target="_blank" style="margin: 0 8px; color: #ddd; text-decoration: none;">Instagram</a> |
        <a href="https://www.facebook.com/pentolball" target="_blank" style="margin: 0 8px; color: #ddd; text-decoration: none;">Facebook</a> |
        <a href="https://www.tiktok.com/@pentolball" target="_blank" style="margin: 0 8px; color: #ddd; text-decoration: none;">TikTok</a>
      </div>
      <hr style="margin: 15px 0; border: none; border-top: 1px solid #ddd;">
      <p style="color: #ddd;">© <span id="year"></span> Pentol BALL — Semua Hak Dilindungi.</p>
    </div>
  </footer>

  <script>
    document.getElementById('year').textContent = new Date().getFullYear();
  </script>

</body>
</html>
