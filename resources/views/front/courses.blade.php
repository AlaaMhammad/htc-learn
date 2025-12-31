@extends('layouts.app')

@section('title', 'الدورات')

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

    <!-- Courses -->
    <section>
        <div class="container">
            <div class="section-title">
                <h2>مساراتنا التدريبية</h2>
            </div>
            <div class="courses">
                <div class="course">
                    <h3>Full Stack Development</h3>
                    <p>تعلم تطوير الويب من الصفر حتى الاحتراف</p>
                </div>
                <div class="course">
                    <h3>Laravel & PHP</h3>
                    <p>بناء أنظمة ويب احترافية</p>
                </div>
                <div class="course">
                    <h3>Frontend</h3>
                    <p>HTML, CSS, JavaScript, React</p>
                </div>
                <div class="course">
                    <h3>Mobile Apps</h3>
                    <p>تطوير تطبيقات الهواتف</p>
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
