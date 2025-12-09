<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Pentol BALL - Sistem K3 (Layout, P3K, Simulasi Kebakaran, Safety Talk)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #007BFF;
            --bg: #f4f6f8;
            --card: #fff;
            --muted: #666;
            --success: #2b9348;
            --info: #17a2b8; /* Warna untuk P3K/informasi */
            --warning: #ffc107; /* Warna peringatan */
            --danger: #dc3545; /* Warna bahaya */
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
        
        /* Judul P3K menggunakan warna success (hijau) untuk konsistensi dengan simbol P3K */
        #p3k .section-title {
            color: var(--success); 
            border-left: 5px solid var(--success);
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

        /* Styling baru untuk P3K Box */
        .p3k-box {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
            align-items: stretch;
        }

        .p3k-image-container {
            flex: 1 1 300px; /* Fleksibel, minimal 300px */
            text-align: center;
            align-self: center;
        }

        .p3k-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            border: 3px solid var(--success);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        }

        .p3k-content {
            flex: 2 1 400px; /* Fleksibel, minimal 400px */
            background-color: #f7fff9;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #d4edda;
        }

        .p3k-content h5 {
            color: var(--success);
            font-weight: 700;
            border-bottom: 2px solid #e2f0e4;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }

        .p3k-content ul {
            list-style: none;
            padding: 0;
            columns: 2; /* Bagi daftar menjadi 2 kolom */
            column-gap: 30px;
            font-size: 0.95rem;
        }

        .p3k-content li {
            padding: 5px 0;
            margin-bottom: 5px;
            position: relative;
            padding-left: 20px;
        }
        
        .p3k-content li::before {
            content: '🩹'; /* Emoji plester sebagai bullet point */
            position: absolute;
            left: 0;
            color: var(--success);
            font-size: 0.9rem;
            top: 5px;
        }

        /* Styling Baru untuk Prosedur P3K */
        .procedure-card {
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-top: 5px solid var(--success); /* Garis atas hijau */
            border-radius: 8px;
            padding: 20px;
            margin-top: 25px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .procedure-card h5 {
            color: #222;
            font-weight: 700;
            margin-bottom: 15px;
            padding-bottom: 5px;
            border-bottom: 1px dashed #eee;
        }
        
        .procedure-item {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            align-items: flex-start;
        }

        .procedure-icon {
            flex-shrink: 0;
            font-size: 1.5rem;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--success);
            border: 2px solid var(--success);
            border-radius: 50%;
            font-weight: bold;
        }
        
        .procedure-title {
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
            font-size: 1.1rem;
        }
        
        .procedure-item p {
            margin-bottom: 0;
            font-size: 0.95rem;
            color: #444;
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
                <div style="font-size:12px;color:#666">Sistem K3 — Layout | P3K | Simulasi Kebakaran | Safety Talk</div>
            </div>
        </div>
        <nav>
            <a href="#layout">Layout</a>
            <a href="#p3k">P3K</a>
            <a href="#simulasi">Simulasi Kebakaran</a>
            <a href="#safetalk">Safety Talk</a>
        </nav>
    </header>

    <section class="hero">
        <h1>Penerapan Keselamatan dan Kesehatan Kerja (K3)</h1>
        <p style="max-width:900px;margin:8px auto 0">Menampilkan layout area kerja, daftar isi P3K, prosedur simulasi kebakaran, serta pengumuman Safety Talk mingguan di PT Pentol BALL.</p>
    </section>

    <div class="container">
        
        <div class="card" id="layout">
            <h4 class="section-title">Layout K3</h4>
            <p>Berikut merupakan layout area kerja yang menunjukkan posisi alat pemadam kebakaran (APAR), jalur evakuasi, titik kumpul, dan area berisiko tinggi.</p>

            <div class="text-center">
                <img src="{{ asset('images/layout-pentol.jpg') }}" alt="Layout Pentol" class="layout-img mb-3">
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
        
        <div class="card" id="p3k">
            <h4 class="section-title">Kotak Pertolongan Pertama Pada Kecelakaan (P3K)</h4>
            <p>Kotak P3K adalah garis pertahanan pertama dalam penanganan cedera ringan di tempat kerja. Pastikan kotak P3K selalu tersedia, mudah diakses, dan isinya lengkap.</p>
            
            <div class="p3k-box">
                <div class="p3k-image-container">
                    <img src="{{ asset('images/kotak-p3k.png') }}" alt="Kotak P3k" class="layout-img mb-3">
                    <p class="text-muted mt-2">Lokasi kotak P3K ditandai dengan simbol palang hijau (🟢) pada layout.</p>
                </div>
                <div class="p3k-content shadow-sm">
                    <h5 class="text-center">Isi Standar Kotak P3K PT Pentol BALL</h5>
                    <ul>
                        <li>Kasa Steril (berbagai ukuran)</li>
                        <li>Plester Cepat/Luka (band aid)</li>
                        <li>Pembalut Gulung (verban)</li>
                        <li>Kapas dan Tissue Alkohol</li>
                        <li>Antiseptik (Povidone Iodine/Alkohol)</li>
                        <li>Gunting dan Pinset</li>
                        <li>Sarung Tangan Lateks</li>
                        <li>Masker dan Penutup Mata</li>
                        <li>Obat Pereda Nyeri (Paracetamol)</li>
                        <li>Obat Luka Bakar/Bioplacenton</li>
                        <li>Buku Panduan P3K & Daftar Kontak Darurat</li>
                        <li>Bidai/Penyangga Segitiga (mitella)</li>
                    </ul>
                    <div class="alert alert-warning mt-3 mb-0" role="alert">
                        ⚠️ Perhatian: Isi kotak P3K harus diperiksa setiap bulan dan segera diisi ulang jika ada yang kedaluwarsa atau habis.
                    </div>
                </div>
            </div>
            
            <div class="procedure-card">
                <h5 class="text-center">Prosedur Dasar Pertolongan Pertama (P3K)</h5>
                <p class="text-center text-muted mb-4">Langkah-langkah cepat dan tepat untuk menangani kondisi darurat minor di tempat kerja.</p>

                <div class="row">
                    <div class="col-md-6">
                        <div class="procedure-item">
                            <div class="procedure-icon">1</div>
                            <div>
                                <div class="procedure-title">Penanganan Luka Sayat / Tergores</div>
                                <p><strong>Hentikan Perdarahan:</strong> Tekan luka dengan kain kasa steril. Setelah darah berhenti, bersihkan area luka dengan air mengalir dan antiseptik. Tutup dengan plester atau perban steril.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="procedure-item">
                            <div class="procedure-icon">2</div>
                            <div>
                                <div class="procedure-title">Penanganan Luka Bakar Ringan (Derajat 1 & 2 Kecil)</div>
                                <p><strong>Dinginkan:</strong> Segera aliri area luka bakar dengan air dingin (bukan es) selama 10-15 menit untuk meredakan panas. Oleskan obat luka bakar (Bioplacenton/salep khusus). Tutup dengan kasa steril longgar jika ada lepuhan.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="procedure-item">
                            <div class="procedure-icon">3</div>
                            <div>
                                <div class="procedure-title">Penanganan Pingsan (Fainting)</div>
                                <p>Baringkan korban dengan kaki ditinggikan 30 cm (jika tidak ada cedera kepala). Longgarkan pakaian, pastikan sirkulasi udara baik. Jika tidak sadar lebih dari 1-2 menit, segera panggil bantuan medis darurat.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="procedure-item">
                            <div class="procedure-icon">4</div>
                            <div>
                                <div class="procedure-title">Mata Terkena Bahan Asing/Kimia</div>
                                <p><strong>Bilas Segera:</strong> Bilas mata dengan air mengalir bersih selama minimal 15-20 menit. Jangan menggosok mata. Setelah dibilas, segera bawa korban ke unit medis/klinik terdekat untuk pemeriksaan lebih lanjut.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="alert alert-danger mt-3 mb-0 text-center" role="alert">
                    🚨 Penting! Jika cedera serius (perdarahan hebat, patah tulang, luka bakar luas, atau tidak sadar), jangan ragu. Panggil bantuan medis/ambulans (118/119) dan petugas K3/Koordinator P3K secepatnya.
                </div>

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
                   <img src="{{ asset('images/simulasi-kebakaran.jpg') }}" alt="Simulasi Kebakaran" class="layout-img mb-3">
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

        <div class="card" id="dokumentasi">
    <h4 class="section-title">Dokumentasi Kegiatan</h4>
    <p>Berikut dokumentasi kegiatan pelatihan, simulasi kebakaran, dan safety talk yang telah dilaksanakan.</p>

    <div class="row g-3">
    <!-- Dokumentasi 1 -->
    <div class="col-md-4 col-sm-6">
        <div class="card shadow-sm h-100">
            <img src="https://images.pexels.com/photos/4425765/pexels-photo-4425765.jpeg?auto=compress&cs=tinysrgb&h=400" 
                 class="card-img-top" 
                 alt="Simulasi Kebakaran"
                 style="height: 200px; object-fit: cover;">
            <div class="card-body d-flex flex-column">
                <h6 class="card-title">Simulasi Kebakaran</h6>
                <p class="text-muted mb-2">Tanggal: 1 Desember 2025</p>
                <a href="https://images.pexels.com/photos/4425765/pexels-photo-4425765.jpeg" 
                   target="_blank" 
                   class="btn btn-sm btn-primary mt-auto">Lihat / Download</a>
            </div>
        </div>
    </div>

    <!-- Dokumentasi 2 -->
    <div class="col-md-4 col-sm-6">
        <div class="card shadow-sm h-100">
            <img src="https://images.pexels.com/photos/3184295/pexels-photo-3184295.jpeg?auto=compress&cs=tinysrgb&h=400" 
                 class="card-img-top" 
                 alt="Safety Talk"
                 style="height: 200px; object-fit: cover;">
            <div class="card-body d-flex flex-column">
                <h6 class="card-title">Safety Talk Mingguan</h6>
                <p class="text-muted mb-2">Tanggal: 5 Desember 2025</p>
                <a href="https://images.pexels.com/photos/3184295/pexels-photo-3184295.jpeg" 
                   target="_blank" 
                   class="btn btn-sm btn-primary mt-auto">Lihat / Download</a>
            </div>
        </div>
    </div>

    <!-- Dokumentasi 3 -->
    <div class="col-md-4 col-sm-6">
        <div class="card shadow-sm h-100">
            <img src="https://blog.axcethr.com/hubfs/fire-drill-at-work-_1200-%C3%97-628-px__1%20%281%29.webp" 
                 class="card-img-top" 
                 alt="Simulasi Evakuasi Karyawan"
                 style="height: 200px; object-fit: cover;">
            <div class="card-body d-flex flex-column">
                <h6 class="card-title">Simulasi Evakuasi Karyawan</h6>
                <p class="text-muted mb-2">Tanggal: 10 Desember 2025</p>
                <a href="https://blog.axcethr.com/hubfs/fire-drill-at-work-_1200-%C3%97-628-px__1%20%281%29.webp" 
                   target="_blank" 
                   class="btn btn-sm btn-primary mt-auto">Lihat / Download</a>
            </div>
        </div>
    </div>
</div>


       <div class="card" id="safetalk">
    <h4 class="section-title">Pengumuman Safety Talk Mingguan 📣</h4>
    <p class="text-muted">Ayo tingkatkan kesadaran K3! Bersiaplah untuk Safety Talk mingguan yang akan datang.</p>

    <div class="alert alert-info shadow-sm p-4 rounded-4 text-center">
        <h5 class="fw-bold mb-3" style="color:#007BFF">Safety Talk Berikut: Tingkatkan Kewaspadaan!</h5>

        <div id="safetyTalkSchedule">
            <h2 id="talkTheme" class="mb-2" style="font-size: 1.8rem;">Pengenalan K3 dan Evakuasi</h2>
            <p style="font-size: 1.1rem; margin-bottom: 5px;">
                📅 Tanggal: <span id="talkDateDisplay" class="fw-bold">20 Desember 2025</span>
            </p>
            <p style="font-size: 1.1rem; margin-bottom: 15px;">
                ⏰ Waktu: <span id="talkTimeDisplay" class="fw-bold">10:00 – 10:30 WIB</span>
            </p>

            <div style="padding: 15px 20px; background-color: #e9f0ff; border-radius: 8px; border: 1px solid #b3ccff;">
                <p class="mb-2 fw-bold text-dark">Waktu Tersisa Menuju Safety Talk:</p>
                <div id="countdown" class="fw-bolder" style="font-size: 2.5rem; color: #007BFF;">
                    Memuat...
                </div>

                <h1>Safety Talk</h1>
                <p>Ini halaman Safety Talk.</p>

                <hr>

                <h3>File Undangan</h3>
                <a href="{{ route('undangan.list') }}" class="btn btn-primary mb-3">Lihat Daftar Undangan</a>

                <!-- Tombol untuk tampilkan notulensi popup -->
                <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#notulensiModal">
                    📄 Download Notulensi PDF
                </button>
            </div>
        </div>
        <p class="mt-3 fst-italic text-muted" style="font-size: 0.9rem;">
            *Kehadiran wajib bagi seluruh Staf Produksi, Gudang, dan Quality Control.
        </p>
    </div>
</div>

<!-- Modal Notulensi -->
<div class="modal fade" id="notulensiModal" tabindex="-1" aria-labelledby="notulensiModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="notulensiModalLabel">Notulensi Safety Talk 📋</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" id="notulensiPDF">
        <p><strong>Tanggal:</strong> 20 Desember 2025 | <strong>Waktu:</strong> 10:00 – 10:30 WIB | <strong>Tempat:</strong> Area Kantor & Lantai Produksi</p>

        <h5>Peserta</h5>
        <ul>
            <li>Staf Produksi</li>
            <li>Staf Gudang</li>
            <li>Staf Quality Control</li>
        </ul>

        <h5>Materi</h5>
        <ol>
            <li>Pengenalan Potensi Bahaya Kebakaran di Area Produksi</li>
            <li>Prosedur Evakuasi & Safety Drill</li>
            <li>Penggunaan APAR (Alat Pemadam Api Ringan)</li>
            <li>Koordinasi Tim Darurat Internal</li>
        </ol>

        <h5>Diskusi / Tanya Jawab</h5>
        <ul>
            <li>Peserta menanyakan jalur evakuasi di gudang bahan mudah terbakar</li>
            <li>Dijelaskan prosedur evakuasi dan penggunaan APAR</li>
        </ul>

        <h5>Kesimpulan / Rekomendasi</h5>
        <ul>
            <li>Peserta memahami jalur evakuasi dan prosedur pemadaman api</li>
            <li>Latihan rutin minimal 2 kali setahun</li>
            <li>Pemeriksaan APAR dan titik kumpul secara berkala</li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button id="downloadPDF" class="btn btn-success">Download PDF</button>
      </div>
    </div>
  </div>
</div>

<!-- jsPDF CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script>
document.getElementById("downloadPDF").addEventListener("click", () => {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();
    const content = document.getElementById("notulensiPDF").innerText;

    doc.setFontSize(12);
    doc.text(content, 10, 10, { maxWidth: 190 });
    doc.save("Notulensi_Safety_Talk.pdf");
});
</script>

    <!-- Tambahkan tombol download di atas atau bawah notulensi -->
<button id="downloadPDF" class="btn btn-success mb-3">



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
                <a href="https://www.instagram.com/pentolball" target="_blank" style="margin: 0 8px; color: #ddd; text-decoration: none;">Instagram</a> |
                <a href="https://www.facebook.com/pentolball" target="_blank" style="margin: 0 8px; color: #ddd; text-decoration: none;">Facebook</a> |
                <a href="https://www.tiktok.com/@pentolball" target="_blank" style="margin: 0 8px; color: #ddd; text-decoration: none;">TikTok</a>
            </div>
            <hr style="margin: 15px 0; border: none; border-top: 1px solid #ddd;">
            <p style="color: #ddd;">© <span id="year"></span> Pentol BALL — Semua Hak Dilindungi.</p>
        </div>
    </footer>

    <script>
        // Set tahun di footer
        document.getElementById('year').textContent = new Date().getFullYear();

        // --- FUNGSI UNTUK SAFETY TALK ANNOUNCEMENT ---

        // TANGGAL HARI INI: Kamis, 23 Oktober 2025, 12:30 AM WIB
        // Definisikan jadwal Safety Talk (Tanggal dan Waktu)
        const scheduledDate = "2025-12-19T08:00:00"; // Jumat, 19 Desember 2025, jam 08:00 WIB
        const scheduleTheme = "Kebakaran & Evakuasi di Area Produksi";
        const scheduleDateDisplay = "Jumat, 19 Desember 2025";
        const scheduleTimeDisplay = "08:00 - 08:30 WIB";
generate
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
                countdownElement.innerHTML = "<span class='text-danger'><strong>SEDANG BERLANGSUNG!</strong></span>";
                clearInterval(countdownInterval);
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Format output hitungan mundur (ditambahkan padding 0 untuk estetika)
            countdownElement.innerHTML = `
                <span class="text-dark">${days}</span> Hari : 
                <span class="text-dark">${hours.toString().padStart(2, '0')}</span> Jam : 
                <span class="text-dark">${minutes.toString().padStart(2, '0')}</span> Menit : 
                <span class="text-dark">${seconds.toString().padStart(2, '0')}</span> Detik
            `;
        }

        // Jalankan hitungan mundur segera dan kemudian setiap 1 detik
        updateCountdown();
        const countdownInterval = setInterval(updateCountdown, 1000);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>