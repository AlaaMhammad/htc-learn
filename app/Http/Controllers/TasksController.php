<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    function home()
    {
        return view('tasks.home');
    }


    public function index(Request $request)
    {
        $tasks = session('tasks', []);
        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'due_date' => 'required|date',
            'status' => 'required',
            'description' => 'nullable',
        ]);

        $tasks = session('tasks', []);

        $tasks[] = [
            'id' => count($tasks) + 1,
            'title' => $request->title,
            'due_date' => $request->due_date,
            'status' => $request->status,
            'description' => $request->description,
            'created_at' => now(),
        ];

        session(['tasks' => $tasks]);

        return redirect()
            ->route('tasks.index')
            ->with('success', 'تمت إضافة المهمة بنجاح');
    }

    public function show($id)
    {
        $tasks = session('tasks', []);

        $task = collect($tasks)->firstWhere('id', $id);

        abort_if(!$task, 404);

        return view('tasks.show', compact('task'));
    }

}
