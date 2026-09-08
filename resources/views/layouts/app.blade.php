<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', 'EAGLES Basketball Academy')</title>
<meta name="theme-color" content="#002068">
<link rel="icon" type="image/png" href="{{ asset('assets/images/logo.png') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Mulish:wght@400;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
@stack('styles')
</head>
<body>

<!-- PITA NAVIGASI KHUSUS ADMIN (Hanya Muncul Jika Admin Sudah Login) -->
@auth
  <div style="background: #1a202c; color: #fff; padding: 10px 24px; display: flex; justify-content: space-between; align-items: center; font-size: 13px; position: sticky; top: 0; z-index: 99999; box-shadow: 0 2px 10px rgba(0,0,0,0.3);">
    <div>
      👑 <strong>MODE ADMIN AKTIF</strong> — Anda dapat mengedit konten langsung di halaman ini.
    </div>
    <div style="display: flex; gap: 16px; align-items: center;">
      <a href="{{ route('admin.registrations') }}" style="color: #63b3ed; text-decoration: none; font-weight: 700;">
        📊 Data Pendaftar Murid
      </a>
      
      <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
        @csrf
        <button type="submit" style="background: #e53e3e; color: white; border: none; padding: 4px 12px; border-radius: 4px; cursor: pointer; font-size: 12px; font-weight: 700;">
          Logout
        </button>
      </form>
    </div>
  </div>
@endauth

<!-- NAVBAR UTAMA -->
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
  </div>
</header>

<!-- KONTEN UTAMA HALAMAN -->
<main id="main">
    @yield('content')
</main>

<!-- FOOTER -->
<footer class="footer">
  <div class="container footer__inner">
    <p class="footer__copy">
      &copy; {{ date('Y') }} EAGLES Basketball Academy. Hak Cipta Dilindungi. 
      @guest
        | <a href="{{ route('login') }}" style="color: #718096; text-decoration: none;">🔒 Admin Login</a>
      @endguest
    </p>
  </div>
</footer>

<script src="{{ asset('assets/js/main.js') }}" defer></script>
@stack('scripts')
</body>
</html>