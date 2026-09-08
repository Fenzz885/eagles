<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Formulir Registrasi Pemain Baru — EAGLES Basketball Academy</title>
<meta name="description" content="Daftarkan pemain baru ke EAGLES Basketball Academy: isi data diri, kategori umur, dan foto profil.">
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
      <a href="{{ url('/contact') }}">Kontak</a>
      <a class="btn btn--blue" href="{{ url('/register') }}">Daftar Sekarang</a>
    </nav>

    <a class="btn btn--blue nav__cta" href="{{ url('/register') }}">Daftar Sekarang</a>

    <button class="nav__toggle" id="navToggle" type="button"
            aria-label="Buka menu navigasi" aria-expanded="false" aria-controls="menu"><span></span></button>
  </div>
</header>

<main id="main">

  <section class="section">
    <div class="container">

      <!-- Tombol Kembali -->
      <div style="margin-bottom: 20px;">
        <button type="button" onclick="history.back()" class="btn btn--back" style="
          display: inline-flex; 
          align-items: center; 
          gap: 8px; 
          cursor: pointer; 
          border: 2px solid var(--blue, #003399); 
          background-color: var(--blue, #003399); 
          color: #ffffff; 
          padding: 8px 18px; 
          border-radius: 6px; 
          font-weight: 700;
          transition: all 0.2s ease;
        "
        onmouseover="this.style.backgroundColor='#ffffff'; this.style.color='var(--blue, #003399)';" 
        onmouseout="this.style.backgroundColor='var(--blue, #003399)'; this.style.color='#ffffff';">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
            <path d="M19 12H5M12 19l-7-7 7-7"/>
          </svg>
          Kembali
        </button>
      </div>

      <!-- Pesan Sukses -->
      @if(session('success'))
        <div style="background-color: #d1fae5; color: #065f46; padding: 16px; border-radius: 8px; margin-bottom: 20px; font-weight: 700; border: 1px solid #34d399;">
          {{ session('success') }}
        </div>
      @endif

      <form class="form-card" id="registerForm" action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <h1>Formulir Registrasi Pemain Baru</h1>
        <p class="lead">Silakan lengkapi data diri Anda setelah menghubungi admin.</p>

        <p class="form-status" id="formStatus" role="status" aria-live="polite"></p>

        <!-- Nama Lengkap -->
        <div class="field">
          <label for="nama">Nama Lengkap Pemain</label>
          <input class="input" id="nama" name="nama" type="text" autocomplete="name"
                 placeholder="Masukkan nama lengkap" value="{{ old('nama') }}" required aria-describedby="err-nama">
          @error('nama')
            <span class="error" id="err-nama" style="color: #dc2626; font-size: 0.875rem;">{{ $message }}</span>
          @enderror
        </div>

        <!-- Tempat Lahir -->
        <div class="field">
          <label for="tempat">Tempat Lahir</label>
          <input class="input" id="tempat" name="tempat" type="text"
                 placeholder="Masukkan kota kelahiran" value="{{ old('tempat') }}" required aria-describedby="err-tempat">
          @error('tempat')
            <span class="error" id="err-tempat" style="color: #dc2626; font-size: 0.875rem;">{{ $message }}</span>
          @enderror
        </div>

        <!-- Tanggal Lahir -->
        <fieldset class="field">
          <legend class="field__legend">Tanggal, Bulan, Tahun Lahir</legend>
          <div class="field__row">
            <div>
              <label class="visually-hidden" for="dd">Tanggal lahir</label>
              <input class="input" id="dd" name="dd" type="number" inputmode="numeric" min="1" max="31"
                     placeholder="DD" value="{{ old('dd') }}" required aria-describedby="err-dd">
            </div>
            <div>
              <label class="visually-hidden" for="mm">Bulan lahir</label>
              <select class="select" id="mm" name="mm" required>
                <option value="">MM</option>
                @foreach(['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'] as $bulan)
                  <option value="{{ $bulan }}" @selected(old('mm') == $bulan)>{{ $bulan }}</option>
                @endforeach
              </select>
            </div>
            <div>
              <label class="visually-hidden" for="yyyy">Tahun lahir</label>
              <input class="input" id="yyyy" name="yyyy" type="number" inputmode="numeric" min="1990" max="{{ date('Y') }}"
                     placeholder="YYYY" value="{{ old('yyyy') }}" required>
            </div>
          </div>
          @error('dd')
            <span class="error" id="err-dd" style="color: #dc2626; font-size: 0.875rem;">{{ $message }}</span>
          @enderror
          @error('mm')
            <span class="error" style="color: #dc2626; font-size: 0.875rem;">{{ $message }}</span>
          @enderror
          @error('yyyy')
            <span class="error" style="color: #dc2626; font-size: 0.875rem;">{{ $message }}</span>
          @enderror
        </fieldset>

        <!-- Kategori Umur -->
        <div class="field">
          <label for="kategori">Kategori Umur</label>
          <select class="select" id="kategori" name="kategori" required aria-describedby="err-kategori">
            <option value="">Pilih kategori</option>
            <option value="U12" @selected(old('kategori') == 'U12')>U12 (9-12 Tahun)</option>
            <option value="U16" @selected(old('kategori') == 'U16')>U16 (13-16 Tahun)</option>
            <option value="Elite Squad" @selected(old('kategori') == 'Elite Squad')>Tim Elite (Seleksi)</option>
          </select>
          @error('kategori')
            <span class="error" id="err-kategori" style="color: #dc2626; font-size: 0.875rem;">{{ $message }}</span>
          @enderror
        </div>

        <!-- WhatsApp -->
        <div class="field">
          <label for="wa">Nomor WhatsApp Orang Tua / Pemain</label>
          <input class="input" id="wa" name="wa" type="tel" inputmode="tel" autocomplete="tel"
                 placeholder="Contoh: 08123456789" value="{{ old('wa') }}" required aria-describedby="err-wa">
          @error('wa')
            <span class="error" id="err-wa" style="color: #dc2626; font-size: 0.875rem;">{{ $message }}</span>
          @enderror
        </div>

        <!-- Unggah Foto -->
        <div class="field">
          <span class="field__legend" id="lbl-foto">Unggah Foto Profil Pemain</span>
          <div class="upload" id="dropzone" role="button" tabindex="0" aria-labelledby="lbl-foto"
               aria-describedby="err-foto" onclick="document.getElementById('foto').click();">
            <svg width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" aria-hidden="true"><path d="M6 17a4 4 0 01-.4-8A6 6 0 0117.6 9 3.5 3.5 0 0118 16"/><path d="M12 12v7M9 15l3-3 3 3"/></svg>
            <strong id="dropzoneText">Klik untuk unggah atau tarik dan lepas file</strong>
            <small>Format JPG/PNG, maks 5MB.</small>
            <img class="upload__preview" id="fotoPreview" src="" alt="Pratinjau foto pemain">
          </div>
          <input class="visually-hidden" id="foto" name="foto" type="file" accept="image/jpeg,image/png" onchange="previewImage(event)">
          @error('foto')
            <span class="error" id="err-foto" style="color: #dc2626; font-size: 0.875rem;">{{ $message }}</span>
          @enderror
        </div>

        <button class="btn btn--pink btn--block btn--lg" type="submit">
          Kirim Data
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" aria-hidden="true"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </button>
      </form>
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

    <p class="footer__copy">&copy; <span data-year>{{ date('Y') }}</span> EAGLES Basketball Academy. Hak Cipta Dilindungi.</p>
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
<script>
  function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function(){
      const output = document.getElementById('fotoPreview');
      output.src = reader.result;
      output.style.display = 'block';
    };
    if (event.target.files[0]) {
      reader.readAsDataURL(event.target.files[0]);
    }
  }
</script>
</body>
</html>