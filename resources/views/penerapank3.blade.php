<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Pentol BALL - Sistem K3 (Layout, Simulasi Kebakaran, Safety Talk)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #007BFF;
            --bg: #f4f6f8;
            --card: #fff;
            --muted: #666;
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
            color: #007BFF;
            font-weight: 600;
            border-left: 5px solid #007BFF;
            padding-left: 10px;
            margin-bottom: 12px;
        }

        .layout-img {
            width: 90%;
            border: 2px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .layout-img:hover {
            transform: scale(1.05);
        }

        /* Layout Info Box */
        .layout-info {
            background-color: #eef7f2;
            border-left: 6px solid #2b9348;
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
            color: #1e7a35;
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

        /* Step-by-step Timeline Style */
        .timeline-step {
            display: flex;
            align-items: flex-start;
            margin-bottom: 25px;
        }

        .timeline-step .icon-container {
            width: 40px;
            height: 40px;
            min-width: 40px;
            background: #007bff;
            color: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-weight: 700;
            font-size: 18px;
            margin-right: 15px;
            box-shadow: 0 4px 8px rgba(0, 123, 255, 0.3);
            position: relative;
            z-index: 10;
        }

        .timeline-step:not(:last-child) .icon-container::after {
            content: '';
            position: absolute;
            top: 40px;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 40px; /* Jarak antar step */
            background: #ccc;
            z-index: 1;
        }

        .timeline-step-content {
            flex-grow: 1;
            padding: 10px 15px;
            border-radius: 8px;
            background: #f0f8ff;
            border-left: 5px solid #007bff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.05);
        }

        .timeline-step-content strong {
            display: block;
            color: #007bff;
            margin-bottom: 5px;
            font-size: 1.1em;
        }
        .timeline-step-content ul {
            list-style: none;
            padding: 0;
            margin: 0;
            font-size: 0.95em;
        }
        .timeline-step-content li {
            margin-bottom: 5px;
            padding-left: 15px;
            position: relative;
        }
        .timeline-step-content li::before {
            content: "•";
            color: #007bff;
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1em;
        }


        footer {
            text-align: center;
            color: var(--muted);
            padding: 14px 0;
            border-top: 1px solid #e4e7ea;
            margin-top: 30px;
        }

        /* HAPUS/NONAKTIFKAN GRID 2-KOLOM KARENA KONTEN AKAN DIBUAT 1 KOLOM */
        /*
        .grid {
            display: grid;
            grid-template-columns: 1fr 420px;
            gap: 20px;
        }

        @media(max-width:980px) {
            .grid {
                grid-template-columns: 1fr;
            }
        }
        */

        /* Form & button styles */
        .form-row {
            display: flex;
            gap: 8px;
            margin-bottom: 8px;
        }

        input,
        textarea {
            flex: 1;
            padding: 8px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-family: inherit;
        }

        textarea {
            min-height: 80px;
            resize: vertical;
        }

        button {
            padding: 8px 12px;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
        }

        button.primary {
            background: #007BFF;
            color: #fff;
        }

        button.ghost {
            background: transparent;
            border: 1px solid #ccc;
        }

        button.warn {
            background: #ff7043;
            color: #fff;
        }

        /* Menghapus max-height agar card Safety Talk hanya sepanjang kontennya */
        .reports-list {
            overflow: visible; 
            max-height: none; 
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .report-item {
            border-radius: 6px;
            padding: 10px;
            border: 1px solid #eef2f5;
            background: #fcfeff;
        }

        .report-item .meta {
            display: flex;
            justify-content: space-between;
            gap: 8px;
            font-size: 13px;
            color: var(--muted);
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
                <div style="font-size:12px;color:#666">Sistem K3 — Layout | Simulasi Kebakaran | Safety Talk</div>
            </div>
        </div>
        <nav>
            <a href="#layout">Layout</a>
            <a href="#simulasi">Simulasi Kebakaran</a>
            <a href="#safetalk">Safety Talk</a>
        </nav>
    </header>

    <section class="hero">
        <h1>Penerapan (K3)</h1>
        <p style="max-width:900px;margin:8px auto 0">Menampilkan layout area kerja, prosedur simulasi kebakaran, serta laporan Safety Talk mingguan di PT Pentol BALL.</p>
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

        <div class="card" id="simulasi">
            <h4 class="section-title">Simulasi Kebakaran</h4>

            <div class="alert alert-danger shadow-sm p-4 rounded-4">
                <h5 class="fw-bold text-center mb-3"> Pentingnya Pencegahan Kebakaran di Lingkungan Kerja</h5>
                <p>Kebakaran di lingkungan kerja merupakan ancaman serius yang dapat mengakibatkan kerugian materi, bahkan korban jiwa.
                    Untuk mencegahnya, memahami identifikasi potensi bahaya kebakaran dan pengendaliannya menjadi sangat penting.
                    Melalui pemahaman ini, kita dapat menciptakan lingkungan kerja yang aman dan nyaman bagi semua.</p>

                <p>Keselamatan dan Kesehatan Kerja (K3) merupakan aspek penting dalam setiap lingkungan kerja, terutama dalam konteks pencegahan kebakaran.
                    K3 bertujuan untuk menciptakan lingkungan kerja yang aman dan sehat bagi seluruh pekerja, dengan meminimalisir risiko kecelakaan,
                    termasuk kebakaran.</p>

                <p>Mengenali potensi bahaya kebakaran dan menerapkan langkah pengendaliannya merupakan hal penting dalam K3.
                    Penerapan K3 yang efektif dapat membantu mencegah kebakaran, melindungi pekerja dari bahaya kebakaran,
                    dan meminimalisir kerugian finansial serta dampak lingkungan.</p>

                <p><strong>Kebakaran dapat dipicu oleh berbagai faktor</strong>, yang dapat dikategorikan menjadi tiga kelompok utama, yaitu:</p>
                <ul>
                    <li>🔥 <strong>Bahan yang mudah terbakar</strong> — seperti minyak, gas, atau bahan kimia.</li>
                    <li>🔥 <strong>Sumber panas yang kurang terjaga dan terawat</strong> — misalnya instalasi listrik rusak atau mesin terlalu panas.</li>
                    <li>🔥 <strong>Faktor kelalaian dan kekurangpahaman</strong> — seperti tidak mematikan alat setelah digunakan atau lalai terhadap prosedur keselamatan.</li>
                </ul>
            </div>

            <div class="text-center">
                <img src="{{ asset('images/simulasi-kebakaran.jpg') }}"
                    alt="Layout Area Kerja K3"
                    class="layout-img mb-3">
            </div>
            <p class="mt-4">Kegiatan simulasi kebakaran dilakukan untuk meningkatkan kesiapsiagaan karyawan dalam menghadapi keadaan darurat.
                Berikut langkah-langkahnya:</p>

            <div class="steps-container mt-4">

                <div class="timeline-step">
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

                <div class="timeline-step">
                    <div class="icon-container">2</div>
                    <div class="timeline-step-content">
                        <strong>Upaya Pemadaman Dini (Jika Skala Kecil)</strong>
                        <ul>
                            <li>Gunakan APAR (Alat Pemadam Api Ringan): Jika api masih kecil dan aman, gunakan APAR dengan teknik <em>Tarik-Arahkan-Tekan-Sapukan (T-A-T-S)</em>.</li>
                            <li>Prioritaskan Keselamatan: Jangan memadamkan api jika sudah membesar atau membahayakan. Segera lakukan evakuasi.</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-step">
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

                <div class="timeline-step">
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

                <div class="timeline-step">
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
            <h2>Safety Talk Mingguan (Report)</h2>
            <p class="text-muted">Tambahkan laporan Safety Talk, simpan ke localStorage, edit/hapus, dan ekspor CSV.</p>

            <div class="form-row">
                <input type="text" id="talkTitle" placeholder="Judul Safety Talk (mis. Kebakaran & Evakuasi)">
                <input type="date" id="talkDate">
            </div>
            <div class="form-row">
                <input type="text" id="talkFacilitator" placeholder="Fasilitator / PIC">
                <input type="text" id="talkParticipants" placeholder="Peserta (mis. Produksi, QC)">
            </div>
            <textarea id="talkSummary" placeholder="Ringkasan pembahasan dan tindakan yang disepakati"></textarea>

            <div style="display:flex; gap:8px; margin-top:8px;">
                <button id="saveTalk" class="primary">Simpan Laporan</button>
                <button id="clearAll" class="ghost">Hapus Semua</button>
                <button id="exportCsv" class="ghost">Ekspor CSV</button>
            </div>

            <h3 style="margin-top:16px;">Daftar Laporan</h3>
            <div class="reports-list" id="reportsList"></div>
        </div>
        
    </div>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();

        function uuid() {
            return 'r-' + Date.now() + '-' + Math.random().toString(36).slice(2, 9);
        }
        const reportsKey = 'k3_safetalk_reports';

        function getReports() {
            try {
                return JSON.parse(localStorage.getItem(reportsKey) || '[]');
            } catch (e) {
                return []
            }
        }

        function saveReports(list) {
            localStorage.setItem(reportsKey, JSON.stringify(list));
            renderReports();
        }

        function escapeHtml(s = '') {
            return String(s).replace(/[&<>"']/g, (m) => ({
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                '"': '&quot;',
                "'": '&#39;'
            }[m]));
        }

        function renderReports() {
            const c = document.getElementById('reportsList');
            c.innerHTML = '';
            const list = getReports().slice().reverse();
            if (!list.length) {
                c.innerHTML = '<div class="text-muted">Belum ada laporan. Tambahkan Safety Talk baru.</div>';
                return;
            }
            list.forEach(item => {
                const div = document.createElement('div');
                div.className = 'report-item';
                div.innerHTML = `
                <div style="display:flex; justify-content:space-between; align-items:center">
                    <div>
                        <div style="font-weight:700">${escapeHtml(item.title)}</div>
                        <div class="text-muted">${item.date} — Fasilitator: ${escapeHtml(item.facilitator)}</div>
                    </div>
                    <div style="display:flex; gap:8px;">
                        <button onclick="editReport('${item.id}')">Edit</button>
                        <button onclick="deleteReport('${item.id}')" class="ghost">Hapus</button>
                    </div>
                </div>
                <div style="margin-top:8px">${escapeHtml(item.summary)}</div>
                <div class="meta text-muted">Peserta: ${escapeHtml(item.participants)}</div>
            `;
                c.appendChild(div);
            });
        }

        function editReport(id) {
            const list = getReports();
            const item = list.find(r => r.id === id);
            if (!item) return;
            document.getElementById('talkTitle').value = item.title;
            document.getElementById('talkDate').value = item.date;
            document.getElementById('talkFacilitator').value = item.facilitator;
            document.getElementById('talkParticipants').value = item.participants;
            document.getElementById('talkSummary').value = item.summary;
            const newList = list.filter(r => r.id !== id);
            saveReports(newList);
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
        window.editReport = editReport;

        function deleteReport(id) {
            if (!confirm('Hapus laporan ini?')) return;
            const newList = getReports().filter(r => r.id !== id);
            saveReports(newList);
        }
        window.deleteReport = deleteReport;

        document.getElementById('saveTalk').addEventListener('click', () => {
            const title = document.getElementById('talkTitle').value.trim();
            const date = document.getElementById('talkDate').value || new Date().toISOString().slice(0, 10);
            const facilitator = document.getElementById('talkFacilitator').value.trim();
            const participants = document.getElementById('talkParticipants').value.trim();
            const summary = document.getElementById('talkSummary').value.trim();
            if (!title || !summary) {
                alert('Isi minimal Judul dan Ringkasan.');
                return;
            }
            const list = getReports();
            list.push({
                id: uuid(),
                title,
                date,
                facilitator,
                participants,
                summary
            });
            saveReports(list);
            document.getElementById('talkTitle').value = '';
            document.getElementById('talkDate').value = '';
            document.getElementById('talkFacilitator').value = '';
            document.getElementById('talkParticipants').value = '';
            document.getElementById('talkSummary').value = '';
        });

        document.getElementById('clearAll').addEventListener('click', () => {
            if (!confirm('Hapus semua laporan?')) return;
            saveReports([]);
        });

        document.getElementById('exportCsv').addEventListener('click', () => {
            const list = getReports();
            if (!list.length) {
                alert('Tidak ada data untuk diekspor.');
                return;
            }
            const hdr = ['id', 'date', 'title', 'facilitator', 'participants', 'summary'];
            const rows = [hdr.join(',')].concat(list.map(r => hdr.map(k => `"${String(r[k]||'').replace(/"/g,'""')}"`).join(',')));
            const csv = rows.join('\n');
            const blob = new Blob([csv], {
                type: 'text/csv'
            });
            const url = URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.href = url;
            a.download = 'safetalk_reports.csv';
            a.click();
            URL.revokeObjectURL(url);
        });
        renderReports();
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