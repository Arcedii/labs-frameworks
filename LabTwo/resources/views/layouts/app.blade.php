<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<head>
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <nav>
            <!-- Меню навигации -->
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
