@extends('layouts.app')

@section('title', 'آراء الطلاب')

@section('content')

    <!-- Hero -->
    <section class="hero">
        <div class="container hero-content">
            <div>
                <h1>تعلم البرمجة وابدأ مستقبلك التقني</h1>
                <p>مركز تدريب متخصص في تطوير البرمجيات، نقدم دورات عملية تؤهلك لسوق العمل.</p>
                <div class="hero-buttons">
                    <a href="{{ route('courses') }}" class="btn">تصفح الدورات</a>
                    <a href="#" class="btn" style="background:#fff;color:#000;">تواصل معنا</a>
                </div>
            </div>
            <div>
                <!-- صورة مستقبلًا -->
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section>
        <div class="container">
            <div class="section-title">
                <h2>آراء طلابنا</h2>
            </div>
            <div class="testimonials">
                <div class="testimonial">
                    <p>الدورة كانت ممتازة وغيرت مساري المهني بالكامل.</p>
                    <strong>- أحمد</strong>
                </div>
                <div class="testimonial">
                    <p>شرح واضح وتطبيق عملي رائع.</p>
                    <strong>- محمد</strong>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="stats" style="margin-bottom: 50px ">
        <div class="container stats-grid">
            <div class="stat">
                <h3>+500</h3>
                <p>طالب متخرج</p>
            </div>
            <div class="stat">
                <h3>+20</h3>
                <p>دورة تدريبية</p>
            </div>
            <div class="stat">
                <h3>+10</h3>
                <p>مدربين محترفين</p>
            </div>
            <div class="stat">
                <h3>90%</h3>
                <p>رضا الطلاب</p>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta">
        <h2>ابدأ رحلتك البرمجية الآن</h2>
        <a href="{{ route('register') }}" class="btn">سجّل الآن</a>
    </section>

@endsection
