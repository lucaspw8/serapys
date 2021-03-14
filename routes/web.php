<?php

use App\Http\Controllers\MemoriesController;
use App\Http\Controllers\UserTypeController;
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
//Routes User
Route::get('/', [UserTypeController::class, 'index'])->name('user_type.index');
Route::post('/',[UserTypeController::class, 'store'])->name('user_type.choose');

//Routes Memories
Route::get('/user',[MemoriesController::class, 'index'])->name('user.index');
Route::get('/admin',[MemoriesController::class, 'index'])->name('admin.index');
Route::get('/user/memories', [MemoriesController::class, 'memories'])->name('memories.index');
Route::get('/admin/memories', [MemoriesController::class, 'memories'])->name('admin.memories.index');
Route::get('admin/memories/create', [MemoriesController::class, 'create'])->name('admin.memories.create');
Route::get('admin/memories/edit/{id}', [MemoriesController::class, 'edit'])->name('admin.memories.edit');
Route::put('admin/memories/update/{id}', [MemoriesController::class, 'update'])->name('admin.memories.update');
Route::get('admin/memories/delete/{id}', [MemoriesController::class, 'destroy'])->name('admin.memories.destroy');
Route::post('/user/memories', [MemoriesController::class, 'store'])->name('memories.store');
