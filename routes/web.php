<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IllusionController;
use App\Http\Controllers\PixiController;
use Illuminate\Support\Facades\Route;
use App\Models\Illusion;
use App\Models\Pixi;

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

Route::get('/', function () {
    return view('home')
    ->with('illusions', Illusion::orderBy('updated_at', 'desc')->get())
    ->with('pixies',Pixi::all());
});

Route::get('/dashboard', function () {
    return view('dashboard')
    ->with('illusions', Illusion::orderBy('updated_at', 'desc')->get())
    ->with('pixies',Pixi::all());
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    //Show Edit Form - Pixi
    Route::get('/dashboard/pixi/{pixi}/edit', [PixiController::class, 'edit']);

    //Update Pixi
    Route::put('/dashboard/pixi/{pixi}', [PixiController::class, 'update']);



    //Show Edit Form - Illusion
    Route::get('/dashboard/{illusion}/edit', [IllusionController::class, 'edit']);

    // Show Create Form - Illusion
    Route::get('/dashboard/create', [IllusionController::class, 'create']);

    // Store Illusion Data
    Route::post('/dashboard', [IllusionController::class, 'store']);

    //Update Illusion
    Route::put('/dashboard/{illusion}', [IllusionController::class, 'update']);

    //Delete Illusion
    Route::delete('/illusions/{illusion}', [IllusionController::class, 'destroy'])->middleware(['auth', 'verified']);
});

Route::get('/illusions/pixi/1', function () {
    return view('illusions.pixi-1')
    ->with('pixi',Pixi::find(1));
});

Route::get('/illusions/pixi/2', function () {
    return view('illusions.pixi-2')
    ->with('pixi',Pixi::find(2));;
});

Route::get('/illusions/{illusion}', [IllusionController::class, 'show']);

require __DIR__.'/auth.php';
