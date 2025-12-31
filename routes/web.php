<?php

use App\Facades\Greeting;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\TasksController;
use App\Services\GreetingServices;
use Illuminate\Support\Facades\Route;



// Frontend Routes
// Route::get('/', [FrontController::class, 'home'])->name('home');

// Route::get('/courses', [FrontController::class, 'courses'])->name('courses');

// Route::get('/instructors', [FrontController::class, 'instructors'])->name('instructors');

// Route::get('/testimonials', [FrontController::class, 'testimonials'])->name('testimonials');

// Route::get('/register', [FrontController::class, 'register'])->name('register');
// Route::post('/register', [FrontController::class, 'registerSubmit'])->name('register.submit');



Route::get('/', [TasksController::class, 'home'])->name('home');

Route::get('/tasks', [TasksController::class, 'index'])->name('tasks.index');

Route::get('/tasks/create', [TasksController::class, 'create'])->name('tasks.create');

Route::get('/tasks/{id}', [TasksController::class, 'show'])->name('tasks.show');
Route::post('/tasks',  [TasksController::class, 'store'])->name('tasks.store');





























Route::get('/facades', function () {
    // $greetingservices = new GreetingServices();
    // return $greetingservices->sayHello('Alaa');

    return Greeting::sayHello('Alaa');
});



// صفحة رئيسية: عرض منتجات عشوائية
Route::get('/products', function () {
    // منتجات عشوائية (هاردكود)
    $products = [
        ['id' => 1, 'name' => 'Laptop', 'price' => 1500],
        ['id' => 2, 'name' => 'Keyboard', 'price' => 100],
        ['id' => 3, 'name' => 'Mouse', 'price' => 50],
        ['id' => 4, 'name' => 'Monitor', 'price' => 300],
    ];

    return view('products.index', compact('products'));
});

// صفحة إضافة منتج (عرض النموذج فقط)
Route::get('/products/create', function () {
    return view('products.create');
});

// صفحة تعديل منتج (عرض فقط بدون حفظ)
Route::get('/products/{id}/edit', function ($id) {
    return view('products.edit', compact('id'));
});
