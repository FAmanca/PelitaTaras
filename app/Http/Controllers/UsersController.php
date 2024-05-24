<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name')->get();
        return view('admin', [
            "title" => "Posts",
            "users" => $users
        ]);
    }
}
