<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IllusionController;
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
    ->with('illusions',Illusion::all())
    ->with('pixies',Pixi::all());
});

Route::get('/dashboard', function () {
    return view('dashboard')
    ->with('illusions',Illusion::all())
    ->with('pixies',Pixi::all());
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/illusions/pixi/1', function () {
    return view('');
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
