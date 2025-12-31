<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'مركز تدريب برمجيات')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">


    @stack('styles')
</head>

<body>

    {{-- Header --}}
    @include('partials.header')

    {{-- Page Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    {{-- course --}}
    <script>
        let selectedCourses = [];

        function toggleCourses() {
            document.getElementById('courseOptions').style.display = 'block';
        }

        function addCourse(course) {
            if (selectedCourses.includes(course)) return;

            selectedCourses.push(course);
            renderCourses();
        }

        function removeCourse(course) {
            selectedCourses = selectedCourses.filter(c => c !== course);
            renderCourses();
        }

        function renderCourses() {
            const container = document.getElementById('selectedCourses');
            const hidden = document.getElementById('coursesHidden');

            container.innerHTML = '';
            hidden.innerHTML = '';

            selectedCourses.forEach(course => {
                container.innerHTML += `
            <div class="tag">
                ${course}
                <span onclick="removeCourse('${course}')">×</span>
            </div>
        `;

                hidden.innerHTML += `
            <input type="hidden" name="courses[]" value="${course}">
        `;
            });
        }
    </script>

    {{-- days --}}
    <script>
        let selectedDays = [];

        function toggleDays() {
            document.getElementById('dayOptions').style.display = 'block';
        }

        function addDay(day) {
            if (selectedDays.includes(day)) return;

            if (selectedDays.length >= 3) {
                alert('يمكن اختيار 3 أيام فقط');
                return;
            }

            selectedDays.push(day);
            renderDays();
        }

        function removeDay(day) {
            selectedDays = selectedDays.filter(d => d !== day);
            renderDays();
        }

        function renderDays() {
            const container = document.getElementById('selectedDays');
            const hidden = document.getElementById('daysHidden');

            container.innerHTML = '';
            hidden.innerHTML = '';

            selectedDays.forEach(day => {
                container.innerHTML += `
            <div class="tag days-tag">
                ${day}
                <span onclick="removeDay('${day}')">×</span>
            </div>
        `;

                hidden.innerHTML += `
            <input type="hidden" name="days[]" value="${day}">
        `;
            });
        }
    </script>


    @stack('scripts')
</body>

</html>
