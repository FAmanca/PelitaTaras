<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KelolaPostController;

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
        return auth()->user()->role === 'admin' ? redirect('/home') : redirect('/home');
    } else {
        return view('landing', [
            'title' => "Landing",
            'image' => 'images/Arona.jpg'
        ]);
    }
});

// Admin routes with role check
Route::middleware(['auth', 'checkrole:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin', [
            'title' => 'Admin Page',
        ]);
    })->name('admin');

    // Route::get('/kelolapost', function () {
    //     return view('kelolapost', [
    //         'title' => 'Kelola Post',
    //     ]);
    // })->name('admin');
    Route::get('/kelolapost', [KelolaPostController::class, 'index'])->name('admin');

    Route::get('/kelolakuis', function () {
        return view('kelolakuis', [
            'title' => 'Kelola Kuis',
        ]);
    })->name('kelolakuis');

    Route::get('/livechatadmin', function () {
        return view('livechatadmin', [
            'title' => 'Live Chat Admin',
        ]);
    })->name('livechatadmin');
});

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

Route::get('/tes', function () {
    return view('tes', [
        'title' => 'tesonly'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{post}', [PostController::class, 'show']);

// Include authentication routes
require __DIR__ . '/auth.php';
