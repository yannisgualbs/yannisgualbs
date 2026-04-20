<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in | Yannis Movie System</title>
    <link rel="icon" type="image/png" href="{{ asset('images/yannis.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Inter", sans-serif;
            background: #f5f6f8;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .card {
            width: 100%;
            max-width: 520px;
            background: white;
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.06);
        }

        .logo {
            text-align: center;
            margin-bottom: 18px;
        }

        .logo img {
            width: 60px;
            height: 60px;
            object-fit: contain;
        }

        h1 {
            text-align: center;
            font-size: 32px;
            color: #111827;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            color: #6b7280;
            margin-bottom: 28px;
            line-height: 1.7;
        }

        .field {
            margin-bottom: 18px;
        }

        .field label {
            display: block;
            margin-bottom: 8px;
            color: #374151;
            font-size: 14px;
        }

        .field input {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #d1d5db;
            border-radius: 10px;
            font-size: 14px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 22px;
            color: #4b5563;
            font-size: 14px;
        }

        .btn {
            width: 100%;
            padding: 13px 18px;
            border: none;
            border-radius: 10px;
            background: #2563eb;
            color: white;
            font-size: 14px;
            cursor: pointer;
        }

        .btn:hover {
            background: #1d4ed8;
        }

        .links {
            margin-top: 24px;
            display: flex;
            justify-content: center;
            gap: 26px;
            row-gap: 12px;
            flex-wrap: wrap;
        }

        .links a {
            text-decoration: none;
            color: #2563eb;
            font-size: 14px;
        }

        .links a:hover {
            text-decoration: underline;
        }

        .error {
            color: #dc2626;
            font-size: 13px;
            margin-top: 6px;
        }

        .status {
            margin-bottom: 16px;
            color: #166534;
            text-align: center;
            font-size: 14px;
        }
    </style>
</head>
<body>
<div class="card">
    <div class="logo">
        <img src="{{ asset('images/yannis.png') }}" alt="Logo">
    </div>

    <h1>Log in</h1>
    <p class="subtitle">Access your Yannis Movie System account.</p>

    <x-auth-session-status class="status" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="field">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="field">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="remember">
            <input id="remember_me" type="checkbox" name="remember">
            <label for="remember_me">Remember me</label>
        </div>

        <button type="submit" class="btn">Log in</button>

        <div class="links">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">Forgot password?</a>
            @endif
            <a href="{{ route('register') }}">Create account</a>
            <a href="{{ url('/') }}">Back to Welcome</a>
        </div>
    </form>
</div>
</body>
</html>