<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    if (auth()->check()) {
        return auth()->user()->role === 'admin' ? redirect('/admin') : redirect('/home');
    } else {
        return view('landing', [
            'title' => "Landing",
            'image' => 'images/Arona.jpg'
        ]);
    }
});

Route::get('/admin', function () {
    return 'Admin Page';
})->middleware('checkrole:admin'); // Only admin can access this page

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('checkrole:guest,admin');

// Home page route only for authenticated users
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Authenticated-only routes
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard', [
            'title' => "Dashboard",
            'image' => 'images/Arona.jpg'
        ]);
    })->middleware(['verified'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Additional informational routes
Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'image' => 'images/Arona.jpg'
    ]);
});

Route::get('/post', function () {
    return view('post', [
        'title' => 'Blog'
    ]);
});

Route::get('/admin', function () {
    return view('/admin');
})->name('admin');

Route::get('/kelolakuis', function () {
    return view('/kelolakuis');
})->name('admin');

Route::get('/livechatadmin', function () {
    return view('/livechatadmin');
})->name('admin');

// Include authentication routes
require __DIR__ . '/auth.php';
