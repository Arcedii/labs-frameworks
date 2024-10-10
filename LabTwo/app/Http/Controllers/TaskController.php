<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        return 'This is a list of tasks';
    }

    public function show($id) {
        $task = ['id' => $id, 'title' => 'Task Title'];
        return view('tasks.show', compact('task'));
    }
    
}
