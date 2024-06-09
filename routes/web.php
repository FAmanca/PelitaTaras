<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AichatController;
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
    Route::get('admin', [UsersController::class, 'index'])->name('admin');
    Route::get('/kelolapost', [KelolaPostController::class, 'index'])->name('kelolapost');
    Route::get('/kelolapost/createpost', [KelolaPostController::class, 'create'])->name('createpost');
    Route::get('/kelolapost/editpost/{post}', [KelolaPostController::class, 'show'])->name('editpost');
    Route::get('/kelolakuis', function () {
        return view('kelolakuis', [
            'title' => 'Kelola Kuis',
        ]);
    })->name('kelolakuis');
});

Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('checkrole:guest,admin');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('checkauth');

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

Route::get('/kuis', function () {
    return view('kuis', [
        'title' => 'Kuis'
    ]);
});

Route::get('/srq29', function () {
    return view('srq29', [
        'title' => 'SRQ29 TEST'
    ]);
});
Route::get('/ai', [AichatController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/post/{post:slug}', [PostController::class, 'show']);
Route::put('/kelolapost/editpost/{post}', [KelolaPostController::class, 'update']);
Route::post('/kelolapost/createpost', [KelolaPostController::class, 'store'])->name('posts.store');
Route::post('/kelolapost', [KelolaPostController::class, 'index'])->name('posts.index');
Route::delete('/kelolapost/deletepost/{id}', [KelolaPostController::class, 'destroy'])->name('posts.destroy');

// Include authentication routes
require __DIR__ . '/auth.php';
