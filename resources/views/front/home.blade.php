@extends('layouts.app')

@section('title', 'الرئيسية')

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

    <!-- Why Us -->
    <section>
        <div class="container">
            <div class="section-title">
                <h2>لماذا مركزنا؟</h2>
            </div>
            <div class="features">
                <div class="feature-box">
                    <h3>تدريب عملي</h3>
                    <p>مشاريع حقيقية من سوق العمل</p>
                </div>
                <div class="feature-box">
                    <h3>مدربون محترفون</h3>
                    <p>خبرة عملية وتقنية عالية</p>
                </div>
                <div class="feature-box">
                    <h3>مناهج حديثة</h3>
                    <p>أحدث التقنيات المطلوبة</p>
                </div>
                <div class="feature-box">
                    <h3>دعم وظيفي</h3>
                    <p>توجيه ومتابعة بعد التخرج</p>
                </div>
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

    <!-- Stats -->
    <section class="stats">
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
