<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnnonceController;

Route::get('/', [IndexController::class, 'showIndex']);
Route::get('/dashboard', [AnnonceController::class,"showDashboard"])->middleware(['auth'])->name('dashboard');
Route::get('/depotAnnonce', [AnnonceController::class,"showDepotAnnonce"])->name('DepotAnnonce');
Route::post('/depotAnnonce', [AnnonceController::class,"createAnnonce"])->name('Annonce.create');
Route::get('/mesAnnonce', [AnnonceController::class,"showMesAnnonce"])->name('mesAnnonce');
Route::post('/mesAnnonce', [AnnonceController::class,"updateAnnonce"])->name('updateAnnonce');
Route::post('/updateAnnonce', [AnnonceController::class,"stepTwoForUpdate"])->name('stepTwo');
Route::post('/deleteAnnonce', [AnnonceController::class,"deleteAnnonce"])->name('deleteAnnonce');
Route::get('/updateUser', [UserController::class,"updateUser"])->name('updateUser');
Route::post('/updateUser', [UserController::class,"updatedata"])->name('update');
Route::post('searchAnnonce', [AnnonceController::class,"searchAnnonce"])->name('search');
require __DIR__.'/auth.php';
