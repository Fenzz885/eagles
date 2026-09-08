<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kelompok Umur & Jadwal Latihan — EAGLES Basketball Academy</title>
<meta name="description" content="Program U12, U16, dan U18 beserta jadwal latihan mingguan EAGLES Basketball Academy.">
<meta name="theme-color" content="#002068">
<link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Mulish:wght@400;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<style>
  body { font-family: 'Mulish', sans-serif; background-color: #fff; color: #333; margin: 0; }
  
  /* Container & Utility */
  .container-custom { max-width: 960px; margin: 0 auto; padding: 0 16px; }
  
  /* Banner Header (Perlebar bagian bawah dengan padding & min-height) */
  .hero-banner {
    position: relative;
    background: url('{{ asset('assets/images/gal-1.jpg') }}') center/cover no-repeat;
    padding-top: 60px;
    padding-bottom: 140px; /* Diperlebar area bawahnya */
    min-height: 280px;     /* Menjaga area background tetap luas */
    border-bottom: 2px solid #002068;
    display: flex;
    align-items: flex-start;
  }
  .hero-banner::before {
    content: ''; position: absolute; top:0; left:0; right:0; bottom:0;
    background: rgba(255, 255, 255, 0.75);
  }
  .hero-content { position: relative; z-index: 1; max-width: 960px; margin: 0 auto; width: 100%; padding: 0 16px; }
  .hero-title { font-family: 'Anton', sans-serif; font-size: 2.2rem; color: #002068; letter-spacing: 1px; margin: 0 0 12px 0; text-transform: uppercase; }
  .hero-subtags { font-size: 11px; font-weight: 800; color: #d90429; line-height: 1.6; letter-spacing: 1px; }

  /* Section Title */
  .section-heading { font-family: 'Anton', sans-serif; color: #002068; font-size: 1.5rem; text-transform: uppercase; margin-bottom: 8px; }
  .divider-line { border: none; border-top: 2px solid #002068; margin: 0 0 32px 0; }

  /* Cards Grid 3 Column */
  .grid-program { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 50px; }
  .card-program {
    border: 1px solid #e2e8f0;
    border-top: 3px solid #002068;
    padding: 24px 16px;
    background: #fff;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  .card-program h3 { font-family: 'Anton', sans-serif; font-size: 1.25rem; color: #002068; margin: 0 0 16px 0; }
  .card-program p { font-size: 12px; color: #64748b; line-height: 1.6; margin: 0 0 24px 0; }
  .badge-gray {
    display: inline-block;
    background-color: #f1f5f9;
    color: #475569;
    font-size: 10px;
    font-weight: 800;
    padding: 4px 10px;
    border-radius: 2px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    align-self: flex-start;
  }

  /* Schedule Table */
  .table-container { width: 100%; overflow-x: auto; margin-bottom: 80px; }
  .table-schedule { width: 100%; border-collapse: collapse; border: 1px solid #cbd5e1; }
  .table-schedule th {
    background-color: #0033a0;
    color: #ffffff;
    font-size: 11px;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 12px 16px;
    text-align: left;
  }
  .table-schedule td {
    padding: 14px 16px;
    border-bottom: 1px solid #e2e8f0;
    font-size: 12px;
    color: #1e293b;
  }
  .table-schedule tr:nth-child(even) { background-color: #f8fafc; }
  .badge-table {
    background-color: #f1f5f9;
    color: #334155;
    font-size: 10px;
    font-weight: 700;
    padding: 3px 8px;
    border-radius: 2px;
  }
  
  @media (max-width: 768px) {
    .grid-program { grid-template-columns: 1fr; }
  }
</style>
</head>
<body>

<!-- NAVBAR -->
<header class="nav">
  <div class="container nav__inner">
    <a class="brand" href="{{ url('/') }}" aria-label="EAGLES Academy — beranda">
      <img src="{{ asset('assets/images/logo.png') }}" alt="" width="34" height="34">
      <span class="brand__name">EAGLES <span>Academy</span></span>
    </a>

    <nav class="menu" id="menu" aria-label="Navigasi utama">
      <a href="{{ url('/') }}">Beranda</a>
      <a href="{{ url('/team') }}">Tim</a>
      <a href="{{ url('/schedule') }}" aria-current="page">Jadwal</a>
      <a href="{{ url('/gallery') }}">Galeri</a>
      <a href="{{ url('/contact') }}">Kontak</a>
      <a class="btn btn--blue" href="{{ url('/register') }}">Daftar Sekarang</a>
    </nav>

    <a class="btn btn--blue nav__cta" href="{{ url('/register') }}">Daftar Sekarang</a>
    <button class="nav__toggle" id="navToggle" type="button" aria-label="Buka menu navigasi" aria-expanded="false" aria-controls="menu"><span></span></button>
  </div>
</header>

<main id="main">

  <!-- BANNER HEADER (Area gambar lebih lebar ke bawah) -->
  <section class="hero-banner">
    <div class="hero-content">
      <h1 class="hero-title">KELOMPOK UMUR & JADWAL LATIHAN</h1>
      <div class="hero-subtags">
        KIDDOS.<br>
        JUNIOR.<br>
        SENIOR.
      </div>
    </div>
  </section>

  <div class="container-custom" style="margin-top: 40px;">
    
    <!-- KELOMPOK UMUR (3 CARDS) -->
    <section>
      <div class="grid-program">
        
        <!-- CARD 1 -->
        <article class="card-program">
          <div>
            <h3>U12 (9-12 Tahun)</h3>
            <p>Pembentukan teknik dasar, dribbling, dan passing. Fokus pada fundamental dan ketertarikan dalam bermain basket.</p>
          </div>
          <div>
            <span class="badge-gray">KIDDOS / PEMULA</span>
          </div>
        </article>

        <!-- CARD 2 -->
        <article class="card-program">
          <div>
            <h3>U16 (13-16 Tahun)</h3>
            <p>Pemantapan fisik, taktik tim, dan shooting. Pengembangan sistem permainan dan persiapan mental kompetitif.</p>
          </div>
          <div>
            <span class="badge-gray">JUNIOR / MENENGAH</span>
          </div>
        </article>

        <!-- CARD 3 -->
        <article class="card-program">
          <div>
            <h3>U18 (17-18 Tahun)</h3>
            <p>Persiapan kompetisi, kejuaraan, dan private workout. Program intensif untuk calon atlet profesional.</p>
          </div>
          <div>
            <span class="badge-gray">SENIOR / ADVANCED</span>
          </div>
        </article>

      </div>
    </section>

    <!-- JADWAL LATIHAN TABLE -->
    <section>
      <h2 class="section-heading">JADWAL LATIHAN</h2>
      <hr class="divider-line">

      <div class="table-container">
        <table class="table-schedule">
          <thead>
            <tr>
              <th>HARI</th>
              <th>KATEGORI</th>
              <th>JAM LATIHAN</th>
              <th>PELATIH</th>
            </tr>
          </thead>
          <tbody>
  @forelse($schedules as $schedule)
    <tr>
      <td><strong>{{ $schedule->day }}</strong></td>
      <td><span class="badge-table">{{ $schedule->category }}</span></td>
      <td>{{ \Carbon\Carbon::parse($schedule->start_time)->format('H.i') }} - {{ \Carbon\Carbon::parse($schedule->end_time)->format('H.i') }}</td>
      <td>{{ $schedule->coach }}</td>
    </tr>
  @empty
    <tr>
      <td colspan="4" style="text-align: center; color: #64748b;">Belum ada jadwal latihan yang tersedia.</td>
    </tr>
  @endforelse
</tbody>
        </table>
      </div>
    </section>

  </div>

</main>

<script src="{{ asset('assets/js/main.js') }}" defer></script>
</body>
</html>