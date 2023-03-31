<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
Route::group(['namespace'=>'Post'], function (){
    Route::get('/', '\App\Http\Controllers\post\indexController')->name('post.index');
    Route::get('/create', '\App\Http\Controllers\post\CreateController')->name('post.create');
    Route::post('/create', '\App\Http\Controllers\post\StoreController')->name('post.store');
    Route::get('/post/{post}', '\App\Http\Controllers\post\ShowController')->name('post.show');
    Route::get('/post/{post}/edit', '\App\Http\Controllers\post\EditController')->name('post.edit');
    Route::patch('/post/{post}', '\App\Http\Controllers\post\UpdateController')->name('post.update');
    Route::delete('/post/{post}', '\App\Http\Controllers\post\DestroyController')->name('post.destroy');
});





Route::get('/update', [PostController::class, 'update']);
Route::get('/delete', [PostController::class, 'delete']);
Route::get('/restore', [PostController::class, 'restore']);
Route::get('/allDelete', [PostController::class, 'allDelete']);
Route::get('/firstOrCreate', [PostController::class, 'firstOrCreate']);
Route::get('/updateOrCreate', [PostController::class, 'updateOrCreate']);

Route::get('/main', [MainController::class, 'index'])->name('main.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
