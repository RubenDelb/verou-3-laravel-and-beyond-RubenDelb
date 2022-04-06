<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ToolController;
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

// Route::redirect('/','login');
Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
    return view('dashboard');
    })->name('dashboard');

    Route::post('/searched-tools', [ToolController::class, 'index'])->name('search-tools');

    Route::get('/reservation/toolId={toolId}', [ToolController::class, 'reserveTool'])->name('reserve-tool');

    Route::view('/add-tool', 'add-tool')->name('add-tool-view');
    Route::post('/add-tool', [ToolController::class, 'addTool'])->name('add-tool');

    Route::view('profile', 'profile')->name('profile');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
});

require __DIR__.'/auth.php';
