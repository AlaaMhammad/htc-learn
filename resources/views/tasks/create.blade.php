@extends('layouts.app2')

@section('title', 'إضافة مهمة')

@section('content')
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
    
    <div class="card" style="max-width: 600px; margin: 0 auto;">
        <h2 style="margin-bottom: 25px;"><i class="fas fa-file-signature"></i> مهمة جديدة</h2>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>عنوان المهمة</label>
                <input type="text" name="title" class="form-control" placeholder="أدخل عنوان المهمة...">
            </div>

            <div class="form-group">
                <label>تاريخ التسليم</label>
                <input type="date" name="due_date" class="form-control">
            </div>

            <div class="form-group">
                <label>الحالة</label>
                <select name="status" class="form-control">
                    <option value="1">قيد التنفيذ</option>
                    <option value="2">منجزة</option>
                </select>
            </div>

            <div class="form-group">
                <label>وصف إضافي (اختياري)</label>
                <textarea name="description" class="form-control" rows="4" placeholder="تفاصيل المهمة..."></textarea>
            </div>

            <button type="submit" class="btn-submit">حفظ المهمة</button>
        </form>
    </div>
@endsection
