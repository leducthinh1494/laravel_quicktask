<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;
use App\Http\Requests;

class TaskController extends Controller
{
	public function tasks() {
    $tasks = Task::orderBy('created_at', 'asc')->get();

    return view('tasks', [
        'tasks' => $tasks
    ]);
}
}