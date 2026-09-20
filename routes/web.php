<?php

use App\Http\Controllers\OgolneController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/',[OgolneController::class, 'start']);

/* Route::get('kontakt', function () {
    return view('kontakt');
}); */
Route::get('/kontakt',[OgolneController::class, 'kontakt']);
/* Route::get('onas', function () {
    $zadania = [
        'Zadanie 1',
        'Zadanie 2',
        'Zadanie 3'
    ];
    return view('onas');
    //return view('onas', ['zadania' => $zadania]);
}); */
Route::get('/onas',[OgolneController::class, 'onas']);