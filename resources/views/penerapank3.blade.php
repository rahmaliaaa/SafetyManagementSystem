<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Pentol BALL - Sistem K3 (Layout, APD, Simulasi Kebakaran, Safety Talk)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #007BFF;
            --bg: #f4f6f8;
            --card: #fff;
            --muted: #666;
            --success: #2b9348;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Roboto, Arial, sans-serif;
            background: var(--bg);
            color: #222;
            line-height: 1.5;
        }

        header {
            background: var(--card);
            border-bottom: 1px solid #e4e7ea;
            padding: 12px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        
        /* Tombol Kembali */
        .back-button {
            text-decoration: none;
            color: var(--primary) !important;
            padding: 6px 10px;
            border-radius: 6px;
            margin-right: 20px; 
            font-weight: 600;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            transition: all 0.2s;
            white-space: nowrap;
            margin-right: 15px; 
        }

        .back-button:hover {
            background-color: #e9ecef;
            border-color: #ccc;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
        }

        header .brand {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        header img {
            height: 42px;
        }

        header nav a {
            margin-left: 18px;
            text-decoration: none;
            color: #222;
            font-weight: 600;
        }

        .hero {
            text-align: center;
            padding: 40px 20px;
            background: linear-gradient(135deg, #00C6FF, #007BFF);
            color: #fff;
        }

        .container {
            max-width: 1150px;
            margin: 30px auto;
            padding: 0 16px;
        }

        .card {
            background: var(--card);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }

        .section-title {
            color: var(--primary);
            font-weight: 600;
            border-left: 5px solid var(--primary);
            padding-left: 10px;
            margin-bottom: 12px;
        }

        .layout-img {
            width: 90%;
            max-width: 700px;
            border: 2px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .layout-img:hover {
            transform: scale(1.01);
        }

        /* Layout Info Box */
        .layout-info {
            background-color: #eef7f2;
            border-left: 6px solid var(--success);
            padding: 16px 20px;
            border-radius: 10px;
            margin-top: 15px;
            transition: background-color 0.3s ease;
            text-align: center;
        }

        .layout-info:hover {
            background-color: #d9f5e1;
        }

        .layout-info ul {
            list-style: none;
            padding: 0;
            display: inline-block;
            text-align: left;
        }

        .layout-info li {
            margin-bottom: 8px;
            font-size: 15px;
        }

        .layout-info strong {
            color: var(--success);
        }

        .layout-info h5 {
            margin-bottom: 6px;
        }

        .text-muted {
            color: var(--muted);
            font-size: 0.9rem;
        }

        .text-center {
            text-align: center;
        }

        /* APD Section Style */
        .apd-item {
            background: #fff;
            border: 1px solid #e4e7ea;
            border-radius: 8px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }
        .apd-item img {
            max-height: 120px;
            width: auto;
            margin-bottom: 10px;
        }
        .apd-title {
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
            font-size: 1.1rem;
        }
        .apd-desc {
            font-size: 0.9rem;
            color: var(--muted);
        }
        .apd-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        /* MODIFIKASI CSS UNTUK SIMULASI KEBAKARAN (BOX LEBIH BAGUS) */
        
        /* Box Pembungkus Langkah yang Diperbarui */
        .timeline-step-card {
            background: var(--card); /* Kartu putih bersih */
            border: 1px solid #ddd;
            border-left: 6px solid var(--primary); /* Garis Biru yang Tegas */
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); /* Bayangan yang lebih dalam */
            display: flex;
            gap: 15px;
            align-items: flex-start;
            transition: all 0.3s ease; /* Transisi untuk efek hover */
        }

        /* Efek Hover untuk Step Card */
        .timeline-step-card:hover {
            transform: translateY(-5px); /* Sedikit terangkat */
            border-left-color: #ffaa00; /* Ganti warna garis kiri saat di-hover (Oranye) */
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); /* Bayangan sedikit lebih besar */
        }

        /* Ikon Angka dengan Gradasi */
        .timeline-step-card .icon-container {
            flex-shrink: 0;
            width: 45px; /* Ukuran lebih besar */
            height: 45px;
            border-radius: 50%;
            /* Gradasi Biru ke Cyan untuk tampilan modern */
            background: linear-gradient(45deg, var(--primary), #00c6ff); 
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 800; /* Lebih tebal */
            font-size: 1.3rem; /* Lebih besar */
            border: 4px solid #e9f0ff; /* Border tebal di luar lingkaran */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Bayangan pada ikon */
        }
        
        /* Konten Langkah */
        .timeline-step-content {
            flex-grow: 1;
        }

        .timeline-step-content strong {
            display: block;
            margin-bottom: 8px;
            color: #222;
            font-size: 1.25rem; /* Judul lebih besar */
            font-weight: 700;
        }

        .timeline-step-content ul {
            padding-left: 20px;
            margin-top: 5px;
            margin-bottom: 0;
            list-style: disc;
            color: var(--muted); /* Warna teks daftar lebih kalem */
        }

        .timeline-step-content li {
            margin-bottom: 4px;
            font-size: 1rem;
            color: #444; /* Warna teks list lebih jelas */
        }
        /* Akhir Modifikasi CSS Simulasi Kebakaran */
        
        footer {
            text-align: center;
            padding: 20px;
            margin-top: 30px;
            background-color: #e9ecef;
            color: var(--muted);
            font-size: 0.9rem;
            border-top: 1px solid #ddd;
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

    <header>
        <div class="brand">
            <a href="/" class="back-button" title="Kembali ke Halaman Utama">
                &larr; Kembali
            </a>
            <img src="logo-placeholder.png" alt="logo" onerror="this.style.display='none'">
            <div>
                <div style="font-weight:800">Pentol BALL</div>
                <div style="font-size:12px;color:#666">Sistem K3 — Layout | APD | Simulasi Kebakaran | Safety Talk</div>
            </div>
        </div>
        <nav>
            <a href="#layout">Layout</a>
            <a href="#apd">APD</a>
            <a href="#simulasi">Simulasi Kebakaran</a>
            <a href="#safetalk">Safety Talk</a>
        </nav>
    </header>

    <section class="hero">
        <h1>Penerapan (K3)</h1>
        <p style="max-width:900px;margin:8px auto 0">Menampilkan layout area kerja, Alat Pelindung Diri (APD) wajib, prosedur simulasi kebakaran, serta pengumuman Safety Talk mingguan di PT Pentol BALL.</p>
    </section>

    <div class="container">
        
        <div class="card" id="layout">
            <h4 class="section-title">Layout K3</h4>
            <p>Berikut merupakan layout area kerja yang menunjukkan posisi alat pemadam kebakaran (APAR), jalur evakuasi, titik kumpul, dan area berisiko tinggi.</p>

            <div class="text-center">
                <img src="{{ asset('images/layout-pentol.jpg') }}" alt="Layout Area Kerja K3" class="layout-img mb-3">
            </div>

            <div class="layout-info shadow-sm">
                <h5 class="fw-bold mb-2"> Keterangan Layout Area Kerja PT Pentol BALL</h5>
                <p class="mb-2">Setiap warna pada layout memiliki makna penting untuk keselamatan kerja:</p>
                <ul>
                    <li>🟡 <strong>Area Kuning</strong> – Zona risiko tinggi seperti <em>area produksi dan penggorengan</em>. Wajib gunakan <strong>APD lengkap</strong>.</li>
                    <li>🔵 <strong>Area Biru</strong> – Zona risiko rendah seperti <em>kantor administrasi dan gudang bahan non-flammable</em>. Tetap waspada terhadap potensi bahaya kecil.</li>
                    <li>🟢 <strong>Area Hijau</strong> – Menunjukkan lokasi <strong>APAR</strong>, <strong>P3K</strong>, dan <strong>titik kumpul evakuasi</strong>.</li>
                </ul>
                <p class="mt-3 fst-italic">💡 Tips: Pastikan seluruh karyawan mengetahui lokasi <strong>jalur evakuasi</strong> dan <strong>titik kumpul</strong> terdekat untuk menghadapi keadaan darurat.</p>
            </div>
        </div>
        
        <div class="card" id="apd">
            <h4 class="section-title">Alat Pelindung Diri (APD) Wajib</h4>
            <p>APD adalah garis pertahanan terakhir untuk melindungi pekerja dari bahaya di tempat kerja. Pastikan APD Anda selalu dalam kondisi baik dan digunakan dengan benar.</p>
            
            <div class="text-center mb-4">
                <img src="image_c1443d.png" alt="Gambar Ilustrasi APD" style="max-width: 500px; width: 100%; border-radius: 8px;">
            </div>

            <div class="apd-grid">
                <div class="apd-item">
                    <div class="apd-title">1. Safety Helmet / Hair Net</div>
                    <div class="apd-desc">Melindungi kepala dari benturan, kejatuhan benda, dan (untuk area makanan) mencegah kontaminasi produk oleh rambut.</div>
                </div>
                <div class="apd-item">
                    <div class="apd-title">2. Safety Goggles / Kacamata Pelindung</div>
                    <div class="apd-desc">Wajib digunakan di area penggorengan dan pencampuran bahan untuk melindungi mata dari percikan minyak panas, uap, atau bahan kimia.</div>
                </div>
                <div class="apd-item">
                    <div class="apd-title">3. Safety Shoes / Sepatu Pengaman</div>
                    <div class="apd-desc">Melindungi kaki dari kejatuhan benda berat, tertusuk, dan mengurangi risiko terpeleset karena lantai licin di area basah atau berminyak.</div>
                </div>
                <div class="apd-item">
                    <div class="apd-title">4. Sarung Tangan Tahan Panas / Food Grade</div>
                    <div class="apd-desc">Digunakan saat menangani bahan panas (penggorengan/perebusan) atau untuk menjaga higienitas produk (sarung tangan Food Grade).</div>
                </div>
                <div class="apd-item">
                    <div class="apd-title">5. Masker Respirator</div>
                    <div class="apd-desc">Melindungi sistem pernapasan dari uap panas, asap, atau partikel debu halus yang mungkin timbul saat proses pencampuran bahan kering.</div>
                </div>
                <div class="apd-item">
                    <div class="apd-title">6. Wearpack / Apron Anti-Air</div>
                    <div class="apd-desc">Pakaian kerja yang menutupi seluruh tubuh. Apron anti-air digunakan di area basah/pencucian untuk melindungi pakaian dan kulit dari cairan.</div>
                </div>
            </div>

            <div class="alert alert-warning mt-4 text-center">
                <p class="mb-0 fw-bold">Peringatan: Tidak menggunakan APD di zona wajib dapat dikenakan sanksi sesuai prosedur K3 perusahaan.</p>
            </div>
        </div>
        
        <div class="card" id="simulasi">
            <h4 class="section-title">Simulasi Kebakaran</h4>

            <div class="alert alert-danger shadow-sm p-4 rounded-4">
                <h5 class="fw-bold text-center mb-3"> Pentingnya Pencegahan Kebakaran di Lingkungan Kerja</h5>
                <p>Kebakaran di lingkungan kerja merupakan ancaman serius yang dapat mengakibatkan kerugian materi, bahkan korban jiwa.
                    Untuk mencegahnya, memahami identifikasi potensi bahaya kebakaran dan pengendaliannya menjadi sangat penting.
                    Melalui pemahaman ini, kita dapat menciptakan lingkungan kerja yang aman dan nyaman bagi semua.</p>

                <p><strong>Kebakaran dapat dipicu oleh berbagai faktor</strong>, yang dapat dikategorikan menjadi tiga kelompok utama, yaitu:</p>
                <ul>
                    <li>🔥 <strong>Bahan yang mudah terbakar</strong> — seperti minyak, gas, atau bahan kimia.</li>
                    <li>🔥 <strong>Sumber panas yang kurang terjaga dan terawat</strong> — misalnya instalasi listrik rusak atau mesin terlalu panas.</li>
                    <li>🔥 <strong>Faktor kelalaian dan kekurangpahaman</strong> — seperti tidak mematikan alat setelah digunakan atau lalai terhadap prosedur keselamatan.</li>
                </ul>
            </div>

            <div class="text-center">
                <img src="{{ asset('images/simulasi-kebakaran.jpg') }}" alt="Ilustrasi Simulasi Kebakaran" class="layout-img mb-3">
            </div>
            <p class="mt-4">Kegiatan simulasi kebakaran dilakukan untuk meningkatkan kesiapsiagaan karyawan dalam menghadapi keadaan darurat.
                Berikut langkah-langkahnya:</p>

            <div class="steps-container mt-4">

                <div class="timeline-step-card step-1">
                    <div class="icon-container">1</div>
                    <div class="timeline-step-content">
                        <strong>Deteksi dan Alarm (Tahap Awal)</strong>
                        <ul>
                            <li>Tetap Tenang dan Identifikasi Sumber Api: Usahakan tetap tenang dan segera tentukan lokasi serta skala kebakaran.</li>
                            <li>Bunyikan Alarm: Segera aktifkan alarm kebakaran terdekat untuk memberi tahu semua orang di area tersebut.</li>
                            <li>Hubungi Pihak Berwenang: Telepon petugas pemadam kebakaran (112) dan berikan informasi tentang lokasi, jenis, dan besarnya kebakaran.</li>
                        </ul>
                    </div>
                </div>
                
                <div class="timeline-step-card step-2">
                    <div class="icon-container">2</div>
                    <div class="timeline-step-content">
                        <strong>Upaya Pemadaman Dini (Jika Skala Kecil)</strong>
                        <ul>
                            <li>Gunakan APAR (Alat Pemadam Api Ringan): Jika api masih kecil dan aman, gunakan APAR dengan teknik <em>Tarik-Arahkan-Tekan-Sapukan (T-A-T-S)</em>.</li>
                            <li>Prioritaskan Keselamatan: Jangan memadamkan api jika sudah membesar atau membahayakan. Segera lakukan evakuasi.</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-step-card step-3">
                    <div class="icon-container">3</div>
                    <div class="timeline-step-content">
                        <strong>Evakuasi</strong>
                        <ul>
                            <li>Matikan Sumber Listrik: Jika aman, matikan panel listrik utama untuk mencegah korsleting.</li>
                            <li>Evakuasi Segera: Bantu semua orang, terutama yang membutuhkan bantuan khusus, menuju Titik Kumpul.</li>
                            <li>Gunakan Tangga Darurat: Jangan pernah menggunakan lift saat kebakaran.</li>
                            <li>Perhatikan Asap: Jika ada asap tebal, merangkaklah atau berjalan membungkuk sambil menutup hidung dengan kain basah.</li>
                            <li>Tutup Pintu: Tutup pintu (tanpa dikunci) saat meninggalkan ruangan untuk memperlambat penyebaran api.</li>
                            <li>Melapor di Titik Kumpul: Setelah tiba, laporkan kehadiran Anda kepada petugas evakuasi.</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-step-card step-4">
                    <div class="icon-container">4</div>
                    <div class="timeline-step-content">
                        <strong>Penanganan oleh Tim Darurat dan Pemadam Kebakaran</strong>
                        <ul>
                            <li>Petugas Evakuasi (Fire Warden): Memastikan jalur aman dan melakukan absensi di titik kumpul.</li>
                            <li>Regu Pemadam Internal (Brigade): Bergerak menuju lokasi api dengan APAR atau hydrant.</li>
                            <li>Komando dan Koordinasi: Komandan kebakaran mengatur operasi pemadaman dan koordinasi dengan Damkar.</li>
                            <li>Operasi Pemadaman Profesional: Tim Damkar tiba dan melakukan pemadaman, penyelamatan, serta pertolongan pertama.</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-step-card step-5">
                    <div class="icon-container">5</div>
                    <div class="timeline-step-content">
                        <strong>Pasca Kebakaran</strong>
                        <ul>
                            <li>Overhaul: Lakukan penyisiran menyeluruh untuk memastikan tidak ada bara api tersisa.</li>
                            <li>Pengamanan Lokasi: Amankan area untuk penyelidikan penyebab kebakaran.</li>
                            <li>Pemulihan: Setelah izin diberikan, lakukan perbaikan dan pembersihan area terdampak.</li>
                            <li>Evaluasi: Lakukan evaluasi terhadap penanganan kebakaran untuk peningkatan di masa mendatang.</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="alert alert-success mt-4 text-center" role="alert">
                💡 <strong>Tips:</strong> Pastikan semua karyawan mengetahui lokasi APAR, jalur evakuasi, dan titik kumpul.
                Lakukan pelatihan kebakaran secara rutin minimal dua kali dalam setahun.
            </div>
        </div>

        <div class="card" id="safetalk">
            <h4 class="section-title">Pengumuman Safety Talk Mingguan 📣</h4>
            <p class="text-muted">Ayo tingkatkan kesadaran K3! Bersiaplah untuk Safety Talk mingguan yang akan datang.</p>

            <div class="alert alert-info shadow-sm p-4 rounded-4 text-center">
                <h5 class="fw-bold mb-3" style="color:#007BFF">Safety Talk Berikut: Tingkatkan Kewaspadaan!</h5>

                <div id="safetyTalkSchedule">
                    <h2 id="talkTheme" class="mb-2" style="font-size: 1.8rem;">[Tema Akan Diisi JavaScript]</h2>
                    <p style="font-size: 1.1rem; margin-bottom: 5px;">
                        📅 Tanggal: <span id="talkDateDisplay" class="fw-bold">[Tanggal Akan Diisi JavaScript]</span>
                    </p>
                    <p style="font-size: 1.1rem; margin-bottom: 15px;">
                        ⏰ Waktu: <span id="talkTimeDisplay" class="fw-bold">[Waktu Akan Diisi JavaScript]</span>
                    </p>

                    <div style="padding: 15px 20px; background-color: #e9f0ff; border-radius: 8px; border: 1px solid #b3ccff;">
                        <p class="mb-2 fw-bold text-dark">Waktu Tersisa Menuju Safety Talk:</p>
                        <div id="countdown" class="fw-bolder" style="font-size: 2.5rem; color: #007BFF;">
                            Memuat...
                        </div>
                    </div>
                    
                </div>
                
                <p class="mt-3 fst-italic text-muted" style="font-size: 0.9rem;">
                    *Kehadiran wajib bagi seluruh Staf Produksi, Gudang, dan Quality Control.
                </p>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();

        // --- FUNGSI UNTUK SAFETY TALK ANNOUNCEMENT ---

        // Definisikan jadwal Safety Talk (Tanggal dan Waktu)
        // Ganti tanggal dan waktu di bawah ini ke jadwal Safety Talk yang Anda inginkan.
        // Format Target Date: YYYY-MM-DDTHH:MM:SS. 
        const scheduledDate = "2025-10-24T08:00:00"; // Contoh: Jumat, 24 Oktober 2025, jam 08:00
        const scheduleTheme = "Kebakaran & Evakuasi di Area Produksi";
        const scheduleDateDisplay = "Jumat, 24 Oktober 2025";
        const scheduleTimeDisplay = "08:00 - 08:30 WIB";

        // Update elemen HTML dengan detail jadwal
        document.getElementById('talkTheme').textContent = scheduleTheme;
        document.getElementById('talkDateDisplay').textContent = scheduleDateDisplay;
        document.getElementById('talkTimeDisplay').textContent = scheduleTimeDisplay;

        // Fungsi untuk menghitung mundur
        function updateCountdown() {
            const now = new Date().getTime();
            const targetDate = new Date(scheduledDate).getTime();
            const distance = targetDate - now;

            const countdownElement = document.getElementById('countdown');

            if (distance < 0) {
                // Setelah waktu berakhir
                countdownElement.innerHTML = "<strong>SEDANG BERLANGSUNG!</strong>";
                clearInterval(countdownInterval);
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Format output hitungan mundur
            countdownElement.innerHTML = 
                `${days} Hari : ${hours.toString().padStart(2, '0')} Jam : ${minutes.toString().padStart(2, '0')} Menit : ${seconds.toString().padStart(2, '0')} Detik`;
        }

        // Jalankan hitungan mundur setiap 1 detik
        updateCountdown();
        const countdownInterval = setInterval(updateCountdown, 1000);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

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