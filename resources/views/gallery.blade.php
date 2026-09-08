<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Galeri & Daftar Pemain — EAGLES Basketball Academy</title>
<meta name="description" content="Daftar pemain aktif EAGLES per kelompok umur, plus dokumentasi foto acara, kejuaraan, dan latihan.">
<meta name="theme-color" content="#002068">
<link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Mulish:wght@400;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<style>
  body { font-family: 'Mulish', sans-serif; background-color: #fff; color: #333; margin: 0; }
  .page-title { font-family: 'Anton', sans-serif; color: #002068; text-transform: uppercase; font-size: 2rem; letter-spacing: 1px; }
  .section-title { font-family: 'Anton', sans-serif; color: #002068; text-transform: uppercase; font-size: 1.5rem; display: flex; align-items: center; gap: 8px; margin-bottom: 24px; }
  .section-title::before { content: ''; display: inline-block; width: 4px; height: 22px; background-color: #d90429; }
  
  /* Tabs System Styling */
  .tabs-custom { display: flex; justify-content: center; gap: 32px; border-bottom: 1px solid #e5e5e5; padding-bottom: 12px; margin-bottom: 40px; }
  .tab-item { font-weight: 800; font-size: 13px; text-transform: uppercase; color: #666; cursor: pointer; background: none; border: none; padding-bottom: 8px; position: relative; }
  .tab-item.active { color: #002068; }
  .tab-item.active::after { content: ''; position: absolute; bottom: -13px; left: 0; width: 100%; height: 2px; background-color: #002068; }
  
  /* Tab Panels */
  .tab-panel { display: none; }
  .tab-panel.active { display: block; }

  /* Group Category Divider */
  .group-label-custom { font-size: 11px; font-weight: 800; color: #a0a0a0; text-transform: uppercase; letter-spacing: 1.5px; position: relative; margin: 32px 0 16px 0; padding-top: 12px; border-top: 1px solid #e2e8f0; }
  .group-label-custom::before { content: ''; position: absolute; top: -1px; left: 0; width: 25%; height: 2px; background-color: #002068; }

  /* Player Grid: 4 Columns */
  .grid-4 { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; }
  
  .card-player { background: #fff; border: 1px solid #edf2f7; border-radius: 8px; padding: 20px 12px; text-align: center; box-shadow: 0 2px 8px rgba(0,0,0,0.03); display: flex; flex-direction: column; justify-content: space-between; }
  .card-player .img-wrapper { width: 90px; height: 90px; margin: 0 auto 12px; border-radius: 12px; border: 2px solid #002068; overflow: hidden; display: flex; align-items: center; justify-content: center; }
  .card-player img { width: 100%; height: 100%; object-fit: cover; }
  .card-player .badge { display: inline-block; background-color: #c90044; color: #fff; font-size: 10px; font-weight: 700; padding: 2px 10px; border-radius: 12px; margin-bottom: 8px; text-transform: uppercase; }
  .card-player .p-name { font-weight: 800; font-size: 14px; color: #1a202c; margin: 0 0 4px 0; }
  .card-player .p-meta { font-size: 11px; color: #718096; margin-bottom: 8px; line-height: 1.3; }
  .card-player .p-pos { font-size: 11px; color: #a0aec0; display: flex; align-items: center; justify-content: center; gap: 4px; margin-bottom: 8px; }

  /* Gallery Layout */
  .gallery-grid-custom { display: grid; grid-template-columns: 2fr 1fr 1fr; gap: 16px; margin-bottom: 32px; }
  .gallery-grid-custom img { width: 100%; height: 100%; object-fit: cover; border-radius: 4px; }
  .gallery-col-stack { display: flex; flex-direction: column; gap: 16px; }

  /* Buttons */
  .btn-outline-custom { display: inline-block; border: 1.5px solid #002068; color: #002068; font-weight: 700; font-size: 13px; padding: 10px 24px; border-radius: 4px; text-decoration: none; background: transparent; cursor: pointer; transition: all 0.2s; }
  .btn-outline-custom:hover { background: #002068; color: #fff; }
</style>
</head>
<body>

<!-- NAVBAR (HEADER) -->
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
      <a href="{{ url('/gallery') }}" aria-current="page">Galeri</a>
      <a href="{{ url('/contact') }}">Kontak</a>
      @guest
        <a class="btn btn--blue" href="{{ url('/register') }}">Daftar Sekarang</a>
      @endguest
    </nav>

    <!-- STATUS ADMIN & LOGOUT (POJOK KANAN NAVBAR) -->
    @auth
      <div style="display: flex; align-items: center; gap: 10px;">
        <span style="font-size: 12px; font-weight: 800; color: #002068; background: #f0f4ff; border: 1px solid #c3dafe; padding: 6px 12px; border-radius: 20px; display: flex; align-items: center; gap: 6px;">
          <span style="width: 8px; height: 8px; background-color: #38a169; border-radius: 50%; display: inline-block;"></span>
          Admin: {{ Auth::user()->name }}
        </span>

        <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
          @csrf
          <button type="submit" style="background: #e53e3e; color: #fff; border: none; padding: 7px 14px; border-radius: 6px; font-weight: 700; font-size: 12px; cursor: pointer; transition: 0.2s;">
            Logout
          </button>
        </form>
      </div>
    @else
      <a class="btn btn--blue nav__cta" href="{{ url('/register') }}">Daftar Sekarang</a>
    @endauth

    <button class="nav__toggle" id="navToggle" type="button" aria-label="Buka menu navigasi" aria-expanded="false" aria-controls="menu"><span></span></button>
  </div>
</header>

<!-- MAIN CONTENT -->
<main id="main" class="container" style="max-width: 1000px; margin: 0 auto; padding: 40px 16px;">

  <header class="text-center" style="margin-bottom: 32px;">
    <h1 class="page-title">GALERI & DAFTAR PEMAIN EAGLES</h1>
  </header>

  <!-- NOTIFIKASI SUKSES -->
  @if(session('success'))
    <div style="background: #c6f6d5; color: #22543d; padding: 12px 16px; border-radius: 6px; margin-bottom: 24px; font-weight: 600; font-size: 14px; text-align: center;">
      ✅ {{ session('success') }}
    </div>
  @endif

  <!-- Navigation Tabs -->
  <div class="tabs-custom">
    <button type="button" class="tab-item active" onclick="switchTab('roster', event)">DAFTAR PEMAIN</button>
    <button type="button" class="tab-item" onclick="switchTab('latihan', event)">DOKUMENTASI FOTO</button>
  </div>

  <!-- TAB 1: DAFTAR PEMAIN -->
  <div id="tab-roster" class="tab-panel active">
    <section style="margin-bottom: 60px;">
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
        <h2 class="section-title" style="margin-bottom: 0;">DAFTAR PEMAIN EAGLES</h2>
        
        <!-- TOMBOL ADMIN: TAMBAH PEMAIN -->
        @auth
          <a href="{{ route('players.create') }}" class="btn-outline-custom" style="background: #002068; color: #fff;">
            + Tambah Pemain
          </a>
        @endauth
      </div>

      <!-- KATEGORI SENIOR (TIM ELITE) -->
      <div class="group-label-custom">SENIOR (TIM ELITE)</div>
      <div class="grid-4">
        @forelse($players->where('team_category', 'TIM ELITE') as $player)
          <article class="card-player">
            <div>
              <div class="img-wrapper">
                <img src="{{ asset('storage/' . $player->image) }}" alt="{{ $player->name }}">
              </div>
              <span class="badge">{{ $player->team_category }}</span>
              <p class="p-name">{{ $player->name }}</p>
              <p class="p-meta">{{ $player->city }}, {{ date('d M Y', strtotime($player->birth_date)) }}</p>
              <p class="p-pos">🏀 {{ $player->position }}</p>
            </div>
            
            @auth
              <form action="{{ route('players.destroy', $player->id) }}" method="POST" onsubmit="return confirm('Hapus pemain ini?')" style="margin-top: 8px;">
                @csrf
                @method('DELETE')
                <button type="submit" style="background: #e53e3e; color: white; border: none; padding: 4px 8px; border-radius: 4px; font-size: 10px; cursor: pointer; width: 100%; font-weight: bold;">
                  🗑️ Hapus
                </button>
              </form>
            @endauth
          </article>
        @empty
          <div style="grid-column: span 4; text-align: center; padding: 20px; background: #f7fafc; border-radius: 8px; color: #a0aec0; font-size: 13px;">
            Belum ada pemain di kategori Senior.
          </div>
        @endforelse
      </div>

      <!-- KATEGORI JUNIOR (U16) -->
      <div class="group-label-custom">JUNIOR (U16)</div>
      <div class="grid-4">
        @forelse($players->where('team_category', 'U16') as $player)
          <article class="card-player">
            <div>
              <div class="img-wrapper">
                <img src="{{ asset('storage/' . $player->image) }}" alt="{{ $player->name }}">
              </div>
              <span class="badge">{{ $player->team_category }}</span>
              <p class="p-name">{{ $player->name }}</p>
              <p class="p-meta">{{ $player->city }}, {{ date('d M Y', strtotime($player->birth_date)) }}</p>
              <p class="p-pos">🏀 {{ $player->position }}</p>
            </div>

            @auth
              <form action="{{ route('players.destroy', $player->id) }}" method="POST" onsubmit="return confirm('Hapus pemain ini?')" style="margin-top: 8px;">
                @csrf
                @method('DELETE')
                <button type="submit" style="background: #e53e3e; color: white; border: none; padding: 4px 8px; border-radius: 4px; font-size: 10px; cursor: pointer; width: 100%; font-weight: bold;">
                  🗑️ Hapus
                </button>
              </form>
            @endauth
          </article>
        @empty
          <div style="grid-column: span 4; text-align: center; padding: 20px; background: #f7fafc; border-radius: 8px; color: #a0aec0; font-size: 13px;">
            Belum ada pemain di kategori Junior U16.
          </div>
        @endforelse
      </div>

      <!-- KATEGORI KIDDOS (U12) -->
      <div class="group-label-custom">KIDDOS (U12)</div>
      <div class="grid-4">
        @forelse($players->where('team_category', 'U12') as $player)
          <article class="card-player">
            <div>
              <div class="img-wrapper">
                <img src="{{ asset('storage/' . $player->image) }}" alt="{{ $player->name }}">
              </div>
              <span class="badge">{{ $player->team_category }}</span>
              <p class="p-name">{{ $player->name }}</p>
              <p class="p-meta">{{ $player->city }}, {{ date('d M Y', strtotime($player->birth_date)) }}</p>
              <p class="p-pos">🏀 {{ $player->position }}</p>
            </div>

            @auth
              <form action="{{ route('players.destroy', $player->id) }}" method="POST" onsubmit="return confirm('Hapus pemain ini?')" style="margin-top: 8px;">
                @csrf
                @method('DELETE')
                <button type="submit" style="background: #e53e3e; color: white; border: none; padding: 4px 8px; border-radius: 4px; font-size: 10px; cursor: pointer; width: 100%; font-weight: bold;">
                  🗑️ Hapus
                </button>
              </form>
            @endauth
          </article>
        @empty
          <div style="grid-column: span 4; text-align: center; padding: 20px; background: #f7fafc; border-radius: 8px; color: #a0aec0; font-size: 13px;">
            Belum ada pemain di kategori Kiddos U12.
          </div>
        @endforelse
      </div>

      <div style="text-align: center; margin-top: 40px;">
        <a href="{{ url('/register') }}" class="btn-outline-custom">Formulir Registrasi</a>
      </div>
    </section>

    <!-- Galeri Banner Statis -->
    <section>
      <h2 class="section-title">DOKUMENTASI FOTO ACARA & LATIHAN</h2>
      <div class="gallery-grid-custom">
        <div><img src="{{ asset('assets/images/gal-1.jpg') }}" alt="Pertandingan Utama" style="height: 100%; min-height: 260px;"></div>
        <div class="gallery-col-stack">
          <img src="{{ asset('assets/images/gal-2.jpg') }}" alt="Sesi Latihan" style="height: 125px;">
          <img src="{{ asset('assets/images/gal-4.jpg') }}" alt="Pengarahan Tim" style="height: 125px;">
        </div>
        <div class="gallery-col-stack">
          <img src="{{ asset('assets/images/gal-3.jpg') }}" alt="Pemain Bertanding" style="height: 125px;">
          <img src="{{ asset('assets/images/gal-5.jpg') }}" alt="Peralatan Bola" style="height: 125px;">
        </div>
      </div>
    </section>
  </div>

  <!-- TAB 2: DOKUMENTASI FOTO & UPLOAD GALERI -->
  <div id="tab-latihan" class="tab-panel">
    <section>
      <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 24px;">
        <h2 class="section-title" style="margin-bottom: 0;">DOKUMENTASI FOTO KEGIATAN</h2>
        
        <!-- TOMBOL ADMIN: UPLOAD FOTO BARU -->
        @auth
          <a href="{{ route('galleries.create') }}" class="btn-outline-custom" style="background: #002068; color: #fff;">
            + Tambah Foto
          </a>
        @endauth
      </div>

      <!-- FOTO DINAMIS DARI DATABASE (JIKA ADA) -->
      @if($galleries->count() > 0)
        <div class="grid-4" style="margin-bottom: 40px;">
          @foreach($galleries as $item)
            <div class="card-player" style="padding: 10px;">
              <div>
                <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" style="width: 100%; height: 160px; object-fit: cover; border-radius: 8px;">
                <h4 style="margin: 12px 0 4px 0; font-size: 14px; color: #002068;">{{ $item->title }}</h4>
                <p style="margin: 0 0 12px 0; font-size: 11px; color: #718096;">{{ $item->caption ?? 'Tanpa keterangan' }}</p>
              </div>
              
              @auth
                <form action="{{ route('galleries.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus foto ini?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" style="background: #e53e3e; color: white; border: none; padding: 6px 12px; border-radius: 4px; font-size: 11px; cursor: pointer; width: 100%; font-weight: bold;">
                    🗑️ Hapus
                  </button>
                </form>
              @endauth
            </div>
          @endforeach
        </div>
      @endif

      <!-- FOTO STATIS DEFAULT -->
      <div class="gallery-grid-custom">
        <div><img src="{{ asset('assets/images/gal-2.jpg') }}" alt="Sesi Menggiring Bola" style="height: 100%; min-height: 260px;"></div>
        <div class="gallery-col-stack">
          <img src="{{ asset('assets/images/gal-3.jpg') }}" alt="Latihan Lay-up" style="height: 125px;">
          <img src="{{ asset('assets/images/gal-5.jpg') }}" alt="Persiapan Alat" style="height: 125px;">
        </div>
        <div class="gallery-col-stack">
          <img src="{{ asset('assets/images/gal-4.jpg') }}" alt="Pengarahan Pelatih" style="height: 125px;">
          <img src="{{ asset('assets/images/gal-1.jpg') }}" alt="Latihan Menembak Bola" style="height: 125px;">
        </div>
      </div>
    </section>
  </div>

</main>

<!-- FOOTER -->
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

    <p class="footer__copy">&copy; <span data-year>{{ date('Y') }}</span> EAGLES Basketball Academy. Hak Cipta Dilindungi.</p>
  </div>
</footer>

<!-- JavaScript Tab Switcher -->
<script>
  function switchTab(tabName, evt) {
    const panels = document.querySelectorAll('.tab-panel');
    panels.forEach(panel => panel.classList.remove('active'));

    const tabButtons = document.querySelectorAll('.tab-item');
    tabButtons.forEach(button => button.classList.remove('active'));

    document.getElementById('tab-' + tabName).classList.add('active');

    if (evt && evt.currentTarget) {
      evt.currentTarget.classList.add('active');
    }
  }
</script>

<script src="{{ asset('assets/js/main.js') }}" defer></script>
</body>
</html>