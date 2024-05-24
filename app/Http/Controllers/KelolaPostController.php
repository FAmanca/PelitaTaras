<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class KelolaPostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('title')->get();
        return view('kelolapost', [
            "title" => "Kelola Post",
            "posts" => $posts
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
        try {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'author' => 'required|max:255',
                'excerpt' => 'required',
                'body' => 'required',
            ]);

            $post = new Post;
            $post->fill($validatedData);
            $post->save();

            return redirect()->route('posts.index')->with('success', 'Postingan Berhasil Ditambahkan');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->route('posts.index')->with('error', 'Terjadi kesalahan. Mohon coba lagi nanti.');
        }
    }

    public function update(Request $request, Post $post)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required|max:255',
                'author' => 'required|max:255',
                'excerpt' => 'required',
                'body' => 'required',
            ]);

            $post->update($validatedData);

            return redirect('/kelolapost')->with('success', 'Postingan berhasil diperbarui.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            return redirect()->route('posts.index')->with('error', 'Terjadi kesalahan. Mohon coba lagi nanti.');
        }
    }

    public function destroy($id)
    {
        try {
            $post = Post::findOrFail($id);
            $post->delete();

            return Redirect::to('/kelolapost')->with('success', 'Postingan Berhasil Dihapus');
        } catch (\Exception $e) {
            return redirect()->route('posts.index')->with('error', 'Terjadi kesalahan. Mohon coba lagi nanti.');
        }
    }
}
