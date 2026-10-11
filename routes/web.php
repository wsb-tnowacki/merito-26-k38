<?php

use App\Http\Controllers\OgolneController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */
//Route::get('/',[OgolneController::class, 'start']);

/* Route::get('kontakt', function () {
    return view('kontakt');
}); */
//Route::get('/kontakt',[OgolneController::class, 'kontakt']);
/* Route::get('onas', function () {
    $zadania = [
        'Zadanie 1',
        'Zadanie 2',
        'Zadanie 3'
    ];
    return view('onas');
    //return view('onas', ['zadania' => $zadania]);
}); */
//Route::get('/onas',[OgolneController::class, 'onas']);
Route::controller(OgolneController::class)->group(function (){
   Route::get('/','start')->name('ogolne.start');
   Route::get('kontakt-do-nas','kontakt')->name('ogolne.kontakt')->middleware('auth');
   Route::get('o-nas','onas')->name('ogolne.onas');
});

Route::get('/dashboard', function () {
    //return view('dashboard'); 
    return redirect(route('ogolne.start'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('post', PostController::class);