<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('pages/homepage-todo', compact('todos'));
    }

    public function create()
    {
        return view('homepage.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'description' => 'required',
            'date' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //upload image
        $image = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images', $image, 'public');
        $save = new Todo;

        $save->name = $image;
        $save->path = $path;
        // $image->storeAs('public/imageInput', $image->hashName());

        Todo::create([
            'nama' => $request->nama,
            'description' => $request->description,
            'date' => $request->date,
            'image' => $image
        ]);

        return redirect()->route('homepage.index')->with('success', 'Company has been created successfully.');
    }

    public function show(Todo $task)
    {
        return view('homepage.show', compact('task'));
    }

    public function edit(Todo $task)
    {
        return view('homepage.edit', compact('task'));
    }

    public function update(Request $request, Todo $task)
    {
        $request->validate([
            'nama' => 'required',
            'description' => 'required',
            'date' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $task->fill($request->post())->save();

        return redirect()->route('homepage.index')->with('success', 'Company Has Been updated successfully');
    }

    public function destroy($todo)
    {
        //delete
        $todos = Todo::query()->find($todo);
        $todos->delete();
        return redirect()->route('homepage.index')->with('success', 'Company has been deleted successfully');
    }
}
