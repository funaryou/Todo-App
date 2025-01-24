<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Tag;

class TaskController extends Controller 
{
    public function index(){
        $tasks = Task::all();
        $tags = Tag::all();
        return view("task.index",compact("tasks","tags"));
    }
    
    public function create(){
        return view("task.create");
    }

    public function store(Request $request){
        Task::create([
            "name" => $request->name,
            "content" => $request->content,
        ]);
        Tag::create([
            "name" => $request->task_tag,
        ]);

        return redirect()->route("task.index");
        
    }

    public function edit($id){
        $tasks = Task::find($id);
        return view("task.edit",compact('tasks'));
    }

    public function update(Request $request,$id){
        $task = Task::find($id);
        $task->update([
            "name" => $request -> name,
            "content" => $request -> content,
            "tag" => $request->tags,
        ]);
        
        return redirect()->route("task.index");
    }

    public function destroy($id){
        $task = Task::find($id);
        $task->delete();
        return redirect()->route("task.index");
    }
}
