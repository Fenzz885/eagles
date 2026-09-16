<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kelompok Umur & Jadwal Latihan — EAGLES Basketball Academy</title>
  <meta name="description"
    content="Program U12, U16, dan U18 beserta jadwal latihan mingguan EAGLES Basketball Academy.">
  <meta name="theme-color" content="#002068">
  <link rel="icon" type="image/png" href="{{ asset('assets/images/logoEAGLES.jpeg') }}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Mulish:wght@400;600;700;800;900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <style>
    body {
      font-family: 'Mulish', sans-serif;
      background-color: #fff;
      color: #333;
      margin: 0;
    }

    /* Container & Utility */
    .container-custom {
      max-width: 960px;
      margin: 0 auto;
      padding: 0 16px;
    }

    /* Banner Header */
    .hero-banner {
      position: relative;
      background: url('{{ asset('assets/images/gal-1.jpg') }}') center/cover no-repeat;
      padding-top: 60px;
      padding-bottom: 140px;
      min-height: 280px;
      border-bottom: 2px solid #002068;
      display: flex;
      align-items: flex-start;
    }

    .hero-banner::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(255, 255, 255, 0.75);
    }

    .hero-content {
      position: relative;
      z-index: 1;
      max-width: 960px;
      margin: 0 auto;
      width: 100%;
      padding: 0 16px;
    }

    .hero-title {
      font-family: 'Anton', sans-serif;
      font-size: 2.2rem;
      color: #002068;
      letter-spacing: 1px;
      margin: 0 0 12px 0;
      text-transform: uppercase;
    }

    .hero-subtags {
      font-size: 11px;
      font-weight: 800;
      color: #d90429;
      line-height: 1.6;
      letter-spacing: 1px;
    }

    /* Section Title */
    .section-heading {
      font-family: 'Anton', sans-serif;
      color: #002068;
      font-size: 1.5rem;
      text-transform: uppercase;
      margin-bottom: 8px;
    }

    .divider-line {
      border: none;
      border-top: 2px solid #002068;
      margin: 0 0 32px 0;
    }

    /* Cards Grid 3 Column */
    .grid-program {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      margin-bottom: 50px;
    }

    .card-program {
      border: 1px solid #e2e8f0;
      border-top: 3px solid #002068;
      padding: 24px 16px;
      background: #fff;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .card-program h3 {
      font-family: 'Anton', sans-serif;
      font-size: 1.25rem;
      color: #002068;
      margin: 0 0 16px 0;
    }

    .card-program p {
      font-size: 12px;
      color: #64748b;
      line-height: 1.6;
      margin: 0 0 24px 0;
    }

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
    .table-container {
      width: 100%;
      overflow-x: auto;
      margin-bottom: 80px;
    }

    .table-schedule {
      width: 100%;
      border-collapse: collapse;
      border: 1px solid #cbd5e1;
    }

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

    .table-schedule tr:nth-child(even) {
      background-color: #f8fafc;
    }

    .badge-table {
      background-color: #f1f5f9;
      color: #334155;
      font-size: 10px;
      font-weight: 700;
      padding: 3px 8px;
      border-radius: 2px;
    }

    /* WIDGET AI STYLES */
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

    @media (max-width: 768px) {
      .grid-program {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body>

  <!-- NAVBAR -->
  <header class="nav">
    <div class="container nav__inner">
      <a class="brand" href="{{ route('landing') }}" aria-label="EAGLES Academy — beranda">
        <img src="{{ asset('assets/images/logoEAGLES.jpeg') }}" alt="Logo" width="34" height="34"
          style="object-fit: cover; border-radius: 50%;">
        <span class="brand__name">EAGLES <span>Academy</span></span>
      </a>

      <nav class="menu" id="menu" aria-label="Navigasi utama">
        <a href="{{ route('landing') }}">Beranda</a>
        <a href="{{ route('team') }}">Tim</a>
        <a href="{{ route('schedule') }}" aria-current="page">Jadwal</a>
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

    <!-- BANNER HEADER -->
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
              <p>Pembentukan teknik dasar, dribbling, dan passing. Fokus pada fundamental dan ketertarikan dalam bermain
                basket.</p>
            </div>
            <div>
              <span class="badge-gray">KIDDOS / PEMULA</span>
            </div>
          </article>

          <!-- CARD 2 -->
          <article class="card-program">
            <div>
              <h3>U16 (13-16 Tahun)</h3>
              <p>Pemantapan fisik, taktik tim, dan shooting. Pengembangan sistem permainan dan persiapan mental
                kompetitif.</p>
            </div>
            <div>
              <span class="badge-gray">JUNIOR / MENENGAH</span>
            </div>
          </article>

          <!-- CARD 3 -->
          <article class="card-program">
            <div>
              <h3>U18 (17-18 Tahun)</h3>
              <p>Persiapan kompetisi, kejuaraan, dan private workout. Program intensif untuk calon atlet profesional.
              </p>
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
                  <td>{{ \Carbon\Carbon::parse($schedule->start_time)->format('H.i') }} -
                    {{ \Carbon\Carbon::parse($schedule->end_time)->format('H.i') }}</td>
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

  <!-- WIDGET AI COACH -->
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

  <script src="{{ asset('assets/js/main.js') }}" defer></script>

  <!-- SCRIPT AI COACH -->
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
        const askUrl = "/ai/ask";
        const res = await fetch(askUrl, {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",
            "X-CSRF-TOKEN": "{{ csrf_token() }}"
          },
          body: JSON.stringify({ message: messageText })
        });

        const data = await res.json();
        if (chatBody.contains(response)) {
          chatBody.removeChild(response);
        }

        if (data && data.answer) {
          appendBotMsg(data.answer);
        } else {
          appendBotMsg("Terjadi kesalahan saat memproses jawaban.");
        }
      } catch (error) {
        console.error("Error:", error);
        if (chatBody.contains(response)) {
          chatBody.removeChild(response);
        }
        appendBotMsg("Terjadi kesalahan koneksi ke server AI.");
      }
    }
  </script>

</body>

</html>