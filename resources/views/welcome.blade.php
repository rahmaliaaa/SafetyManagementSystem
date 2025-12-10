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
      <a href="{{ url('/k3-document-management') }}">Pengendalian Dokumen</a>
      <a href="{{ url('#statistik-laporan') }}">Statistik</a>
      <a href="{{ url('/struktur-organisasi') }}">Struktur Organisasi</a>
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

  <!-- MULAI: BAGIAN KEBIJAKAN SMK3 (ganti hanya blok ini di welcome.blade.php) -->
<section id="kebijakan-smk3" style="padding:40px 20px; background:#fff;">
  <style>
    /* Scoped styles khusus kebijakan (gunakan id untuk menghindari konflik) */
    #kebijakan-smk3 .panel{max-width:1100px;margin:0 auto;border-radius:12px;padding:18px;box-shadow:0 8px 30px rgba(15,23,42,0.06);border:1px solid rgba(15,23,42,0.03);}
    #kebijakan-smk3 .header-grid{display:flex;justify-content:space-between;align-items:flex-start;gap:12px;flex-wrap:wrap}
    #kebijakan-smk3 h2{color:#007BFF;margin:0 0 6px 0}
    #kebijakan-smk3 .lead{color:#666;margin:0 0 8px 0}
    #kebijakan-smk3 .policy-grid{display:grid;grid-template-columns:1fr 360px;gap:18px;margin-top:14px}
    @media (max-width:900px){ #kebijakan-smk3 .policy-grid{grid-template-columns:1fr} }
    #kebijakan-smk3 .scope-list{list-style:none;padding:0;margin:8px 0 0;display:grid;gap:8px}
    #kebijakan-smk3 .scope-item{display:flex;gap:10px;align-items:flex-start}
    #kebijakan-smk3 .dot{width:10px;height:10px;border-radius:50%;background:#007BFF;margin-top:6px}
    #kebijakan-smk3 .accordion{border-radius:10px;overflow:hidden;border:1px solid rgba(15,23,42,0.04);margin-top:12px}
    #kebijakan-smk3 .acc-item{border-bottom:1px solid rgba(15,23,42,0.04)}
    #kebijakan-smk3 .acc-btn{display:flex;justify-content:space-between;align-items:center;padding:12px 14px;background:transparent;border:none;width:100%;text-align:left;cursor:pointer}
    #kebijakan-smk3 .acc-btn h4{margin:0;font-size:1rem}
    #kebijakan-smk3 .acc-body{padding:0 14px 0 14px;max-height:0;overflow:hidden;transition:max-height .32s cubic-bezier(.2,.9,.2,.95),padding .22s}
    #kebijakan-smk3 .chip{display:inline-block;background:#f1f5f9;color:#666;padding:6px 10px;border-radius:999px;font-size:0.85rem}
    #kebijakan-smk3 .tools .law-list{background:linear-gradient(180deg,#fff,#f8fcff);padding:12px;border-radius:8px;border:1px solid rgba(0,86,179,0.06)}
    #kebijakan-smk3 .btn{background:#007BFF;color:#fff;padding:8px 12px;border-radius:8px;border:none;cursor:pointer;font-weight:600}
    #kebijakan-smk3 .btn.secondary{background:#eef6ff;color:#007BFF;border:1px solid rgba(0,123,255,0.12)}
    #kebijakan-smk3 .small{font-size:0.92rem;color:#666}
    #kebijakan-smk3 .progress{height:10px;background:#eef2ff;border-radius:999px;overflow:hidden}
    #kebijakan-smk3 .progress > i{display:block;height:100%;background:linear-gradient(90deg,#007BFF,#0056b3);width:45%}
  </style>

  <div class="panel">
    <div class="header-grid">
      <div>
        <h2>⭐ Kebijakan Perusahaan</h2>
        <p class="lead">Manajemen <strong>Pentol BALL</strong> berkomitmen menerapkan Sistem Manajemen Keselamatan & Kesehatan Kerja (SMK3) untuk menjamin keselamatan, kualitas, dan kepatuhan di seluruh aktivitas produksi.</p>
      </div>
      <div style="text-align:right">
        <div class="chip">Terakhir diperbarui: 10 Des 2025</div>
      </div>
    </div>

    <div class="policy-grid">
      <!-- KIRI: ruang lingkup + accordion -->
      <div>
        <h4 style="margin:0 0 8px 0">Ruang Lingkup</h4>
        <ul class="scope-list">
          <li class="scope-item"><span class="dot"></span><div>Area produksi (penggilingan, pencampuran, pembentukan, perebusan, pendinginan)</div></li>
          <li class="scope-item"><span class="dot"></span><div>Penyimpanan bahan baku & hasil produksi (chiller/freezer)</div></li>
          <li class="scope-item"><span class="dot"></span><div>Area sanitasi dan kebersihan lingkungan</div></li>
          <li class="scope-item"><span class="dot"></span><div>Distribusi & pengiriman produk</div></li>
          <li class="scope-item"><span class="dot"></span><div>Semua pekerja, tamu, supplier, dan kontraktor</div></li>
        </ul>

        <div class="accordion" id="keb_accordion">
          <div class="acc-item">
            <button class="acc-btn" data-target="keb_a1"><h4>1. Identifikasi Bahaya & Penilaian Risiko (HIRARC)</h4><span class="small">Lihat</span></button>
            <div class="acc-body" id="keb_a1"><p class="small">Melakukan identifikasi bahaya, penilaian risiko, dan penentuan kontrol yang tepat untuk setiap tahap proses produksi. Hasil HIRARC direview setiap 6 bulan atau saat perubahan proses.</p></div>
          </div>

          <div class="acc-item">
            <button class="acc-btn" data-target="keb_a2"><h4>2. Penyediaan APD Wajib</h4><span class="small">Lihat</span></button>
            <div class="acc-body" id="keb_a2"><p class="small">APD wajib termasuk sarung tangan, masker, apron, sepatu anti-slip, dan penutup kepala. Petunjuk penggunaan tersedia di area kerja.</p></div>
          </div>

          <div class="acc-item">
            <button class="acc-btn" data-target="keb_a3"><h4>3. Pelatihan & Kompetensi</h4><span class="small">Lihat</span></button>
            <div class="acc-body" id="keb_a3"><p class="small">Pelatihan: penggunaan mesin, penanganan bahan, hygiene, dan P3K. Rekaman pelatihan disimpan di HR dan dievaluasi tiap tahun.</p></div>
          </div>

          <div class="acc-item">
            <button class="acc-btn" data-target="keb_a4"><h4>4. Kebersihan & Pemeriksaan Kesehatan</h4><span class="small">Lihat</span></button>
            <div class="acc-body" id="keb_a4"><p class="small">Menjaga kebersihan sesuai standar keamanan pangan. Pemeriksaan kesehatan berkala untuk karyawan produksi.</p></div>
          </div>

          <div class="acc-item">
            <button class="acc-btn" data-target="keb_a5"><h4>5. Pemeliharaan & Perawatan Alat</h4><span class="small">Lihat</span></button>
            <div class="acc-body" id="keb_a5"><p class="small">Jadwal pemeliharaan preventif dan checklist harian untuk setiap mesin. Catatan perawatan tersimpan di log mesin.</p></div>
          </div>

          <div class="acc-item">
            <button class="acc-btn" data-target="keb_a6"><h4>6. Pelaporan dan Tindak Lanjut Insiden</h4><span class="small">Lihat</span></button>
            <div class="acc-body" id="keb_a6"><p class="small">Semua insiden dilaporkan melalui formulir digital, diinvestigasi, dan diikuti tindakan korektif untuk mencegah ulang.</p></div>
          </div>

          <div class="acc-item">
            <button class="acc-btn" data-target="keb_a7"><h4>7. Sanksi & Kepatuhan</h4><span class="small">Lihat</span></button>
            <div class="acc-body" id="keb_a7"><p class="small">Pelanggaran prosedur akan dikenakan sanksi administratif hingga tindakan disipliner sesuai kebijakan.</p></div>
          </div>
        </div>

        <div style="display:flex;gap:10px;margin-top:14px;flex-wrap:wrap">
          <button class="btn" id="keb_copySummary">Salin Ringkasan</button>
          <button class="btn secondary" id="keb_print">Cetak / Simpan PDF</button>
        </div>
      </div>

      <!-- KANAN: tools singkat -->
      <aside class="tools" style="padding:12px;">
        <div style="margin-bottom:10px">
          <div style="display:flex;justify-content:space-between;align-items:center">
            <strong>Statistik Singkat</strong><span class="small">Tahun 2025</span>
          </div>
          <div style="margin-top:8px" class="small">Insiden tercatat: <strong>10</strong></div>
          <div style="margin-top:6px" class="small">Laporan Kejadian: <strong>18</strong></div>
          <div style="margin-top:8px" class="progress" aria-hidden="true"><i></i></div>
        </div>

        <div style="margin-bottom:10px">
          <label class="small">Landasan Hukum</label>
          <ul class="law-list" style="margin-top:6px;padding-left:12px">
            <li><strong>UU No. 1 Tahun 1970</strong> — Keselamatan Kerja</li>
            <li><strong>UU No. 13 Tahun 2003</strong> — Ketenagakerjaan</li>
            <li><strong>PP No. 50 Tahun 2012</strong> — SMK3</li>
          </ul>
        </div>

        <div>
          <label class="small">Aksi Cepat</label>
          <div style="display:flex;gap:8px;flex-wrap:wrap;margin-top:6px">
            <button class="btn secondary" id="keb_reportIncident">Laporkan Insiden</button>
            <a class="btn" href="{{ url('/penerapan-k3') }}">Detail Penerapan</a>
          </div>
        </div>
      </aside>
    </div>
  </div>

  <script>
    /* Script khusus kebijakan (unik id prefiks keb_) */
    (function(){
      // Accordion
      document.querySelectorAll('#kebijakan-smk3 .acc-btn').forEach(btn=>{
        btn.addEventListener('click', ()=>{
          const target = btn.dataset.target;
          const body = document.getElementById(target);
          const isOpen = body.style.maxHeight && body.style.maxHeight !== '0px';
          // close all
          document.querySelectorAll('#kebijakan-smk3 .acc-body').forEach(b=>{ b.style.maxHeight = null; b.style.paddingBottom = '0'; });
          if(!isOpen){ body.style.paddingBottom = '12px'; body.style.maxHeight = body.scrollHeight + 'px'; }
        });
      });

      // Search filter
      const search = document.getElementById('keb_search');
      if(search){
        search.addEventListener('input', e=>{
          const q = e.target.value.toLowerCase().trim();
          document.querySelectorAll('#kebijakan-smk3 #keb_accordion .acc-item').forEach(item=>{
            const txt = item.innerText.toLowerCase();
            item.style.display = txt.includes(q) ? '' : 'none';
          });
        });
      }

      // Copy summary
      document.getElementById('keb_copySummary')?.addEventListener('click', async ()=>{
        const summary = `Pentol BALL - Kebijakan SMK3\n\nRuang Lingkup:\n- Area produksi\n- Penyimpanan bahan baku\n- Sanitasi\n- Distribusi\n- Semua pekerja/kontraktor\n\nKomitmen utama: HIRARC, APD, Pelatihan, Kebersihan, Pemeliharaan, Pelaporan, Sanksi.`;
        try{ await navigator.clipboard.writeText(summary); alert('Ringkasan berhasil disalin ke clipboard!'); }
        catch(e){ alert('Tidak dapat mengakses clipboard. Silakan copy manual:\\n\\n'+summary); }
      });

      // Print
      document.getElementById('keb_print')?.addEventListener('click', ()=>{ window.print(); });

      // Report incident (simulasi)
      document.getElementById('keb_reportIncident')?.addEventListener('click', ()=>{
        const title = prompt('Judul Insiden (singkat):');
        if(!title) return alert('Pembatalan.');
        const desc = prompt('Deskripsi singkat insiden:');
        if(!desc) return alert('Pembatalan.');
        alert('Terima kasih — laporan akan dikirim ke tim K3 (simulasi).');
        // Jika ingin dihubungkan ke API: lakukan fetch POST ke endpoint Anda di sini.
      });

      // Auto-expand first item for readability
      window.addEventListener('load', ()=>{ const f = document.getElementById('keb_a1'); if(f){ f.style.maxHeight = f.scrollHeight + 'px'; f.style.paddingBottom = '12px'; } });
    })();
  </script>
</section>
<!-- SELESAI: BAGIAN KEBIJAKAN SMK3 -->

  <section id="produk" style="background:#fcfcfc; padding:60px 20px;">
  <h2>Jenis Produk Pentol BALL</h2>
  <div class="produk-container-scroll">
    <div class="produk-card">
      <img src="{{ asset('images/pentol-original.jpg') }}" alt="Pentol Original" style="width:200px; height:100px; object-fit:cover; border-radius:10px; margin-bottom:15px;">
      <h3>Pentol Original</h3>
      <p>Pentol tradisional dengan rasa gurih khas, cocok untuk camilan atau lauk tambahan.</p>
      <a href="{{ url('/produk/pentol-original') }}" class="learn-more-btn">Lihat Detail →</a>
    </div>
    <div class="produk-card">
      <img src="{{ asset('images/pentol-keju.jpg') }}" alt="Pentol Original" style="width:200px; height:100px; object-fit:cover; border-radius:10px; margin-bottom:15px;">
      <h3>Pentol Keju</h3>
      <p>Pentol berisi keju leleh, favorit anak-anak dan pecinta keju.</p>
      <a href="{{ url('/produk/pentol-original') }}" class="learn-more-btn">Lihat Detail →</a>
    </div>
    <div class="produk-card">
      <img src="{{ asset('images/pentol-pedas.jpg') }}" alt="Pentol Keju" style="width:200px; height:100px; object-fit:cover; border-radius:10px; margin-bottom:15px;">
      <h3>Pentol Pedas</h3>
      <p>Pentol dengan bumbu pedas menggigit, cocok untuk yang suka sensasi pedas.</p>
      <a href="{{ url('/produk/pentol-original') }}" class="learn-more-btn">Lihat Detail →</a>
    </div>
    <div class="produk-card">
      <img src="{{ asset('images/pentol-telur.jpg') }}" alt="Pentol Telur" style="width:200px; height:100px; object-fit:cover; border-radius:10px; margin-bottom:15px;">
      <h3>Pentol Telur</h3>
      <p>Pentol isi Telur pilihan yang premium, memiliki aroma khas dan tekstur lembut.</p>
      <a href="{{ url('/produk/pentol-original') }}" class="learn-more-btn">Lihat Detail →</a>
    </div>
    <div class="produk-card">
      <img src="{{ asset('images/pentol-daging.jpg') }}" alt="Pentol Daging" style="width:200px; height:100px; object-fit:cover; border-radius:10px; margin-bottom:15px;">
      <h3>Pentol Daging</h3>
      <p>Pentol dengan isian Daging Cacian, memiliki aroma khas dan tekstur lembut.</p>
      <a href="{{ url('/produk/pentol-original') }}" class="learn-more-btn">Lihat Detail →</a>
    </div>
    <div class="produk-card">
      <img src="{{ asset('images/pentol-beranak.jpg') }}" alt="Pentol Beranak" style="width:200px; height:100px; object-fit:cover; border-radius:10px; margin-bottom:15px;">
      <h3>Pentol Beranak</h3>
      <p>Pentol Speisal Beranak, memiliki aroma khas dan tekstur lembut.</p>
      <a href="{{ url('/produk/pentol-original') }}" class="learn-more-btn">Lihat Detail →</a>
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
<!-- BUTTON RENCANA TAHUNAN -->
  <section id="rencana-tahunan-section" style="background:#fff; padding:60px 20px; text-align:center;">
    <h2 style="color:#007BFF; margin-bottom:20px;">📅 Rencana Tahunan K3 2025</h2>
    <p style="color:#666; margin-bottom:30px;">Lihat jadwal lengkap program K3 sepanjang tahun</p>
    
    <button id="btn-rencana-tahunan" style="background:linear-gradient(135deg, #007BFF, #0056b3); color:white; padding:15px 40px; border:none; border-radius:50px; font-size:1.1rem; font-weight:bold; cursor:pointer; box-shadow:0 4px 15px rgba(0,123,255,0.3); transition:all 0.3s; display:inline-flex; align-items:center; gap:10px;">
      <span style="font-size:1.5rem;">📋</span>
      Lihat Rencana Tahunan
    </button>
  </section>

  <!-- MODAL POP-UP RENCANA TAHUNAN -->
  <div id="modal-rencana" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.7); z-index:9999; overflow-y:auto; padding:20px;">
    <div style="max-width:1200px; margin:50px auto; background:#fff; border-radius:20px; box-shadow:0 10px 50px rgba(0,0,0,0.3); position:relative; animation:slideDown 0.4s ease;">
      
      <!-- Header Modal -->
      <div style="background:linear-gradient(135deg, #007BFF, #0056b3); color:white; padding:25px 30px; border-radius:20px 20px 0 0; display:flex; justify-content:space-between; align-items:center;">
        <h2 style="margin:0; color:white; border:none; padding:0;">📅 Rencana Tahunan K3 2025</h2>
        <button id="close-modal" style="background:rgba(255,255,255,0.2); border:none; color:white; font-size:2rem; cursor:pointer; width:40px; height:40px; border-radius:50%; transition:background 0.3s; display:flex; align-items:center; justify-content:center;">×</button>
      </div>

      <!-- Content Modal -->
      <div style="padding:30px; max-height:70vh; overflow-y:auto;">
        
        <!-- Progress Overview di Atas -->
        <div style="background:linear-gradient(135deg, #f8f9fa, #e9ecef); padding:25px; border-radius:12px; text-align:center; margin-bottom:30px; border:2px solid #007BFF;">
          <h3 style="color:#333; margin-bottom:20px;">Progress Keseluruhan 2025</h3>
          <div style="background:#e0e0e0; height:35px; border-radius:20px; overflow:hidden; margin-bottom:15px; position:relative;">
            <div id="progress-bar" style="background:linear-gradient(90deg, #28a745, #20c997); height:100%; width:17%; transition:width 0.8s ease; display:flex; align-items:center; justify-content:center; color:white; font-weight:bold; font-size:16px; position:relative;">
              <span id="progress-text">17%</span>
            </div>
          </div>
          <div style="display:flex; justify-content:space-around; flex-wrap:wrap; gap:20px; margin-top:25px;">
            <div style="text-align:center; padding:15px; background:white; border-radius:10px; min-width:120px; box-shadow:0 2px 8px rgba(0,0,0,0.1);">
              <div style="font-size:2.5rem; color:#28a745;" id="count-selesai">11</div>
              <div style="color:#666; font-size:0.9rem; font-weight:600;">Selesai</div>
            </div>
            <div style="text-align:center; padding:15px; background:white; border-radius:10px; min-width:120px; box-shadow:0 2px 8px rgba(0,0,0,0.1);">
              <div style="font-size:2.5rem; color:#ffc107;" id="count-terjadwal">1</div>
              <div style="color:#666; font-size:0.9rem; font-weight:600;">Terjadwal</div>
            </div>
            <div style="text-align:center; padding:15px; background:white; border-radius:10px; min-width:120px; box-shadow:0 2px 8px rgba(0,0,0,0.1);">
              <div style="font-size:2.5rem; color:#6c757d;" id="count-belum">0</div>
              <div style="color:#666; font-size:0.9rem; font-weight:600;">Belum Mulai</div>
            </div>
          </div>
        </div>
    
        
    <div style="max-width:1200px; margin:0 auto;">
      <!-- Timeline Visual -->
      <div class="timeline-container" style="position:relative; padding:20px 0;">
        
        <!-- Q1 -->
        <div class="quarter-section" style="margin-bottom:30px; padding:25px; background:#f8f9fa; border-radius:12px; border-left:5px solid #007BFF;">
          <h3 style="color:#007BFF; margin-bottom:15px;">🔹 Kuartal 1 (Januari - Maret)</h3>
          <ul style="list-style:none; padding:0;">
            <li class="kegiatan-item" data-status="selesai" style="padding:10px 0; border-bottom:1px solid #e0e0e0; display:flex; justify-content:space-between; align-items:center;">
              <div>
                <strong>Januari:</strong> Audit K3 Tahunan & Evaluasi Risiko
              </div>
              <button class="btn-toggle-status" style="background:#28a745; color:white; border:none; padding:5px 15px; border-radius:20px; cursor:pointer; font-weight:bold; font-size:0.85rem;">✓ Selesai</button>
            </li>
            <li class="kegiatan-item" data-status="selesai" style="padding:10px 0; border-bottom:1px solid #e0e0e0; display:flex; justify-content:space-between; align-items:center;">
              <div>
                <strong>Februari:</strong> Pelatihan APD & Hygiene Produksi
              </div>
              <button class="btn-toggle-status" style="background:#28a745; color:white; border:none; padding:5px 15px; border-radius:20px; cursor:pointer; font-weight:bold; font-size:0.85rem;">✓ Selesai</button>
            </li>
            <li class="kegiatan-item" data-status="selesai" style="padding:10px 0; display:flex; justify-content:space-between; align-items:center;">
              <div>
                <strong>Maret:</strong> Simulasi Kebakaran & Evakuasi Darurat
              </div>
              <button class="btn-toggle-status" style="background:#28a745; color:white; border:none; padding:5px 15px; border-radius:20px; cursor:pointer; font-weight:bold; font-size:0.85rem;">✓ Selesai</button>
            </li>
          </ul>
        </div>

        <!-- Q2 -->
        <div class="quarter-section" style="margin-bottom:30px; padding:25px; background:#fff7e6; border-radius:12px; border-left:5px solid #ffc107;">
          <h3 style="color:#ffc107; margin-bottom:15px;">🔸 Kuartal 2 (April - Juni)</h3>
          <ul style="list-style:none; padding:0;">
            <li class="kegiatan-item" data-status="selesai" style="padding:10px 0; border-bottom:1px solid #e0e0e0; display:flex; justify-content:space-between; align-items:center;">
              <div>
                <strong>April:</strong> Pemeriksaan Kesehatan Berkala Karyawan
              </div>
              <button class="btn-toggle-status" style="background:#28a745; color:white; border:none; padding:5px 15px; border-radius:20px; cursor:pointer; font-weight:bold; font-size:0.85rem;">✓ Selesai</button>
            </li>
            <li class="kegiatan-item" data-status="selesai" style="padding:10px 0; border-bottom:1px solid #e0e0e0; display:flex; justify-content:space-between; align-items:center;">
              <div>
                <strong>Mei:</strong> Workshop Ergonomi & Pencegahan Cedera
              </div>
              <button class="btn-toggle-status" style="background:#28a745; color:white; border:none; padding:5px 15px; border-radius:20px; cursor:pointer; font-weight:bold; font-size:0.85rem;">✓ Selesai</button>
            </li>
            <li class="kegiatan-item" data-status="selesai" style="padding:10px 0; display:flex; justify-content:space-between; align-items:center;">
              <div>
                <strong>Juni:</strong> Review & Update SOP K3
              </div>
              <button class="btn-toggle-status" style="background:#28a745; color:white; border:none; padding:5px 15px; border-radius:20px; cursor:pointer; font-weight:bold; font-size:0.85rem;">✓ Selesai</button>
            </li>
          </ul>
        </div>

        <!-- Q3 -->
        <div class="quarter-section" style="margin-bottom:30px; padding:25px; background:#e8f5e9; border-radius:12px; border-left:5px solid #28a745;">
          <h3 style="color:#28a745; margin-bottom:15px;">🔹 Kuartal 3 (Juli - September)</h3>
          <ul style="list-style:none; padding:0;">
            <li class="kegiatan-item" data-status="selesai" style="padding:10px 0; border-bottom:1px solid #e0e0e0; display:flex; justify-content:space-between; align-items:center;">
              <div>
                <strong>Juli:</strong> Pelatihan P3K & Penanganan Kecelakaan Kerja
              </div>
              <button class="btn-toggle-status" style="background:#28a745; color:white; border:none; padding:5px 15px; border-radius:20px; cursor:pointer; font-weight:bold; font-size:0.85rem;">✓ Selesai</button>
            </li>
            <li class="kegiatan-item" data-status="selesai" style="padding:10px 0; border-bottom:1px solid #e0e0e0; display:flex; justify-content:space-between; align-items:center;">
              <div>
                <strong>Agustus:</strong> Pemeliharaan & Kalibrasi Alat Produksi
              </div>
              <button class="btn-toggle-status" style="background:#28a745; color:white; border:none; padding:5px 15px; border-radius:20px; cursor:pointer; font-weight:bold; font-size:0.85rem;">✓ Selesai</button>
            </li>
            <li class="kegiatan-item" data-status="selesai" style="padding:10px 0; display:flex; justify-content:space-between; align-items:center;">
              <div>
                <strong>September:</strong> Safety Competition & Reward Program
              </div>
              <button class="btn-toggle-status" style="background:#28a745; color:white; border:none; padding:5px 15px; border-radius:20px; cursor:pointer; font-weight:bold; font-size:0.85rem;">✓ Selesai</button>
            </li>
          </ul>
        </div>

        <!-- Q4 -->
        <div class="quarter-section" style="margin-bottom:30px; padding:25px; background:#fff0f0; border-radius:12px; border-left:5px solid #dc3545;">
          <h3 style="color:#dc3545; margin-bottom:15px;">🔸 Kuartal 4 (Oktober - Desember)</h3>
          <ul style="list-style:none; padding:0;">
            <li class="kegiatan-item" data-status="selesai" style="padding:10px 0; border-bottom:1px solid #e0e0e0; display:flex; justify-content:space-between; align-items:center;">
              <div>
                <strong>Oktober:</strong> Audit Internal SMK3
              </div>
              <button class="btn-toggle-status" style="background:#28a745; color:white; border:none; padding:5px 15px; border-radius:20px; cursor:pointer; font-weight:bold; font-size:0.85rem;">✓ Selesai</button>
            </li>
            <li class="kegiatan-item" data-status="selesai" style="padding:10px 0; border-bottom:1px solid #e0e0e0; display:flex; justify-content:space-between; align-items:center;">
              <div>
                <strong>November:</strong> Pelatihan Penggunaan APAR & Hydrant
              </div>
              <button class="btn-toggle-status" style="background:#28a745; color:white; border:none; padding:5px 15px; border-radius:20px; cursor:pointer; font-weight:bold; font-size:0.85rem;">✓ Selesai</button>
            </li>
            <li class="kegiatan-item" data-status="terjadwal" style="padding:10px 0; display:flex; justify-content:space-between; align-items:center;">
              <div>
                <strong>Desember:</strong> Evaluasi Program K3 Tahunan & Perencanaan 2026
              </div>
              <button class="btn-toggle-status" style="background:#ffc107; color:white; border:none; padding:5px 15px; border-radius:20px; cursor:pointer; font-weight:bold; font-size:0.85rem;">⏳ Terjadwal</button>
            </li>
          </ul>
        </div>

        <!-- Program Rutin Bulanan -->
        <div style="background:#fff; padding:30px; border-radius:12px; margin-top:30px; border:2px solid #007BFF;">
          <h3 style="color:#007BFF; margin-bottom:20px; text-align:center;">📌 Program Rutin Bulanan</h3>
          <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(250px, 1fr)); gap:20px;">
            <div style="padding:15px; background:#f8f9fa; border-radius:8px;">
              <strong style="color:#007BFF;">🗣️ Safety Talk Mingguan</strong>
              <p style="margin:8px 0 0; font-size:0.9rem; color:#666;">Setiap Senin pagi, 15 menit</p>
            </div>
            <div style="padding:15px; background:#f8f9fa; border-radius:8px;">
              <strong style="color:#007BFF;">🔍 Inspeksi Harian</strong>
              <p style="margin:8px 0 0; font-size:0.9rem; color:#666;">Checklist peralatan & area kerja</p>
            </div>
            <div style="padding:15px; background:#f8f9fa; border-radius:8px;">
              <strong style="color:#007BFF;">📋 Rapat K3 Bulanan</strong>
              <p style="margin:8px 0 0; font-size:0.9rem; color:#666;">Minggu pertama setiap bulan</p>
            </div>
            <div style="padding:15px; background:#f8f9fa; border-radius:8px;">
              <strong style="color:#007BFF;">🏥 Health Check Point</strong>
              <p style="margin:8px 0 0; font-size:0.9rem; color:#666;">Monitoring suhu & kesehatan harian</p>
            </div>
          </div>
        </div>

      </div>
    </div>
    
    <!-- Footer Modal dengan Action Buttons -->
    <div style="background:#f8f9fa; padding:20px 30px; border-radius:0 0 20px 20px; display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:15px; border-top:2px solid #e0e0e0;">
      <button id="btn-reset-progress" style="background:#dc3545; color:white; border:none; padding:10px 20px; border-radius:8px; cursor:pointer; font-weight:600; transition:background 0.3s;">
        🔄 Reset Progress
      </button>
      <div style="display:flex; gap:10px;">
        <button id="btn-print-rencana" style="background:#007BFF; color:white; border:none; padding:10px 20px; border-radius:8px; cursor:pointer; font-weight:600; transition:background 0.3s;">
          🖨️ Cetak
        </button>
        <button id="btn-close-modal" style="background:#6c757d; color:white; border:none; padding:10px 20px; border-radius:8px; cursor:pointer; font-weight:600; transition:background 0.3s;">
          Tutup
        </button>
      </div>
    </div>
  </div>
</div>

<!-- NOTIFIKASI 90% -->
<div id="notif-90" style="display:none; position:fixed; top:20px; right:20px; background:linear-gradient(135deg, #28a745, #20c997); color:white; padding:20px 30px; border-radius:15px; box-shadow:0 8px 25px rgba(40,167,69,0.4); z-index:10000; animation:slideInRight 0.5s ease; max-width:400px;">
  <div style="display:flex; align-items:center; gap:15px;">
    <span style="font-size:2.5rem;">🎉</span>
    <div>
      <h4 style="margin:0 0 5px 0; color:white;">Selamat!</h4>
      <p style="margin:0; font-size:0.95rem;">Rencana Tahunan K3 sudah mencapai <strong>90%</strong>! Terus pertahankan komitmen keselamatan!</p>
    </div>
    <button id="close-notif" style="background:rgba(255,255,255,0.3); border:none; color:white; font-size:1.5rem; cursor:pointer; width:30px; height:30px; border-radius:50%; display:flex; align-items:center; justify-content:center;">×</button>
  </div>
</div>

<style>
  @keyframes slideDown {
    from { opacity: 0; transform: translateY(-50px); }
    to { opacity: 1; transform: translateY(0); }
  }
  
  @keyframes slideInRight {
    from { opacity: 0; transform: translateX(100px); }
    to { opacity: 1; transform: translateX(0); }
  }
  
  #btn-rencana-tahunan:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(0,123,255,0.4);
  }
  
  .btn-toggle-status:hover {
    opacity: 0.8;
    transform: scale(1.05);
  }
  
  #close-modal:hover, #btn-close-modal:hover {
    background: rgba(255,255,255,0.4);
  }
  
  #btn-reset-progress:hover {
    background: #c82333;
  }
  
  #btn-print-rencana:hover {
    background: #0056b3;
  }
</style>

<script>
  // FUNGSI UTAMA RENCANA TAHUNAN
  (function() {
    let totalKegiatan = 12;
    let selesai = 11;  // 11 kegiatan selesai = 92%
    let terjadwal = 1;
    let belum = 0;
    let notif90Shown = false;

    // Buka Modal
    document.getElementById('btn-rencana-tahunan').addEventListener('click', () => {
      document.getElementById('modal-rencana').style.display = 'block';
      document.body.style.overflow = 'hidden';
      
      // Trigger notifikasi 90% saat modal dibuka
      if (!notif90Shown && selesai >= 11) {
        setTimeout(() => {
          showNotif90();
          notif90Shown = true;
        }, 800);
      }
    });

    // Tutup Modal
    function closeModal() {
      document.getElementById('modal-rencana').style.display = 'none';
      document.body.style.overflow = 'auto';
    }

    document.getElementById('close-modal').addEventListener('click', closeModal);
    document.getElementById('btn-close-modal').addEventListener('click', closeModal);

    // Klik di luar modal untuk tutup
    document.getElementById('modal-rencana').addEventListener('click', (e) => {
      if (e.target.id === 'modal-rencana') {
        closeModal();
      }
    });

    // Update Progress
    function updateProgress() {
      const progress = Math.round((selesai / totalKegiatan) * 100);
      
      document.getElementById('progress-bar').style.width = progress + '%';
      document.getElementById('progress-text').textContent = progress + '%';
      document.getElementById('count-selesai').textContent = selesai;
      document.getElementById('count-terjadwal').textContent = terjadwal;
      document.getElementById('count-belum').textContent = belum;

      // Ubah warna progress bar sesuai persentase
      const progressBar = document.getElementById('progress-bar');
      if (progress >= 90) {
        progressBar.style.background = 'linear-gradient(90deg, #28a745, #20c997)';
        if (!notif90Shown) {
          showNotif90();
          notif90Shown = true;
        }
      } else if (progress >= 70) {
        progressBar.style.background = 'linear-gradient(90deg, #ffc107, #ff9800)';
      } else if (progress >= 50) {
        progressBar.style.background = 'linear-gradient(90deg, #007BFF, #0056b3)';
      }
    }

    // Toggle Status Kegiatan
    document.querySelectorAll('.btn-toggle-status').forEach(btn => {
      btn.addEventListener('click', function() {
        const item = this.closest('.kegiatan-item');
        const currentStatus = item.dataset.status;
        
        // Cycle: belum -> terjadwal -> selesai -> belum
        let newStatus;
        if (currentStatus === 'belum') {
          newStatus = 'terjadwal';
          this.style.background = '#ffc107';
          this.innerHTML = '⏳ Terjadwal';
          belum--;
          terjadwal++;
        } else if (currentStatus === 'terjadwal') {
          newStatus = 'selesai';
          this.style.background = '#28a745';
          this.innerHTML = '✓ Selesai';
          terjadwal--;
          selesai++;
        } else {
          newStatus = 'belum';
          this.style.background = '#6c757d';
          this.innerHTML = '⌛ Belum Mulai';
          selesai--;
          belum++;
        }
        
        item.dataset.status = newStatus;
        updateProgress();
      });
    });

    // Reset Progress
    document.getElementById('btn-reset-progress').addEventListener('click', () => {
      if (confirm('Yakin ingin reset semua progress ke status awal?')) {
        selesai = 11;  // Reset ke 92%
        terjadwal = 1;
        belum = 0;
        notif90Shown = false;
        
        // Reset semua button
        document.querySelectorAll('.kegiatan-item').forEach((item, index) => {
          const btn = item.querySelector('.btn-toggle-status');
          if (index < 11) {  // 11 kegiatan pertama selesai
            item.dataset.status = 'selesai';
            btn.style.background = '#28a745';
            btn.innerHTML = '✓ Selesai';
          } else if (index === 11) {  // Kegiatan terakhir terjadwal
            item.dataset.status = 'terjadwal';
            btn.style.background = '#ffc107';
            btn.innerHTML = '⏳ Terjadwal';
          } else {
            item.dataset.status = 'belum';
            btn.style.background = '#6c757d';
            btn.innerHTML = '⌛ Belum Mulai';
          }
        });
        
        updateProgress();
        alert('Progress berhasil di-reset ke 92%!');
      }
    });

    // Print Rencana
    document.getElementById('btn-print-rencana').addEventListener('click', () => {
      window.print();
    });

    // Notifikasi 90%
    function showNotif90() {
      const notif = document.getElementById('notif-90');
      notif.style.display = 'block';
      
      // Auto hide setelah 8 detik
      setTimeout(() => {
        notif.style.display = 'none';
      }, 8000);
    }

    // Close notifikasi
    document.getElementById('close-notif').addEventListener('click', () => {
      document.getElementById('notif-90').style.display = 'none';
    });

    // Initialize
    updateProgress();
  })();
</script>

  <section id="absensi-fingerprint" style="background:#f7f7f7; padding:60px 20px; text-align:center;">
  <h2>Absensi K3 dengan Sidik Jari</h2>
  <p>Silakan sentuhkan jari Anda ke scanner (simulasi)</p>

<section id="absensi-fingerprint" style="background:#f7f7f7; padding:60px 20px; text-align:center;">
  <h2>Absensi K3 dengan Sidik Jari</h2>
  <p>Silakan sentuhkan jari Anda ke scanner (simulasi)</p>

  <!-- Mockup Fingerprint Scanner -->
 <div id="fingerprint-scan" 
     style="width:200px; height:200px; margin:20px auto; 
            background:#fff; border-radius:50%; border:4px dashed #007BFF; 
            display:flex; align-items:center; justify-content:center; 
            cursor:pointer; user-select:none; font-size:60px; transition:0.2s;">
  🖐️
</div>

<script>
const fingerprintScan = document.getElementById('fingerprint-scan');
fingerprintScan.addEventListener('click', () => {
    fingerprintScan.style.transform = "scale(0.95)";
    setTimeout(() => fingerprintScan.style.transform = "scale(1)", 100);
    alert("Scanner disentuh! Data absensi siap ditambahkan.");
});
</script>


  <h3>Rekap Absensi Hari Ini</h3>
  <table style="width:100%; max-width:800px; margin:20px auto; border-collapse:collapse;">
    <thead>
      <tr style="background:#007BFF; color:white;">
        <th style="padding:8px; border:1px solid #ddd;">No</th>
        <th style="padding:8px; border:1px solid #ddd;">Nama Karyawan</th>
        <th style="padding:8px; border:1px solid #ddd;">Departemen</th>
        <th style="padding:8px; border:1px solid #ddd;">Jam Masuk</th>
        <th style="padding:8px; border:1px solid #ddd;">Jam Keluar</th>
        <th style="padding:8px; border:1px solid #ddd;">Status</th>
      </tr>
    </thead>
    <tbody id="absensi-body">
      <!-- Data akan muncul otomatis -->
    </tbody>
  </table>
</section>

<script>
  // Data karyawan
  const karyawan = [
    {nama:"Alya Ajeng Ayu", departemen:"Departemen Perencanaan & Produksi Aman"},
    {nama:"Belqis Ivana", departemen:"Departemen Pelaksanaan K3 di Produksi"},
    {nama:"Lyra Faiqah", departemen:"Departemen Pengecekan & Pengawasan K3"},
    {nama:"Rahmalia Mutia", departemen:"Departemen Audit & Laporan Insiden"}
  ];

  const absensiBody = document.getElementById('absensi-body');
  let counter = 0;

  // Fungsi simulasi absensi otomatis
  document.getElementById('fingerprint-scan').addEventListener('click', () => {
    if(counter >= karyawan.length) {
      alert("Semua karyawan sudah absen hari ini!");
      return;
    }

    const now = new Date();
    const jamMasuk = now.toLocaleTimeString('id-ID', {hour:'2-digit', minute:'2-digit'});
    const jamKeluar = ''; // Belum pulang
    const status = 'Hadir';

    const k = karyawan[counter];

    const row = document.createElement('tr');
    row.innerHTML = `
      <td style="padding:8px; border:1px solid #ddd;">${counter+1}</td>
      <td style="padding:8px; border:1px solid #ddd;">${k.nama}</td>
      <td style="padding:8px; border:1px solid #ddd;">${k.departemen}</td>
      <td style="padding:8px; border:1px solid #ddd;">${jamMasuk}</td>
      <td style="padding:8px; border:1px solid #ddd;">${jamKeluar}</td>
      <td style="padding:8px; border:1px solid #ddd;">${status}</td>
    `;
    absensiBody.appendChild(row);

    counter++;
  });
</script>

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