<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Pentol BALL - Manajemen Dokumen K3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
    :root {
        --primary: #007BFF;
        --bg: #f4f6f8;
        --card: #fff;
        --success: #28a745;
        --warning: #ffc107;
        --danger: #dc3545;
        --info: #17a2b8;
    }

    body {
        margin: 0;
        font-family: "Segoe UI", Roboto, Arial, sans-serif;
        background: var(--bg);
        color: #222;
        line-height: 1.6;
    }

    /* CSS HEADER - MEMASTIKAN ITEM TERPISAH (LOGO KIRI, NAVIGASI KANAN) */
    header {
        background: var(--card);
        border-bottom: 1px solid #e4e7ea;
        padding: 12px 20px;
        /* Kunci utama: Memisahkan item di sisi kiri (.brand) dan kanan (nav) */
        display: flex;
        justify-content: space-between; 
        align-items: center;
        position: sticky;
        top: 0;
        z-index: 1000;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    
    /* Tombol Kembali */
    .back-button {
        text-decoration: none;
        color: var(--primary) !important;
        padding: 6px 10px;
        border-radius: 6px;
        margin-right: 15px; 
        font-weight: 600;
        border: 1px solid #ddd;
        background-color: #f9f9f9;
        transition: all 0.2s;
        white-space: nowrap;
    }

    .back-button:hover {
        background-color: #e9ecef;
        border-color: #ccc;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    }

    header .brand {
        /* Kontainer untuk Back Button, Logo, dan Teks */
        display: flex;
        align-items: center;
        gap: 10px;
    }

    header img {
        height: 42px;
    }
    
    header nav {
        /* Memastikan navigasi tetap di kanan */
        display: flex;
        align-items: center;
    }

    header nav a {
        /* Styling untuk link navigasi */
        margin-left: 18px;
        text-decoration: none;
        color: #222;
        font-weight: 600;
        transition: color 0.3s;
    }
    
    header nav a:hover {
        color: var(--primary);
    }

    /* CSS LAINNYA DIBAWAH INI TIDAK ADA PERUBAHAN SIGNIFIKAN KECUALI PADA BAGIAN FOOTER */
    
    .hero {
        text-align: center;
        padding: 60px 20px;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: #fff;
    }

    .hero h1 {
        font-size: 2.5rem;
        margin-bottom: 10px;
    }

    .container {
        max-width: 1200px;
        margin: 30px auto;
        padding: 0 20px;
    }
    
    /* ... (CSS untuk Tabs, Card, Form, dan Table) ... */
    
    .nav-tabs {
        border-bottom: 2px solid #dee2e6;
        margin-bottom: 30px;
    }

    .nav-tabs .nav-link {
        color: #495057;
        border: none;
        border-bottom: 3px solid transparent;
        padding: 12px 24px;
        font-weight: 600;
        transition: all 0.3s;
    }

    .nav-tabs .nav-link:hover {
        border-bottom-color: var(--primary);
        color: var(--primary);
    }

    .nav-tabs .nav-link.active {
        color: var(--primary);
        background: transparent;
        border-bottom-color: var(--primary);
    }

    .card {
        background: var(--card);
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        margin-bottom: 25px;
        border: none;
        overflow: hidden;
    }

    .card-header {
        background: linear-gradient(135deg, var(--primary), #0056b3);
        color: white;
        padding: 18px 25px;
        font-weight: 700;
        font-size: 1.1rem;
        border: none;
    }

    .card-body {
        padding: 25px;
    }

    .form-label {
        font-weight: 600;
        color: #495057;
        margin-bottom: 8px;
    }

    .form-control, .form-select {
        border: 1px solid #ced4da;
        border-radius: 8px;
        padding: 10px 15px;
        transition: all 0.3s;
    }

    .form-control:focus, .form-select:focus {
        border-color: var(--primary);
        box-shadow: 0 0 0 0.2rem rgba(0,123,255,0.25);
    }

    .btn-primary {
        background: var(--primary);
        border: none;
        padding: 10px 25px;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s;
    }

    .btn-primary:hover {
        background: #0056b3;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(0,123,255,0.3);
    }
    
    /* ... (CSS untuk Badge dan Box) ... */

    .table {
        margin-bottom: 0;
    }

    .table thead {
        background: #f8f9fa;
    }

    .table thead th {
        font-weight: 700;
        color: #495057;
        border-bottom: 2px solid #dee2e6;
        padding: 15px;
    }

    .table tbody td {
        padding: 15px;
        vertical-align: middle;
    }

    .badge {
        padding: 6px 12px;
        border-radius: 20px;
        font-weight: 600;
        font-size: 0.85rem;
    }

    .badge-aktif {
        background: #d4edda;
        color: #155724;
    }

    .badge-usang {
        background: #f8d7da;
        color: #721c24;
    }
    
    .badge-arsip {
        background: #fff3cd;
        color: #856404;
    }
    
    .badge-pending {
        background: #e9ecef;
        color: #495057;
    }
    
    .badge-disetujui {
            background: #d1e7dd;
        color: #0f5132;
    }

    .info-box {
        background: #e7f3ff;
        border-left: 4px solid var(--info);
        padding: 15px 20px;
        border-radius: 8px;
        margin-bottom: 25px;
    }

    .warning-box {
        background: #fff3cd;
        border-left: 4px solid var(--warning);
        padding: 15px 20px;
        border-radius: 8px;
        margin-bottom: 25px;
    }

    .success-box {
        background: #d4edda;
        border-left: 4px solid var(--success);
        padding: 15px 20px;
        border-radius: 8px;
        margin-bottom: 25px;
    }

    .stats-card {
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        text-align: center;
        transition: all 0.3s;
    }

    .stats-number {
        font-size: 2.5rem;
        font-weight: 700;
        color: var(--primary);
        margin-bottom: 10px;
    }

    .stats-label {
        color: #6c757d;
        font-weight: 600;
    }
    
    footer {
        text-align: center;
        padding: 20px;
        border-top: 1px solid #ddd;
        margin-top: 30px;
        background: var(--primary); /* Menggunakan warna primary */
        color: #fff; /* Menggunakan warna teks putih */
    }

</style>
</head>
<body>

    <header>
    <div class="brand">
        <a href="/" class="back-button" title="Kembali ke Halaman Utama">&larr; Kembali</a>
        <img src="{{ asset('/images/Ball.png') }}" alt="Logo Pentol BALL">
        <div>
            <div style="font-weight:800">Pentol BALL</div>
            <div style="font-size:12px;color:#666">Sistem Manajemen Dokumen K3</div>
        </div>
    </div>
    
    <nav>
        <a href="/">Beranda</a>
        <a href="/penerapan-k3">Penerapan K3</a>
        <a href="/sop">SOP</a>
    </nav>
    </header>

    <section class="hero">
        <h1>📋 Manajemen Dokumen K3</h1>
        <p>Sistem Pengelolaan Dokumen, Kontrak, dan Perubahan K3 yang Terintegrasi</p>
    </section>

    <div class="container">
        
        <div class="row mb-4">
            <div class="col-md-3 mb-3">
                <div class="stats-card">
                    <div class="stats-number" id="totalDokumen">0</div>
                    <div class="stats-label">Total Dokumen Aktif</div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="stats-card">
                    <div class="stats-number" id="totalKontrak">0</div>
                    <div class="stats-label">Kontrak Aktif</div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="stats-card">
                    <div class="stats-number" id="totalPerubahan">0</div>
                    <div class="stats-label">Perubahan Pending</div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="stats-card">
                    <div class="stats-number" id="totalUsang">0</div>
                    <div class="stats-label">Dokumen Usang Tercatat</div>
                </div>
            </div>
        </div>

        <ul class="nav nav-tabs" id="mainTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="kontrak-tab" data-bs-toggle="tab" data-bs-target="#kontrak" type="button">
                    📄 Peninjauan Kontrak
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="undangan-tab" data-bs-toggle="tab" data-bs-target="#undangan" type="button">
                    ✉️ Bukti Undangan Tenaga
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="notulensi-tab" data-bs-toggle="tab" data-bs-target="#notulensi" type="button">
                    📝 Bukti Notulensi
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="dokumen-tab" data-bs-toggle="tab" data-bs-target="#dokumen" type="button">
                    📁 Pengendalian Dokumen
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="perubahan-tab" data-bs-toggle="tab" data-bs-target="#perubahan" type="button">
                    🔄 Perubahan Dokumen
                </button>
            </li>
        </ul>

        <div class="tab-content" id="mainTabsContent">
            
            <div class="tab-pane fade show active" id="kontrak" role="tabpanel">
                <div class="card">
                    <div class="card-header">
                        ➕ Tambah Kontrak K3 Baru
                    </div>
                    <div class="card-body">
                        <div class="info-box">
                            <strong>ℹ️ Informasi:</strong> Dokumentasikan kontrak yang memiliki klausul K3. Bukti undangan dan notulensi diunggah di tab terpisah.
                        </div>
                        
                        <form id="formKontrak">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nomor Kontrak *</label>
                                    <input type="text" class="form-control" id="nomorKontrak" placeholder="Contoh: KTR/K3/2025/001" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Tanggal Kontrak *</label>
                                    <input type="date" class="form-control" id="tanggalKontrak" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nama Vendor/Mitra *</label>
                                    <input type="text" class="form-control" id="namaVendor" placeholder="Contoh: PT. Jasa Konstruksi Abadi" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Jenis Kontrak *</label>
                                    <select class="form-select" id="jenisKontrak" required>
                                        <option value="">Pilih Jenis</option>
                                        <option value="Jasa Konstruksi">Jasa Konstruksi</option>
                                        <option value="Pengadaan Material">Pengadaan Material</option>
                                        <option value="Konsultan K3">Konsultan K3</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Masa Berlaku K3 (Tgl Akhir)</label>
                                <input type="date" class="form-control" id="masaBerlaku" required>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Keterangan Klausul K3</label>
                                <textarea class="form-control" id="keteranganKontrak" rows="2" placeholder="Ringkasan kewajiban K3 mitra"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-folder-plus"></i> Simpan Kontrak
                            </button>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        📋 Daftar Kontrak Aktif
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nomor Kontrak</th>
                                        <th>Tgl Kontrak</th>
                                        <th>Vendor</th>
                                        <th>Jenis</th>
                                        <th>Tgl Akhir</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="tabelKontrak">
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="undangan" role="tabpanel">
                <div class="card">
                    <div class="card-header">
                        ✉️ Dokumentasi Bukti Undangan Tenaga
                    </div>
                    <div class="card-body">
                        <div class="warning-box">
                            <strong>⚠️ Audit Deficiency:</strong> Harap unggah bukti undangan resmi kepada pihak terkait (misal: mitra, vendor, atau tenaga kerja baru) untuk memastikan kesepahaman K3.
                        </div>
                        <form id="formUndangan">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nomor Surat *</label>
                                    <input type="text" class="form-control" id="nomorUndangan" placeholder="Contoh: UND/K3/2025/001" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Tanggal Undangan *</label>
                                    <input type="date" class="form-control" id="tanggalUndangan" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Perihal Acara *</label>
                                    <input type="text" class="form-control" id="perihalUndangan" placeholder="Contoh: Rapat Koordinasi K3 Proyek A" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Pihak Dituju</label>
                                    <input type="text" class="form-control" id="pesertaUndangan" placeholder="Contoh: Manager Proyek B & Tim K3">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Upload Bukti Undangan (.PDF/.JPG) *</label>
                                <input type="file" class="form-control" id="fileUndangan" accept=".pdf,.jpg,.jpeg" required>
                                <div class="form-text">Maks. 5MB. Pastikan file undangan jelas dan resmi.</div>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-cloud-upload"></i> Dokumentasikan Undangan
                            </button>
                        </form>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header">
                        ✉️ Riwayat Dokumentasi Undangan
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Tanggal</th>
                                        <th>Perihal</th>
                                        <th>Pihak Dituju</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="tabelUndangan">
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="notulensi" role="tabpanel">
                <div class="card">
                    <div class="card-header">
                        📝 Dokumentasi Bukti Notulensi Rapat K3
                    </div>
                    <div class="card-body">
                        <div class="warning-box">
                            <strong>⚠️ Audit Deficiency:</strong> Harap unggah notulensi rapat K3 yang mencakup daftar hadir dan poin-poin keputusan terkait K3.
                        </div>
                        <form id="formNotulensi">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nomor Dokumen Notulensi *</label>
                                    <input type="text" class="form-control" id="nomorNotulensi" placeholder="Contoh: NOT/K3/2025/001" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Tanggal Rapat *</label>
                                    <input type="date" class="form-control" id="tanggalRapat" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Topik Rapat *</label>
                                    <input type="text" class="form-control" id="topikRapat" placeholder="Contoh: Evaluasi Risiko Kontrak X" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Notulis</label>
                                    <input type="text" class="form-control" id="notulis" placeholder="Nama Notulis Rapat">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Upload Notulensi (.PDF) *</label>
                                <input type="file" class="form-control" id="fileNotulensi" accept=".pdf" required>
                                <div class="form-text">Harus memuat hasil pembahasan dan tindak lanjut K3.</div>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-cloud-upload"></i> Dokumentasikan Notulensi
                            </button>
                        </form>
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-header">
                        📝 Riwayat Dokumentasi Notulensi
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Tanggal</th>
                                        <th>Topik</th>
                                        <th>Notulis</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="tabelNotulensi">
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="dokumen" role="tabpanel">
                <div class="card">
                    <div class="card-header">
                        📁 Upload Dokumen K3 & Pencatatan Status Usang
                    </div>
                    <div class="card-body">
                        <div class="warning-box">
                            <strong>⚠️ Mengatasi Audit Dokumen Usang:</strong> Gunakan status **Usang** untuk dokumen yang harus disingkirkan dan status **Arsip** untuk dokumen usang yang disimpan dengan tanda khusus.
                        </div>
                        
                        <form id="formDokumen">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Kode Dokumen *</label>
                                    <input type="text" class="form-control" id="kodeDokumen" placeholder="Contoh: DOK/K3/2025/001" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nama Dokumen *</label>
                                    <input type="text" class="form-control" id="namaDokumen" placeholder="Contoh: SOP Pembersihan Mesin V.2" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Jenis Dokumen *</label>
                                    <select class="form-select" id="jenisDokumen" required>
                                        <option value="SOP">SOP</option>
                                        <option value="Instruksi Kerja">Instruksi Kerja</option>
                                        <option value="Kebijakan">Kebijakan</option>
                                        <option value="Lainnya">Lainnya</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Tanggal Terbit *</label>
                                    <input type="date" class="form-control" id="tanggalTerbit" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Revisi Ke-</label>
                                    <input type="number" class="form-control" id="revisiDokumen" value="0" min="0">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Status Dokumen *</label>
                                    <select class="form-select" id="statusDokumen" required>
                                        <option value="Aktif">Aktif (Digunakan)</option>
                                        <option value="Usang">Usang (Disingkirkan dari Penggunaan)</option>
                                        <option value="Arsip">Arsip (Disimpan - Bertanda Khusus)</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label class="form-label">Lokasi Penyimpanan Fisik</label>
                                    <input type="text" class="form-control" id="lokasiDokumen" placeholder="Contoh: Rak B-3">
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Upload File Dokumen *</label>
                                <input type="file" class="form-control" id="fileDokumen" accept=".pdf,.docx" required>
                            </div>

                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-file-earmark-arrow-up"></i> Upload & Catat Dokumen
                            </button>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        📂 Master Dokumen K3
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="searchDokumen" placeholder="🔍 Cari dokumen...">
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Kode</th>
                                        <th>Nama Dokumen</th>
                                        <th>Jenis</th>
                                        <th>Tanggal Terbit</th>
                                        <th>Revisi</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="tabelDokumen">
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="perubahan" role="tabpanel">
                <div class="card">
                    <div class="card-header">
                        🔄 Ajukan Perubahan Dokumen K3 (Sistem Approval)
                    </div>
                    <div class="card-body">
                        <div class="success-box">
                            <strong>✅ Mengatasi Audit Perubahan:</strong> Ini adalah sistem yang memastikan setiap perubahan didokumentasikan, disetujui, dan direkam.
                        </div>
                        
                        <form id="formPerubahan">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Nomor Perubahan *</label>
                                    <input type="text" class="form-control" id="nomorPerubahan" placeholder="Contoh: CHG/K3/2025/001" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Tanggal Pengajuan *</label>
                                    <input type="date" class="form-control" id="tanggalPengajuan" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Kode Dokumen yang Diubah *</label>
                                    <input type="text" class="form-control" id="kodeDokumenDiubah" placeholder="Contoh: DOK/K3/2025/001" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Pengaju *</label>
                                    <input type="text" class="form-control" id="pengajuPerubahan" placeholder="Nama & Jabatan Pengaju" required>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Alasan Perubahan *</label>
                                <textarea class="form-control" id="alasanPerubahan" rows="3" placeholder="Jelaskan alasan perubahan dokumen, cth: Perubahan Prosedur Baru/Temuan Audit" required></textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Detail Perubahan *</label>
                                <textarea class="form-control" id="detailPerubahan" rows="4" placeholder="Jelaskan secara rinci bagian mana yang diubah atau ditambahkan" required></textarea>
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Otoritas Persetujuan *</label>
                                <select class="form-select" id="otoritasPerubahan" required>
                                    <option value="Manager K3">Manager K3</option>
                                    <option value="Direktur Operasional">Direktur Operasional</option>
                                    <option value="Tim Audit">Tim Audit</option>
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-send-fill"></i> Ajukan Perubahan
                            </button>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        📈 Tracking Perubahan Dokumen (Approval)
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>Tgl Pengajuan</th>
                                        <th>Dokumen</th>
                                        <th>Pengaju</th>
                                        <th>Status</th>
                                        <th>Otoritas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody id="tabelPerubahan">
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailModalLabel">Detail Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="modalDetailContent">
                    </div>
            </div>
        </div>
    </div>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.getElementById('year').textContent = new Date().getFullYear();

        // Data Storage (Simulasi database menggunakan array JavaScript)
        let dataKontrak = [];
        let dataUndangan = [];
        let dataNotulensi = [];
        let dataDokumen = [];
        let dataPerubahan = [];

        // Fungsi untuk mengupdate kartu statistik
        function updateStats() {
            document.getElementById('totalDokumen').textContent = dataDokumen.filter(d => d.status === 'Aktif').length;
            document.getElementById('totalKontrak').textContent = dataKontrak.filter(k => k.status === 'Aktif').length;
            document.getElementById('totalPerubahan').textContent = dataPerubahan.filter(p => p.status === 'Pending').length;
            document.getElementById('totalUsang').textContent = dataDokumen.filter(d => d.status === 'Usang' || d.status === 'Arsip').length;
        }

        // --- 1. KONTRAK (TAB 1) ---
        document.getElementById('formKontrak').addEventListener('submit', function(e) {
            e.preventDefault();
            const kontrak = {
                id: Date.now(),
                nomor: document.getElementById('nomorKontrak').value,
                tanggal: document.getElementById('tanggalKontrak').value,
                vendor: document.getElementById('namaVendor').value,
                jenis: document.getElementById('jenisKontrak').value,
                masaBerlaku: document.getElementById('masaBerlaku').value,
                keterangan: document.getElementById('keteranganKontrak').value,
                status: 'Aktif'
            };
            dataKontrak.push(kontrak);
            renderTabelKontrak();
            updateStats();
            this.reset();
            alert('✅ Kontrak berhasil didokumentasikan!');
        });

        function renderTabelKontrak() {
            const tbody = document.getElementById('tabelKontrak');
            if (dataKontrak.length === 0) {
                tbody.innerHTML = '<tr><td colspan="7" class="text-center text-muted">Belum ada data kontrak</td></tr>';
                return;
            }
            tbody.innerHTML = dataKontrak.map(k => `
                <tr>
                    <td><strong>${k.nomor}</strong></td>
                    <td>${new Date(k.tanggal).toLocaleDateString('id-ID')}</td>
                    <td>${k.vendor}</td>
                    <td>${k.jenis}</td>
                    <td>${new Date(k.masaBerlaku).toLocaleDateString('id-ID')}</td>
                    <td><span class="badge badge-aktif">${k.status}</span></td>
                    <td>
                        <button class="btn btn-sm btn-info" onclick="lihatDetail('kontrak', ${k.id})"><i class="bi bi-eye"></i></button>
                        <button class="btn btn-sm btn-danger" onclick="hapusData('kontrak', ${k.id})"><i class="bi bi-trash"></i></button>
                    </td>
                </tr>
            `).join('');
        }

        // --- 2. UNDANGAN (TAB 2) - Mengatasi Audit Missing Bukti Undangan ---
        document.getElementById('formUndangan').addEventListener('submit', function(e) {
            e.preventDefault();
            const fileInput = document.getElementById('fileUndangan');
            
            const undangan = {
                id: Date.now(),
                nomor: document.getElementById('nomorUndangan').value,
                tanggal: document.getElementById('tanggalUndangan').value,
                perihal: document.getElementById('perihalUndangan').value,
                peserta: document.getElementById('pesertaUndangan').value,
                // Simulasi file upload
                file: fileInput.files.length > 0 ? fileInput.files[0].name : 'File Tidak Tersedia',
            };
            dataUndangan.push(undangan);
            renderTabelUndangan();
            updateStats();
            this.reset();
            alert('✅ Bukti Undangan berhasil didokumentasikan!');
        });

        function renderTabelUndangan() {
            const tbody = document.getElementById('tabelUndangan');
            if (dataUndangan.length === 0) {
                tbody.innerHTML = '<tr><td colspan="5" class="text-center text-muted">Belum ada bukti undangan</td></tr>';
                return;
            }
            tbody.innerHTML = dataUndangan.map(u => `
                <tr>
                    <td><strong>${u.nomor}</strong></td>
                    <td>${new Date(u.tanggal).toLocaleDateString('id-ID')}</td>
                    <td>${u.perihal}</td>
                    <td>${u.peserta || '-'}</td>
                    <td>
                        <button class="btn btn-sm btn-info" onclick="lihatDetail('undangan', ${u.id})"><i class="bi bi-eye"></i> Detail</button>
                    </td>
                </tr>
            `).join('');
        }

        // --- 3. NOTULENSI (TAB 3) - Mengatasi Audit Missing Bukti Notulensi ---
        document.getElementById('formNotulensi').addEventListener('submit', function(e) {
            e.preventDefault();
            const fileInput = document.getElementById('fileNotulensi');

            const notulensi = {
                id: Date.now(),
                nomor: document.getElementById('nomorNotulensi').value,
                tanggal: document.getElementById('tanggalRapat').value,
                topik: document.getElementById('topikRapat').value,
                notulis: document.getElementById('notulis').value,
                // Simulasi file upload
                file: fileInput.files.length > 0 ? fileInput.files[0].name : 'File Tidak Tersedia',
            };
            dataNotulensi.push(notulensi);
            renderTabelNotulensi();
            updateStats();
            this.reset();
            alert('✅ Bukti Notulensi berhasil didokumentasikan!');
        });

        function renderTabelNotulensi() {
            const tbody = document.getElementById('tabelNotulensi');
            if (dataNotulensi.length === 0) {
                tbody.innerHTML = '<tr><td colspan="5" class="text-center text-muted">Belum ada bukti notulensi</td></tr>';
                return;
            }
            tbody.innerHTML = dataNotulensi.map(n => `
                <tr>
                    <td><strong>${n.nomor}</strong></td>
                    <td>${new Date(n.tanggal).toLocaleDateString('id-ID')}</td>
                    <td>${n.topik}</td>
                    <td>${n.notulis}</td>
                    <td>
                        <button class="btn btn-sm btn-info" onclick="lihatDetail('notulensi', ${n.id})"><i class="bi bi-eye"></i> Detail</button>
                    </td>
                </tr>
            `).join('');
        }

        // --- 4. DOKUMEN (TAB 4) - Mengatasi Audit Dokumen Usang ---
        document.getElementById('formDokumen').addEventListener('submit', function(e) {
            e.preventDefault();
            const fileInput = document.getElementById('fileDokumen');

            const dokumen = {
                id: Date.now(),
                kode: document.getElementById('kodeDokumen').value,
                nama: document.getElementById('namaDokumen').value,
                jenis: document.getElementById('jenisDokumen').value,
                tanggalTerbit: document.getElementById('tanggalTerbit').value,
                revisi: document.getElementById('revisiDokumen').value,
                status: document.getElementById('statusDokumen').value,
                lokasi: document.getElementById('lokasiDokumen').value,
                // Simulasi file upload
                file: fileInput.files.length > 0 ? fileInput.files[0].name : 'File Tidak Tersedia',
            };
            dataDokumen.push(dokumen);
            renderTabelDokumen();
            updateStats();
            this.reset();
            alert(`✅ Dokumen berhasil disimpan dengan status: ${dokumen.status}!`);
        });

        function renderTabelDokumen() {
            const tbody = document.getElementById('tabelDokumen');
            if (dataDokumen.length === 0) {
                tbody.innerHTML = '<tr><td colspan="7" class="text-center text-muted">Belum ada data dokumen</td></tr>';
                return;
            }
            tbody.innerHTML = dataDokumen.map(d => {
                let badgeClass = 'badge-aktif';
                if (d.status === 'Usang') badgeClass = 'badge-usang';
                if (d.status === 'Arsip') badgeClass = 'badge-arsip';
                return `
                    <tr>
                        <td><strong>${d.kode}</strong></td>
                        <td>${d.nama}</td>
                        <td>${d.jenis}</td>
                        <td>${new Date(d.tanggalTerbit).toLocaleDateString('id-ID')}</td>
                        <td>Rev. ${d.revisi}</td>
                        <td><span class="badge ${badgeClass}">${d.status}</span></td>
                        <td>
                            <button class="btn btn-sm btn-info" onclick="lihatDetail('dokumen', ${d.id})"><i class="bi bi-eye"></i></button>
                        </td>
                    </tr>
                `}).join('');
        }

        // --- 5. PERUBAHAN (TAB 5) - Mengatasi Audit Sistem Perubahan ---
        document.getElementById('formPerubahan').addEventListener('submit', function(e) {
            e.preventDefault();
            const perubahan = {
                id: Date.now(),
                nomor: document.getElementById('nomorPerubahan').value,
                tanggal: document.getElementById('tanggalPengajuan').value,
                kodeDokumen: document.getElementById('kodeDokumenDiubah').value,
                pengaju: document.getElementById('pengajuPerubahan').value,
                alasan: document.getElementById('alasanPerubahan').value,
                detail: document.getElementById('detailPerubahan').value,
                otoritas: document.getElementById('otoritasPerubahan').value,
                status: 'Pending' // Default status
            };
            dataPerubahan.push(perubahan);
            renderTabelPerubahan();
            updateStats();
            this.reset();
            alert('✅ Pengajuan Perubahan berhasil dikirim untuk di-review oleh ' + perubahan.otoritas + '.');
        });

        function renderTabelPerubahan() {
            const tbody = document.getElementById('tabelPerubahan');
            if (dataPerubahan.length === 0) {
                tbody.innerHTML = '<tr><td colspan="7" class="text-center text-muted">Belum ada pengajuan perubahan</td></tr>';
                return;
            }
            tbody.innerHTML = dataPerubahan.map(p => {
                let badgeClass = 'badge-pending';
                if (p.status === 'Disetujui') badgeClass = 'badge-disetujui';
                if (p.status === 'Ditolak') badgeClass = 'badge-usang';
                
                return `
                    <tr>
                        <td><strong>${p.nomor}</strong></td>
                        <td>${new Date(p.tanggal).toLocaleDateString('id-ID')}</td>
                        <td>${p.kodeDokumen}</td>
                        <td>${p.pengaju}</td>
                        <td><span class="badge ${badgeClass}">${p.status}</span></td>
                        <td>${p.otoritas}</td>
                        <td>
                            <button class="btn btn-sm btn-info" onclick="lihatDetail('perubahan', ${p.id})"><i class="bi bi-eye"></i></button>
                            ${p.status === 'Pending' ? `
                                <button class="btn btn-sm btn-success" onclick="ubahStatusPerubahan(${p.id}, 'Disetujui')"><i class="bi bi-check"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="ubahStatusPerubahan(${p.id}, 'Ditolak')"><i class="bi bi-x"></i></button>
                            ` : ''}
                        </td>
                    </tr>
                `}).join('');
        }
        
        function ubahStatusPerubahan(id, status) {
            const index = dataPerubahan.findIndex(p => p.id === id);
            if (index !== -1) {
                dataPerubahan[index].status = status;
                renderTabelPerubahan();
                updateStats();
                alert(`Status Perubahan ${dataPerubahan[index].nomor} diubah menjadi ${status}!`);
            }
        }

        // --- GLOBAL FUNCTIONS (Detail & Hapus) ---

        function lihatDetail(tipe, id) {
            let data, content;
            const modalTitle = document.getElementById('detailModalLabel');
            const modalBody = document.getElementById('modalDetailContent');
            const modal = new bootstrap.Modal(document.getElementById('detailModal'));

            if (tipe === 'kontrak') {
                data = dataKontrak.find(k => k.id === id);
                content = `
                    <h5>Detail Kontrak</h5>
                    <table class="table table-bordered table-sm">
                        <tr><th>Nomor Kontrak:</th><td>${data.nomor}</td></tr>
                        <tr><th>Tanggal Kontrak:</th><td>${new Date(data.tanggal).toLocaleDateString('id-ID')}</td></tr>
                        <tr><th>Vendor/Mitra:</th><td>${data.vendor}</td></tr>
                        <tr><th>Jenis Kontrak:</th><td>${data.jenis}</td></tr>
                        <tr><th>Tgl Akhir Berlaku:</th><td>${new Date(data.masaBerlaku).toLocaleDateString('id-ID')}</td></tr>
                        <tr><th>Keterangan K3:</th><td>${data.keterangan || '-'}</td></tr>
                    </table>
                `;
                modalTitle.textContent = 'Detail Kontrak';
            } else if (tipe === 'undangan') {
                data = dataUndangan.find(u => u.id === id);
                content = `
                    <h5>Detail Bukti Undangan</h5>
                    <table class="table table-bordered table-sm">
                        <tr><th>Nomor Surat:</th><td>${data.nomor}</td></tr>
                        <tr><th>Tanggal Undangan:</th><td>${new Date(data.tanggal).toLocaleDateString('id-ID')}</td></tr>
                        <tr><th>Perihal:</th><td>${data.perihal}</td></tr>
                        <tr><th>Pihak Dituju:</th><td>${data.peserta || '-'}</td></tr>
                        <tr><th>Bukti File:</th><td><span class="badge bg-secondary">${data.file}</span></td></tr>
                    </table>
                `;
                modalTitle.textContent = 'Detail Undangan Tenaga';
            } else if (tipe === 'notulensi') {
                data = dataNotulensi.find(n => n.id === id);
                content = `
                    <h5>Detail Bukti Notulensi</h5>
                    <table class="table table-bordered table-sm">
                        <tr><th>Nomor Dokumen:</th><td>${data.nomor}</td></tr>
                        <tr><th>Tanggal Rapat:</th><td>${new Date(data.tanggal).toLocaleDateString('id-ID')}</td></tr>
                        <tr><th>Topik:</th><td>${data.topik}</td></tr>
                        <tr><th>Notulis:</th><td>${data.notulis}</td></tr>
                        <tr><th>Bukti File:</th><td><span class="badge bg-secondary">${data.file}</span></td></tr>
                    </table>
                `;
                modalTitle.textContent = 'Detail Notulensi';
            } else if (tipe === 'dokumen') {
                data = dataDokumen.find(d => d.id === id);
                content = `
                    <h5>Detail Dokumen K3</h5>
                    <table class="table table-bordered table-sm">
                        <tr><th>Kode Dokumen:</th><td>${data.kode}</td></tr>
                        <tr><th>Nama Dokumen:</th><td>${data.nama}</td></tr>
                        <tr><th>Jenis:</th><td>${data.jenis}</td></tr>
                        <tr><th>Tanggal Terbit:</th><td>${new Date(data.tanggalTerbit).toLocaleDateString('id-ID')}</td></tr>
                        <tr><th>Revisi:</th><td>Rev. ${data.revisi}</td></tr>
                        <tr><th>Status:</th><td><span class="badge bg-info">${data.status}</span></td></tr>
                        <tr><th>Lokasi Fisik:</th><td>${data.lokasi || '-'}</td></tr>
                        <tr><th>Nama File:</th><td><span class="badge bg-secondary">${data.file}</span></td></tr>
                    </table>
                `;
                modalTitle.textContent = 'Detail Dokumen';
            } else if (tipe === 'perubahan') {
                data = dataPerubahan.find(p => p.id === id);
                content = `
                    <h5>Detail Perubahan Dokumen</h5>
                    <table class="table table-bordered table-sm">
                        <tr><th>Nomor Perubahan:</th><td>${data.nomor}</td></tr>
                        <tr><th>Tanggal Pengajuan:</th><td>${new Date(data.tanggal).toLocaleDateString('id-ID')}</td></tr>
                        <tr><th>Kode Dokumen Diubah:</th><td>${data.kodeDokumen}</td></tr>
                        <tr><th>Pengaju:</th><td>${data.pengaju}</td></tr>
                        <tr><th>Otoritas Persetujuan:</th><td>${data.otoritas}</td></tr>
                        <tr><th>Status:</th><td><span class="badge bg-warning">${data.status}</span></td></tr>
                    </table>
                    <h6>Alasan Perubahan:</h6>
                    <p class="alert alert-light">${data.alasan}</p>
                    <h6>Detail Perubahan:</h6>
                    <p class="alert alert-light">${data.detail}</p>
                `;
                modalTitle.textContent = 'Detail Pengajuan Perubahan';
            }
            
            modalBody.innerHTML = content;
            modal.show();
        }

        function hapusData(tipe, id) {
            if (!confirm(`Apakah Anda yakin ingin menghapus data ${tipe} ini? Tindakan ini tidak dapat dibatalkan.`)) {
                return;
            }

            let dataArray;
            let renderFunc;

            if (tipe === 'kontrak') {
                dataArray = dataKontrak;
                renderFunc = renderTabelKontrak;
            } else if (tipe === 'undangan') {
                dataArray = dataUndangan;
                renderFunc = renderTabelUndangan;
            } else if (tipe === 'notulensi') {
                dataArray = dataNotulensi;
                renderFunc = renderTabelNotulensi;
            } else if (tipe === 'dokumen') {
                dataArray = dataDokumen;
                renderFunc = renderTabelDokumen;
            } else if (tipe === 'perubahan') {
                dataArray = dataPerubahan;
                renderFunc = renderTabelPerubahan;
            }

            const index = dataArray.findIndex(item => item.id === id);
            if (index !== -1) {
                dataArray.splice(index, 1);
                renderFunc();
                updateStats();
                alert(`Data ${tipe} berhasil dihapus.`);
            }
        }

        // Panggil saat halaman dimuat
        document.addEventListener('DOMContentLoaded', () => {
            renderTabelKontrak();
            renderTabelUndangan();
            renderTabelNotulensi();
            renderTabelDokumen();
            renderTabelPerubahan();
            updateStats();
        });
    </script>
</body>
</html>