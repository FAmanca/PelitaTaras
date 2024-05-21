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
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
