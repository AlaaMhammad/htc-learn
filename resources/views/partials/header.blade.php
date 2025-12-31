    <!-- Header -->
    <header>
        <div class="container navbar">
            <div class="logo">Code Center</div>
            <nav>
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">الرئيسية</a>
                <a href="{{ route('courses') }}" class="{{ request()->routeIs('courses') ? 'active' : '' }}">الدورات</a>
                <a href="{{ route('instructors') }}"
                    class="{{ request()->routeIs('instructors') ? 'active' : '' }}">المدربون</a>
                <a href="{{ route('testimonials') }}"
                    class="{{ request()->routeIs('testimonials') ? 'active' : '' }}">آراء الطلاب</a>
                <a href="#">تواصل معنا</a>
            </nav>
            <a href="{{ route('register') }}" class="btn">سجّل الآن</a>
        </div>
    </header>
