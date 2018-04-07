<?php

use App\Task;

Route::get('/tasks', function () {
	
	// $tasks = DB::table('tasks')->latest()->get();

	$tasks = Task::all();

    return view('tasks.index ', compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {

	// $tasks = DB::table('tasks')->find($id);

	$tasks = Task::find($id);

    return view('tasks.show', compact('tasks'));
});


