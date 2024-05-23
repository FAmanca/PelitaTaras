<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        return view('admin', [
            "title" => "Posts",
            "users" => User::all()
        ]);
    }
}
