@extends('layouts.app2')

@section('title', 'عرض مهمة')

@section('content')
    <a href="{{ route('tasks.index') }}" class="btn-back" style="text-decoration: none">
        <i class="fas fa-arrow-right"></i>
        عودة للقائمة
    </a>

    <div class="card">
        <div class="task-detail-header">
            <div>
                <h2 style="margin:0; font-size: 1.8rem;">{{ $task['title'] }}</h2>
                <span style="color: #7f8c8d; font-size: 0.9rem;">رقم المهمة: #{{ $task['id'] }}</span>
            </div>
            <span
                class="status-badge
            @if ($task['status'] == 1) bg-pending
            @elseif($task['status'] == 2) bg-done @endif"
                style="font-size: 1.2rem;">
                @if ($task['status'] == 1)
                    قيد التنفيذ
                @elseif($task['status'] == 2)
                    منجزة
                @endif
            </span>
        </div>

        <div class="detail-row">
            <span class="detail-label"><i class="far fa-calendar-alt"></i> تاريخ التسليم:</span>
            <span class="detail-value">@php
                \Carbon\Carbon::setLocale('ar');
            @endphp

                {{ \Carbon\Carbon::parse($task['due_date'])->translatedFormat('d F Y') }}
            </span>
        </div>

        <div class="detail-row">
            <span class="detail-label"><i class="fas fa-info-circle"></i> الوصف:</span>
            <span class="detail-value">
                {{ $task['description'] ?? '-' }}
            </span>
        </div>

        <div class="detail-row">
            <span class="detail-label"><i class="fas fa-clock"></i> تاريخ الإضافة:</span>
            <span class="detail-value">@php
                \Carbon\Carbon::setLocale('ar');
            @endphp

                {{ \Carbon\Carbon::parse($task['created_at'])->translatedFormat('d F Y') }}
            </span>
        </div>

        <div style="margin-top: 30px; text-align: left;">
            <button class="action-btn" style="background: #95a5a6;">تعديل</button>
            <button class="action-btn" style="background: var(--danger);">حذف</button>
        </div>
    </div>
@endsection
