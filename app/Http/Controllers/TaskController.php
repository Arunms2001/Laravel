<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index',compact('tasks'));
    }


    public function create()
    {
        $categories=Category::all();
        return view('tasks.create',compact('categories'));
    }


    public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'duedate' => 'required',
        'category_id' => 'required',
    ]);

    $category = Category::findOrFail($request->input('category_id'));
    $category->tasks()->create([
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'duedate' => $request->input('duedate'),
    ]);

    return redirect()->route('tasks.index')->with('success', 'Task created successfully');
}


    public function show(Task $task)
    {
        return view('tasks.show',compact('task'));
    }


    public function edit(Task $task)
    {
        $categories=Category::all();
        return view('tasks.edit',compact('task','categories'));
    }


    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'duedate' => 'required',
            'category_id' => 'required',
        ]);
    
        $task->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'duedate' => $request->input('duedate'),
        ]);
    
        $category = Category::findOrFail($request->input('category_id'));
        $category->tasks()->save($task);
    
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully');
    }


    public function destroy(Task $task){
        $task->delete();
        return redirect()->route('tasks.index')
        ->with('success','Task deleted successfully...');
    }
}
