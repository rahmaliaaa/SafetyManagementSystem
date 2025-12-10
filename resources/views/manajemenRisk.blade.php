<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pentol BALL - Manajemen Risiko & Bahaya</title>
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

    /* Hero */
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

    .hero h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    /* Section */
    section {
      padding: 40px 30px;
      max-width: 950px;
      margin: 20px auto;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    section h2 {
      color: #007BFF;
      margin-bottom: 15px;
    }

    section h3 {
      color: #333;
      margin-top: 25px;
      margin-bottom: 10px;
    }

    ul, ol {
      margin-left: 25px;
    }

    li {
      margin-bottom: 5px;
    }

    p {
      margin-bottom: 10px;
      text-align: justify;
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
        <small>Manajemen Risiko & Bahaya</small>
      </div>
    </div>
    <nav>
      <a href="#identifikasi">Identifikasi Risiko</a>
      <a href="#sumber-bahaya">Sumber Bahaya</a>
      <a href="#faktor-pencegah">Faktor Pencegah</a>
    </nav>
  </header>

  <!-- Hero -->
  <section class="hero">
    <h1>Manajemen Risiko dan Bahaya di Pabrik Pentol BALL</h1>
    <p>Identifikasi, pengendalian, dan pencegahan risiko untuk keselamatan kerja yang optimal</p>
  </section>

  <!-- Identifikasi Risiko -->
  <section id="identifikasi">
    <h2>Identifikasi Risiko dan Bahaya</h2>
    <p>
      Proses produksi pentol, meskipun terlihat sederhana, memiliki berbagai potensi risiko dan bahaya yang harus diidentifikasi dan dikendalikan. Identifikasi ini sangat penting untuk memastikan keselamatan pekerja, kualitas produk, dan kelancaran operasional.
    </p>

    <h3>1. Bahaya Fisik</h3>
    <ul>
      <li><b>Peralatan Berputar (Mesin Giling/Mixer):</b> Risiko: potongan tubuh terjepit atau terpotong. Penyebab: tidak ada pelindung mesin, kelalaian operator, pakaian longgar.</li>
      <li><b>Permukaan Basah dan Licin:</b> Risiko: tergelincir atau jatuh. Penyebab: tumpahan air, minyak, atau adonan yang tidak dibersihkan.</li>
      <li><b>Suhu Ekstrem (Panas):</b> Risiko: luka bakar akibat uap panas. Penyebab: tanpa sarung tangan tahan panas atau percikan air mendidih.</li>
      <li><b>Bising:</b> Risiko: gangguan pendengaran akibat suara mesin terus-menerus.</li>
      <li><b>Pencahayaan:</b> Risiko: kelelahan mata dan kecelakaan karena visibilitas rendah.</li>
    </ul>

    <h3>2. Bahaya Kimia</h3>
    <ul>
      <li><b>Bahan Pengawet dan Bumbu:</b> Risiko: iritasi kulit atau pernapasan. Penyebab: kontak tanpa APD.</li>
      <li><b>Bahan Pembersih:</b> Risiko: iritasi dan keracunan. Penyebab: penggunaan bahan korosif tanpa sarung tangan atau ventilasi cukup.</li>
    </ul>

    <h3>3. Bahaya Biologis</h3>
    <ul>
      <li><b>Kontaminasi Makanan:</b> Risiko: keracunan makanan akibat bakteri/jamur. Penyebab: sanitasi kurang atau bahan baku tidak higienis.</li>
      <li><b>Tikus dan Hama:</b> Risiko: penyebaran penyakit dan kontaminasi bahan. Penyebab: pengelolaan limbah buruk.</li>
    </ul>

    <h3>4. Bahaya Ergonomis</h3>
    <ul>
      <li><b>Gerakan Berulang dan Postur Buruk:</b> Risiko: nyeri punggung dan cedera otot. Penyebab: posisi kerja salah dan beban berat.</li>
    </ul>

    <h3>5. Bahaya Psikologis</h3>
    <ul>
      <li><b>Beban Kerja Berlebihan:</b> Risiko: stres kerja dan penurunan fokus. Penyebab: target tinggi, jam kerja panjang, dan kurang istirahat.</li>
    </ul>
  </section>

  <!-- Sumber Bahaya -->
  <section id="sumber-bahaya">
    <h2>Sumber Bahaya yang Berpotensi Menimbulkan Kecelakaan Kerja</h2>
    <h3>1. Bahaya Fisik</h3>
    <ul>
      <li>Luka potong akibat mesin penggiling</li>
      <li>Luka bakar akibat uap panas</li>
      <li>Terpeleset karena lantai licin</li>
      <li>Gangguan pendengaran akibat kebisingan mesin</li>
    </ul>

    <h3>2. Bahaya Kimia</h3>
    <ul>
      <li>Gangguan pernapasan dari bahan pengawet atau bumbu serbuk</li>
    </ul>

    <h3>3. Bahaya Biologi</h3>
    <ul>
      <li>Kontaminasi bakteri/jamur dari bahan baku</li>
      <li>Hama seperti tikus yang mencemari bahan baku</li>
    </ul>

    <h3>4. Bahaya Ergonomi</h3>
    <ul>
      <li>Cedera otot akibat mengangkat adonan berat</li>
      <li>Postur membungkuk saat mencetak adonan</li>
    </ul>

    <h3>5. Bahaya Psikososial</h3>
    <ul>
      <li>Stres kerja akibat beban produksi berlebih</li>
      <li>Penurunan konsentrasi yang dapat memicu kecelakaan</li>
    </ul>
  </section>

  <!-- Faktor Pencegah -->
  <section id="faktor-pencegah">
    <h2>Faktor-Faktor Pencegah Kecelakaan Kerja</h2>
    <h3>1. Tingkat Manajemen & Organisasi (Strategi)</h3>
    <ul>
      <li>Komitmen manajemen yang nyata melalui inspeksi dan prioritas keselamatan.</li>
      <li>Penerapan sistem manajemen K3 seperti SMK3/ISO 45001.</li>
      <li>Pelatihan dan peningkatan kompetensi pekerja secara berkala.</li>
      <li>Investigasi insiden tanpa budaya saling menyalahkan.</li>
    </ul>

    <h3>2. Tingkat Teknis & Lingkungan Kerja</h3>
    <ul>
      <li>Hierarki pengendalian risiko: eliminasi, substitusi, kontrol teknik, administrasi, dan APD.</li>
      <li>Pemeliharaan peralatan secara rutin.</li>
      <li>Latihan tanggap darurat dan simulasi kebakaran/gempa.</li>
    </ul>

    <h3>3. Tingkat Individu (Pekerja)</h3>
    <ul>
      <li>Partisipasi pekerja dalam penerapan K3.</li>
      <li>Budaya keselamatan positif dan komunikasi efektif.</li>
      <li>Program kesehatan dan manajemen stres kerja.</li>
    </ul>

    <h3>Pencegahan Berdasarkan Jenis Bahaya</h3>
    <ul>
      <li><b>Fisik:</b> Pelindung mesin, APD, sistem pembersihan lantai, dan earplug.</li>
      <li><b>Kimia:</b> Gunakan masker respirator dan ventilasi memadai.</li>
      <li><b>Biologi:</b> Sanitasi area kerja dan program pest control rutin.</li>
      <li><b>Ergonomi:</b> Gunakan alat bantu angkat dan desain meja kerja ergonomis.</li>
      <li><b>Psikososial:</b> Atur shift, istirahat cukup, dan lakukan briefing rutin.</li>
    </ul>
  </section>

  <section id="investigasi-kecelakaan" class="apd-section">
  <h2>Pemeriksaan dan Pengkajian Kecelakaan Kerja</h2>
  <p class="subtitle">
    Prosedur ini digunakan untuk melakukan pemeriksaan dan analisis kecelakaan kerja serta penyakit akibat kerja agar tindakan perbaikan dapat dilakukan.
  </p>

  <!-- 4 Foto Dummy dengan Penjelasan -->
  <div style="
      display: grid; 
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); 
      gap: 20px; 
      margin: 20px 0;
  ">

    <!-- Foto 1 -->
    <div style="text-align: center;">
      <img src="{{ asset('images/investigasi1.png') }}" 
           alt="Petugas K3 Melakukan Pemeriksaan Lokasi" 
           style="width: 100%; border-radius: 10px;">
      <p style="margin-top: 10px; font-size: 14px;">
        Petugas K3 melakukan inspeksi awal dan mendokumentasikan lokasi kejadian.
      </p>
    </div>

    <!-- Foto 2 -->
    <div style="text-align: center;">
      <img src="{{ asset('images/investigasi2.png') }}" 
           alt="Pengambilan Foto Bukti Kecelakaan" 
           style="width: 100%; border-radius: 10px;">
      <p style="margin-top: 10px; font-size: 14px;">
        Bukti fisik seperti kondisi lantai, peralatan, atau mesin difoto dari berbagai sudut.
      </p>
    </div>

    <!-- Foto 3 -->
    <div style="text-align: center;">
      <img src="{{ asset('images/investigasi3.png') }}" 
           alt="Pencatatan Informasi di Laporan" 
           style="width: 100%; border-radius: 10px;">
      <p style="margin-top: 10px; font-size: 14px;">
        Petugas menyusun laporan analisis penyebab kecelakaan dan rekomendasi perbaikan.
      </p>
    </div>

    <!-- Foto 4 -->
    <div style="text-align: center;">
      <img src="{{ asset('images/investigasi4.png') }}" 
           alt="Tindakan Perbaikan dan Pemantauan" 
           style="width: 100%; border-radius: 10px;">
      <p style="margin-top: 10px; font-size: 14px;">
        Unit terkait melaksanakan tindakan perbaikan dan prosesnya didokumentasikan.
      </p>
    </div>

  </div>

  <!-- Paragraf Penjelasan -->
  <p>
    Perusahaan memiliki prosedur pemeriksaan dan pengkajian kecelakaan yang dilakukan oleh petugas atau Ahli K3 yang berkompeten. 
    Pemeriksaan dilakukan untuk mengidentifikasi sebab langsung maupun sebab tidak langsung dari kecelakaan, serta menentukan langkah-langkah perbaikan yang harus dilakukan.
    Laporan pemeriksaan berisi rekomendasi dan jadwal pelaksanaan perbaikan. 
    Setiap tindakan perbaikan diinformasikan kepada tenaga kerja yang terlibat dan didokumentasikan dalam laporan evaluasi kecelakaan.
  </p>

  <ul style="margin-top: 20px; line-height: 1.6;">
    <li><strong>Pemeriksaan Kecelakaan:</strong> dilakukan segera setelah kejadian oleh petugas yang berwenang.</li>
    <li><strong>Penyusunan Laporan:</strong> berisi analisis penyebab, rekomendasi, dan waktu perbaikan.</li>
    <li><strong>Tanggung Jawab Perbaikan:</strong> ditetapkan kepada petugas/unit terkait.</li>
    <li><strong>Informasi kepada Pekerja:</strong> seluruh tindakan perbaikan disosialisasikan kepada pekerja.</li>
    <li><strong>Dokumentasi:</strong> seluruh proses dan tindak lanjut dicatat dalam laporan pemeriksaan kecelakaan.</li>
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

</body>
</html>