<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            background-color: #212529;
            color: white;
            height: 100vh;
            padding-top: 20px;
            position: fixed;
            width: 220px;
        }
        .sidebar a {
            color: white;
            display: block;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 4px;
        }
        .sidebar a:hover {
            background-color: #343a40;
        }
        .content {
            margin-left: 230px;
            padding: 20px;
        }
        .navbar {
            background-color: #ffffff;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>

    {{-- Sidebar --}}
    <div class="sidebar">
        <h4 class="text-center mb-4">Admin Panel</h4>
        <a href="{{ route('admin.dashboard') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="{{ route('admin.articles.index') }}"><i class="fas fa-newspaper"></i> Artikel</a>
        <a href="{{ route('admin.portfolios.index') }}"><i class="fas fa-briefcase"></i> Portofolio</a>
        <a href="{{ route('admin.attendances.index') }}"><i class="fas fa-calendar-check"></i> Absen Karyawan</a>
        <a href="{{ route('admin.users.index') }}"><i class="fas fa-users"></i> User</a>
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
           <i class="fas fa-sign-out-alt"></i> Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>

    {{-- Content --}}
    <div class="content">
        {{-- Navbar --}}
        <nav class="navbar navbar-expand-lg navbar-light mb-4">
            <div class="container-fluid">
                <span class="navbar-brand">Selamat Datang, {{ Auth::user()->name ?? 'Admin' }}</span>
            </div>
        </nav>

        {{-- Main Content --}}
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
