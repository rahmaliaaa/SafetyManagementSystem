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
    .hero-btn {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(0, 0, 0, 0.4);
      border: none;
      color: white;
      font-size: 2rem;
      padding: 10px 15px;
      cursor: pointer;
      border-radius: 50%;
      transition: background 0.3s;
      z-index: 5;
    }
    .hero-btn:hover {
      background: rgba(0, 0, 0, 0.7);
    }

    .hero-btn.prev { left: 20px; }
    .hero-btn.next { right: 20px; }
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
    .tentang-kami {
      padding: 80px 20px;
      background-color: #f9fafc;
      text-align: center;
    }

    .tentang-kami h2 {
      font-size: 2rem;
      margin-bottom: 30px;
      color: #333;
    }

    .tentang-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
      max-width: 1100px;
      margin: 0 auto;
    }

    .tentang-deskripsi {
      flex: 1 1 500px;
      text-align: left;
    }

    .tentang-deskripsi p {
      font-size: 1rem;
      line-height: 1.6;
      color: #444;
      margin-bottom: 20px;
    }

    .info-perusahaan {
      list-style: none;
      padding: 0;
      margin-bottom: 20px;
    }

    .info-perusahaan li {
      margin-bottom: 8px;
      color: #333;
    }

    .info-perusahaan a {
      color: #007bff;
      text-decoration: none;
    }

    .info-perusahaan a:hover {
      text-decoration: underline;
    }

    /* Founder Grid */
    .tentang-founder-horizontal h3 {
        font-size: 1.5rem;
        color: #222;
        margin-bottom: 15px;
        margin-top: 30px;
    }

    .founder-grid-horizontal {
        /* Mengubah display menjadi flex agar card menyamping */
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        justify-content: left; /* Rata kiri */
    }

    /* Menggunakan style founder card lama, tapi dengan nama baru */
    .founder-card-horizontal {
      background-color: #fff;
      border-radius: 10px;
      padding: 15px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
      flex: 1 1 auto; /* Membiarkan card mengambil lebar seperlunya */
      min-width: 150px; /* Lebar minimum per kartu agar tidak terlalu kecil */
      text-align: center;
    }

    .founder-card-horizontal:hover {
      transform: translateY(-3px);
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .founder-card-horizontal h4 {
      font-size: 1rem;
      color: #333;
      margin-bottom: 3px;
    }

    .founder-card-horizontal p {
      color: #666;
      font-size: 0.85rem;
      margin: 0;
    }


    /* Styling Baru untuk Maps di Kanan */
    .tentang-maps-kanan {
      flex: 1 1 150px;
      text-align: center;
    }

    .tentang-maps-kanan h3 {
      font-size: 1.5rem;
      margin-bottom: 20px;
      color: #222;
    }

    /* Styling untuk iframe maps */
    .maps {
        height: auto; /* Memastikan kontainer maps mengambil tinggi yang tersedia */
    }

    .maps iframe {
      border-radius: 0px;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.15);
      width: 100%;
      height: 300px; 
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
    /* Bagian Visi & Misi jadi 2 kolom */
    .visi-misi-container {
      display: flex;
      justify-content: center;
      gap: 40px; /* Jarak antar kolom */
      max-width: 1000px;
      margin: 0 auto;
      text-align: left;
      flex-wrap: wrap; /* Biar responsif di HP */
    }

    .visi-misi-column {
      flex: 1;
      min-width: 400px;
      background: #f9f9f9;
      padding: px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .visi-misi-column h3 {
      color: #007BFF;
      margin-top: 0;
    }

    .visi-misi-column ul {
      padding-left: 20px;
    }
    /* Penerapan K3 Section */
  .penerapan-container {
    display: flex;
    justify-content: center;
    gap: 25px;
    flex-wrap: wrap;
    max-width: 1100px;
    margin: 0 auto;
    text-align: center;
  }

  .penerapan-card {
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    padding: 25px 20px;
    flex: 1;
    min-width: 280px;
    max-width: 320px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .penerapan-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 14px rgba(0,0,0,0.1);
  }

  .penerapan-card h3 {
    color: #007BFF;
    margin-bottom: 10px;
  }

  .penerapan-card p {
    font-size: 0.95rem;
    color: #555;
    min-height: 80px; /* biar tinggi rata */
  }

  .learn-more-btn {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 16px;
    background: #007BFF;
    color: #fff;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 600;
    transition: background 0.3s;
  }

  .learn-more-btn:hover {
    background: #0056b3;
  }
  .sop-container {
    display: flex;
    justify-content: center;
    gap: 25px;
    flex-wrap: wrap;
    max-width: 1100px;
    margin: 0 auto;
    text-align: center;
  }

  .sop-card {
   background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    padding: 25px 20px;
    flex: 1;
    min-width: 280px;
    max-width: 320px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .sop-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 14px rgba(0,0,0,0.1);
  }

  .sop-card h3 {
    color: #007BFF;
    margin-bottom: 10px;
  }

  .sop-card p {
    font-size: 0.95rem;
    color: #555;
    min-height: 80px; 
  }
  /* === Statistika & Laporan (dua kolom sejajar) === */
  .statistik-laporan-container {
    display: flex;
    justify-content: center;
    align-items: stretch;
    max-width: 1000px;
    margin: 0 auto;
    gap: 40px;
    text-align: left;
    flex-wrap: wrap; /* biar responsif di HP */
  }

  .statistik-column,
  .laporan-column {
    flex: 1;
    background: #fff;
    border-radius: 12px;
    padding: 25px 30px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    transition: transform 0.3s, box-shadow 0.3s;
    min-width: 300px;
  }

  .statistik-column:hover,
  .laporan-column:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 14px rgba(0,0,0,0.1);
  }

  .statistik-column h2,
  .laporan-column h2 {
    color: #007BFF;
    margin-bottom: 10px;
  }

  .statistik-column p,
  .laporan-column p {
    color: #555;
    line-height: 1.6;
    font-size: 0.95rem;
  }
  .learn-more-btn:hover {
    text-decoration: underline;
  }
  .produk-container-scroll {
    display: flex;
    gap: 20px;
    overflow-x: auto;
    padding-bottom: 10px;
    scroll-behavior: smooth; /* animasi scroll halus */
  }

  /* Hilangkan scrollbar di beberapa browser */
  .produk-container-scroll::-webkit-scrollbar {
    height: 8px;
  }

  .produk-container-scroll::-webkit-scrollbar-thumb {
    background-color: rgba(0,0,0,0.2);
    border-radius: 4px;
  }

  .produk-card {
    background: #fff;
    border: 1px solid #e0e0e0;
    border-radius: 10px;
    padding: 25px 20px;
    flex: 0 0 280px; /* pastikan card fixed width supaya scroll horizontal */
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .produk-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 14px rgba(0,0,0,0.1);
  }

  .produk-card h3 {
    color: #007BFF;
    margin-bottom: 10px;
  }

  .produk-card p {
    font-size: 0.95rem;
    color: #555;
    min-height: 80px;
  }

  .learn-more-btn {
    display: inline-block;
    margin-top: 10px;
    padding: 8px 16px;
    background: #007BFF;
    color: #fff;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 600;
    transition: background 0.3s;
  }

  .learn-more-btn:hover {
    background: #0056b3;
    text-decoration: underline;
  }
  .learn-more-btn:hover {
    background: #0056b3;
    text-decoration: underline;
  }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

  <header>
    <div style="display:flex; align-items:center;">
      <img src="{{ asset('images/Ball.png') }}" alt="Logo Pentol BALL">
      <strong>Pentol BALL</strong>
    </div>
    <nav>
      <a href="{{ url('/landasan-hukum') }}">Landasan Hukum</a>
      <a href="{{ url('/penerapan-k3') }}">Penerapan K3</a>
      <a href="{{ url('/manajemen-risk') }}">Manajemen Risiko</a>
      <a href="{{ url('/sop') }}">SOP</a>
      <a href="{{ url('#statistik-laporan') }}">Statistik</a>
    </nav>
  </header>

  <section class="hero" id="hero">
  <div class="hero-content">
    <h1>Komitmen K3 Pentol BALL</h1>
    <p>Keselamatan, Kualitas, Kepatuhan untuk semua karyawan</p>
  </div>
  <!-- Tombol navigasi manual -->
  <button class="hero-btn prev">❮</button>
  <button class="hero-btn next">❯</button>
</section>


  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const hero = document.querySelector(".hero");

      // Daftar gambar background
      const images = [
        "{{ asset('images/founder.jpg') }}",
        "{{ asset('images/Ball.png') }}",
        "{{ asset('images/simulasi-kebakaran.jpg') }}",
        "{{ asset('images/pabrik.jpg') }}"
      ];

      let current = 0;

      // Fungsi untuk mengganti gambar
      function changeBackground() {
        hero.style.backgroundImage = `url('${images[current]}')`;
        current = (current + 1) % images.length; // looping
      }

      // Ganti gambar setiap 5 detik
      changeBackground();
      setInterval(changeBackground, 5000);
    });
  </script>
  
  <!-- 🔹 Tentang Kami Section -->
  <section id="tentang-kami" class="tentang-kami">
    <h2>Tentang Kami</h2>

    <div class="tentang-container">
      <div class="tentang-deskripsi">
        <p>
          <strong>Pentol BALL</strong> adalah perusahaan yang bergerak di bidang kuliner
          dengan komitmen tinggi terhadap kualitas, keamanan pangan, dan penerapan
          Keselamatan dan Kesehatan Kerja (K3) dalam setiap proses produksinya.
          Kami berkomitmen menciptakan lingkungan kerja yang aman, nyaman, dan produktif bagi seluruh karyawan.
        </p>

        <ul class="info-perusahaan">
          <li><strong>Alamat:</strong> Jl. Soekarno Hatta No. 123, Malang, Jawa Timur</li>
          <li><strong>No. Telepon:</strong> (0341) 765432</li>
          <li><strong>Website:</strong> <a href="https://pentolball.co.id" target="_blank">pentolball.co.id</a></li>
          <li><strong>Email:</strong> info@pentolball.co.id</li>
          <li><strong>Sosial Media:</strong> 
            <a href="#" target="_blank">Instagram</a> | 
            <a href="#" target="_blank">Facebook</a> | 
            <a href="#" target="_blank">LinkedIn</a>
          </li>
        </ul>
         <div class="tentang-maps-kanan">
            <h3>Lokasi Kami</h3>
            <div class="maps">
                <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.466128445107!2d112.6150155750987!3d-7.951977592073463!-
                2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6282a12f12345%3A0x7ff6e2a1d0f6b3e!2sPoliteknik%20Negeri%20Malang!-
                5e0!3m2!1sid!2sid!4v1690000000000!5m2!1sid!2sid?q=Jl.+Soekarno+Hatta+No.123,+Mojolangu,+Kec.+Lowokwaru,+Kota+Malang,+Jawa+Timur+65141,+Indonesia&z=15&output=embed"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
        <div class="tentang-founder-horizontal">
          <center><h3>Founder Kami</h3></center>
          <div class="founder-grid-horizontal">
            <div class="founder-card-horizontal">
              <h4>ALYA AJENG AYU</h4>
              <p>(2341760119)</p>
            </div>
            <div class="founder-card-horizontal">
              <h4>BELQIS IVANA FIDELIA ARFANY</h4>
              <p>(2341760075)</p>
            </div>
            <div class="founder-card-horizontal">
              <h4>LYRA FAIQAH BILQIS</h4>
              <p>(2341760013)</p>
            </div>
            <div class="founder-card-horizontal">
              <h4>RAHMALIA MUTIA FARDA</h4>
              <p>(2341760130)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="visi-misi">
    <h2>Visi & Misi</h2>

    <div class="visi-misi-container">
      <!-- Kolom Visi -->
      <div class="visi-misi-column">
        <h3>Visi</h3>
        <p>
          Menjadi perusahaan kuliner terdepan yang menjadikan keselamatan dan kesehatan kerja (K3)
          sebagai budaya utama dalam setiap proses produksi dan pelayanan.
        </p>
      </div>

      <!-- Kolom Misi -->
      <div class="visi-misi-column">
        <h3>Misi</h3>
        <ul>
          <li>Meningkatkan kesadaran dan kepatuhan seluruh karyawan terhadap standar K3.</li>
          <li>Menyediakan lingkungan kerja yang aman, sehat, dan produktif.</li>
          <li>Menjalankan sistem manajemen K3 yang berkelanjutan sesuai peraturan pemerintah.</li>
          <li>Memastikan kualitas produk terjaga melalui penerapan prosedur keselamatan yang ketat.</li>
          <li>Mendorong inovasi dan pelatihan berkelanjutan dalam aspek keamanan kerja.</li>
        </ul>
      </div>
    </div>
  </section>
  <section id="produk" style="background:#fcfcfc; padding:60px 20px;">
  <h2>Jenis Produk Pentol BALL</h2>
  <div class="produk-container-scroll">
    <div class="produk-card">
      <img src="{{ asset('images/pentol-original.jpg') }}" alt="Pentol Original" style="width:200px; height:100px; object-fit:cover; border-radius:10px; margin-bottom:15px;">
      <h3>Pentol Original</h3>
      <p>Pentol tradisional dengan rasa gurih khas, cocok untuk camilan atau lauk tambahan.</p>
      <a href="{{ url('/produk#pentol-original') }}" class="learn-more-btn">Lihat Detail →</a>
    </div>
    <div class="produk-card">
      <img src="{{ asset('images/pentol-keju.jpg') }}" alt="Pentol Original" style="width:200px; height:100px; object-fit:cover; border-radius:10px; margin-bottom:15px;">
      <h3>Pentol Keju</h3>
      <p>Pentol berisi keju leleh, favorit anak-anak dan pecinta keju.</p>
      <a href="{{ url('/produk#pentol-keju') }}" class="learn-more-btn">Lihat Detail →</a>
    </div>
    <div class="produk-card">
      <img src="{{ asset('images/pentol-pedas.jpg') }}" alt="Pentol Keju" style="width:200px; height:100px; object-fit:cover; border-radius:10px; margin-bottom:15px;">
      <h3>Pentol Pedas</h3>
      <p>Pentol dengan bumbu pedas menggigit, cocok untuk yang suka sensasi pedas.</p>
      <a href="{{ url('/produk#pentol-pedas') }}" class="learn-more-btn">Lihat Detail →</a>
    </div>
    <div class="produk-card">
      <img src="{{ asset('images/pentol-telur.jpg') }}" alt="Pentol Telur" style="width:200px; height:100px; object-fit:cover; border-radius:10px; margin-bottom:15px;">
      <h3>Pentol Telur</h3>
      <p>Pentol isi Telur pilihan yang premium, memiliki aroma khas dan tekstur lembut.</p>
      <a href="{{ url('/produk#pentol-telur') }}" class="learn-more-btn">Lihat Detail →</a>
    </div>
    <div class="produk-card">
      <img src="{{ asset('images/pentol-daging.jpg') }}" alt="Pentol Daging" style="width:200px; height:100px; object-fit:cover; border-radius:10px; margin-bottom:15px;">
      <h3>Pentol Daging</h3>
      <p>Pentol dengan isian Daging Cacian, memiliki aroma khas dan tekstur lembut.</p>
      <a href="{{ url('/produk#pentol-daging') }}" class="learn-more-btn">Lihat Detail →</a>
    </div>
    <div class="produk-card">
      <img src="{{ asset('images/pentol-beranak.jpg') }}" alt="Pentol Beranak" style="width:200px; height:100px; object-fit:cover; border-radius:10px; margin-bottom:15px;">
      <h3>Pentol Beranak</h3>
      <p>Pentol Speisal Beranak, memiliki aroma khas dan tekstur lembut.</p>
      <a href="{{ url('/produk#pentol-cumi') }}" class="learn-more-btn">Lihat Detail →</a>
    </div>
    
    <!-- Tambahkan card lain jika perlu -->
  </div>
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

  <section id="penerapan-k3-preview">
    <h2>Penerapan K3</h2>

    <div class="penerapan-container">
      <div class="penerapan-card">
        <h3>Layout</h3>
        <p>Penataan area kerja yang aman dan efisien sesuai prinsip ergonomi serta alur produksi yang minim risiko kecelakaan.</p>
        <a href="{{ url('/penerapan-k3') }}" class="learn-more-btn">Pelajari Selengkapnya  →</a>
      </div>

      <div class="penerapan-card">
        <h3>Simulasi Kebakaran</h3>
        <p>Kegiatan rutin untuk memastikan seluruh karyawan memahami prosedur evakuasi dan penggunaan APAR secara benar.</p>
        <a href="{{ url('/penerapan-k3') }}" class="learn-more-btn">Pelajari Selengkapnya  →</a>
      </div>

      <div class="penerapan-card">
        <h3>Safety Talk Mingguan</h3>
        <p>Diskusi singkat yang dilakukan setiap minggu untuk meningkatkan kesadaran akan potensi bahaya di tempat kerja.</p>
        <a href="{{ url('/penerapan-k3') }}" class="learn-more-btn">Pelajari Selengkapnya  →</a>
      </div>
    </div>
  </section>

<section id="sop">
  <h2>Daftar SOP</h2>

  <div class="sop-container">
    <div class="sop-card">
      <h3>Penggunaan APD</h3>
      <p>Standar pemakaian alat pelindung diri di seluruh area produksi, termasuk masker, sarung tangan, dan penutup kepala.</p>
      <a href="{{ url('/SOP') }}" class="learn-more-btn">Pelajari Selengkapnya  →</a>
    </div>

    <div class="sop-card">
      <h3>Prosedur Evakuasi Darurat</h3>
      <p>Panduan langkah-langkah evakuasi saat terjadi keadaan darurat seperti kebakaran atau kebocoran gas.</p>
      <a href="{{ url('/SOP') }}" class="learn-more-btn">Pelajari Selengkapnya  →</a>
    </div>

    <div class="sop-card">
      <h3>Pemeriksaan Alat Produksi</h3>
      <p>Tata cara pengecekan dan perawatan harian mesin agar tetap aman dan berfungsi optimal.</p>
      <a href="{{ url('/SOP') }}" class="learn-more-btn">Pelajari Selengkapnya  →</a>
    </div>
  </div>
</section>

  <section id="statistik-laporan">
  <div class="statistik-laporan-container">
    <div class="statistik-column">
      <h2>Statistik K3</h2>
      <p>Berikut grafik insiden kerja dan laporan kejadian tahun ini:</p>
      <div style="max-width: 700px; margin: 0 auto;">
        <canvas id="chartK3"></canvas>
      </div>
    </div>

    <div class="laporan-column">
      <h2>Laporan Insiden</h2>
      <form method="POST">
        @csrf
        <input type="text" name="judul" placeholder="Judul Insiden" required><br>
        <textarea name="deskripsi" placeholder="Deskripsi Insiden" required></textarea><br>
        <button type="submit">Kirim Laporan</button>
      </form>
    </div>
  </div>
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

  <!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('chartK3').getContext('2d');

  const chartK3 = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober'],
      datasets: [
        {
          label: 'Jumlah Insiden Kerja',
          data: [2, 1, 0, 3, 1, 0, 2, 0, 1, 0], // dummy data
          backgroundColor: 'rgba(255, 99, 132, 0.7)',
          borderColor: 'rgba(255, 99, 132, 1)',
          borderWidth: 1
        },
        {
          label: 'Laporan Kejadian',
          data: [3, 2, 1, 4, 2, 1, 3, 1, 2, 1], // dummy data
          backgroundColor: 'rgba(255, 206, 86, 0.8)',
          borderColor: 'rgba(54, 162, 235, 1)',
          borderWidth: 1
        }
      ]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true,
          title: {
            display: true,
            text: 'Jumlah Kejadian'
          }
        },
        x: {
          title: {
            display: true,
            text: 'Bulan'
          }
        }
      },
      plugins: {
        legend: {
          display: true,
          position: 'top'
        },
        title: {
          display: true,
          text: 'Grafik Insiden & Laporan K3 Tahun 2025'
        }
      }
    }
  });
</script>
</body>
</html>