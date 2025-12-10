<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Produk - Pentol BALL</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background: #f4f6f8;
      color: #333;
      line-height: 1.6;
    }

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
    }

    .container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 0 20px;
    }

    .breadcrumb {
      margin-bottom: 20px;
      font-size: 14px;
      color: #666;
    }

    .breadcrumb a {
      color: #007BFF;
      text-decoration: none;
    }

    .page-title {
      text-align: center;
      color: #007BFF;
      font-size: 2.5rem;
      margin-bottom: 15px;
      border-bottom: 3px solid #007BFF;
      padding-bottom: 10px;
      display: inline-block;
      width: 100%;
    }

    /* Product Selection Buttons */
    .product-buttons {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 20px;
      margin: 40px 0;
    }

    .product-btn {
      background: #fff;
      border: 3px solid #007BFF;
      border-radius: 12px;
      padding: 20px;
      text-align: center;
      cursor: pointer;
      transition: all 0.3s;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .product-btn:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 16px rgba(0,0,0,0.15);
      background: #007BFF;
      color: white;
    }

    .product-btn.active {
      background: #007BFF;
      color: white;
    }

    .product-btn h3 {
      margin: 10px 0 5px 0;
      font-size: 1.2rem;
    }

    .product-btn p {
      margin: 0;
      font-size: 0.85rem;
      opacity: 0.8;
    }

    /* Modal Popup */
    .modal {
      display: none;
      position: fixed;
      z-index: 2000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0,0,0,0.6);
      animation: fadeIn 0.3s;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    .modal-content {
      background-color: #fff;
      margin: 3% auto;
      padding: 0;
      border-radius: 15px;
      width: 90%;
      max-width: 900px;
      max-height: 85vh;
      overflow-y: auto;
      box-shadow: 0 8px 32px rgba(0,0,0,0.3);
      animation: slideDown 0.4s;
    }

    @keyframes slideDown {
      from {
        transform: translateY(-50px);
        opacity: 0;
      }
      to {
        transform: translateY(0);
        opacity: 1;
      }
    }

    .modal-header {
      background: linear-gradient(135deg, #007BFF 0%, #0056b3 100%);
      color: white;
      padding: 25px 30px;
      border-radius: 15px 15px 0 0;
      position: relative;
    }

    .modal-header h2 {
      margin: 0;
      font-size: 2rem;
    }

    .close {
      position: absolute;
      right: 20px;
      top: 20px;
      color: white;
      font-size: 35px;
      font-weight: bold;
      cursor: pointer;
      transition: transform 0.2s;
    }

    .close:hover {
      transform: rotate(90deg);
    }

    .modal-body {
      padding: 30px;
    }

    .product-detail-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 30px;
      margin-bottom: 30px;
    }

    @media (max-width: 768px) {
      .product-detail-grid {
        grid-template-columns: 1fr;
      }
    }

    .product-image {
      width: 100%;
      height: 300px;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .product-info-box {
      background: #f8f9fa;
      padding: 20px;
      border-radius: 10px;
      border-left: 4px solid #007BFF;
    }

    .product-info-box h3 {
      color: #007BFF;
      margin-top: 0;
    }

    .product-info-box p {
      margin: 8px 0;
      line-height: 1.8;
    }

    .composition-table {
      width: 100%;
      border-collapse: collapse;
      margin: 20px 0;
    }

    .composition-table th,
    .composition-table td {
      padding: 12px;
      text-align: left;
      border: 1px solid #ddd;
    }

    .composition-table th {
      background: #007BFF;
      color: white;
      font-weight: 600;
    }

    .composition-table tr:nth-child(even) {
      background: #f9f9f9;
    }

    .composition-table tr:hover {
      background: #f0f8ff;
    }

    .certification-badge {
      display: inline-block;
      background: #28a745;
      color: white;
      padding: 6px 14px;
      border-radius: 20px;
      font-weight: 600;
      margin: 5px;
      font-size: 0.85rem;
    }

    .nutritional-info {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
      gap: 15px;
      margin: 20px 0;
    }

    .nutri-card {
      background: #f8f9fa;
      padding: 15px;
      border-radius: 8px;
      text-align: center;
      border: 2px solid #e9ecef;
    }

    .nutri-card strong {
      display: block;
      color: #007BFF;
      font-size: 1.5rem;
      margin-bottom: 5px;
    }

    .nutri-card span {
      color: #666;
      font-size: 0.9rem;
    }

    .section-title {
      color: #007BFF;
      font-size: 1.5rem;
      margin: 30px 0 15px 0;
      border-bottom: 2px solid #007BFF;
      padding-bottom: 8px;
    }

    /* Info Section Outside Modal */
    .info-section {
      background: #fff;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.08);
      margin-bottom: 30px;
    }

    .info-section h2 {
      color: #007BFF;
      font-size: 2rem;
      margin-bottom: 20px;
      border-bottom: 3px solid #007BFF;
      padding-bottom: 10px;
    }

    .traceability-flow {
      background: #f9fafc;
      padding: 20px;
      border-radius: 8px;
      border-left: 4px solid #007BFF;
      margin: 20px 0;
    }

    .flow-step {
      background: #fff;
      padding: 15px 20px;
      margin: 15px 0;
      border-radius: 8px;
      border-left: 3px solid #28a745;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
      position: relative;
      padding-left: 50px;
    }

    .flow-step::before {
      content: attr(data-step);
      position: absolute;
      left: 15px;
      top: 50%;
      transform: translateY(-50%);
      background: #28a745;
      color: white;
      width: 25px;
      height: 25px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      font-size: 12px;
    }

    .flow-step h4 {
      margin: 0 0 8px 0;
      color: #333;
      font-size: 1.1rem;
    }

    .flow-step p {
      margin: 0;
      color: #666;
      font-size: 0.95rem;
    }

    .back-button {
      display: inline-block;
      background: #007BFF;
      color: white;
      padding: 12px 24px;
      border-radius: 6px;
      text-decoration: none;
      font-weight: 600;
      transition: background 0.3s;
      margin-top: 20px;
    }

    .back-button:hover {
      background: #0056b3;
    }

    footer {
      text-align: center;
      padding: 30px 20px;
      border-top: 1px solid #ddd;
      background: #007BFF;
      color: #ddd;
      margin-top: 50px;
    }
  </style>
</head>
<body>

  <header>
    <div style="display:flex; align-items:center;">
      <strong>Pentol BALL - Detail Produk</strong>
    </div>
    <nav>
      <a href="/">Beranda</a>
      <a href="#produk-section">Pilih Produk</a>
      <a href="#penelusuran-section">Penelusuran</a>
    </nav>
  </header>

  <div class="container">
    <div class="breadcrumb">
      <a href="/">Beranda</a> / <a href="/#produk">Produk</a> / <span>Detail Produk</span>
    </div>

    <h1 class="page-title">🍡 Jenis Produk Pentol BALL</h1>
    <p style="text-align: center; margin-bottom: 40px; color: #666;">
      Klik salah satu produk di bawah untuk melihat detail komposisi, informasi gizi, dan sertifikasi
    </p>

    <div class="product-buttons" id="produk-section">
      <div class="product-btn" onclick="showProductDetail('original')">
        <div style="font-size: 3rem;">🍡</div>
        <h3>Pentol Original</h3>
        <p>Rasa tradisional klasik</p>
      </div>

      <div class="product-btn" onclick="showProductDetail('keju')">
        <div style="font-size: 3rem;">🧀</div>
        <h3>Pentol Keju</h3>
        <p>Isi keju leleh</p>
      </div>

      <div class="product-btn" onclick="showProductDetail('pedas')">
        <div style="font-size: 3rem;">🌶️</div>
        <h3>Pentol Pedas</h3>
        <p>Extra pedas menggigit</p>
      </div>

      <div class="product-btn" onclick="showProductDetail('telur')">
        <div style="font-size: 3rem;">🥚</div>
        <h3>Pentol Telur</h3>
        <p>Isi telur puyuh</p>
      </div>

      <div class="product-btn" onclick="showProductDetail('daging')">
        <div style="font-size: 3rem;">🥩</div>
        <h3>Pentol Daging</h3>
        <p>Daging cacah premium</p>
      </div>

      <div class="product-btn" onclick="showProductDetail('beranak')">
        <div style="font-size: 3rem;">🍢</div>
        <h3>Pentol Beranak</h3>
        <p>Pentol dalam pentol</p>
      </div>
    </div>

    <!-- Modal Popup -->
    <div id="productModal" class="modal">
      <div class="modal-content">
        <div class="modal-header">
          <span class="close" onclick="closeModal()">&times;</span>
          <h2 id="modalTitle">Detail Produk</h2>
        </div>
        <div class="modal-body" id="modalBody">
          <!-- Content will be loaded dynamically -->
        </div>
      </div>
    </div>

    <!-- Tujuan Prosedur Section -->
    <div class="info-section" id="penelusuran-section">
      <h2>🔍 Prosedur Penelusuran Produk (Product Traceability)</h2>
      
      <h3>Tujuan Prosedur</h3>
      <p>Menjamin kemampuan perusahaan dalam melacak asal-usul produk, distribusi, dan melakukan tindakan korektif termasuk penarikan produk (recall) apabila diperlukan untuk memastikan keselamatan konsumen.</p>

      <div class="traceability-flow">
        <h3>Alur Penelusuran Produk</h3>
        
        <div class="flow-step" data-step="1">
          <h4>Identifikasi Awal Masalah</h4>
          <p>Tim K3 menerima laporan adanya potensi bahaya terkait produk yang telah beredar melalui hotline pelanggan, media sosial, atau inspeksi internal.</p>
        </div>

        <div class="flow-step" data-step="2">
          <h4>Penelusuran Nomor Batch</h4>
          <p>Operator membuka <strong>Batch Record Log</strong> untuk melihat data produksi lengkap termasuk tanggal pembuatan, jam produksi, bahan baku yang digunakan, dan penanggung jawab produksi.</p>
        </div>

        <div class="flow-step" data-step="3">
          <h4>Pengecekan Distribusi</h4>
          <p>Alur distribusi dicari melalui dokumen <strong>Product Distribution Register</strong> untuk mengetahui lokasi pengiriman produk, jumlah unit yang didistribusikan, dan tanggal pengiriman ke setiap outlet/distributor.</p>
        </div>

        <div class="flow-step" data-step="4">
          <h4>Evaluasi Risiko K3</h4>
          <p>Tim K3 menilai tingkat bahaya menggunakan matriks risiko dan memutuskan apakah perlu dilakukan penarikan produk berdasarkan tingkat keparahan (minor, moderate, atau critical).</p>
        </div>

        <div class="flow-step" data-step="5">
          <h4>Tindakan Korektif</h4>
          <p>Menghubungi seluruh pelanggan dan distributor terkait melalui email dan telepon, menarik produk dari pasar, mengisolasi batch terkait, serta melakukan investigasi lanjutan untuk mencari akar penyebab masalah.</p>
        </div>

        <div class="flow-step" data-step="6">
          <h4>Pendokumentasian</h4>
          <p>Seluruh proses dicatat dalam <strong>Traceability Action Form</strong> termasuk kronologi kejadian, hasil investigasi, tindakan yang diambil, dan langkah pencegahan di masa depan.</p>
        </div>
      </div>

      <h3>Contoh Kode Batch & Interpretasi</h3>
      <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin: 20px 0;">
        <p><strong>Kode Batch:</strong> <span style="background: #007BFF; color: white; padding: 5px 10px; border-radius: 4px; font-family: monospace;">PNTL-ORG-20251210-A-001</span></p>
        <ul style="margin-top: 15px;">
          <li><strong>PNTL-ORG</strong> = Kode produk (Pentol Original)</li>
          <li><strong>20251210</strong> = Tanggal produksi (10 Desember 2025)</li>
          <li><strong>A</strong> = Shift produksi (A = pagi, B = siang, C = malam)</li>
          <li><strong>001</strong> = Nomor batch hari itu</li>
        </ul>
      </div>

      <h3>Dokumen Pendukung Penelusuran</h3>
      <table class="composition-table">
        <thead>
          <tr>
            <th>Nama Dokumen</th>
            <th>Fungsi</th>
            <th>Penanggung Jawab</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Batch Record Log</td>
            <td>Mencatat detail produksi setiap batch</td>
            <td>Supervisor Produksi</td>
          </tr>
          <tr>
            <td>Raw Material Certificate</td>
            <td>Sertifikat bahan baku dari supplier</td>
            <td>Purchasing Manager</td>
          </tr>
          <tr>
            <td>Product Distribution Register</td>
            <td>Daftar distribusi produk ke outlet</td>
            <td>Logistics Coordinator</td>
          </tr>
          <tr>
            <td>Quality Control Report</td>
            <td>Hasil pengujian kualitas produk</td>
            <td>QC Inspector</td>
          </tr>
          <tr>
            <td>Traceability Action Form</td>
            <td>Dokumentasi tindakan penelusuran</td>
            <td>K3 Manager</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div style="text-align: center; margin: 40px 0;">
      <a href="/" class="back-button">← Kembali ke Beranda</a>
    </div>
  </div>

  <footer>
    <p><strong>Pentol BALL</strong> — Keselamatan Dimulai dari Kesadaran</p>
    <p style="font-style: italic; color: #fff; margin: 10px 0;">"Kualitas dan Keselamatan Adalah Rasa Utama Kami"</p>
    <p style="margin-top: 15px;">
      <strong>Alamat:</strong> Jl. Soekarno Hatta No. 123, Malang<br>
      <strong>Email:</strong> info@pentolball.co.id | <strong>Telepon:</strong> (0341) 765432
    </p>
    <p style="margin-top: 15px; color: #ddd;">© 2025 Pentol BALL — Semua Hak Dilindungi</p>
  </footer>

  <script>
    // Data produk
    const productsData = {
      original: {
        name: "🍡 Pentol Original",
        description: "Pentol tradisional dengan rasa gurih khas, terbuat dari bahan pilihan berkualitas tinggi.",
        code: "PNTL-ORG-001",
        image: "/images/pentol-original.jpg",
        weight: "500 gram (±25 pcs)",
        shelf: "6 bulan (frozen), 3 hari (chilled)",
        composition: [
          {bahan: "Daging Sapi Pilihan", persen: "45%", fungsi: "Bahan utama, sumber protein", sumber: "Lokal (Jawa Timur)"},
          {bahan: "Tepung Tapioka", persen: "30%", fungsi: "Pengikat, tekstur kenyal", sumber: "Lokal (Jawa Barat)"},
          {bahan: "Bawang Putih", persen: "8%", fungsi: "Perasa, aroma", sumber: "Lokal (Malang)"},
          {bahan: "Garam", persen: "5%", fungsi: "Perasa", sumber: "Garam Laut Alami"},
          {bahan: "Merica Putih", persen: "3%", fungsi: "Perasa pedas ringan", sumber: "Lokal (Lampung)"},
          {bahan: "Gula", persen: "2%", fungsi: "Penyeimbang rasa", sumber: "Tebu Lokal"},
          {bahan: "Es Batu", persen: "7%", fungsi: "Menjaga suhu pengolahan", sumber: "Air bersih tersertifikasi"}
        ],
        nutrition: {kalori: "180", protein: "12g", lemak: "8g", karbo: "15g", natrium: "450mg"}
      },
      keju: {
        name: "🧀 Pentol Keju",
        description: "Pentol dengan isian keju mozarella yang leleh, favorit anak-anak dan pecinta keju.",
        code: "PNTL-KEJ-002",
        image: "/images/pentol-keju.jpg", 
        weight: "500 gram (±20 pcs)",
        shelf: "6 bulan (frozen), 2 hari (chilled)",
        composition: [
          {bahan: "Daging Ayam Fillet", persen: "40%", fungsi: "Bahan utama, sumber protein", sumber: "Lokal (Jawa Timur)"},
          {bahan: "Keju Mozarella", persen: "15%", fungsi: "Isian utama, rasa gurih", sumber: "Import (New Zealand)"},
          {bahan: "Tepung Tapioka", persen: "25%", fungsi: "Pengikat, tekstur kenyal", sumber: "Lokal (Jawa Barat)"},
          {bahan: "Bawang Putih", persen: "7%", fungsi: "Perasa, aroma", sumber: "Lokal (Malang)"},
          {bahan: "Garam", persen: "5%", fungsi: "Perasa", sumber: "Garam Laut Alami"},
          {bahan: "Mentega", persen: "3%", fungsi: "Penambah aroma", sumber: "Lokal"},
          {bahan: "Es Batu", persen: "5%", fungsi: "Menjaga suhu pengolahan", sumber: "Air bersih tersertifikasi"}
        ],
        nutrition: {kalori: "220", protein: "14g", lemak: "12g", karbo: "16g", natrium: "520mg"}
      },
      pedas: {
        name: "🌶️ Pentol Pedas",
        description: "Pentol dengan bumbu pedas menggigit level 5, cocok untuk pecinta sensasi pedas ekstrem.",
        code: "PNTL-PDS-003",
        image: "/images/pentol-pedas.jpg",
        weight: "500 gram (±25 pcs)",
        shelf: "6 bulan (frozen), 3 hari (chilled)",
        composition: [
          {bahan: "Daging Sapi Pilihan", persen: "42%", fungsi: "Bahan utama, sumber protein", sumber: "Lokal (Jawa Timur)"},
          {bahan: "Tepung Tapioka", persen: "28%", fungsi: "Pengikat, tekstur kenyal", sumber: "Lokal (Jawa Barat)"},
          {bahan: "Cabai Rawit", persen: "10%", fungsi: "Perasa pedas utama", sumber: "Lokal (Malang)"},
          {bahan: "Bawang Putih", persen: "7%", fungsi: "Perasa, aroma", sumber: "Lokal (Malang)"},
          {bahan: "Garam", persen: "5%", fungsi: "Perasa", sumber: "Garam Laut Alami"},
          {bahan: "Merica Hitam", persen: "3%", fungsi: "Perasa pedas tambahan", sumber: "Lokal (Lampung)"},
          {bahan: "Es Batu", persen: "5%", fungsi: "Menjaga suhu pengolahan", sumber: "Air bersih tersertifikasi"}
        ],
        nutrition: {kalori: "185", protein: "13g", lemak: "9g", karbo: "14g", natrium: "480mg"}
      },
      telur: {
        name: "🥚 Pentol Telur",
        description: "Pentol dengan isian telur puyuh rebus, kombinasi protein lengkap yang bergizi tinggi.",
        code: "PNTL-TLR-004",
        image: "/images/pentol-telur.jpg",
        weight: "500 gram (±18 pcs)",
        shelf: "5 bulan (frozen), 2 hari (chilled)",
        composition: [
          {bahan: "Daging Ayam Fillet", persen: "38%", fungsi: "Bahan utama, sumber protein", sumber: "Lokal (Jawa Timur)"},
          {bahan: "Telur Puyuh", persen: "20%", fungsi: "Isian utama, sumber protein", sumber: "Lokal (Malang)"},
          {bahan: "Tepung Tapioka", persen: "25%", fungsi: "Pengikat, tekstur kenyal", sumber: "Lokal (Jawa Barat)"},
          {bahan: "Bawang Putih", persen: "7%", fungsi: "Perasa, aroma", sumber: "Lokal (Malang)"},
          {bahan: "Garam", persen: "4%", fungsi: "Perasa", sumber: "Garam Laut Alami"},
          {bahan: "Merica Putih", persen: "2%", fungsi: "Perasa", sumber: "Lokal (Lampung)"},
          {bahan: "Es Batu", persen: "4%", fungsi: "Menjaga suhu pengolahan", sumber: "Air bersih tersertifikasi"}
        ],
        nutrition: {kalori: "210", protein: "16g", lemak: "11g", karbo: "13g", natrium: "410mg"}
      },
      daging: {
        name: "🥩 Pentol Daging",
        description: "Pentol premium dengan isian daging cacah sapi berkualitas, tekstur lembut dan juicy.",
        code: "PNTL-DGG-005",
        image: "/images/pentol-daging.jpg",
        weight: "500 gram (±20 pcs)",
        shelf: "6 bulan (frozen), 3 hari (chilled)",
        composition: [
          {bahan: "Daging Sapi Has Dalam", persen: "50%", fungsi: "Bahan utama & isian", sumber: "Lokal (Jawa Timur)"},
          {bahan: "Tepung Tapioka", persen: "25%", fungsi: "Pengikat, tekstur kenyal", sumber: "Lokal (Jawa Barat)"},
          {bahan: "Bawang Putih", persen: "8%", fungsi: "Perasa, aroma", sumber: "Lokal (Malang)"},
          {bahan: "Bawang Merah", persen: "5%", fungsi: "Perasa, aroma", sumber: "Lokal (Brebes)"},
          {bahan: "Garam", persen: "4%", fungsi: "Perasa", sumber: "Garam Laut Alami"},
          {bahan: "Merica Hitam", persen: "3%", fungsi: "Perasa pedas ringan", sumber: "Lokal (Lampung)"},
          {bahan: "Es Batu", persen: "5%", fungsi: "Menjaga suhu pengolahan", sumber: "Air bersih tersertifikasi"}
        ],
        nutrition: {kalori: "240", protein: "18g", lemak: "13g", karbo: "12g", natrium: "470mg"}
      },
      beranak: {
        name: "🍢 Pentol Beranak",
        description: "Pentol spesial dengan isian pentol kecil di dalamnya, unik dan menyenangkan untuk disantap.",
        code: "PNTL-BRK-006",
        image: "/images/pentol-beranak.jpg",
        weight: "500 gram (±15 pcs)",
        shelf: "6 bulan (frozen), 3 hari (chilled)",
        composition: [
          {bahan: "Daging Ayam & Sapi Mix", persen: "48%", fungsi: "Bahan utama pembungkus", sumber: "Lokal (Jawa Timur)"},
          {bahan: "Tepung Tapioka", persen: "28%", fungsi: "Pengikat, tekstur kenyal", sumber: "Lokal (Jawa Barat)"},
          {bahan: "Mini Pentol Isian", persen: "12%", fungsi: "Isian khas beranak", sumber: "Produksi sendiri"},
          {bahan: "Bawang Putih", persen: "5%", fungsi: "Perasa, aroma", sumber: "Lokal (Malang)"},
          {bahan: "Garam", persen: "3%", fungsi: "Perasa", sumber: "Garam Laut Alami"},
          {bahan: "Merica Putih", persen: "2%", fungsi: "Perasa", sumber: "Lokal (Lampung)"},
          {bahan: "Es Batu", persen: "2%", fungsi: "Menjaga suhu pengolahan", sumber: "Air bersih tersertifikasi"}
        ],
        nutrition: {kalori: "195", protein: "15g", lemak: "10g", karbo: "14g", natrium: "440mg"}
      }
    };

    function showProductDetail(productType) {
      const product = productsData[productType];
      const modal = document.getElementById('productModal');
      const modalTitle = document.getElementById('modalTitle');
      const modalBody = document.getElementById('modalBody');

      modalTitle.textContent = product.name;

      // Build modal content
      let compositionRows = '';
      product.composition.forEach(item => {
        compositionRows += `
          <tr>
            <td>${item.bahan}</td>
            <td>${item.persen}</td>
            <td>${item.fungsi}</td>
            <td>${item.sumber}</td>
          </tr>
        `;
      });

      modalBody.innerHTML = `
        <div class="product-detail-grid">
          <div>
            <img src="${product.image}" alt="${product.name}" class="product-image">
          </div>
          <div class="product-info-box">
            <h3>Informasi Produk</h3>
            <p><strong>Kode Produk:</strong> ${product.code}</p>
            <p><strong>Kategori:</strong> Produk Olahan Daging</p>
            <p><strong>Berat:</strong> ${product.weight}</p>
            <p><strong>Masa Simpan:</strong> ${product.shelf}</p>
            <p><strong>Suhu Penyimpanan:</strong> -18°C (frozen) atau 0-4°C (chilled)</p>
            
            <h3 style="margin-top: 20px;">Sertifikasi Produk</h3>
            <div>
              <span class="certification-badge">✓ Halal MUI</span>
              <span class="certification-badge">✓ BPOM</span>
              <span class="certification-badge">✓ ISO 22000</span>
              <span class="certification-badge">✓ HACCP</span>
            </div>
          </div>
        </div>

        <h3 class="section-title">📋 Komposisi Bahan</h3>
        <p>${product.description}</p>
        <table class="composition-table">
          <thead>
            <tr>
              <th>Bahan</th>
              <th>Persentase</th>
              <th>Fungsi</th>
              <th>Sumber</th>
            </tr>
          </thead>
          <tbody>
            ${compositionRows}
          </tbody>
        </table>

        <h3 class="section-title">🥗 Informasi Nilai Gizi (per 100g)</h3>
        <div class="nutritional-info">
          <div class="nutri-card">
            <strong>${product.nutrition.kalori}</strong>
            <span>Kalori</span>
          </div>
          <div class="nutri-card">
            <strong>${product.nutrition.protein}</strong>
            <span>Protein</span>
          </div>
          <div class="nutri-card">
            <strong>${product.nutrition.lemak}</strong>
            <span>Lemak</span>
          </div>
          <div class="nutri-card">
            <strong>${product.nutrition.karbo}</strong>
            <span>Karbohidrat</span>
          </div>
          <div class="nutri-card">
            <strong>${product.nutrition.natrium}</strong>
            <span>Natrium</span>
          </div>
        </div>

        <div style="background: #fff3cd; border-left: 4px solid #ffc107; padding: 15px 20px; margin: 20px 0; border-radius: 5px;">
          <h4 style="color: #856404; margin: 0 0 10px 0;">⚠️ Perhatian Alergen</h4>
          <ul style="margin: 0; padding-left: 20px; color: #856404;">
            <li>Produk ini mengandung bahan hewani (daging/ayam/telur)</li>
            <li>Diproduksi di fasilitas yang juga mengolah: telur, ikan, dan produk susu</li>
            <li>Tidak mengandung bahan pengawet berbahaya</li>
            <li>Tidak mengandung MSG</li>
          </ul>
        </div>
      `;

      modal.style.display = "block";
      document.body.style.overflow = 'hidden'; // Prevent background scroll
    }

    function closeModal() {
      const modal = document.getElementById('productModal');
      modal.style.display = "none";
      document.body.style.overflow = 'auto'; // Restore scroll
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
      const modal = document.getElementById('productModal');
      if (event.target == modal) {
        closeModal();
      }
    }

    // Close modal with ESC key
    document.addEventListener('keydown', function(event) {
      if (event.key === 'Escape') {
        closeModal();
      }
    });
  </script>