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

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('landing', [
        'title' => "Landing",
        'image' => 'images/Arona.jpg'
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        'title' => "Dashboard",
        'image' => 'images/Arona.jpg'
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/home', function () {
//     return view('home', [
//         'title' => 'Home'
//     ]);
// });

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

require __DIR__.'/auth.php';
