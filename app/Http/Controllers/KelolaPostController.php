<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

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
            "title" => "Edit Post",
            "post" => $post
        ]);
    }

    public function create()
    {
        return view('createpost');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->author = $request->author;
        $post->excerpt = $request->excerpt;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('posts.index');
    }

    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'excerpt' => 'required',
            'body' => 'required',
        ]);

        $post->update($validatedData);

        return redirect('/kelolapost')->with('success', 'Postingan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect::to('/kelolapost');
    }


}
