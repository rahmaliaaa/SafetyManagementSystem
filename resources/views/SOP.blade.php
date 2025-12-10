<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pentol BALL - SOP K3</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background: #f4f6f8;
      color: #333;
      line-height: 1.6;
    }

    header {
      background: #ffffff;
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
    }

    section {
      padding: 60px 60px;
      margin: 0 auto;
      max-width: 1000px;
      background: #fff;
      border-top: 1px solid #e0e0e0;
    }

    section h1 {
      color: #007BFF;
      text-align: center;
      margin-bottom: 40px;
      font-size: 2.2rem;
    }

    .sop-item {
      background: #f9fafc;
      border-left: 5px solid #007BFF;
      padding: 20px;
      margin-bottom: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      transition: transform 0.3s;
    }

    .sop-item:hover {
      transform: translateY(-4px);
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    .sop-item h3 {
      color: #007BFF;
      margin-bottom: 10px;
    }

    .sop-item p {
      color: #555;
      margin: 0;
    }

    footer {
      text-align: center;
      padding: 20px;
      border-top: 1px solid #ddd;
      background: #007BFF;
      color: #ddd;
    }

    footer a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
    }

    footer a:hover {
      text-decoration: underline;
    }

    h2 {
      color: #007bff;
      margin-bottom: 5px;
    }

    p.subtitle {
      color: #555;
      margin-top: 0;
      margin-bottom: 20px;
    }

    .apd-section {
      background: #fff;
      padding: 25px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.05);
      max-width: 1000px;
      margin: 0 auto 40px auto;
    }

    .apd-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 15px;
      margin-top: 20px;
    }

    .apd-item {
      background: #fff;
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      padding: 15px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .apd-item:hover {
      transform: translateY(-3px);
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    }

    .apd-item h3 {
      color: #007bff;
      font-size: 1rem;
      margin-bottom: 8px;
    }

    .apd-item p {
      color: #333;
      font-size: 0.95rem;
      line-height: 1.4;
    }

    .warning-box {
      background: #fff3cd;
      color: #664d03;
      border: 1px solid #ffecb5;
      border-radius: 6px;
      padding: 10px 15px;
      margin-top: 25px;
      font-weight: 600;
      text-align: center;
    }
    .evakuasi-steps {
      counter-reset: step;
      margin-top: 20px;
    }

    .evakuasi-steps li {
      list-style: none;
      margin: 12px 0;
      padding-left: 40px;
      position: relative;
      color: #333;
    }

    .evakuasi-steps li::before {
      counter-increment: step;
      content: counter(step);
      position: absolute;
      left: 0;
      top: 0;
      width: 26px;
      height: 26px;
      border-radius: 50%;
      background: #ffc107;
      color: #000;
      font-weight: bold;
      text-align: center;
      line-height: 26px;
    }

    .highlight-box {
      background: #e9f5ff;
      border-left: 5px solid #007bff;
      padding: 12px 15px;
      margin-top: 15px;
      border-radius: 6px;
      color: #004085;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    table th, table td {
      border: 1px solid #dee2e6;
      padding: 10px;
      text-align: left;
    }

    table th {
      background: #007bff;
      color: #fff;
    }

    table td {
      background: #fff;
    }
    html {
      scroll-behavior: smooth;
    }

    .limbah-icon {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      display: inline-block;
      text-align: center;
      line-height: 60px;
      font-size: 30px;
      margin-bottom: 10px;
    }

    .icon-hijau {
      background: #28a745;
      color: white;
    }

    .icon-kuning {
      background: #ffc107;
      color: white;
    }

    .icon-merah {
      background: #dc3545;
      color: white;
    }

    /* Button Grid */
    .button-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 15px;
      margin: 30px 0;
    }

    .info-button {
      background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
      color: white;
      border: none;
      padding: 20px;
      border-radius: 12px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s;
      box-shadow: 0 4px 6px rgba(0,123,255,0.2);
      text-align: center;
    }

    .info-button:hover {
      transform: translateY(-3px);
      box-shadow: 0 6px 12px rgba(0,123,255,0.3);
      background: linear-gradient(135deg, #0056b3 0%, #003d82 100%);
    }

    .info-button:active {
      transform: translateY(-1px);
    }

    .info-button span {
      display: block;
      font-size: 30px;
      margin-bottom: 10px;
    }

    .download-btn {
      background: linear-gradient(135deg, #28a745 0%, #1e7e34 100%);
      color: white;
      border: none;
      padding: 15px 30px;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s;
      box-shadow: 0 4px 6px rgba(40,167,69,0.2);
      margin-top: 20px;
      display: inline-flex;
      align-items: center;
      gap: 10px;
    }

    .download-btn:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 12px rgba(40,167,69,0.3);
      background: linear-gradient(135deg, #1e7e34 0%, #155724 100%);
    }

    /* Modal/Popup */
    .modal {
      display: none;
      position: fixed;
      z-index: 2000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.5);
      animation: fadeIn 0.3s;
    }

    .modal-content {
      background-color: #fefefe;
      margin: 5% auto;
      padding: 0;
      border-radius: 15px;
      width: 90%;
      max-width: 800px;
      max-height: 85vh;
      overflow-y: auto;
      box-shadow: 0 10px 40px rgba(0,0,0,0.3);
      animation: slideIn 0.3s;
    }

    .modal-header {
      background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
      color: white;
      padding: 20px 30px;
      border-radius: 15px 15px 0 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .modal-header h2 {
      margin: 0;
      font-size: 24px;
    }

    .close {
      color: white;
      font-size: 35px;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s;
      line-height: 1;
    }

    .close:hover {
      transform: scale(1.2);
      color: #ffdddd;
    }

    .modal-body {
      padding: 30px;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    @keyframes slideIn {
      from { 
        transform: translateY(-50px);
        opacity: 0;
      }
      to { 
        transform: translateY(0);
        opacity: 1;
      }
    }

    .image-container {
      text-align: center;
      margin: 20px 0;
    }

    .image-container img {
      max-width: 100%;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

  <header>
    <div style="display:flex; align-items:center;">
      <a href="/" class="back-button" title="Kembali ke Halaman Utama">&larr; Kembali</a>
      <img src="{{ asset('images/Ball.png') }}" alt="Logo Pentol BALL">
      <strong>Pentol BALL</strong>
    </div>
    <nav>
      <a href="#beranda">Beranda</a>
      <a href="#apd">Alat Pelindung Diri</a>
      <a href="#k3-pabrik">Penerapan K3</a>
      <a href="#evakuasi">Evakuasi Darurat</a>
      <a href="#monitor">Monitor Mesin</a>
      <a href="#pengangkutan">Pengangkutan & Penyimpanan</a>
      <a href="#limbah">Pembuangan Limbah</a>
    </nav>
  </header>

  <section id="beranda">
    <h1>Standar Operasional Prosedur (SOP) K3</h1>

    <section id="apd" class="apd-section">
      <h2>Alat Pelindung Diri (APD) Wajib</h2>
      <p class="subtitle">
        APD adalah garis pertahanan terakhir untuk melindungi pekerja dari bahaya di tempat kerja.
        Pastikan APD Anda selalu dalam kondisi baik dan digunakan dengan benar.
      </p>

      <center><img src="{{ asset('images/Gambar Ilustrasi APD.jpg') }}" alt="Gambar Ilustrasi APD" style="width: 300px; height: 200px;"></center>

      <div class="apd-grid">
        <div class="apd-item">
          <h3>1. Safety Helmet / Hair Net</h3>
          <center><img src="{{ asset('images/gambar helm.jpg') }}" alt="Gambar Helm" style="width: 200px; height: 200px;"></center>
          <p>Melindungi kepala dari benturan, kejatuhan benda, dan (untuk area makanan) mencegah kontaminasi produk oleh rambut.</p>
        </div>

        <div class="apd-item">
          <h3>2. Kacamata Pelindung</h3>
          <center><img src="{{ asset('images/kacamata.jpg') }}" alt="Gambar kacamata" style="width: 200px; height: 200px;"></center>
          <p>Wajib digunakan di area penggorengan dan pencampuran bahan untuk melindungi mata dari percikan minyak panas, uap, atau bahan kimia.</p>
        </div>

        <div class="apd-item">
          <h3>3. Safety Shoes / Sepatu Pengaman</h3>
          <center><img src="{{ asset('images/Sepatu Pengaman.jpg') }}" alt="Gambar Sepatu Pengaman" style="width: 200px; height: 200px;"></center>
          <p>Melindungi kaki dari kejatuhan benda berat, tertusuk, dan mengurangi risiko terpeleset karena lantai licin di area basah atau berminyak.</p>
        </div>

        <div class="apd-item">
          <h3>4. Sarung Tangan Tahan Panas / Food Grade</h3>
          <center><img src="{{ asset('images/Sarung Tangan Tahan Panas.jpg') }}" alt="Gambar Sarung Tangan Tahan Panas" style="width: 200px; height: 200px;"></center>
          <p>Digunakan saat menangani bahan panas (penggorengan/perebusan) atau untuk menjaga higienitas produk (sarung tangan Food Grade).</p>
        </div>

        <div class="apd-item">
          <h3>5. Masker Respirator</h3>
          <center><img src="{{ asset('images/Masker Respirator.jpg') }}" alt="Gambar Masker Respirator" style="width: 200px; height: 200px;"></center>
          <p>Melindungi sistem pernapasan dari uap panas, asap, atau partikel debu halus yang mungkin timbul saat proses pencampuran bahan kering.</p>
        </div>

        <div class="apd-item">
          <h3>6. Wearpack / Apron Anti-Air</h3>
          <center><img src="{{ asset('images/Wearpack.jpg') }}" alt="Gambar Wearpack" style="width: 200px; height: 200px;"></center>
          <p>Pakaian kerja yang menutupi seluruh tubuh. Apron anti-air digunakan di area basah/pencucian untuk melindungi pakaian dan kulit dari cairan.</p>
        </div>
      </div>

      <div class="warning-box">
        ⚠️ Peringatan: Tidak menggunakan APD di zona wajib dapat dikenakan sanksi sesuai prosedur K3 perusahaan.
      </div>
    </section>

    <section id="k3-pabrik" class="apd-section">
      <h2>Penerapan K3 di Pabrik Pentol</h2>

      <h3>a.) Keselamatan Kerja</h3>
      <ul>
        <li>Penggunaan alat pelindung diri (APD) seperti sarung tangan dan apron.</li>
        <li>Pelatihan kebersihan pribadi untuk pekerja.</li>
        <li>Pengolahan makanan sesuai standar higienis.</li>
        <li>Pemeliharaan alat dan dapur agar tidak terjadi kecelakaan kerja.</li>
        <li>Pemeriksaan kesehatan berkala bagi karyawan.</li>
        <li>Pengelolaan limbah dan sanitasi lingkungan yang baik.</li>
        <li>Mesin giling daging dan peralatan tajam diberi pelindung (safety guard) untuk mencegah kecelakaan.</li>
        <li>Lantai area produksi dibuat anti-slip untuk mencegah terpeleset karena air atau bahan baku.</li>
        <li>Disediakan APAR (Alat Pemadam Api Ringan) di beberapa titik area pabrik.</li>
        <li>Terdapat jalur evakuasi dan papan petunjuk keselamatan di area produksi.</li>
      </ul>

      <h3>b.) Kesehatan Kerja</h3>
      <ul>
        <li>Pekerja diwajibkan menjalani pemeriksaan kesehatan rutin.</li>
        <li>Disediakan ruang P3K dan kotak obat di area produksi.</li>
        <li>Pabrik menjaga ventilasi udara dan sirkulasi yang baik untuk mencegah kelembaban berlebih, minimal 10% dari luas lantai (berdasarkan keputusan menteri kesehatan RI No.829/MENKES/SK/VI/1999).</li>
        <li>Tersedia air bersih dan fasilitas sanitasi yang memadai untuk pekerja.</li>
      </ul>
    </section>

    <section id="evakuasi" class="apd-section">
      <h2>Prosedur Evakuasi Darurat</h2>
      <center><img src="{{ asset('images/layout evakuasi.jpg') }}" alt="Gambar evaluasi"></center>
      <p class="subtitle">
        Panduan langkah-langkah evakuasi saat terjadi keadaan darurat, seperti kebakaran atau bencana lainnya.
      </p>

      <ul class="evakuasi-steps">
        <li>Segera hentikan seluruh aktivitas produksi dan matikan mesin apabila memungkinkan.</li>
        <li>Ikuti petunjuk dari Tim Tanggap Darurat dan jangan panik.</li>
        <li>Gunakan jalur evakuasi yang telah ditentukan menuju titik kumpul terdekat.</li>
        <li>Pastikan membantu rekan kerja yang membutuhkan bantuan.</li>
        <li>Lakukan absensi di titik kumpul untuk memastikan seluruh karyawan aman.</li>
      </ul>

      <div class="highlight-box">
        🔥 <strong>Titik Kumpul:</strong> Area parkir belakang gedung produksi.<br>
        👷 <strong>Peran Tim:</strong><br>
        - Tim Evakuasi: Mengarahkan jalur keluar.<br>
        - Tim Medis: Memberikan pertolongan pertama.<br>
        - Tim Keamanan: Menutup area berbahaya.
      </div>
    </section>

    <section id="monitor" class="apd-section">
      <h2>Monitor Mesin Harian</h2>
      <p class="subtitle">
        Pemeriksaan kondisi mesin dilakukan setiap awal dan akhir shift untuk memastikan keselamatan kerja dan kelancaran produksi.
      </p>

      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Mesin</th>
            <th>Kondisi</th>
            <th>Tanggal Pemeriksaan</th>
            <th>Petugas</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mesin Penggoreng</td>
            <td>Baik</td>
            <td>22 Oktober 2025</td>
            <td>Ahmad</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Mesin Pengaduk Adonan</td>
            <td>Perlu Pelumasan</td>
            <td>22 Oktober 2025</td>
            <td>Siti</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Mesin Pengemasan</td>
            <td>Baik</td>
            <td>22 Oktober 2025</td>
            <td>Budi</td>
          </tr>
        </tbody>
      </table>

      <div class="highlight-box">
        🧾 Catatan: Form pengecekan mesin harian wajib diserahkan ke Supervisor K3 setiap akhir shift.
      </div>
    </section>

    <section id="pengangkutan" class="apd-section">
      <h2>Sistem Pengangkutan dan Penyimpanan</h2>
      <p class="subtitle">
        Klik tombol di bawah untuk melihat detail prosedur pengangkutan dan penyimpanan bahan baku serta produk jadi.
      </p>

      <div class="button-grid">
        <button class="info-button" onclick="openModal('modal-pengangkutan')">
          <span>🚚</span>
          Pengangkutan Bahan Baku
        </button>
        <button class="info-button" onclick="openModal('modal-penyimpanan-baku')">
          <span>📦</span>
          Penyimpanan Bahan Baku
        </button>
        <button class="info-button" onclick="openModal('modal-penyimpanan-jadi')">
          <span>🏭</span>
          Penyimpanan Produk Jadi
        </button>
        <button class="info-button" onclick="openModal('modal-standar-penyimpanan')">
          <span>📊</span>
          Standar Penyimpanan
        </button>
      </div>

      <center>
        <button class="download-btn" onclick="downloadPengangkutanDoc()">
          <span>📥</span> Download Dokumen Lengkap Pengangkutan & Penyimpanan (PDF)
        </button>
      </center>
    </section>

    <section id="limbah" class="apd-section">
      <h2>Sistem Pembuangan Limbah</h2>
      <p class="subtitle">
        Klik tombol di bawah untuk melihat detail pengelolaan limbah sesuai kategori dan prosedur yang berlaku.
      </p>

      <div class="button-grid">
        <button class="info-button" onclick="openModal('modal-klasifikasi')">
          <span>🗑️</span>
          Klasifikasi Limbah
        </button>
        <button class="info-button" onclick="openModal('modal-limbah-cair')">
          <span>💧</span>
          Limbah Cair
        </button>
        <button class="info-button" onclick="openModal('modal-prosedur')">
          <span>📋</span>
          Prosedur Pembuangan
        </button>
        <button class="info-button" onclick="openModal('modal-tanggung-jawab')">
          <span>👥</span>
          Tanggung Jawab
        </button>
      </div>

      <div class="highlight-box" style="margin-top: 30px;">
        ♻️ <strong>Komitmen Lingkungan:</strong> Pentol BALL berkomitmen untuk mengurangi limbah dengan prinsip 3R (Reduce, Reuse, Recycle) dan memastikan semua limbah dikelola sesuai regulasi lingkungan yang berlaku.
      </div>

      <div class="warning-box">
        ⚠️ Pelanggaran: Membuang limbah tidak sesuai kategori atau membuang limbah B3 sembarangan dapat dikenakan sanksi tegas sesuai peraturan perusahaan dan dapat melanggar UU Pengelolaan Lingkungan Hidup.
      </div>
    </section>
  </section>

  <footer>
    <div style="max-width: 900px; margin: 0 auto; text-align: center;">
      <p><strong>Pentol BALL</strong> — Keselamatan Dimulai dari Kesadaran.</p>
      <p style="font-style: italic; color: #fff; margin: 10px 0;">
        "Kualitas dan Keselamatan Adalah Rasa Utama Kami."
      </p>
      <p>
        <strong>Alamat:</strong> Jl. Mawar No. 1<br>
        <strong>Email:</strong> info@pentolBALL.com<br>
        <strong>Telepon:</strong> +62 812 3456 7890
      </p>
      <div style="margin-top: 10px;">
        <a href="https://www.instagram.com/pentolball" target="_blank" style="margin: 0 8px; color: #fff; text-decoration: none;">Instagram</a> |
        <a href="https://www.facebook.com/pentolball" target="_blank" style="margin: 0 8px; color: #fff; text-decoration: none;">Facebook</a> |
        <a href="https://www.tiktok.com/@pentolball" target="_blank" style="margin: 0 8px; color: #fff; text-decoration: none;">TikTok</a>
      </div>
      <hr style="margin: 15px 0; border: none; border-top: 1px solid #fff;">
      <p style="color: #fff;">© <span id="year"></span> Pentol BALL — Semua Hak Dilindungi.</p>
    </div>
  </footer>

  <!-- MODALS UNTUK PENGANGKUTAN & PENYIMPANAN -->
  
  <!-- Modal Pengangkutan Bahan Baku -->
  <div id="modal-pengangkutan" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h2>🚚 Pengangkutan Bahan Baku</h2>
        <span class="close" onclick="closeModal('modal-pengangkutan')">&times;</span>
      </div>
      <div class="modal-body">
        <div class="image-container">
          <img src="https://via.placeholder.com/600x300?text=Pengangkutan+Bahan+Baku" alt="Pengangkutan">
        </div>
        
        <h3>Prosedur Penerimaan Bahan Baku</h3>
        <ul style="line-height: 1.8;">
          <li>✅ Periksa kondisi kendaraan pengangkut - pastikan bersih, tertutup, dan bebas dari kontaminasi</li>
          <li>🌡️ Cek suhu kendaraan untuk bahan baku yang memerlukan pendinginan (daging, ikan)</li>
          <li>📄 Verifikasi dokumen pengiriman: tanggal kadaluarsa, nomor batch, dan sertifikat halal</li>
          <li>👁️ Lakukan pemeriksaan visual terhadap kondisi kemasan - tidak rusak, bocor, atau kotor</li>
          <li>⚖️ Timbang dan catat berat bahan baku yang diterima</li>
          <li>❌ Tolak bahan baku yang tidak memenuhi standar kualitas</li>
        </ul>

        <h3 style="margin-top: 25px;">Alat Angkut Internal</h3>
        <div class="highlight-box">
          <strong>Peralatan yang digunakan:</strong><br><br>
          <strong>🛒 Trolley Food Grade:</strong> Untuk memindahkan bahan baku dari area penerimaan ke gudang<br>
          <strong>🧺 Keranjang Plastik Berlubang:</strong> Untuk sayuran dan bahan yang perlu sirkulasi udara<br>
          <strong>📦 Container Tertutup:</strong> Untuk daging, ikan, dan bahan mudah terkontaminasi
        </div>

        <h3 style="margin-top: 25px;">Aturan Pengangkutan</h3>
        <ul style="line-height: 1.8;">
          <li>⛔ Jangan meletakkan bahan baku langsung di lantai</li>
          <li>🔀 Pisahkan bahan mentah dan bahan siap olah</li>
          <li>🧼 Bersihkan trolley/keranjang setelah setiap penggunaan</li>
          <li>🧤 Gunakan sarung tangan food grade saat menangani bahan baku</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Modal Penyimpanan Bahan Baku -->
  <div id="modal-penyimpanan-baku" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h2>📦 Penyimpanan Bahan Baku</h2>
        <span class="close" onclick="closeModal('modal-penyimpanan-baku')">&times;</span>
      </div>
      <div class="modal-body">
        <div class="image-container">
          <img src="https://via.placeholder.com/600x300?text=Gudang+Penyimpanan" alt="Penyimpanan">
        </div>

        <h3>Gudang Bahan Baku Kering</h3>
        <ul style="line-height: 1.8;">
          <li>🌡️ <strong>Suhu Penyimpanan:</strong> 25-28°C (suhu ruangan)</li>
          <li>💧 <strong>Kelembaban:</strong> Maksimal 60% - gunakan dehumidifier jika perlu</li>
          <li>🌬️ <strong>Ventilasi:</strong> Minimal 10% dari luas lantai</li>
          <li>💡 <strong>Pencahayaan:</strong> 200-300 lux, cukup untuk pemeriksaan visual</li>
          <li>📏 <strong>Jarak dari dinding:</strong> Minimal 15 cm untuk sirkulasi udara</li>
          <li>📐 <strong>Ketinggian dari lantai:</strong> Minimal 20 cm menggunakan pallet</li>
          <li>🔄 <strong>Sistem FIFO:</strong> First In First Out - bahan yang masuk lebih dulu digunakan lebih dulu</li>
        </ul>
        <p><strong>Bahan yang disimpan:</strong> Tepung tapioka, tepung terigu, bumbu kering, garam, gula, kemasan plastik.</p>

        <h3 style="margin-top: 25px;">Cold Storage / Ruang Pendingin</h3>
        <div class="image-container">
          <img src="https://via.placeholder.com/600x250?text=Cold+Storage" alt="Cold Storage">
        </div>
        <ul style="line-height: 1.8;">
          <li>❄️ <strong>Chiller (0-4°C):</strong> Untuk daging dan ikan segar yang akan diolah dalam 1-2 hari</li>
          <li>🧊 <strong>Freezer (-18 hingga -25°C):</strong> Untuk stok daging dan ikan beku jangka panjang</li>
          <li>📊 <strong>Pemeriksaan suhu:</strong> 2 kali sehari (pagi dan sore) - dicatat dalam log book</li>
          <li>🔔 <strong>Sistem alarm:</strong> Otomatis berbunyi jika suhu melebihi batas</li>
          <li>🔃 <strong>Rotasi stok:</strong> Sistem FEFO (First Expired First Out)</li>
          <li>🧽 <strong>Pembersihan:</strong> Seminggu sekali dengan disinfektan food grade</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Modal Penyimpanan Produk Jadi -->
  <div id="modal-penyimpanan-jadi" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h2>🏭 Penyimpanan Produk Jadi</h2>
        <span class="close" onclick="closeModal('modal-penyimpanan-jadi')">&times;</span>
      </div>
      <div class="modal-body">
        <div class="image-container">
          <img src="https://via.placeholder.com/600x300?text=Produk+Jadi" alt="Produk Jadi">
        </div>

        <h3>Gudang Produk Jadi</h3>
        <ul style="line-height: 1.8;">
          <li>🌡️ <strong>Suhu Ruangan:</strong> 20-25°C dengan AC untuk menjaga kesegaran</li>
          <li>💧 <strong>Kelembaban:</strong> 50-60% (terkontrol)</li>
          <li>💡 <strong>Pencahayaan:</strong> Terang untuk memudahkan pemeriksaan kualitas</li>
          <li>📋 <strong>Tata Letak:</strong> Berdasarkan nomor batch dan tanggal produksi</li>
          <li>🔍 <strong>Pemeriksaan Kualitas:</strong> Cek visual setiap hari untuk deteksi dini kerusakan kemasan</li>
          <li>⏰ <strong>Masa Penyimpanan:</strong> Maksimal 3 hari untuk produk frozen, 1 hari untuk produk fresh</li>
        </ul>

        <h3 style="margin-top: 25px;">Pengangkutan Produk Jadi ke Distribusi</h3>
        <div class="image-container">
          <img src="https://via.placeholder.com/600x250?text=Distribusi+Produk" alt="Distribusi">
        </div>
        <ul style="line-height: 1.8;">
          <li>🚐 Gunakan kendaraan berpendingin (cold chain) untuk produk beku</li>
          <li>❄️ Pastikan suhu kendaraan -18°C sebelum loading</li>
          <li>📦 Susun produk dengan rapi - hindari tumpukan berlebihan yang merusak kemasan</li>
          <li>🧊 Gunakan styrofoam box dan ice gel untuk pengiriman jarak dekat</li>
          <li>📝 Dokumentasikan waktu loading, suhu kendaraan, dan nomor plat kendaraan</li>
        </ul>

        <div class="warning-box" style="margin-top: 20px;">
          ⚠️ <strong>Peringatan:</strong> Produk yang melewati batas waktu penyimpanan atau mengalami kerusakan kemasan WAJIB dipisahkan dan dilaporkan ke QC untuk disposal.
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Standar Penyimpanan -->
  <div id="modal-standar-penyimpanan" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h2>📊 Standar Penyimpanan</h2>
        <span class="close" onclick="closeModal('modal-standar-penyimpanan')">&times;</span>
      </div>
      <div class="modal-body">
        <p style="margin-bottom: 20px;">Tabel standar penyimpanan untuk berbagai jenis bahan baku dan produk jadi di Pentol BALL.</p>
        
        <table>
          <thead>
            <tr>
              <th>Jenis Bahan/Produk</th>
              <th>Suhu Penyimpanan</th>
              <th>Kelembaban</th>
              <th>Masa Simpan Max</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>🥩 Daging Segar</td>
              <td>0-4°C (Chiller)</td>
              <td>70-80%</td>
              <td>2 hari</td>
            </tr>
            <tr>
              <td>🧊 Daging Beku</td>
              <td>-18°C (Freezer)</td>
              <td>N/A</td>
              <td>3 bulan</td>
            </tr>
            <tr>
              <td>🌾 Tepung & Bumbu Kering</td>
              <td>25-28°C</td>
              <td>Max 60%</td>
              <td>6 bulan</td>
            </tr>
            <tr>
              <td>❄️ Produk Jadi (Frozen)</td>
              <td>-18°C</td>
              <td>N/A</td>
              <td>3 hari</td>
            </tr>
            <tr>
              <td>🍡 Produk Jadi (Fresh)</td>
              <td>0-4°C</td>
              <td>70-80%</td>
              <td>1 hari</td>
            </tr>
          </tbody>
        </table>

        <div class="highlight-box" style="margin-top: 25px;">
          <strong>📌 Catatan Penting:</strong><br>
          • Pemeriksaan suhu dilakukan 2x sehari dan dicatat dalam log book<br>
          • Sistem FIFO/FEFO harus diterapkan secara konsisten<br>
          • Produk yang melewati masa simpan maksimal wajib dibuang
        </div>
      </div>
    </div>
  </div>

  <!-- MODALS UNTUK LIMBAH -->
  
  <!-- Modal Klasifikasi Limbah -->
  <div id="modal-klasifikasi" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h2>🗑️ Klasifikasi Limbah</h2>
        <span class="close" onclick="closeModal('modal-klasifikasi')">&times;</span>
      </div>
      <div class="modal-body">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px;">
          
          <div style="border: 3px solid #28a745; border-radius: 10px; padding: 20px; text-align: center;">
            <div class="limbah-icon icon-hijau" style="margin: 0 auto 15px;">♻️</div>
            <h3 style="color: #28a745;">Limbah Organik (Hijau)</h3>
            <p><strong>Contoh:</strong><br>Sisa sayuran, tulang ikan, sisa daging, potongan bumbu</p>
            <p><strong>Tempat:</strong><br>Tong sampah hijau dengan tutup rapat</p>
            <p><strong>Frekuensi:</strong><br>2x sehari (pagi & sore)</p>
            <p><strong>Pengolahan:</strong><br>Composting atau biogas</p>
          </div>

          <div style="border: 3px solid #ffc107; border-radius: 10px; padding: 20px; text-align: center;">
            <div class="limbah-icon icon-kuning" style="margin: 0 auto 15px;">📦</div>
            <h3 style="color: #ffc107;">Limbah Non-Organik (Kuning)</h3>
            <p><strong>Contoh:</strong><br>Kemasan plastik, kardus, botol plastik</p>
            <p><strong>Tempat:</strong><br>Tong sampah kuning terpisah</p>
            <p><strong>Frekuensi:</strong><br>1x sehari atau saat penuh</p>
            <p><strong>Pengolahan:</strong><br>Daur ulang (plastik, kertas, logam)</p>
          </div>

          <div style="border: 3px solid #dc3545; border-radius: 10px; padding: 20px; text-align: center;">
            <div class="limbah-icon icon-merah" style="margin: 0 auto 15px;">⚠️</div>
            <h3 style="color: #dc3545;">Limbah B3 (Merah)</h3>
            <p><strong>Contoh:</strong><br>Baterai, lampu neon, sarung tangan kimia, deterjen</p>
            <p><strong>Tempat:</strong><br>Tempat khusus label "LIMBAH B3"</p>
            <p><strong>Frekuensi:</strong><br>1x seminggu atau saat penuh</p>
            <p><strong>Pengolahan:</strong><br>Pengelola limbah B3 berlisensi</p>
          </div>
        </div>

        <div class="warning-box" style="margin-top: 25px;">
          ⚠️ <strong>Penting!</strong> Pemisahan limbah harus dilakukan sejak awal. Salah membuang dapat mencemari kategori lain dan menimbulkan biaya tambahan.
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Limbah Cair -->
  <div id="modal-limbah-cair" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h2>💧 Limbah Cair</h2>
        <span class="close" onclick="closeModal('modal-limbah-cair')">&times;</span>
      </div>
      <div class="modal-body">
        <div class="image-container">
          <img src="https://via.placeholder.com/600x300?text=Sistem+Pengolahan+Air+Limbah" alt="IPAL">
        </div>

        <h3>Sistem Pengelolaan Air Limbah</h3>
        <ul style="line-height: 1.8;">
          <li>🛢️ <strong>Grease Trap (Penangkap Lemak):</strong> Dipasang di saluran pembuangan area penggorengan untuk menangkap minyak sebelum masuk ke saluran utama</li>
          <li>🏗️ <strong>Bak Pengendapan:</strong> Limbah cair dari area pencucian mengendap terlebih dahulu sebelum dialirkan ke IPAL</li>
          <li>♻️ <strong>IPAL Sederhana:</strong> Sistem biofilter untuk mengolah limbah cair sebelum dibuang ke saluran umum</li>
          <li>🧪 <strong>Pemeriksaan pH Air:</strong> Dilakukan seminggu sekali - pH harus dalam rentang 6-9 sesuai standar Baku Mutu Air Limbah</li>
          <li>🧹 <strong>Pembersihan Grease Trap:</strong> Setiap 2 minggu atau saat volume lemak mencapai 75% kapasitas</li>
        </ul>

        <h3 style="margin-top: 25px;">Pengelolaan Minyak Jelantah</h3>
        <div class="image-container">
          <img src="https://via.placeholder.com/600x250?text=Minyak+Jelantah" alt="Minyak Jelantah">
        </div>
        <ul style="line-height: 1.8;">
          <li>🔍 Minyak goreng bekas disaring dan disimpan dalam drum khusus tertutup</li>
          <li>⛔ Tidak boleh dibuang ke saluran air - dapat menyumbat dan mencemari</li>
          <li>🏭 Diserahkan ke perusahaan pengolah minyak jelantah untuk diolah menjadi biodiesel atau sabun</li>
          <li>📝 Pencatatan volume minyak jelantah yang diserahkan setiap bulan</li>
        </ul>

        <div class="highlight-box" style="margin-top: 25px;">
          <strong>💡 Tahukah Anda?</strong><br>
          1 liter minyak jelantah yang dibuang sembarangan dapat mencemari 1 juta liter air bersih! 
          Dengan pengelolaan yang baik, minyak jelantah dapat diubah menjadi biodiesel ramah lingkungan.
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Prosedur Pembuangan -->
  <div id="modal-prosedur" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h2>📋 Prosedur Pembuangan Limbah</h2>
        <span class="close" onclick="closeModal('modal-prosedur')">&times;</span>
      </div>
      <div class="modal-body">
        <p style="margin-bottom: 20px;">Langkah-langkah sistematis pembuangan limbah yang harus diikuti oleh seluruh karyawan:</p>

        <ul class="evakuasi-steps">
          <li>Pekerja memisahkan limbah sesuai kategori (organik, non-organik, B3) saat membuang</li>
          <li>Gunakan sarung tangan saat menangani limbah untuk mencegah kontaminasi</li>
          <li>Tutup rapat tempat sampah setiap selesai membuang untuk mencegah serangga</li>
          <li>Petugas kebersihan mengumpulkan limbah sesuai jadwal dan membawa ke TPS (Tempat Pembuangan Sementara)</li>
          <li>Limbah organik dan non-organik diserahkan ke Dinas Kebersihan atau pihak ketiga setiap hari</li>
          <li>Limbah B3 disimpan di TPS khusus dan diserahkan ke pengelola berlisensi setiap minggu</li>
          <li>Tempat sampah dicuci dengan air dan disinfektan setiap hari setelah dikosongkan</li>
          <li>Catat semua aktivitas pembuangan limbah dalam Log Book Pengelolaan Limbah</li>
        </ul>

        <div class="highlight-box" style="margin-top: 25px;">
          <strong>📌 Checklist Harian Petugas Kebersihan:</strong><br>
          ✅ Cek kondisi tempat sampah (tidak bocor/rusak)<br>
          ✅ Pastikan pemisahan limbah sudah benar<br>
          ✅ Angkut limbah sesuai jadwal<br>
          ✅ Bersihkan tempat sampah dengan disinfektan<br>
          ✅ Isi log book pengelolaan limbah
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Tanggung Jawab -->
  <div id="modal-tanggung-jawab" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <h2>👥 Jadwal dan Tanggung Jawab</h2>
        <span class="close" onclick="closeModal('modal-tanggung-jawab')">&times;</span>
      </div>
      <div class="modal-body">
        <p style="margin-bottom: 20px;">Pembagian tugas dan tanggung jawab pengelolaan limbah di Pentol BALL:</p>

        <table>
          <thead>
            <tr>
              <th>Aktivitas</th>
              <th>Frekuensi</th>
              <th>Penanggung Jawab</th>
              <th>Dokumentasi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>♻️ Pembuangan Limbah Organik</td>
              <td>2x sehari</td>
              <td>Petugas Kebersihan</td>
              <td>Log Book Harian</td>
            </tr>
            <tr>
              <td>📦 Pembuangan Limbah Non-Organik</td>
              <td>1x sehari</td>
              <td>Petugas Kebersihan</td>
              <td>Log Book Harian</td>
            </tr>
            <tr>
              <td>⚠️ Penyerahan Limbah B3</td>
              <td>1x seminggu</td>
              <td>Supervisor K3</td>
              <td>Manifest Limbah B3</td>
            </tr>
            <tr>
              <td>🛢️ Pembersihan Grease Trap</td>
              <td>2x sebulan</td>
              <td>Tim Maintenance</td>
              <td>Form Pemeliharaan</td>
            </tr>
            <tr>
              <td>🧪 Pengukuran pH Air Limbah</td>
              <td>1x seminggu</td>
              <td>Supervisor K3</td>
              <td>Log Book IPAL</td>
            </tr>
            <tr>
              <td>🛢️ Penyerahan Minyak Jelantah</td>
              <td>1x sebulan</td>
              <td>Supervisor Produksi</td>
              <td>Berita Acara Serah Terima</td>
            </tr>
          </tbody>
        </table>

        <div class="highlight-box" style="margin-top: 25px;">
          <strong>👤 Kontak Penting:</strong><br><br>
          <strong>Supervisor K3:</strong> Ahmad Hidayat (ext. 101)<br>
          <strong>Kepala Maintenance:</strong> Budi Santoso (ext. 102)<br>
          <strong>Koordinator Kebersihan:</strong> Siti Nurhaliza (ext. 103)<br>
          <strong>Pengelola Limbah B3:</strong> PT EcoWaste Indonesia (0341-555-1234)
        </div>

        <div class="warning-box" style="margin-top: 20px;">
          ⚠️ <strong>Sanksi Pelanggaran:</strong> Tidak melaksanakan tugas sesuai jadwal dapat dikenakan teguran lisan (pelanggaran 1x), teguran tertulis (2x), hingga sanksi administratif (3x atau lebih).
        </div>
      </div>
    </div>
  </div>

  <script>
    document.getElementById("year").textContent = new Date().getFullYear();

    // Function untuk membuka modal
    function openModal(modalId) {
      document.getElementById(modalId).style.display = "block";
      document.body.style.overflow = "hidden"; // Prevent scrolling
    }

    // Function untuk menutup modal
    function closeModal(modalId) {
      document.getElementById(modalId).style.display = "none";
      document.body.style.overflow = "auto"; // Enable scrolling
    }

    // Tutup modal ketika klik di luar modal
    window.onclick = function(event) {
      if (event.target.classList.contains('modal')) {
        event.target.style.display = "none";
        document.body.style.overflow = "auto";
      }
    }

    // Function download dokumen pengangkutan
    function downloadPengangkutanDoc() {
      // Simulasi download PDF
      alert('📥 Download dimulai!\n\nDokumen "SOP Pengangkutan & Penyimpanan Pentol BALL.pdf" sedang diunduh.\n\nDokumen ini berisi:\n✓ Prosedur Pengangkutan Bahan Baku\n✓ Standar Penyimpanan\n✓ Checklist Pemeriksaan\n✓ Form Dokumentasi');
      
      // Dalam implementasi nyata, ini akan trigger download file PDF
      // window.location.href = '/download/pengangkutan-penyimpanan.pdf';
    }
  </script>

</body>
</html>