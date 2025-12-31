<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>

    <nav>
        <div class="logo">
            <i class="fas fa-graduation-cap"></i>
            مدرستي
        </div>

        <ul class="nav-links">
            <li>
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">
                    الرئيسية
                </a>
            </li>

            <li>
                <a href="{{ route('tasks.index') }}" class="{{ request()->routeIs('tasks.*') ? 'active' : '' }}">
                    قائمة المهام
                </a>
            </li>

            <li>
                <a href="{{ route('tasks.create') }}" class="btn-add">
                    إضافة مهمة
                </a>
            </li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>

</html>
