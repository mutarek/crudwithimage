<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/',[PostController::class,'index'])->middleware(['auth'])->name('dashboard');
Route::get('/addpost',[PostController::class,'addpost'])->middleware(['auth'])->name('addpost');
Route::post('/savedata',[PostController::class,'savedata'])->middleware(['auth'])->name('savedata');
Route::get('/editpost/{id}',[PostController::class,'editpost'])->middleware(['auth'])->name('editpost');
Route::post('/updatepost',[PostController::class,'updatepost'])->middleware(['auth'])->name('updatepost');
Route::get('/deletepost/{id}',[PostController::class,'deletepost'])->middleware(['auth'])->name('deletepost');
require __DIR__.'/auth.php';
