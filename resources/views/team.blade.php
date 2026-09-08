<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tim Pelatih & Manajemen — EAGLES Basketball Academy</title>
<meta name="description" content="Kenali head coach, asisten pelatih, dan tim manajemen EAGLES Basketball Academy.">
<meta name="theme-color" content="#002068">
<link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Mulish:wght@400;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<style>
  body { font-family: 'Mulish', sans-serif; background-color: #fff; color: #333; margin: 0; }
  .container-custom { max-width: 980px; margin: 0 auto; padding: 0 16px; }

  /* Header Section */
  .page-head-title { font-family: 'Anton', sans-serif; font-size: 2.2rem; color: #002068; text-transform: uppercase; margin: 40px 0 12px 0; letter-spacing: 1px; }
  .page-motto { font-size: 11px; font-weight: 800; color: #d90429; line-height: 1.6; letter-spacing: 1px; text-transform: uppercase; margin-bottom: 30px; }
  .section-title { font-family: 'Anton', sans-serif; font-size: 1.4rem; color: #002068; text-transform: uppercase; margin: 0 0 8px 0; }
  .rule-line { border: none; border-top: 2px solid #002068; margin: 0 0 32px 0; }

  /* Cards Grid 3 Column */
  .grid-team { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 60px; }
  .card-member {
    border: 1px solid #e2e8f0;
    padding: 16px;
    background: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    box-shadow: 0 1px 3px rgba(0,0,0,0.05);
  }
  .member__photo { 
    width: 100%; 
    height: 180px; 
    object-fit: cover; 
    border-radius: 12px; 
    margin-bottom: 16px; 
  }
  .badge-pink {
    background-color: #e6005c;
    color: #fff;
    font-size: 10px;
    font-weight: 800;
    padding: 4px 14px;
    border-radius: 12px;
    text-transform: uppercase;
    margin-bottom: 12px;
    display: inline-block;
  }
  .card-member h3 { font-family: 'Anton', sans-serif; font-size: 1.4rem; color: #002068; margin: 0 0 10px 0; text-transform: uppercase; letter-spacing: 0.5px; }
  .card-member p { font-size: 11px; color: #64748b; line-height: 1.6; margin: 0 0 20px 0; padding: 0 4px; }
  .btn-detail {
    width: 100%;
    background-color: #002068;
    color: #fff;
    border: none;
    padding: 12px 0;
    font-family: 'Mulish', sans-serif;
    font-weight: 800;
    font-size: 11px;
    letter-spacing: 1px;
    text-transform: uppercase;
    cursor: pointer;
    margin-top: auto;
    transition: background 0.2s;
  }
  .btn-detail:hover { background-color: #001548; }

  /* Modal Overlay (Tersembunyi saat 'hidden' aktif) */
  .modal-overlay {
    position: fixed; top: 0; left: 0; right: 0; bottom: 0;
    background: rgba(0, 0, 0, 0.65);
    display: flex; align-items: center; justify-content: center;
    z-index: 9999; padding: 20px;
    opacity: 1; visibility: visible;
    transition: opacity 0.2s ease, visibility 0.2s ease;
  }

  /* Class 'hidden' untuk menyembunyikan modal secara default */
  .modal-overlay.hidden {
    opacity: 0 !important;
    visibility: hidden !important;
    pointer-events: none !important;
  }

  .modal-content {
    background: #fff; width: 100%; max-width: 680px;
    border-radius: 8px; overflow: hidden; position: relative;
    display: flex; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.3);
  }
  .modal-left { width: 45%; padding: 24px; display: flex; align-items: center; justify-content: center; }
  .modal-left img { width: 100%; max-height: 300px; object-fit: cover; border-radius: 12px; }
  .modal-right { width: 55%; padding: 32px 28px 28px 12px; display: flex; flex-direction: column; }
  .modal-close {
    position: absolute; top: 16px; right: 16px; background: none; border: none;
    font-size: 22px; font-weight: bold; color: #e6005c; cursor: pointer;
  }
  .modal-title { font-family: 'Anton', sans-serif; font-size: 1.8rem; color: #002068; text-transform: uppercase; margin: 0 0 8px 0; letter-spacing: 0.5px; }
  .modal-section-title { font-family: 'Mulish', sans-serif; font-size: 12px; font-weight: 800; color: #000; text-transform: uppercase; margin: 16px 0 8px 0; letter-spacing: 0.5px; }
  .modal-list { padding-left: 16px; margin: 0 0 24px 0; font-size: 12px; color: #333; line-height: 1.7; }
  .modal-list li { margin-bottom: 4px; }
  .btn-close-full {
    width: 100%; background-color: #0033a0; color: #fff; border: none;
    padding: 12px 0; font-family: 'Mulish', sans-serif; font-weight: 800;
    font-size: 12px; letter-spacing: 1px; text-transform: uppercase;
    border-radius: 4px; cursor: pointer; margin-top: auto;
  }

  @media (max-width: 768px) {
    .grid-team { grid-template-columns: 1fr; }
    .modal-content { flex-direction: column; }
    .modal-left, .modal-right { width: 100%; padding: 20px; }
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
      <a href="{{ url('/team') }}" aria-current="page">Tim</a>
      <a href="{{ url('/schedule') }}">Jadwal</a>
      <a href="{{ url('/gallery') }}">Galeri</a>
      <a href="{{ url('/contact') }}">Kontak</a>
      <a class="btn btn--blue" href="{{ url('/register') }}">Daftar Sekarang</a>
    </nav>

    <a class="btn btn--blue nav__cta" href="{{ url('/register') }}">Daftar Sekarang</a>
    <button class="nav__toggle" id="navToggle" type="button" aria-label="Buka menu navigasi" aria-expanded="false" aria-controls="menu"><span></span></button>
  </div>
</header>

<main id="main" class="container-custom">

  <!-- PAGE HEAD -->
  <section>
    <h1 class="page-head-title">TIM PELATIH & MANAJEMEN</h1>
    <div class="page-motto">
      DISIPLIN.<br>
      FOKUS.<br>
      JUARA.
    </div>
  </section>

  <!-- OUR TEAM -->
  <section>
    <h2 class="section-title">OUR TEAM</h2>
    <hr class="rule-line">

    <div class="grid-team">

      <!-- MEMBER 1 -->
      <article class="card-member">
        <img src="{{ asset('assets/images/coach-marcus.jpg') }}" alt="Coach Marcus" class="member__photo">
        <span class="badge-pink">HEAD COACH</span>
        <h3>COACH MARCUS</h3>
        <p>Ahli strategi penyerangan modern. Fokus pada pergerakan bola cepat, transisi, akurasi tembakan tiga angka. Membawa...</p>
        <button class="btn-detail" type="button" data-name="COACH MARCUS" data-role="HEAD COACH" data-img="{{ asset('assets/images/coach-marcus.jpg') }}">LIHAT DETAIL</button>
      </article>

      <!-- MEMBER 2 -->
      <article class="card-member">
        <img src="{{ asset('assets/images/coach-sarah.jpg') }}" alt="Coach Sarah" class="member__photo">
        <span class="badge-pink">ASST. COACH</span>
        <h3>COACH SARAH</h3>
        <p>Ahli strategi penyerangan modern. Fokus pada pergerakan bola cepat, transisi, akurasi tembakan tiga angka. Membawa...</p>
        <button class="btn-detail" type="button" data-name="COACH SARAH" data-role="ASST. COACH" data-img="{{ asset('assets/images/coach-sarah.jpg') }}">LIHAT DETAIL</button>
      </article>

      <!-- MEMBER 3 -->
      <article class="card-member">
        <img src="{{ asset('assets/images/david-chen.jpg') }}" alt="David Chen" class="member__photo">
        <span class="badge-pink">TEAM MANAGER</span>
        <h3>DAVID CHEN</h3>
        <p>Ahli strategi penyerangan modern. Fokus pada pergerakan bola cepat, transisi, akurasi tembakan tiga angka. Membawa...</p>
        <button class="btn-detail" type="button" data-name="DAVID CHEN" data-role="TEAM MANAGER" data-img="{{ asset('assets/images/david-chen.jpg') }}">LIHAT DETAIL</button>
      </article>

    </div>
  </section>

</main>

<!-- MODAL POPUP (Ditambahkan class "hidden" agar tidak muncul otomatis) -->
<div class="modal-overlay hidden" id="coachModal">
  <div class="modal-content">
    <button class="modal-close" id="closeCrossBtn" type="button" aria-label="Tutup">&times;</button>

    <div class="modal-left">
      <img id="modalImg" src="{{ asset('assets/images/coach-marcus.jpg') }}" alt="Foto Pelatih">
    </div>

    <div class="modal-right">
      <h2 class="modal-title" id="modalTitle">COACH MARCUS</h2>
      <div>
        <span class="badge-pink" id="modalBadge">HEAD COACH</span>
      </div>

      <div class="modal-section-title">PENGALAMAN & PRESTASI:</div>

      <ul class="modal-list">
        <li>Pelatih Popda Kabupaten 2020</li>
        <li>Pelatih SMP N 1 2020-2023</li>
        <li>Lisensi Pelatih B</li>
        <li>Owner Eagles Basketball</li>
      </ul>

      <button class="btn-close-full" id="closeMainBtn" type="button">TUTUP</button>
    </div>
  </div>
</div>

<script src="{{ asset('assets/js/main.js') }}" defer></script>

<!-- SCRIPT UNTUK MENGONTROL MODAL -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('coachModal');
    const closeMainBtn = document.getElementById('closeMainBtn');
    const closeCrossBtn = document.getElementById('closeCrossBtn');
    const openBtns = document.querySelectorAll('.btn-detail');

    const modalTitle = document.getElementById('modalTitle');
    const modalBadge = document.getElementById('modalBadge');
    const modalImg = document.getElementById('modalImg');

    // Fungsi Tutup
    function closeModal() {
      modal.classList.add('hidden');
    }

    // Fungsi Buka saat Klik "LIHAT DETAIL"
    function openModal(btn) {
      modalTitle.textContent = btn.getAttribute('data-name');
      modalBadge.textContent = btn.getAttribute('data-role');
      modalImg.src = btn.getAttribute('data-img');
      modal.classList.remove('hidden');
    }

    // Event Klik Tutup
    if (closeMainBtn) closeMainBtn.addEventListener('click', closeModal);
    if (closeCrossBtn) closeCrossBtn.addEventListener('click', closeModal);

    // Event Klik di luar Kotak Modal (Background Hitam Transparan)
    if (modal) {
      modal.addEventListener('click', function (e) {
        if (e.target === modal) closeModal();
      });
    }

    // Event Klik Tombol LIHAT DETAIL
    openBtns.forEach(btn => {
      btn.addEventListener('click', function () {
        openModal(this);
      });
    });
  });
</script>

</body>
</html>