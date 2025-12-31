@extends('layouts.app2')

@section('title','الرئيسية')

@section('content')
<div class="hero-card">
    <h1>مرحباً بك في نظام متابعة المهام الدراسية</h1>
    <p>النظام الذي يساعدك على تنظيم واجباتك</p>
</div>

<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-number">5</div>
        <p>إجمالي المهام</p>
    </div>
    <div class="stat-card">
        <div class="stat-number">2</div>
        <p>قيد الانتظار</p>
    </div>
    <div class="stat-card">
        <div class="stat-number">1</div>
        <p>متأخرة</p>
    </div>
    <div class="stat-card">
        <div class="stat-number">2</div>
        <p>منجزة</p>
    </div>
</div>
@endsection

