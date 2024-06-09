<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about', [
            'title' => 'About Us',
            'image' => 'css/herobg.jpg',
            'primage1' => 'images/about/hoshino.png',
            'primage2' => 'images/about/nonomi.png',
            'primage3' => 'images/about/shiroko.png',
            'primage4' => 'images/about/ayane.png',
            'primage5' => 'images/about/serika.png',
        ]);
    }
}
