<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Category;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all(); 
        return view('tasks.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateTaskRequest $request)
    {
    Task::create($request->validated()); // Используем validated() для защиты данных

    return redirect()->route('tasks.create')->with('success', 'Задача успешно добавлена!');

    Task::create($request->validated());

    // Добавляем флеш-сообщение
    return redirect()->route('tasks.create')->with('success', 'Задача успешно добавлена!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
    $categories = Category::all();
    return view('tasks.edit', compact('task', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
    $task->update($request->validated()); // Обновляем задачу

    return redirect()->route('tasks.edit', $task)->with('success', 'Задача успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
