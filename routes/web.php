<?php

use App\Http\Controllers\AppartementController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SejourController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/sejours', [SejourController::class, 'AfficherListeSejour'])->name('sejours.index');
Route::get('/clients', [ClientController::class, 'AfficherListeClients'])->name('clients.index');
Route::post('/clients', [ClientController::class, 'AjouterClient'])->name('clients.store');
Route::delete('/clients/{id}', [ClientController::class, 'SupprimerClient'])->name('clients.destroy');
