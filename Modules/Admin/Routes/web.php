<?php

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

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\AdminController;
use Modules\Admin\Http\Controllers\PagesController;

Route::prefix('admin')->middleware(['auth'])->group(function() {
    Route::get('/', [PagesController::class, 'index'])->name('admin.index');
    Route::get('/home', [PagesController::class, 'home'])->name('homeEdit');
    Route::get('/blog', [PagesController::class, 'blog'])->name('blogEdit');
    Route::get('/about', [PagesController::class, 'about'])->name('aboutEdit');
    Route::get('/contact', [PagesController::class, 'contact'])->name('contactEdit');
    Route::get('/webEdit', [PagesController::class, 'webSetting'])->name('webEdit');
});


Route::prefix('admin/edit')->middleware(['auth'])->group(function() {
    Route::post('/home', [AdminController::class, 'homeEdit'])->name('homePost');
    Route::post('/web', [AdminController::class, 'webEdit'])->name('webPost');
    Route::post('/about', [AdminController::class, 'aboutEdit'])->name('aboutPost');
    Route::post('/contact', [AdminController::class, 'contactEdit'])->name('contactPost');
});
