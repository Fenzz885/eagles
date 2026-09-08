<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hubungi Kami & Lokasi Latihan — EAGLES Basketball Academy</title>
<meta name="description" content="Kontak admin, jam operasional, dan lokasi latihan utama EAGLES Basketball Academy di Jakarta Selatan.">
<meta name="theme-color" content="#002068">
<link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Mulish:wght@400;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
<a class="skip-link" href="#main">Lompat ke konten utama</a>

<!-- ================= NAVBAR ================= -->
<header class="nav">
  <div class="container nav__inner">
    <a class="brand" href="{{ url('/') }}" aria-label="EAGLES Academy — Beranda">
      <img src="{{ asset('assets/images/logo.png') }}" alt="" width="34" height="34">
      <span class="brand__name">EAGLES <span>Academy</span></span>
    </a>

    <nav class="menu" id="menu" aria-label="Navigasi utama">
      <a href="{{ url('/') }}">Beranda</a>
      <a href="{{ url('/team') }}">Tim</a>
      <a href="{{ url('/schedule') }}">Jadwal</a>
      <a href="{{ url('/gallery') }}">Galeri</a>
      <a href="{{ url('/contact') }}" aria-current="page">Kontak</a>
      <a class="btn btn--blue" href="{{ url('/register') }}">Daftar Sekarang</a>
    </nav>

    <a class="btn btn--blue nav__cta" href="{{ url('/register') }}">Daftar Sekarang</a>

    <button class="nav__toggle" id="navToggle" type="button"
            aria-label="Buka menu navigasi" aria-expanded="false" aria-controls="menu"><span></span></button>
  </div>
</header>

<main id="main">

  <section class="container page-head page-head--rule">
    <h1>Hubungi Kami &amp; Lokasi Latihan</h1>
  </section>

  <section class="section section--tight">
    <div class="container">
      <div class="grid grid--contact">

        <!-- Kartu Layanan Pelanggan -->
        <div class="card" style="border-top:4px solid var(--crimson);padding:28px 26px;background:var(--bg)">
          <h2 style="font-size:26px;color:var(--navy);margin-bottom:20px">Layanan Pelanggan</h2>

          <ul style="display:grid;gap:14px;font-size:15px">
            <li style="display:flex;align-items:center;gap:12px;font-weight:900;letter-spacing:.06em;text-transform:uppercase;font-size:13px">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#002068" stroke-width="2" aria-hidden="true"><circle cx="12" cy="8" r="3.5"/><path d="M5 20a7 7 0 0114 0"/></svg>
              Admin EAGLES
            </li>
            <li style="display:flex;align-items:center;gap:12px">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#003399" stroke-width="2" aria-hidden="true"><path d="M5 4h4l2 5-2.5 1.5a12 12 0 005 5L15 13l5 2v4a1 1 0 01-1 1A16 16 0 014 5a1 1 0 011-1z"/></svg>
              <a href="tel:+6285647280565">+62 856-4728-0565</a>
            </li>
            <li style="display:flex;align-items:center;gap:12px">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#003399" stroke-width="2" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/></svg>
              <a href="mailto:info@eaglesacademy.com">info@eaglesacademy.com</a>
            </li>
          </ul>

          <a class="btn btn--pink btn--block" style="margin-top:22px" href="#" data-wa>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 00-8.6 15L2 22l5.2-1.4A10 10 0 1012 2zm5.6 14c-.2.6-1.2 1.2-1.7 1.2-.5 0-1 .2-3.3-.7-2.8-1.1-4.5-4-4.6-4.2-.1-.2-1.1-1.4-1.1-2.7 0-1.3.7-1.9.9-2.2.2-.2.5-.3.7-.3h.5c.2 0 .4 0 .6.5l.8 2c.1.2.1.4 0 .6l-.4.5c-.1.2-.3.3-.1.6.2.3.8 1.3 1.7 2.1 1.2 1 2.1 1.3 2.4 1.5.2.1.4 0 .5-.1l.8-.9c.2-.2.3-.2.6-.1l2 .9c.2.1.4.2.4.3.1.2.1.7-.1 1.3z"/></svg>
            Chat WhatsApp Sekarang
          </a>

          <hr class="rule" style="margin:26px 0 18px">

          <h3 style="font-family:var(--font-body);font-weight:900;font-size:13px;letter-spacing:.1em;color:var(--blue);margin-bottom:10px">Jam Operasional</h3>
          <p style="display:flex;gap:10px;align-items:flex-start;color:var(--muted);font-size:15px">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="margin-top:4px;flex:0 0 auto" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg>
            <span>Senin - Sabtu<br>08:00 - 18:00 WIB</span>
          </p>
        </div>

        <!-- Peta + lokasi -->
        <div class="card" style="overflow:hidden">
          <img src="{{ asset('assets/images/map.jpg') }}" alt="Peta kompleks latihan EAGLES Academy di Jakarta Selatan" width="722" height="265" loading="lazy" style="width:100%;height:auto">
          <div style="padding:28px 26px">
            <h2 style="font-size:26px;color:var(--navy);margin-bottom:16px">Lokasi Latihan Utama</h2>
            <p style="display:flex;gap:10px;align-items:flex-start;margin-bottom:20px">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#E2165F" stroke-width="2" style="margin-top:3px;flex:0 0 auto" aria-hidden="true"><path d="M12 21s7-6.1 7-11a7 7 0 10-14 0c0 4.9 7 11 7 11z"/><circle cx="12" cy="10" r="2.5"/></svg>
              <span><strong style="font-weight:800">GOR Gelora Basket</strong><br>
              <span style="color:var(--muted)">Jl. Atletik No. 23, Jakarta Selatan</span></span>
            </p>
            <a class="btn btn--ghost" href="https://www.google.com/maps/search/?api=1&amp;query=Jl.+Atletik+No.+23+Jakarta+Selatan"
               target="_blank" rel="noopener">Buka di Google Maps</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="section section--tight">
    <div class="container">
      <h2 class="rule-title">Pertanyaan Yang Sering Diajukan</h2>
      <hr class="rule">
      <div class="grid grid--2">
        <article class="card feature">
          <h3>Berapa biaya latihan?</h3>
          <p>Biaya berbeda tiap kelompok umur dan jumlah sesi per bulan. Hubungi admin untuk daftar harga terbaru.</p>
        </article>
        <article class="card feature">
          <h3>Apakah ada sesi percobaan?</h3>
          <p>Ada. Calon pemain U12 dan U16 boleh ikut satu sesi percobaan gratis sebelum memutuskan bergabung.</p>
        </article>
        <article class="card feature">
          <h3>Bagaimana cara bergabung ke Tim Elite?</h3>
          <p>Tim Elite bersifat khusus undangan atau melalui seleksi yang diadakan dua kali setahun.</p>
        </article>
        <article class="card feature">
          <h3>Perlengkapan apa yang harus dibawa?</h3>
          <p>Sepatu basket, botol minum, dan pakaian latihan. Bola disediakan oleh akademi.</p>
        </article>
      </div>
    </div>
  </section>

</main>

<!-- ================= FOOTER ================= -->
<footer class="footer">
  <div class="container footer__inner">
    <div>
      <p class="footer__brand">EAGLES Academy
        <small>Membentuk juara sejak dini.</small>
      </p>
    </div>

    <nav class="footer__links" aria-label="Tautan kaki halaman">
      <a href="{{ url('/contact') }}">Kebijakan Privasi</a>
      <a href="{{ url('/contact') }}">Syarat & Ketentuan</a>
      <a href="{{ url('/contact') }}">Pertanyaan Umum</a>
    </nav>

    <div class="footer__socials">
      <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram EAGLES Academy">
        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none"/></svg>
      </a>
      <a href="#" data-wa aria-label="WhatsApp EAGLES Academy">
        <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2a10 10 0 00-8.6 15L2 22l5.2-1.4A10 10 0 1012 2zm5.6 14c-.2.6-1.2 1.2-1.7 1.2-.5 0-1 .2-3.3-.7-2.8-1.1-4.5-4-4.6-4.2-.1-.2-1.1-1.4-1.1-2.7 0-1.3.7-1.9.9-2.2.2-.2.5-.3.7-.3h.5c.2 0 .4 0 .6.5l.8 2c.1.2.1.4 0 .6l-.4.5c-.1.2-.3.3-.1.6.2.3.8 1.3 1.7 2.1 1.2 1 2.1 1.3 2.4 1.5.2.1.4 0 .5-.1l.8-.9c.2-.2.3-.2.6-.1l2 .9c.2.1.4.2.4.3.1.2.1.7-.1 1.3z"/></svg>
      </a>
      <a href="https://youtube.com" target="_blank" rel="noopener" aria-label="YouTube EAGLES Academy">
        <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="2" y="5" width="20" height="14" rx="4"/><path d="M10 9l5 3-5 3V9z" fill="currentColor"/></svg>
      </a>
    </div>

    <p class="footer__copy">&copy; <span>{{ date('Y') }}</span> EAGLES Basketball Academy. Hak Cipta Dilindungi.</p>
  </div>
</footer>

<!-- ================= WIDGET PELATIH AI ================= -->
<div class="ai">
  <div class="ai__panel" id="aiPanel">
    <header>
      <strong>EAGLES Pelatih AI</strong>
      <span>Tanya soal latihan atau jadwal latihan</span>
    </header>
    <div class="ai__body">
      <p>Asisten AI masih dalam pengembangan. Untuk sekarang, tim admin kami siap membantu lewat WhatsApp.</p>
      <a class="btn btn--pink btn--block" href="#" data-wa>Chat Admin Sekarang</a>
    </div>
  </div>
  <button class="ai__fab" id="aiFab" type="button" aria-label="Buka Pelatih AI" aria-expanded="false" aria-controls="aiPanel">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><rect x="4" y="7" width="16" height="12" rx="3"/><path d="M12 3v4M9 12h.01M15 12h.01M9.5 16h5"/></svg>
  </button>
</div>

<script src="{{ asset('assets/js/main.js') }}" defer></script>
</body>
</html>