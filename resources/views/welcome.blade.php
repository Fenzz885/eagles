<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>EAGLES Basketball Academy — Akademi Basket Privat Terbaik</title>
  <meta name="description"
    content="EAGLES Basketball Academy: akademi basket privat di Jakarta Selatan. Program U12, U16, dan Tim Elite bersama pelatih bersertifikasi FIBA.">
  <meta name="theme-color" content="#002068">
  <link rel="icon" type="image/jpeg" href="{{ asset('assets/images/logoEAGLES.jpeg') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="image" href="{{ asset('assets/images/hero-court.jpg') }}">
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Mulish:wght@400;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
  <a class="skip-link" href="#main">Lompat ke konten utama</a>

  <!-- ================= NAVBAR ================= -->
  <header class="nav">
    <div class="container nav__inner">
      <a class="brand" href="{{ route('landing') }}" aria-label="EAGLES Academy — Beranda">
        <img src="{{ asset('assets/images/logoEAGLES.jpeg') }}" alt="EAGLES Logo" width="34" height="34"
          style="object-fit: cover; border-radius: 50%;">
        <span class="brand__name">EAGLES <span>Academy</span></span>
      </a>

      <nav class="menu" id="menu" aria-label="Navigasi utama">
        <a href="{{ route('landing') }}" aria-current="page">Beranda</a>
        <a href="{{ route('team') }}">Tim</a>
        <a href="{{ route('schedule') }}">Jadwal</a>
        <a href="{{ route('gallery') }}">Galeri</a>
        <a href="{{ route('contact') }}">Kontak</a>
        @guest
          <a class="btn btn--blue" href="{{ route('register') }}">Daftar Sekarang</a>
        @endguest
      </nav>

      @auth
        <div style="display: flex; align-items: center; gap: 10px;">
          <a href="{{ url('/ai-manage') }}"
            style="font-size: 12px; font-weight: 800; color: #ffffff; background: #003399; padding: 6px 12px; border-radius: 20px; text-decoration: none;">
            🤖 Kelola AI
          </a>

          <a href="{{ route('admin.registrations') }}"
            style="font-size: 12px; font-weight: 800; color: #002068; background: #f0f4ff; border: 1px solid #c3dafe; padding: 6px 12px; border-radius: 20px; text-decoration: none;">
            🟢 Admin: {{ Auth::user()->name }}
          </a>
          <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
            @csrf
            <button type="submit"
              style="background: #e53e3e; color: #fff; border: none; padding: 7px 14px; border-radius: 6px; font-weight: 700; font-size: 12px; cursor: pointer;">Logout</button>
          </form>
        </div>
      @else
        <a class="btn btn--blue nav__cta" href="{{ route('register') }}">Daftar Sekarang</a>
      @endauth

      <button class="nav__toggle" id="navToggle" type="button" aria-label="Buka menu navigasi" aria-expanded="false"
        aria-controls="menu"><span></span></button>
    </div>
  </header>

  <main id="main">

    <!-- ================= HERO ================= -->
    <section class="hero">
      <div class="container hero__inner">
        <h1>Eagles Basketball Academy: Akademi Basket Privat Terbaik</h1>
        <p>Tingkatkan keterampilan fundamental, taktik, dan mental bertanding bersama tim pelatih berpengalaman.</p>
        <div class="hero__cta">
          <a class="btn btn--pink btn--lg" href="{{ route('register') }}">Registrasi Pemain Sekarang</a>
          <a class="btn btn--blue btn--lg" href="{{ route('schedule') }}">Lihat Jadwal Latihan</a>
        </div>
      </div>
    </section>

    <!-- ================= KEUNGGULAN ================= -->
    <section class="section">
      <div class="container">
        <h2 class="block-title">Kenapa EAGLES ?</h2>
        <div class="grid grid--3">
          <article class="card feature">
            <span class="feature__ico" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round">
                <path d="M8 21h8M12 17v4M7 4h10v5a5 5 0 01-10 0V4z" />
                <path d="M17 5h3v2a3 3 0 01-3 3M7 5H4v2a3 3 0 003 3" />
              </svg>
            </span>
            <h3>Pelatih Bersertifikat</h3>
            <p>Dilatih langsung oleh kepala pelatih berlisensi FIBA Tingkat 3 dengan pengalaman kompetisi nasional.</p>
          </article>

          <article class="card feature">
            <span class="feature__ico" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round">
                <path d="M3 20V10M9 20V4M15 20v-8M21 20V7" />
              </svg>
            </span>
            <h3>Program Bertingkat</h3>
            <p>U12, U16, sampai Tim Elite. Materi disesuaikan dengan usia dan tingkat kemampuan setiap pemain.</p>
          </article>

          <article class="card feature">
            <span class="feature__ico" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="9" />
                <path d="M3 12h18M12 3c3 3 3 15 0 18M12 3C9 6 9 18 12 21" />
              </svg>
            </span>
            <h3>Siap Kejuaraan</h3>
            <p>Rutin mengikuti turnamen lokal dan nasional, lengkap dengan sesi pemantauan bakat dan evaluasi pemain.
            </p>
          </article>
        </div>
      </div>
    </section>

    <!-- ================= CTA ================= -->
    <section class="section">
      <div class="container text-center">
        <h2 class="rule-title" style="color:var(--navy)">Siap Bergabung Dengan EAGLES?</h2>
        <p class="lead" style="max-width:52ch;margin:14px auto 26px">
          Isi formulir registrasi pemain baru. Data dan foto kamu akan otomatis masuk ke daftar pemain sesuai kelompok
          umur.
        </p>
        <div class="hero__cta" style="justify-content:center">
          <a class="btn btn--pink btn--lg" href="{{ route('register') }}">Registrasi Pemain Sekarang</a>
          <a class="btn btn--ghost btn--lg" href="#" data-wa>Tanya Admin via WhatsApp</a>
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
        <a href="{{ route('contact') }}">Kebijakan Privasi</a>
        <a href="{{ route('contact') }}">Syarat &amp; Ketentuan</a>
        <a href="{{ route('contact') }}">Pertanyaan Umum</a>
      </nav>

      <div class="footer__socials">
        <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram EAGLES Academy">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            aria-hidden="true">
            <rect x="3" y="3" width="18" height="18" rx="5" />
            <circle cx="12" cy="12" r="4" />
            <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none" />
          </svg>
        </a>
        <a href="#" data-wa aria-label="WhatsApp EAGLES Academy">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path
              d="M12 2a10 10 0 00-8.6 15L2 22l5.2-1.4A10 10 0 1012 2zm5.6 14c-.2.6-1.2 1.2-1.7 1.2-.5 0-1 .2-3.3-.7-2.8-1.1-4.5-4-4.6-4.2-.1-.2-1.1-1.4-1.1-2.7 0-1.3.7-1.9.9-2.2.2-.2.5-.3.7-.3h.5c.2 0 .4 0 .6.5l.8 2c.1.2.1.4 0 .6l-.4.5c-.1.2-.3.3-.1.6.2.3.8 1.3 1.7 2.1 1.2 1 2.1 1.3 2.4 1.5.2.1.4 0 .5-.1l.8-.9c.2-.2.3-.2.6-.1l2 .9c.2.1.4.2.4.3.1.2.1.7-.1 1.3z" />
          </svg>
        </a>
        <a href="https://youtube.com" target="_blank" rel="noopener" aria-label="YouTube EAGLES Academy">
          <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
            aria-hidden="true">
            <rect x="2" y="5" width="20" height="14" rx="4" />
            <path d="M10 9l5 3-5 3V9z" fill="currentColor" />
          </svg>
        </a>
      </div>

      <p class="footer__copy">&copy; <span data-year>2026</span> EAGLES Basketball Academy. Hak Cipta Dilindungi.</p>
    </div>
  </footer>

  <!-- ================= WIDGET AI COACH ================= -->
  <style>
    .ai-widget {
      position: fixed;
      bottom: 24px;
      right: 24px;
      z-index: 9999;
      font-family: 'Mulish', sans-serif;
    }

    .ai-chat-card {
      width: 360px;
      max-width: calc(100vw - 32px);
      height: 520px;
      background: #ffffff;
      border-radius: 12px;
      border: 1px solid #cbd5e1;
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.15);
      display: flex;
      flex-direction: column;
      overflow: hidden;
      margin-bottom: 12px;
      transition: all 0.3s ease;
    }

    .ai-chat-card.hidden {
      opacity: 0;
      pointer-events: none;
      transform: translateY(15px) scale(0.95);
      display: none;
    }

    .ai-chat-header {
      background-color: #003399;
      color: #ffffff;
      padding: 14px 16px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .ai-brand {
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .ai-brand img {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      object-fit: cover;
      background: #fff;
    }

    .ai-brand h4 {
      margin: 0;
      font-family: 'Anton', sans-serif;
      font-size: 1.1rem;
      letter-spacing: 0.5px;
      text-transform: uppercase;
    }

    .ai-header-actions {
      display: flex;
      gap: 12px;
    }

    .ai-action-btn {
      background: none;
      border: none;
      color: #ffffff;
      font-size: 16px;
      cursor: pointer;
      opacity: 0.8;
      padding: 0;
      line-height: 1;
    }

    .ai-action-btn:hover {
      opacity: 1;
    }

    .ai-chat-body {
      flex: 1;
      padding: 16px;
      overflow-y: auto;
      display: flex;
      flex-direction: column;
      gap: 12px;
      background-color: #ffffff;
    }

    .chat-msg {
      display: flex;
      gap: 8px;
      max-width: 85%;
      font-size: 13px;
      line-height: 1.4;
    }

    .chat-msg.bot {
      align-self: flex-start;
    }

    .chat-msg.user {
      align-self: flex-end;
      flex-direction: row-reverse;
    }

    .bot-icon {
      width: 24px;
      height: 24px;
      border: 1px solid #cbd5e1;
      border-radius: 4px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #003399;
      flex-shrink: 0;
    }

    .msg-bubble {
      padding: 10px 14px;
      border-radius: 8px;
    }

    .chat-msg.bot .msg-bubble {
      background-color: #ffffff;
      border: 1px solid #dbeafe;
      color: #1e293b;
    }

    .chat-msg.user .msg-bubble {
      background-color: #003399;
      color: #ffffff;
    }

    .ai-suggestions {
      display: flex;
      gap: 6px;
      overflow-x: auto;
      padding: 8px 16px;
      background: #fff;
      scrollbar-width: none;
    }

    .ai-suggestions::-webkit-scrollbar {
      display: none;
    }

    .chip-btn {
      white-space: nowrap;
      background: #ffffff;
      border: 1px solid #003399;
      color: #1e293b;
      font-size: 11px;
      padding: 6px 12px;
      border-radius: 16px;
      cursor: pointer;
      transition: all 0.2s;
    }

    .chip-btn:hover {
      background: #eff6ff;
    }

    .ai-chat-footer {
      padding: 12px 16px;
      border-top: 1px solid #e2e8f0;
      display: flex;
      gap: 10px;
      align-items: center;
      background: #fff;
    }

    .ai-input {
      flex: 1;
      background: #e2e8f0;
      border: none;
      border-radius: 8px;
      padding: 12px 14px;
      font-size: 12px;
      outline: none;
      color: #1e293b;
    }

    .ai-input::placeholder {
      color: #64748b;
    }

    .ai-send-btn {
      width: 42px;
      height: 42px;
      background-color: #c2004d;
      border: none;
      border-radius: 8px;
      color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: background 0.2s;
      flex-shrink: 0;
    }

    .ai-send-btn:hover {
      background-color: #9e003e;
    }

    .ai-fab {
      width: 52px;
      height: 52px;
      background-color: #c2004d;
      border: none;
      border-radius: 12px;
      color: #ffffff;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      box-shadow: 0 4px 12px rgba(194, 0, 77, 0.4);
      margin-left: auto;
      transition: transform 0.2s;
    }

    .ai-fab:hover {
      transform: scale(1.05);
    }
  </style>

  <div class="ai-widget">
    <div class="ai-chat-card hidden" id="aiPanel">
      <header class="ai-chat-header">
        <div class="ai-brand">
          <img src="{{ asset('assets/images/logoEAGLES.jpeg') }}" alt="EAGLES Logo">
          <h4>EAGLES AI COACH</h4>
        </div>
        <div class="ai-header-actions">
          <button class="ai-action-btn" id="aiMinimizeBtn" type="button" aria-label="Minimize">&minus;</button>
          <button class="ai-action-btn" id="aiCloseBtn" type="button" aria-label="Tutup">&times;</button>
        </div>
      </header>

      <div class="ai-chat-body" id="chatBody">
        <div class="chat-msg bot">
          <div class="bot-icon">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
              <rect x="4" y="7" width="16" height="12" rx="3" />
              <path d="M12 3v4M9 12h.01M15 12h.01M9.5 16h5" />
            </svg>
          </div>
          <div class="msg-bubble">
            Halo! Saya Eagles AI Coach. Ada yang bisa saya bantu hari ini?
          </div>
        </div>
      </div>

      <div class="ai-suggestions">
        <button class="chip-btn" type="button" onclick="sendQuickMsg('Jadwal kelas U16?')">Jadwal kelas U16?</button>
        <button class="chip-btn" type="button" onclick="sendQuickMsg('Dimana Lokasi Latihan?')">Dimana Lokasi
          Latihan?</button>
        <button class="chip-btn" type="button" onclick="sendQuickMsg('Bagaimana cara bergabung?')">Bagaimana cara
          bergabung?</button>
      </div>

      <form class="ai-chat-footer" id="aiForm" onsubmit="handleSend(event)">
        <input type="text" class="ai-input" id="aiInput" placeholder="Ask Eagles here!" autocomplete="off">
        <button class="ai-send-btn" type="submit" aria-label="Kirim Pesan">
          <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
            <path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z" />
          </svg>
        </button>
      </form>
    </div>

    <button class="ai-fab" id="aiFab" type="button" aria-label="Buka Pelatih AI">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
        stroke-linecap="round">
        <rect x="4" y="7" width="16" height="12" rx="3" />
        <path d="M12 3v4M9 12h.01M15 12h.01M9.5 16h5" />
      </svg>
    </button>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const aiFab = document.getElementById('aiFab');
      const aiPanel = document.getElementById('aiPanel');
      const aiCloseBtn = document.getElementById('aiCloseBtn');
      const aiMinimizeBtn = document.getElementById('aiMinimizeBtn');

      function toggleChat(e) {
        if (e) e.preventDefault();
        aiPanel.classList.toggle('hidden');
      }

      if (aiFab) aiFab.addEventListener('click', toggleChat);
      if (aiCloseBtn) aiCloseBtn.addEventListener('click', toggleChat);
      if (aiMinimizeBtn) aiMinimizeBtn.addEventListener('click', toggleChat);
    });

    function appendUserMsg(text) {
      const chatBody = document.getElementById('chatBody');
      const msgElement = document.createElement('div');
      msgElement.className = 'chat-msg user';
      msgElement.innerHTML = `<div class="msg-bubble">${text}</div>`;

      chatBody.appendChild(msgElement);
      chatBody.scrollTop = chatBody.scrollHeight;
    }

    function appendBotMsg(text) {
      const chatBody = document.getElementById('chatBody');
      const msgElement = document.createElement('div');
      msgElement.className = 'chat-msg bot';
      msgElement.innerHTML = `
        <div class="bot-icon">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="4" y="7" width="16" height="12" rx="3" />
            <path d="M12 3v4M9 12h.01M15 12h.01M9.5 16h5" />
          </svg>
        </div>
        <div class="msg-bubble">${text}</div>
      `;

      chatBody.appendChild(msgElement);
      chatBody.scrollTop = chatBody.scrollHeight;
    }

    async function handleSend(e) {
      e.preventDefault();
      const input = document.getElementById('aiInput');
      const text = input.value.trim();
      if (!text) return;

      appendUserMsg(text);
      input.value = '';

      await sendToDatabaseAI(text);
    }

    async function sendQuickMsg(text) {
      appendUserMsg(text);
      await sendToDatabaseAI(text);
    }

    async function sendToDatabaseAI(messageText) {
      const chatBody = document.getElementById('chatBody');
      const response = document.createElement('div');
      response.className = 'chat-msg bot loading-msg';
      response.innerHTML = `
        <div class="bot-icon"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="7" width="16" height="12" rx="3"/><path d="M12 3v4M9 12h.01M15 12h.01M9.5 16h5"/></svg></div>
        <div class="msg-bubble" style="color: #64748b; font-style: italic;">Sedang mengetik...</div>
      `;
      chatBody.appendChild(response);
      chatBody.scrollTop = chatBody.scrollHeight;

      try {
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || "{{ csrf_token() }}";
        const askUrl = "{{ route('ai.ask') }}";

        const res = await fetch(askUrl, {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-CSRF-TOKEN": csrfToken
          },
          body: JSON.stringify({ message: messageText })
        });

        const data = await res.json();

        if (chatBody.contains(response)) {
          chatBody.removeChild(response);
        }

        if (res.ok && data && data.answer) {
          appendBotMsg(data.answer);
        } else if (data && data.message) {
          appendBotMsg(data.message);
        } else {
          appendBotMsg("Maaf, terjadi kesalahan saat memproses jawaban.");
        }

      } catch (error) {
        console.error("Error AI Fetch:", error);
        if (chatBody.contains(response)) {
          chatBody.removeChild(response);
        }
        appendBotMsg("Terjadi kesalahan koneksi ke server AI.");
      }
    }
  </script>

  <script src="{{ asset('assets/js/main.js') }}" defer></script>
</body>

</html>