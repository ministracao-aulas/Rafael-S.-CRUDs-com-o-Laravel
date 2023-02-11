<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\NomeController;
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
    return redirect()->route('users.index');
})->name('index');

Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/{userId}', [UserController::class, 'show'])->name('users.show');
    Route::get('/{userId}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/{userId}/update', [UserController::class, 'update'])->name('users.update');
    Route::get('/{userId}/confirm_delete', [UserController::class, 'confirmDelete'])->name('users.confirm_delete');
    Route::delete('/{userId}/delete', [UserController::class, 'delete'])->name('users.delete');
    /*
    Route::match([
        'get',
        'post',
        'delete',
    ], '/users/{userId}/delete', [UserController::class, 'delete'])->name('users.delete');
    */
});

Route::prefix('pages')->group(function () {
    Route::get('/', [PageController::class, 'index'])->name('pages.index');
    Route::get('/create', [PageController::class, 'create'])->name('pages.create');
    Route::post('/store', [PageController::class, 'store'])->name('pages.store');
    Route::get('/{pageId}', [PageController::class, 'show'])->name('pages.show');
    Route::get('/{pageId}/edit', [PageController::class, 'edit'])->name('pages.edit');
    Route::post('/{pageId}/update', [PageController::class, 'update'])->name('pages.update');
    Route::get('/{pageId}/confirm_delete', [PageController::class, 'confirmDelete'])->name('pages.confirm_delete');
    Route::delete('/{pageId}/delete', [PageController::class, 'delete'])->name('pages.delete');
    /*
    Route::match([
        'get',
        'post',
        'delete',
    ], '/users/{userId}/delete', [UserController::class, 'delete'])->name('users.delete');
    */
});

Route::prefix('nomes')->group(function () {
    Route::get('/', [NomeController::class, 'index'])->name('nomes.index');
    Route::get('/create', [NomeController::class, 'create'])->name('nomes.create');
    Route::post('/store', [NomeController::class, 'store'])->name('nomes.store');
    Route::get('/{nomeId}', [NomeController::class, 'show'])->name('nomes.show');
    Route::get('/{nomeId}/edit', [NomeController::class, 'edit'])->name('nomes.edit');
    Route::post('/{nomeId}/update', [NomeController::class, 'update'])->name('nomes.update');
    Route::get('/{nomeId}/confirm_delete', [NomeController::class, 'confirmDelete'])->name('nomes.confirm_delete');
    Route::delete('/{nomeId}/delete', [NomeController::class, 'delete'])->name('nomes.delete');
    /*
    Route::match([
        'get',
        'post',
        'delete',
    ], '/users/{userId}/delete', [UserController::class, 'delete'])->name('users.delete');
    */
});

Route::prefix('forms')->name('forms.')->group(function () {
    Route::get('contact', [ContactFormController::class, 'contactForm'])->name('contact');
    Route::post('contact', [ContactFormController::class, 'contactFormReceiver']);

    Route::get('feedback', [ContactFormController::class, 'feedbackForm'])->name('feedback');
    Route::post('feedback', [ContactFormController::class, 'feedbackFormReceiver']);
});
