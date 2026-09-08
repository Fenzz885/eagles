<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin — EAGLES Academy</title>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Mulish:wght@400;600;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Mulish', sans-serif; background: #002068; height: 100vh; display: flex; align-items: center; justify-content: center; margin: 0; }
        .login-card { background: #fff; padding: 40px; border-radius: 12px; width: 100%; max-width: 380px; box-shadow: 0 10px 25px rgba(0,0,0,0.2); }
        .login-card h2 { font-family: 'Anton', sans-serif; color: #002068; margin-top: 0; text-align: center; font-size: 24px; letter-spacing: 1px; }
        .form-group { margin-bottom: 20px; }
        .form-group label { display: block; font-weight: 700; font-size: 12px; color: #4a5568; margin-bottom: 6px; text-transform: uppercase; }
        .form-group input { width: 100%; padding: 10px 12px; border: 1px solid #cbd5e0; border-radius: 6px; font-size: 14px; box-sizing: border-box; }
        .btn-submit { width: 100%; background: #002068; color: #fff; font-weight: 800; border: none; padding: 12px; border-radius: 6px; cursor: pointer; font-size: 14px; text-transform: uppercase; transition: background 0.2s; }
        .btn-submit:hover { background: #d90429; }
        .error-msg { background: #fed7d7; color: #9b2c2c; padding: 10px; border-radius: 6px; font-size: 13px; margin-bottom: 20px; }
    </style>
</head>
<body>

<div class="login-card">
    <h2>EAGLES ADMIN LOGIN</h2>

    @if($errors->any())
        <div class="error-msg">
            {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Email Admin</label>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="admin@eagles.com" required autofocus>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" placeholder="••••••••" required>
        </div>

        <button type="submit" class="btn-submit">Masuk ke Mode Admin</button>
    </form>
    
    <div style="text-align: center; margin-top: 20px;">
        <a href="{{ url('/') }}" style="color: #718096; text-decoration: none; font-size: 12px;">← Kembali ke Website Utama</a>
    </div>
</div>

</body>
</html>