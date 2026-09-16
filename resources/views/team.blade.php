<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tim Pelatih & Manajemen — EAGLES Basketball Academy</title>
  <meta name="description" content="Kenali head coach, asisten pelatih, dan tim manajemen EAGLES Basketball Academy.">
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

    .container-custom {
      max-width: 980px;
      margin: 0 auto;
      padding: 0 16px;
    }

    /* Header Section */
    .page-head-title {
      font-family: 'Anton', sans-serif;
      font-size: 2.2rem;
      color: #002068;
      text-transform: uppercase;
      margin: 40px 0 12px 0;
      letter-spacing: 1px;
    }

    .page-motto {
      font-size: 11px;
      font-weight: 800;
      color: #d90429;
      line-height: 1.6;
      letter-spacing: 1px;
      text-transform: uppercase;
      margin-bottom: 30px;
    }

    .section-title {
      font-family: 'Anton', sans-serif;
      font-size: 1.4rem;
      color: #002068;
      text-transform: uppercase;
      margin: 0 0 8px 0;
    }

    .rule-line {
      border: none;
      border-top: 2px solid #002068;
      margin: 0 0 32px 0;
    }

    /* Cards Grid 3 Column */
    .grid-team {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
      margin-bottom: 60px;
    }

    .card-member {
      border: 1px solid #e2e8f0;
      padding: 16px;
      background: #fff;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
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

    .card-member h3 {
      font-family: 'Anton', sans-serif;
      font-size: 1.4rem;
      color: #002068;
      margin: 0 0 10px 0;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .card-member p {
      font-size: 11px;
      color: #64748b;
      line-height: 1.6;
      margin: 0 0 20px 0;
      padding: 0 4px;
    }

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

    .btn-detail:hover {
      background-color: #001548;
    }

    /* Modal Overlay */
    .modal-overlay {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.65);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 9999;
      padding: 20px;
      opacity: 1;
      visibility: visible;
      transition: opacity 0.2s ease, visibility 0.2s ease;
    }

    .modal-overlay.hidden {
      opacity: 0 !important;
      visibility: hidden !important;
      pointer-events: none !important;
    }

    .modal-content {
      background: #fff;
      width: 100%;
      max-width: 680px;
      border-radius: 8px;
      overflow: hidden;
      position: relative;
      display: flex;
      box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3);
    }

    .modal-left {
      width: 45%;
      padding: 24px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .modal-left img {
      width: 100%;
      max-height: 300px;
      object-fit: cover;
      border-radius: 12px;
    }

    .modal-right {
      width: 55%;
      padding: 32px 28px 28px 12px;
      display: flex;
      flex-direction: column;
    }

    .modal-close {
      position: absolute;
      top: 16px;
      right: 16px;
      background: none;
      border: none;
      font-size: 22px;
      font-weight: bold;
      color: #e6005c;
      cursor: pointer;
    }

    .modal-title {
      font-family: 'Anton', sans-serif;
      font-size: 1.8rem;
      color: #002068;
      text-transform: uppercase;
      margin: 0 0 8px 0;
      letter-spacing: 0.5px;
    }

    .modal-section-title {
      font-family: 'Mulish', sans-serif;
      font-size: 12px;
      font-weight: 800;
      color: #000;
      text-transform: uppercase;
      margin: 16px 0 8px 0;
      letter-spacing: 0.5px;
    }

    .modal-list {
      padding-left: 16px;
      margin: 0 0 24px 0;
      font-size: 12px;
      color: #333;
      line-height: 1.7;
    }

    .modal-list li {
      margin-bottom: 4px;
    }

    .btn-close-full {
      width: 100%;
      background-color: #0033a0;
      color: #fff;
      border: none;
      padding: 12px 0;
      font-family: 'Mulish', sans-serif;
      font-weight: 800;
      font-size: 12px;
      letter-spacing: 1px;
      text-transform: uppercase;
      border-radius: 4px;
      cursor: pointer;
      margin-top: auto;
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
      .grid-team {
        grid-template-columns: 1fr;
      }

      .modal-content {
        flex-direction: column;
      }

      .modal-left,
      .modal-right {
        width: 100%;
        padding: 20px;
      }
    }
  </style>
</head>

<body>

  <!-- NAVBAR (Sudah Disesuaikan dengan Status Auth Admin) -->
  <header class="nav">
    <div class="container nav__inner">
      <a class="brand" href="{{ route('landing') }}" aria-label="EAGLES Academy — beranda">
        <img src="{{ asset('assets/images/logoEAGLES.jpeg') }}" alt="Logo" width="34" height="34"
          style="object-fit: cover; border-radius: 50%;">
        <span class="brand__name">EAGLES <span>Academy</span></span>
      </a>

      <nav class="menu" id="menu" aria-label="Navigasi utama">
        <a href="{{ route('landing') }}">Beranda</a>
        <a href="{{ route('team') }}" aria-current="page">Tim</a>
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
          <p>Ahli strategi penyerangan modern. Fokus pada pergerakan bola cepat, transisi, akurasi tembakan tiga angka.
            Membawa...</p>
          <button class="btn-detail" type="button" data-name="COACH MARCUS" data-role="HEAD COACH"
            data-img="{{ asset('assets/images/coach-marcus.jpg') }}">LIHAT DETAIL</button>
        </article>

        <!-- MEMBER 2 -->
        <article class="card-member">
          <img src="{{ asset('assets/images/coach-sarah.jpg') }}" alt="Coach Sarah" class="member__photo">
          <span class="badge-pink">ASST. COACH</span>
          <h3>COACH SARAH</h3>
          <p>Ahli strategi penyerangan modern. Fokus pada pergerakan bola cepat, transisi, akurasi tembakan tiga angka.
            Membawa...</p>
          <button class="btn-detail" type="button" data-name="COACH SARAH" data-role="ASST. COACH"
            data-img="{{ asset('assets/images/coach-sarah.jpg') }}">LIHAT DETAIL</button>
        </article>

        <!-- MEMBER 3 -->
        <article class="card-member">
          <img src="{{ asset('assets/images/david-chen.jpg') }}" alt="David Chen" class="member__photo">
          <span class="badge-pink">TEAM MANAGER</span>
          <h3>DAVID CHEN</h3>
          <p>Ahli strategi penyerangan modern. Fokus pada pergerakan bola cepat, transisi, akurasi tembakan tiga angka.
            Membawa...</p>
          <button class="btn-detail" type="button" data-name="DAVID CHEN" data-role="TEAM MANAGER"
            data-img="{{ asset('assets/images/david-chen.jpg') }}">LIHAT DETAIL</button>
        </article>

      </div>
    </section>

  </main>

  <!-- MODAL POPUP -->
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

  <!-- SCRIPT MODAL & AI COACH -->
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      // Modal Script
      const modal = document.getElementById('coachModal');
      const closeMainBtn = document.getElementById('closeMainBtn');
      const closeCrossBtn = document.getElementById('closeCrossBtn');
      const openBtns = document.querySelectorAll('.btn-detail');

      const modalTitle = document.getElementById('modalTitle');
      const modalBadge = document.getElementById('modalBadge');
      const modalImg = document.getElementById('modalImg');

      function closeModal() {
        if (modal) modal.classList.add('hidden');
      }

      function openModal(btn) {
        modalTitle.textContent = btn.getAttribute('data-name');
        modalBadge.textContent = btn.getAttribute('data-role');
        modalImg.src = btn.getAttribute('data-img');
        modal.classList.remove('hidden');
      }

      if (closeMainBtn) closeMainBtn.addEventListener('click', closeModal);
      if (closeCrossBtn) closeCrossBtn.addEventListener('click', closeModal);

      if (modal) {
        modal.addEventListener('click', function (e) {
          if (e.target === modal) closeModal();
        });
      }

      openBtns.forEach(btn => {
        btn.addEventListener('click', function () {
          openModal(this);
        });
      });

      // AI Widget Toggle Script
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

    // Functions for AI Chat Logic
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