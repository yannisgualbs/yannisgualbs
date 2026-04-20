<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yannis Movie Dashboard</title>
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
            padding: 30px;
        }

        .card {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            background: white;
            border-radius: 20px;
            padding: 45px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.06);
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 45px;
        }

        .profile-left {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .profile-left img {
            width: 52px;
            height: 52px;
            border-radius: 50%;
            object-fit: cover;
        }

        .profile-info .name {
            font-size: 16px;
            font-weight: 600;
            color: #111827;
        }

        .profile-info .status {
            font-size: 13px;
            color: #6b7280;
        }

        .top-actions {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        .top-actions a,
        .logout-btn {
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 10px;
            font-size: 14px;
            border: none;
            cursor: pointer;
            font-family: "Inter", sans-serif;
        }

        .top-actions a {
            background: #eef2f7;
            color: #1f2937;
        }

        .top-actions a:hover {
            background: #e2e8f0;
        }

        .logout-btn {
            background: #dc2626;
            color: white;
        }

        .logout-btn:hover {
            background: #b91c1c;
        }

        .logo-center {
            display: flex;
            justify-content: center;
            margin-bottom: 16px;
        }

        .logo-center img {
            width: 72px;
            height: 72px;
            object-fit: contain;
        }

        h1 {
            font-size: 42px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 14px;
            color: #111827;
        }

        .main-text {
            max-width: 700px;
            margin: 0 auto 40px;
            text-align: center;
            color: #4b5563;
            line-height: 1.7;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .info-card {
            background: #f8fafc;
            border: 1px solid #e5e7eb;
            border-radius: 16px;
            padding: 24px;
        }

        .info-card small {
            display: block;
            margin-bottom: 8px;
            color: #6b7280;
            font-size: 12px;
            text-transform: uppercase;
        }

        .info-card h3 {
            font-size: 22px;
            margin-bottom: 10px;
            color: #111827;
        }

        .info-card p {
            color: #4b5563;
            line-height: 1.7;
        }

        @media (max-width: 768px) {
            .card {
                padding: 28px 20px;
            }

            .top-bar {
                flex-direction: column;
                align-items: flex-start;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            h1 {
                font-size: 32px;
            }
        }
    </style>
</head>
<body>
@php
    $avatars = ['avatar.png', 'avatar1.png', 'avatar2.png'];
    $avatar = $avatars[auth()->user()->id % count($avatars)];
@endphp

<div class="card">
    <div class="top-bar">
        <div class="profile-left">
            <img src="{{ asset('images/avatars/' . $avatar) }}" alt="Avatar">
            <div class="profile-info">
                <div class="name">{{ auth()->user()->name }}</div>
                <div class="status">Logged in</div>
            </div>
        </div>

        <div class="top-actions">
            <a href="{{ route('profile.edit') }}">Edit Profile</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="logout-btn">Log out</button>
            </form>
        </div>
    </div>

    <div class="logo-center">
        <img src="{{ asset('images/yannis.png') }}" alt="Logo">
    </div>

    <h1>Welcome to your movie dashboard</h1>

    <p class="main-text">
        Manage your account, personalize your profile, and continue building your movie system in a simple layout.
    </p>

    <div class="info-grid">
        <div class="info-card">
            <small>Movies</small>
            <h3>Movie Library</h3>
            <p>Organize titles and manage movie-related content in one clean dashboard area.</p>
        </div>

        <div class="info-card">
            <small>Users</small>
            <h3>User Avatar</h3>
            <p>Each user is automatically assigned a different avatar based on the available images.</p>
        </div>
    </div>
</div>
</body>
</html>