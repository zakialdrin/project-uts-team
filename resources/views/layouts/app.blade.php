<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project UTS - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    
    <nav>
        <div class="nav-links">
            <a href="{{ route('home') }}" class="{{ Route::is('home') ? 'active' : '' }}">Home</a>
            <a href="{{ route('about') }}" class="{{ Route::is('about') ? 'active' : '' }}">About</a>
        </div>
        <div class="student-info">
            <span>2301010023 - AHMAD ZAKI ALDRIN  (GANJIL)</span>
            <span>2301010012 - RATNO JULIONO (GENAP)</span>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

</body>
</html>
