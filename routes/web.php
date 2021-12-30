<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/feed', [UserController::class, 'feed'])->name('user.feed');

Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');

Route::post('/about/update', [UserController::class, 'updateAbout'])->name('user.about.update');

Route::post('/experience/store', [UserController::class, 'experienceStore'])->name('user.experience.store');

Route::post('/experience/{id}/update', [UserController::class, 'updateExperience'])->name('user.experience.update');

Route::post('/experience/{id}/delete', [UserController::class, 'destroyExperience'])->name('user.experience.destroy');

Route::post('/education/store', [UserController::class, 'educationStore'])->name('user.education.store');

Route::post('/education/{id}/update', [UserController::class, 'updateEducation'])->name('user.education.update');

Route::post('/education/{id}/delete', [UserController::class, 'destroyEducation'])->name('user.education.destroy');

Route::post('/intro/update', [UserController::class, 'updateIntro'])->name('user.intro.update');

Route::post('/user/image', [UserController::class, 'updateImage'])->name('user.image');

Route::get('/test', [PostController::class, 'test'])->name('test');

Route::post('/post', [PostController::class, 'store'])->name('post');

Route::post('/post/image', [PostController::class, 'storeImage'])->name('post.image');

Route::post('/post/video', [PostController::class, 'storeVideo'])->name('post.video');

Route::post('/post/{id}/delete', [PostController::class, 'destroy'])->name('post.delete');

Route::post('/post/{id}/update', [PostController::class, 'update'])->name('post.update');

require __DIR__.'/auth.php';
