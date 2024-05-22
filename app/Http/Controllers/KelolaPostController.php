<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KelolaPostController extends Controller
{
    public function index()
    {
        return view('kelolapost', [
            "title" => "Kelola Post",
            "posts" => Post::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('editpost', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }

    public function create()
    {
        return view('createpost');
    }

    // public function edit(Post $post)
    // {
    //     return view('adminpost/editpost', [
    //         "post" => $post
    //     ]);
    // }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = new Post;
        $post->title = $validated['title'];
        $post->content = $validated['content'];
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Post created successfully.');
    }
}
