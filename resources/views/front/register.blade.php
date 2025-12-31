@extends('layouts.app')

@section('title', 'التسجيل')

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

    <div class="register-card">
        @if ($errors->any())
            <div style="background:#ffecec;padding:15px;border-radius:10px;margin-bottom:20px">
                <ul style="margin:0;padding-right:20px">
                    @foreach ($errors->all() as $error)
                        <li style="color:#c0392b">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('success'))
            <div style="background:#e0f7e9;padding:15px;border-radius:10px;margin-bottom:20px;color:#27ae60">
                {{ session('success') }}
            </div>
        @endif
        <h2>نموذج التسجيل</h2>

        <form onsubmit="return validateDays()" action="{{ route('register.submit') }}" method="POST">
            @csrf

            <div class="form-group">
                <label>الاسم الكامل</label>
                <input type="text" name="name" value="{{ old('name') }}">
            </div>

            <div class="form-group">
                <label>رقم الموبايل</label>
                <input type="tel" name="phone" value="{{ old('phone') }}">
            </div>

            <div class="form-group">
                <label>تاريخ الميلاد</label>
                <input type="date" name="birthdate" value="{{ old('birthdate') }}">
            </div>

            <div class="form-group">
                <label>الدورات المطلوبة</label>

                <div class="multi-select" onclick="toggleCourses()">
                    <div id="selectedCourses" class="tags-inline "></div>
                    <input type="text" placeholder="اختر الدورات" name="courses" readonly value="{{ old('courses') }}">
                </div>

                <div class="options" id="courseOptions">
                    <div onclick="addCourse('PHP')">PHP</div>
                    <div onclick="addCourse('Laravel')">Laravel</div>
                    <div onclick="addCourse('JavaScript')">JavaScript</div>
                    <div onclick="addCourse('UI / UX')">UI / UX</div>
                </div>

                <div id="coursesHidden"></div>

            </div>


            <div class="form-group">
                <label>الأيام المناسبة (اختر 3 أيام فقط)</label>

                <div class="multi-select" onclick="toggleDays()">
                    <div id="selectedDays" class="tags-inline "></div>
                    <input type="text" placeholder="اختر الأيام" name="days" readonly value="{{ old('days') }}">
                </div>

                <div class="options" id="dayOptions">
                    <div onclick="addDay('السبت')">السبت</div>
                    <div onclick="addDay('الأحد')">الأحد</div>
                    <div onclick="addDay('الإثنين')">الإثنين</div>
                    <div onclick="addDay('الثلاثاء')">الثلاثاء</div>
                    <div onclick="addDay('الأربعاء')">الأربعاء</div>
                    <div onclick="addDay('الخميس')">الخميس</div>
                </div>

                <div id="daysHidden"></div>
            </div>


            <button type="submit" class="submit-btn">سجل الآن</button>
        </form>
    </div>
@endsection
