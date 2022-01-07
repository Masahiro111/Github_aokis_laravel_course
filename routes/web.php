<?php

use App\Http\Controllers\ContactFormController;
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

Route::group(['prefix' => 'contact', 'middleware' => 'auth'], function () {
    Route::get('index', [ContactFormController::class, 'index'])->name('contact.index');
    Route::get('create', [ContactFormController::class, 'create'])->name('contact.create');
});

require __DIR__ . '/auth.php';
