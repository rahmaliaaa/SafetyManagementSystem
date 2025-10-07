<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pentol Sejahtera - K3</title>
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
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
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
      text-decoration: underline;
    }

    /* Hero */
    .hero {
      text-align: center;
      padding: 80px 30px;
      background: linear-gradient(135deg, #007BFF, #00C6FF);
      color: #fff;
    }

    .hero h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    .hero p {
      font-size: 1.2rem;
    }

    /* Section */
    section {
      padding: 40px 30px;
      max-width: 900px;
      margin: 20px auto;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    section h2 {
      margin-bottom: 15px;
      color: #007BFF;
    }

    /* Form */
    form input, form textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    form button {
      background: #007BFF;
      color: #fff;
      padding: 10px 18px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s;
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
      background: #fff;
      color: #666;
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <div style="display:flex; align-items:center;">
      <img src="{{ asset('images/logo-pentol.png') }}" alt="Logo Pabrik Pentol">
      <strong>Pentol Sejahtera</strong>
    </div>
    <nav>
      <a href="#program-k3">Program K3</a>
      <a href="#statistik">Statistik</a>
      <a href="#sop">SOP</a>
      <a href="#laporan">Laporan Insiden</a>
    </nav>
  </header>

  <!-- Hero -->
  <section class="hero">
    <h1>Komitmen K3 Pentol Sejahtera</h1>
    <p>Keselamatan, Kualitas, Kepatuhan untuk semua karyawan</p>
  </section>

  <!-- Program K3 -->
  <section id="program-k3">
    <h2>Program K3</h2>
    <ul>
      <li>Pelatihan APD</li>
      <li>Safety Talk mingguan</li>
      <li>Simulasi kebakaran</li>
    </ul>
  </section>

  <!-- Statistik -->
  <section id="statistik">
    <h2>Statistik K3</h2>
    <p>Insiden kerja tahun ini: 0</p>
    <p>Tingkat kepatuhan SOP: 98%</p>
  </section>

  <!-- SOP -->
  <section id="sop">
    <h2>Daftar SOP</h2>
    <ol>
      <li>APD wajib di area produksi</li>
      <li>Prosedur evakuasi darurat</li>
      <li>Pemeriksaan alat produksi harian</li>
    </ol>
  </section>

  <!-- Laporan Insiden -->
  <section id="laporan">
    <h2>Laporan Insiden</h2>
    <form method="POST">
      @csrf
      <input type="text" name="judul" placeholder="Judul Insiden"><br><br>
      <textarea name="deskripsi" placeholder="Deskripsi Insiden"></textarea><br><br>
      <button type="submit">Kirim Laporan</button>
    </form>
  </section>

  <!-- Footer -->
  <footer>
    © {{ date('Y') }} Pentol Sejahtera — Komitmen pada Keselamatan, Kualitas, dan Kepatuhan.
  </footer>

</body>
</html>