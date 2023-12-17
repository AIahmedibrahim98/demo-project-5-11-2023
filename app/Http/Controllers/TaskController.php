<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        /* $tasks = Task::leftJoin('task_types', 'task_types.id', '=', 'tasks.task_type_id')
            ->leftJoin('users', 'users.id', '=', 'tasks.assign_to')
            ->select('tasks.*', 'users.name as user_name', 'task_types.name as task_type')
            ->get(); */
        $tasks = Task::with('user', 'task_type')->get();

        return view('tasks.index', compact('tasks'));
    }
}
