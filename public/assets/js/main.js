/* ==========================================================================
   EAGLES Basketball Academy — main.js
   Front-end statis (tanpa backend). Data pendaftaran disimpan sementara
   di localStorage supaya pemain baru langsung muncul di halaman Galeri.
   ========================================================================== */
(function () {
  'use strict';

  /* --------------------------------------------------------------------
     KONFIGURASI — ubah di sini saja
     -------------------------------------------------------------------- */
  var CONFIG = {
    WA_ADMIN: '6281234567890',
    WA_TEXT_DAFTAR: 'Halo Admin EAGLES, saya mau daftar program latihan basket. Bisa minta info biaya dan jadwalnya?',
    STORAGE_KEY: 'eagles.players.v1',
    MAX_UPLOAD_MB: 5
  };

  /* -------------------------------------------------------------------- */
  var $ = function (sel, ctx) { return (ctx || document).querySelector(sel); };
  var $$ = function (sel, ctx) { return Array.prototype.slice.call((ctx || document).querySelectorAll(sel)); };

  function waLink(text) {
    return 'https://wa.me/' + CONFIG.WA_ADMIN + '?text=' + encodeURIComponent(text || CONFIG.WA_TEXT_DAFTAR);
  }

  function readPlayers() {
    try { return JSON.parse(localStorage.getItem(CONFIG.STORAGE_KEY)) || []; }
    catch (e) { return []; }
  }

  function writePlayers(list) {
    try { localStorage.setItem(CONFIG.STORAGE_KEY, JSON.stringify(list)); return true; }
    catch (e) { return false; }
  }

  function esc(str) {
    return String(str == null ? '' : str)
      .replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;')
      .replace(/"/g, '&quot;').replace(/'/g, '&#39;');
  }

  /* 1. Tautan WhatsApp ================================================== */
  function initWhatsApp() {
    $$('[data-wa]').forEach(function (el) {
      el.href = waLink(el.getAttribute('data-wa'));
      el.target = '_blank';
      el.rel = 'noopener';
    });
  }

  /* 2. Navbar: halaman aktif + menu mobile ============================== */
  function initNav() {
    var page = (location.pathname.split('/').pop() || 'index.html').toLowerCase();

    $$('.menu a[href]').forEach(function (a) {
      var href = (a.getAttribute('href') || '').toLowerCase();
      if (href === page && !a.hasAttribute('aria-current')) a.setAttribute('aria-current', 'page');
    });

    var toggle = $('#navToggle');
    var menu = $('#menu');
    if (!toggle || !menu) return;

    function setOpen(open) {
      menu.classList.toggle('is-open', open);
      toggle.setAttribute('aria-expanded', String(open));
      toggle.setAttribute('aria-label', open ? 'Tutup menu navigasi' : 'Buka menu navigasi');
    }

    toggle.addEventListener('click', function () {
      setOpen(!menu.classList.contains('is-open'));
    });

    menu.addEventListener('click', function (e) {
      if (e.target.closest('a')) setOpen(false);
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && menu.classList.contains('is-open')) {
        setOpen(false);
        toggle.focus();
      }
    });
  }

  /* 3. Tahun otomatis =================================================== */
  function initYear() {
    $$('[data-year]').forEach(function (el) { el.textContent = new Date().getFullYear(); });
  }

  /* 4. Modal profil pelatih (halaman Team) ============================== */
  function initCoachModal() {
    var modal = $('#coachModal');
    if (!modal) return;

    var media = $('#modalMedia');
    var name = $('#modalName');
    var tags = $('#modalTags');
    var list = $('#modalList');
    var waBtn = $('#modalWa');
    var lastFocus = null;

    function open(card) {
      var detail = $('.member__detail', card);
      lastFocus = document.activeElement;

      name.textContent = card.getAttribute('data-name') || '';
      var photo = card.getAttribute('data-photo-large');
      media.style.backgroundImage = photo ? "url('" + photo + "')" : 'none';

      tags.innerHTML = '';
      (card.getAttribute('data-tags') || '').split('|').filter(Boolean).forEach(function (t, i) {
        var span = document.createElement('span');
        span.className = 'badge ' + (i === 0 ? 'badge--pink' : 'badge--outline');
        span.textContent = t;
        tags.appendChild(span);
      });

      list.innerHTML = detail ? detail.innerHTML : '';
      waBtn.href = waLink('Halo Admin EAGLES, saya ingin bertanya tentang ' + card.getAttribute('data-name') + '.');

      modal.classList.add('is-open');
      document.body.style.overflow = 'hidden';
      $('.modal__close', modal).focus();
    }

    function close() {
      modal.classList.remove('is-open');
      document.body.style.overflow = '';
      if (lastFocus) lastFocus.focus();
    }

    $$('[data-open-coach]').forEach(function (btn) {
      btn.addEventListener('click', function () { open(btn.closest('.member')); });
    });

    modal.addEventListener('click', function (e) {
      if (e.target === modal || e.target.closest('[data-close]')) close();
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && modal.classList.contains('is-open')) close();
    });

    // Fokus tetap di dalam modal saat dibuka
    modal.addEventListener('keydown', function (e) {
      if (e.key !== 'Tab') return;
      var f = $$('a[href],button:not([disabled])', modal).filter(function (el) { return el.offsetParent !== null; });
      if (!f.length) return;
      var first = f[0], last = f[f.length - 1];
      if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
      else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
    });
  }

  /* 5. Tab galeri ======================================================= */
  function initTabs() {
    var tablist = $('[data-tabs]');
    if (!tablist) return;
    var tabs = $$('.tab', tablist);

    function select(tab) {
      tabs.forEach(function (t) {
        var on = t === tab;
        t.setAttribute('aria-selected', String(on));
        t.tabIndex = on ? 0 : -1;
        var panel = document.getElementById(t.getAttribute('aria-controls'));
        if (panel) panel.hidden = !on;
      });
    }

    tabs.forEach(function (tab, i) {
      tab.addEventListener('click', function () { select(tab); });
      tab.addEventListener('keydown', function (e) {
        var next = null;
        if (e.key === 'ArrowRight') next = tabs[(i + 1) % tabs.length];
        if (e.key === 'ArrowLeft') next = tabs[(i - 1 + tabs.length) % tabs.length];
        if (e.key === 'Home') next = tabs[0];
        if (e.key === 'End') next = tabs[tabs.length - 1];
        if (next) { e.preventDefault(); select(next); next.focus(); }
      });
    });
  }

  /* 6. Tombol "Muat Lebih Banyak" di galeri foto ======================== */
  function initLoadMore() {
    var btn = $('#loadMore');
    if (!btn) return;
    btn.addEventListener('click', function () {
      var hidden = $$('.gallery-item[hidden]');
      hidden.slice(0, 4).forEach(function (el) { el.hidden = false; });
      if ($$('.gallery-item[hidden]').length === 0) {
        btn.disabled = true;
        btn.textContent = 'Semua foto sudah ditampilkan';
      }
    });
  }

  /* 7. Daftar pemain hasil pendaftaran (halaman Galeri) ================= */
  function initRoster() {
    var host = $('#rosterDynamic');
    if (!host) return;

    var players = readPlayers();
    if (!players.length) return;

    var groups = { 'Elite Squad': [], 'U16': [], 'U12': [] };
    players.forEach(function (p) {
      var key = groups[p.kategori] ? p.kategori : 'U12';
      groups[key].push(p);
    });

    var html = '';
    Object.keys(groups).forEach(function (key) {
      if (!groups[key].length) return;
      html += '<h3 class="group-label">Pendaftar baru — ' + esc(key) + '</h3>';
      html += '<div class="grid grid--players">';
      groups[key].forEach(function (p) {
        html +=
          '<article class="card player player--new">' +
            '<div class="player__photo">' +
              (p.foto
                ? '<img src="' + esc(p.foto) + '" alt="Foto ' + esc(p.nama) + '">'
                : '') +
            '</div>' +
            '<span class="badge badge--pink">' + esc(p.kategori) + '</span>' +
            '<p class="player__name">' + esc(p.nama) + '</p>' +
            '<p class="player__meta">' + esc(p.tempatLahir) + ', ' + esc(p.tanggalLahir) + '<br>Tahun Masuk: ' + esc(p.tahunMasuk) + '</p>' +
          '</article>';
      });
      html += '</div>';
    });

    host.innerHTML = html;
    host.hidden = false;
  }

  /* 8. Formulir registrasi ============================================== */
  function initRegisterForm() {
    var form = $('#registerForm');
    if (!form) return;

    var status = $('#formStatus');
    var fileInput = $('#foto');
    var dropzone = $('#dropzone');
    var preview = $('#fotoPreview');
    var fotoDataUrl = '';

    /* --- Upload foto: klik, keyboard, dan drag & drop --- */
    function handleFile(file) {
      if (!file) return;
      if (!/^image\/(jpeg|png)$/.test(file.type)) {
        setFieldError('foto', 'Format harus JPG atau PNG.');
        return;
      }
      if (file.size > CONFIG.MAX_UPLOAD_MB * 1024 * 1024) {
        setFieldError('foto', 'Ukuran maksimal ' + CONFIG.MAX_UPLOAD_MB + 'MB.');
        return;
      }
      setFieldError('foto', '');
      var reader = new FileReader();
      reader.onload = function (e) {
        fotoDataUrl = e.target.result;
        preview.src = fotoDataUrl;
        dropzone.classList.add('has-file');
        $('#dropzoneText').textContent = file.name;
      };
      reader.readAsDataURL(file);
    }

    dropzone.addEventListener('click', function () { fileInput.click(); });
    dropzone.addEventListener('keydown', function (e) {
      if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); fileInput.click(); }
    });
    fileInput.addEventListener('change', function () { handleFile(fileInput.files[0]); });

    ['dragenter', 'dragover'].forEach(function (ev) {
      dropzone.addEventListener(ev, function (e) { e.preventDefault(); dropzone.classList.add('is-drag'); });
    });
    ['dragleave', 'drop'].forEach(function (ev) {
      dropzone.addEventListener(ev, function (e) { e.preventDefault(); dropzone.classList.remove('is-drag'); });
    });
    dropzone.addEventListener('drop', function (e) {
      if (e.dataTransfer && e.dataTransfer.files.length) handleFile(e.dataTransfer.files[0]);
    });

    /* --- Validasi --- */
    function setFieldError(id, msg) {
      var err = $('#err-' + id);
      var input = document.getElementById(id);
      if (err) err.textContent = msg;
      if (input) {
        if (msg) input.setAttribute('aria-invalid', 'true');
        else input.removeAttribute('aria-invalid');
      }
    }

    function validate() {
      var errors = [];
      var v = function (id) { var el = document.getElementById(id); return el ? el.value.trim() : ''; };

      if (v('nama').length < 3) { setFieldError('nama', 'Nama minimal 3 karakter.'); errors.push('nama'); }
      else setFieldError('nama', '');

      if (!v('tempat')) { setFieldError('tempat', 'Tempat lahir wajib diisi.'); errors.push('tempat'); }
      else setFieldError('tempat', '');

      var dd = parseInt(v('dd'), 10), mm = v('mm'), yyyy = parseInt(v('yyyy'), 10);
      var thisYear = new Date().getFullYear();
      if (!(dd >= 1 && dd <= 31) || !mm || !(yyyy >= 1990 && yyyy <= thisYear)) {
        setFieldError('dd', 'Lengkapi tanggal, bulan, dan tahun lahir yang valid.');
        errors.push('dd');
      } else setFieldError('dd', '');

      if (!v('kategori')) { setFieldError('kategori', 'Pilih kategori umur.'); errors.push('kategori'); }
      else setFieldError('kategori', '');

      var wa = v('wa').replace(/[\s-]/g, '');
      if (!/^(08|628|\+628)\d{7,12}$/.test(wa)) {
        setFieldError('wa', 'Contoh nomor yang benar: 08123456789.');
        errors.push('wa');
      } else setFieldError('wa', '');

      return errors;
    }

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var errors = validate();

      if (errors.length) {
        status.className = 'form-status is-err';
        status.textContent = 'Ada ' + errors.length + ' isian yang belum benar. Silakan periksa kembali.';
        var first = document.getElementById(errors[0]);
        if (first) first.focus();
        return;
      }

      var val = function (id) { return document.getElementById(id).value.trim(); };
      var player = {
        nama: val('nama'),
        tempatLahir: val('tempat'),
        tanggalLahir: val('dd').padStart(2, '0') + ' ' + val('mm') + ' ' + val('yyyy'),
        kategori: val('kategori'),
        wa: val('wa'),
        tahunMasuk: new Date().getFullYear(),
        foto: fotoDataUrl
      };

      var list = readPlayers();
      list.push(player);

      if (!writePlayers(list)) {
        // Biasanya karena foto terlalu besar untuk localStorage
        player.foto = '';
        list[list.length - 1] = player;
        writePlayers(list);
      }

      status.className = 'form-status is-ok';
      status.textContent = 'Pendaftaran ' + player.nama + ' berhasil disimpan. Mengarahkan ke Daftar Pemain…';
      form.reset();
      dropzone.classList.remove('has-file');
      fotoDataUrl = '';

      setTimeout(function () { location.href = 'gallery.html#roster'; }, 1400);
    });
  }

  /* 9. Widget AI Coach (placeholder, backend belum ada) ================= */
  function initAiWidget() {
    var fab = $('#aiFab');
    var panel = $('#aiPanel');
    if (!fab || !panel) return;

    fab.addEventListener('click', function () {
      var open = panel.classList.toggle('is-open');
      fab.setAttribute('aria-expanded', String(open));
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && panel.classList.contains('is-open')) {
        panel.classList.remove('is-open');
        fab.setAttribute('aria-expanded', 'false');
        fab.focus();
      }
    });
  }

  /* Init ================================================================ */
  function init() {
    initWhatsApp();
    initNav();
    initYear();
    initCoachModal();
    initTabs();
    initLoadMore();
    initRoster();
    initRegisterForm();
    initAiWidget();
  }

  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init);
  else init();
})();
