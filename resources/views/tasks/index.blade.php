@extends('layouts.app2')

@section('title', 'قائمة المهام')

@section('content')
    @if (session('success'))
        <div style="background:#e0f7e9;padding:15px;border-radius:10px;margin-bottom:20px;color:#27ae60">
            {{ session('success') }}
        </div>
    @endif

    <!-- الصفحة 2: قائمة المهام (Task List) -->
    <div class="card">
        <h2><i class="fas fa-tasks"></i> جميع المهام</h2>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>عنوان المهمة</th>
                    <th>تاريخ التسليم</th>
                    <th>الحالة</th>
                    <th>إجراءات</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($tasks as $task)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $task['title'] }}</td>
                        <td>@php
                            \Carbon\Carbon::setLocale('ar');
                        @endphp

                            {{ \Carbon\Carbon::parse($task['created_at'])->translatedFormat('d F Y') }}
                        </td>
                        <td>
                            @if ($task['status'] == 2)
                                <span class="status-badge bg-done">منجزة</span>
                            @else
                                <span class="status-badge bg-pending">قيد التنفيذ</span>
                            @endif
                        </td>
                        <td>
                            <a class="action-btn btn-view" style="text-decoration: none" href="{{ route('tasks.show', $task['id']) }}">
                                عرض
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" style="text-align:center">
                            لا توجد مهام بعد
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
