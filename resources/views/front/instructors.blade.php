@extends('layouts.app')

@section('title', 'المدربون')

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

    <!-- Instructors -->
    <section>
        <div class="container">
            <div class="section-title">
                <h2>مدربونا</h2>
            </div>
            <div class="instructors">
                <div class="instructor">
                    <img src="https://via.placeholder.com/120">
                    <h4>أ. علي</h4>
                    <p>Laravel Developer</p>
                </div>
                <div class="instructor">
                    <img src="https://via.placeholder.com/120">
                    <h4>أ. سامي</h4>
                    <p>Frontend Expert</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="cta">
        <h2>ابدأ رحلتك البرمجية الآن</h2>
        <a href="{{ route('register') }}" class="btn">سجّل الآن</a>
    </section>

@endsection
