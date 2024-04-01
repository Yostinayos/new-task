<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $seesion = session('success');

        $roles = Auth::user()->role;

        if (Auth::user()->role == 'admin') {

            $tasks = Task::with('user')->get();
        } else {
            $tasks = Task::where('user_id', Auth::user()->id)->with('user')->get();
        }


        return view('task.index', compact('tasks', 'seesion'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $users = User::where('role', 'user')->get(['id', 'name']);

        return view('task.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        return $request;
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {

        // check if own the task
        if ($task->user_id != Auth::user()->id && Auth::user()->role != 'admin') {
            abort(403);
        }

        $task = $task->where('id', $task->id)->with('user')->first();



        return view('task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {

        $task = $task->with('user')->first();

        return view('task.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {

        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully');
    }
}
