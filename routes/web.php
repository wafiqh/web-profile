<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
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

Route::get('/', [BlogController::class, 'index']);
Route::get('/detail/{blog}', [BlogController::class, 'show']);

Route::get('/dashboard', function () {
    $blogs = Blog::latest()->paginate(6);

    return view('dashboard', [
        'blogs' => $blogs,
    ]);
})->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->post('/dashboard', [BlogController::class, 'store']);
Route::middleware(['auth'])->get('/dashboard/tambah', [BlogController::class, 'create']);
Route::middleware(['auth'])->get('/dashboard/edit/{blog}', [BlogController::class, 'edit']);
Route::middleware(['auth'])->put('/dashboard/edit/{blog}', [BlogController::class, 'update']);
Route::middleware(['auth'])->delete('/dashboard/delete/{blog}', [BlogController::class, 'destroy']);

require __DIR__ . '/auth.php';
