<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    function home()
    {
        return view('front.home');
    }

    function courses()
    {
        return view('front.courses');
    }
    function instructors()
    {
        return view('front.instructors');
    }

    function testimonials()
    {
        return view('front.testimonials');
    }

    function register()
    {
        return view('front.register');
    }

    function registerSubmit(Request $request)
    {
        // Validate the form data
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'phone'      => 'required|numeric|digits_between:10,20',
            'birthdate'  => 'required|date',

            'courses'    => 'required|array|min:1',
            'courses.*'  => 'string|in:PHP,Laravel,JavaScript,UI / UX',

            'days'       => 'required|array|size:3',
            'days.*'     => 'string|in:السبت,الأحد,الإثنين,الثلاثاء,الأربعاء,الخميس',
        ], [
            'name.required'      => 'الاسم مطلوب',
            'phone.required'     => 'رقم الموبايل مطلوب',
            'birthdate.required' => 'تاريخ الميلاد مطلوب',

            'courses.required'   => 'يرجى اختيار دورة واحدة على الأقل',
            'courses.array'      => 'صيغة الدورات غير صحيحة',

            'days.required'      => 'يرجى اختيار الأيام المناسبة',
            'days.size'          => 'يجب اختيار 3 أيام بالضبط',
        ]);

        return redirect()->route('register')->with('success', 'تم التسجيل بنجاح!');
    }
}
