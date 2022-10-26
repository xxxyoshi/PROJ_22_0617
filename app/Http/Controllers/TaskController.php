<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;
use App\Task;

class TaskController extends Controller
{
    public function show(Travel $travel)
    {
        return view('task.show', compact('travel'));
    }

    public function store(Request $request, Travel $travel)
    {
        $task = new Task();
        $task->travel_id = $travel->id;
        $task->fill($request->all())->save();

        return redirect()->route('task.show', compact('travel'));
    }

    public function update(Request $request)
    {
        $tasks = Task::find($request->id);
        $counter = 0;

        foreach($tasks as $task){
        $task->title = $request->title[$counter];
        $task->deadline = $request->deadline[$counter];
        $task->isFinished = $request->isFinished[$counter];

        $task->save();
        $counter++;
        }

        return back();
    }
}
