<?php

namespace App\Http\Controllers;


// use Illuminate\Http\Request;
use App\Task;
// use \DB;

class TasksController extends Controller
{
    //

    public function index() {
   		$tasks = Task::all();
    	return view('tasks.index', compact('tasks'));
    }


    public function show(Task $task) {
    	// $task = Task::find($task);
    	// Task::incomplete();
    	return view('tasks.show', compact('task'));
    }
}
