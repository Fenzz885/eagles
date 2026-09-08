<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Tambah Data Pemain — EAGLES Academy</title>
<meta name="theme-color" content="#002068">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Mulish:wght@400;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<style>
  body { font-family: 'Mulish', sans-serif; background-color: #f7fafc; color: #333; margin: 0; }
  .nav { background: #fff; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
  .page-title { font-family: 'Anton', sans-serif; color: #002068; text-transform: uppercase; font-size: 1.8rem; letter-spacing: 1px; margin-bottom: 24px; text-align: center; }
  
  .form-card { background: #fff; max-width: 600px; margin: 40px auto; padding: 40px; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); border-top: 5px solid #002068; }
  .form-group { margin-bottom: 20px; }
  .form-group label { display: block; font-weight: 800; margin-bottom: 8px; font-size: 13px; color: #1a202c; text-transform: uppercase; letter-spacing: 0.5px; }
  .form-control { width: 100%; padding: 12px 16px; border: 1.5px solid #e2e8f0; border-radius: 6px; font-family: 'Mulish', sans-serif; font-size: 14px; box-sizing: border-box; transition: all 0.2s; }
  .form-control:focus { outline: none; border-color: #002068; box-shadow: 0 0 0 3px rgba(0,32,104,0.1); }
  
  .grid-2 { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
  
  .btn-submit { background: #002068; color: white; border: none; padding: 14px; font-weight: 800; border-radius: 6px; cursor: pointer; width: 100%; font-size: 15px; text-transform: uppercase; letter-spacing: 1px; transition: 0.2s; }
  .btn-submit:hover { background: #d90429; }
  .btn-back { display: inline-flex; align-items: center; margin-bottom: 24px; color: #718096; text-decoration: none; font-weight: 700; font-size: 14px; transition: 0.2s; }
  .btn-back:hover { color: #d90429; }
</style>
</head>
<body>

<header class="nav">
  <div class="container nav__inner" style="max-width: 1000px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; padding: 15px 16px;">
    <a class="brand" href="{{ url('/') }}" style="display: flex; align-items: center; text-decoration: none; font-weight: 900; color: #002068; font-size: 1.2rem;">
      <img src="{{ asset('assets/images/logo.png') }}" alt="" width="34" height="34" style="margin-right: 10px;">
      EAGLES ACADEMY
    </a>
  </div>
</header>

<main style="padding: 20px 16px; min-height: 70vh;">
  <div class="form-card">
    <a href="{{ url('/gallery') }}" class="btn-back">← Kembali ke Galeri</a>
    <h1 class="page-title">Tambah Data Pemain</h1>
    
    <form action="{{ route('players.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      
      <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="name" class="form-control" placeholder="Contoh: Bima Arya S." required>
      </div>

      <div class="grid-2">
        <div class="form-group">
          <label>Kota Asal</label>
          <input type="text" name="city" class="form-control" placeholder="Contoh: Jakarta" required>
        </div>
        <div class="form-group">
          <label>Tanggal Lahir</label>
          <input type="date" name="birth_date" class="form-control" required>
        </div>
      </div>

      <div class="grid-2">
        <div class="form-group">
          <label>Kategori Tim</label>
          <select name="team_category" class="form-control" required>
            <option value="TIM ELITE">Senior (Tim Elite)</option>
            <option value="U16">Junior (U16)</option>
            <option value="U12">Kiddos (U12)</option>
          </select>
        </div>
        <div class="form-group">
          <label>Posisi Bermain</label>
          <input type="text" name="position" class="form-control" placeholder="Contoh: Point Guard" required>
        </div>
      </div>

      <div class="form-group">
        <label>Upload Foto Profile</label>
        <input type="file" name="image" class="form-control" accept="image/*" required style="padding: 9px 16px;">
      </div>

      <button type="submit" class="btn-submit">💾 Simpan Pemain</button>
    </form>
  </div>
</main>

<footer style="background: #002068; color: white; text-align: center; padding: 20px; font-size: 13px;">
  <p>&copy; {{ date('Y') }} EAGLES Basketball Academy. Hak Cipta Dilindungi.</p>
</footer>

</body>
</html>