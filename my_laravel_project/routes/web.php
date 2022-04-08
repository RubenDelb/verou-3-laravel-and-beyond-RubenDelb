<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::post('/searched-tools', [ToolController::class, 'index'])->name('search-tools');

Route::group(['middleware' => 'auth'], function() { //if I add 'middleware' => 'verified', only logged-in users are allowed on these routes

    Route::get('/reservation/toolId={toolId}', [ToolController::class, 'reserveTool'])->name('reserve-tool');

    Route::view('/add-tool', 'add-tool')->name('add-tool-view');
    Route::post('/add-tool', [ToolController::class, 'addTool'])->name('add-tool');

    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
});

require __DIR__.'/auth.php';
