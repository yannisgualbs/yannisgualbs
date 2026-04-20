<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yannis Movie System</title>
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
            color: #1f2937;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 30px;
        }

        .card {
            width: 100%;
            max-width: 950px;
            background: #ffffff;
            border-radius: 20px;
            padding: 45px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.06);
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 45px;
            flex-wrap: wrap;
        }

        .logo img {
            width: 64px;
            height: 64px;
            object-fit: contain;
        }

        .top-nav {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .top-nav a,
        .logout-btn {
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 10px;
            font-size: 14px;
            border: none;
            cursor: pointer;
            font-family: "Inter", sans-serif;
        }

        .top-nav a {
            background: #eef2f7;
            color: #1f2937;
        }

        .top-nav a:hover {
            background: #e2e8f0;
        }

        .logout-btn {
            background: #dc2626;
            color: white;
        }

        .logout-btn:hover {
            background: #b91c1c;
        }

        h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 16px;
            text-align: center;
            color: #111827;
        }

        p {
            font-size: 16px;
            line-height: 1.7;
            color: #4b5563;
            max-width: 620px;
            margin: 0 auto 30px;
            text-align: center;
        }

        .hero-image {
            max-width: 430px;
            margin: 0 auto;
            border-radius: 16px;
            overflow: hidden;
        }

        .hero-image img {
            width: 100%;
            display: block;
            object-fit: cover;
        }

        @media (max-width: 768px) {
            .card {
                padding: 28px 20px;
            }

            .top-bar {
                flex-direction: column;
                align-items: center;
            }

            h1 {
                font-size: 32px;
            }
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="top-bar">
            <div class="logo">
                <img src="{{ asset('images/yannis.png') }}" alt="Logo">
            </div>

            <div class="top-nav">
                @auth
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="logout-btn">Log out</button>
                    </form>
                @else
                    <a href="{{ route('login') }}">Log in</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        </div>

        <h1>Yannis Movie System</h1>

        <p>
            A simple movie platform where users can browse films, manage their accounts,
            and organize their own movie space.
        </p>

        <div class="hero-image">
            <img src="{{ asset('images/yannis2.jpeg') }}" alt="Movie Welcome Image">
        </div>
    </div>
</body>
</html>