<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pentol BALL - K3</title>
  <style>
    /* 1. Reset Dasar */
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background: #f4f6f8;
      color: #333;
      line-height: 1.6;
    }

    /* 2. Header */
    header {
      background: #fff;
      border-bottom: 1px solid #ddd;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    header img {
      height: 40px;
      margin-right: 10px;
    }

    header strong {
      font-size: 18px;
      color: #444;
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
      text-decoration: none;
    }

    /* 3. Hero Section (DENGAN BACKGROUND IMAGE) */
    .hero {
      text-align: center; 
      padding: 200px 30px;
      color: #fff;
      position: relative; /* Penting untuk positioning overlay */
      overflow: hidden; /* Mencegah gambar keluar batas */
      
      /* --- Properti Background Image --- */
      /* Ganti URL gambar di bawah ini dengan path gambar Anda yang benar */
      background-image: url('{{ asset('images/founder.jpg') }}'); 
      background-size: cover; /* Memastikan gambar menutupi seluruh area hero */
      background-position: center center; /* Memusatkan gambar */
      background-repeat: no-repeat; /* Mencegah gambar berulang */
    }

    /* Overlay untuk meningkatkan keterbacaan teks */
    .hero::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        /* Overlay warna biru gelap transparan */
        background: rgba(0, 0, 0, 0.5); /* Hitam dengan transparansi 50% */
        z-index: 1; /* Di bawah teks, di atas gambar */
    }

    /* Memastikan teks berada di atas overlay */
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
      font-size: 1.5rem;
      font-weight: 300;
      max-width: 800px;
      margin: 0 auto;
    }

    /* 4. Content Section */
    section {
      padding: 60px 30px;
      margin: 0;
      background: #fff;
      border-top: 1px solid #e0e0e0;
      text-align: center;
    }
    
    #program-k3, #sop {
        background: #fcfcfc;
    }
    
    section h2 {
      margin-bottom: 25px;
      color: #007BFF;
      font-size: 2rem;
      padding-bottom: 10px;
      border-bottom: 2px solid #007BFF;
      display: inline-block;
    }

    /* Styling Konten yang tidak boleh melebar penuh (List, Form) */
    ul, ol, form, p {
        max-width: 800px; 
        margin-left: auto;
        margin-right: auto;
        text-align: left;
    }
    
    ul, ol {
        padding-left: 40px; 
    }
    
    form input, form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 14px;
      display: block;
    }
    
    #laporan form {
        text-align: center; 
    }

    form button {
      background: #007BFF;
      color: #fff;
      padding: 10px 18px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s;
      font-weight: 600;
      margin-bottom: 15px; 
    }

    form button:hover {
      background: #0056b3;
    }

    /* 5. Footer */
    footer {
      background: #333;
      color: #eee;
      padding: 30px 30px;
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

  <header>
    <div style="display:flex; align-items:center;">
      <strong>Pentol BALL</strong>
    </div>
    <nav>
      <a href="#program-k3">Program K3</a>
      <a href="#statistik">Statistik</a>
      <a href="#sop">SOP</a>
      <a href="#laporan">Laporan Insiden</a>
      <a href="{{ url('/manajemen-risk') }}">Manajemen Risiko</a>
      <a href="{{ url('/penerapan-k3') }}">Penerapan K3</a>
       <a href="{{ url('/landasan-hukum') }}">Landasan Hukum</a>
    </nav>
  </header>

  <section class="hero" id="hero">
    <h1>Komitmen K3 Pentol BALL</h1>
    <p>Keselamatan, Kualitas, Kepatuhan untuk semua karyawan</p>
  </section>
  <section id="program-k3">
    <h2>Program K3</h2>
    <ul>
      <li>Pelatihan APD</li>
      <li>Safety Talk mingguan</li>
      <li>Simulasi kebakaran</li>
    </ul>
  </section>

  <section id="statistik">
    <h2>Statistik K3</h2>
    <p>Insiden kerja tahun ini: 0</p>
    <p>Tingkat kepatuhan SOP: 98%</p>
  </section>

  <section id="sop">
    <h2>Daftar SOP</h2>
    <ol>
      <li>APD wajib di area produksi</li>
      <li>Prosedur evakuasi darurat</li>
      <li>Pemeriksaan alat produksi harian</li>
    </ol>
  </section>

  <section id="landasan-hukum-preview">
  <h2>Landasan Hukum K3</h2>
  <p style="max-width: 800px; margin: 0 auto; text-align: left;">
    Untuk mendukung penerapan Keselamatan dan Kesehatan Kerja (K3) di pabrik pengolahan makanan seperti pabrik pentol, 
    terdapat beberapa regulasi penting yang menjadi dasar hukum, antara lain:
  </p>
  <ul style="max-width: 800px; margin: 20px auto; text-align: left; padding-left: 40px;">
    <li><strong>Undang-Undang No. 1 Tahun 1970 tentang Keselamatan Kerja</strong> — dasar utama penerapan K3 di semua tempat kerja agar pekerja terlindungi dari kecelakaan dan penyakit akibat kerja.</li>
    <li><strong>Undang-Undang No. 13 Tahun 2003 tentang Ketenagakerjaan</strong> — menjamin hak pekerja atas keselamatan, kesehatan kerja, dan lingkungan kerja yang layak.</li>
    <li><strong>Peraturan Pemerintah No. 50 Tahun 2012 tentang SMK3</strong> — mengatur kewajiban perusahaan dalam menerapkan sistem manajemen K3.</li>
  </ul>

  <div style="margin-top: 30px;">
    <a href="{{ url('/landasan-hukum') }}" 
       style="background: #007BFF; color: white; padding: 10px 20px; border-radius: 6px; text-decoration: none; font-weight: bold; transition: background 0.3s;">
      Pelajari Selengkapnya →
    </a>
  </div>
</section>


  <section id="laporan">
    <h2>Laporan Insiden</h2>
    <form method="POST">
      @csrf
      <input type="text" name="judul" placeholder="Judul Insiden" required><br>
      <textarea name="deskripsi" placeholder="Deskripsi Insiden" required></textarea><br>
      <button type="submit">Kirim Laporan</button>
    </form>
  </section>

  <footer>
    <div class="content-info">
        <div class="column">
            <h4>Pentol BALL</h4>
            <p>Pabrik Pentol Terbaik Se-Indonesia Raya.</p>
        </div>
        
        <div class="column">
            <h4>Link Cepat</h4>
            <ul>
                <li><a href="#program-k3" style="color: #ccc; text-decoration: none;">Program K3</a></li>
                <li><a href="#statistik" style="color: #ccc; text-decoration: none;">Statistik</a></li>
                <li><a href="#laporan" style="color: #ccc; text-decoration: none;">Laporan</a></li>
            </ul>
        </div>
        
        <div class="column">
            <h4>Hubungi Kami</h4>
            <p>
                <strong>Alamat:</strong> Jl. Mawar No. 1<br>
                <strong>Email:</strong> info@pentolBALL.com<br>
                <strong>Telepon:</strong> +62 812 3456 7890
            </p>
        </div>
    </div>

    <div class="copyright">
      © {{ date('Y') }} Pentol BALL. Semua Hak Dilindungi.
    </div>
  </footer>

</body>
</html>