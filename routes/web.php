<?php

use App\Http\Controllers\LandingsController;
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
    return view('home');
});

Route::get('landings/disenoWeb', [LandingsController::class, 'disenoWeb'])->name('landings.disenoWeb');
Route::get('landings/auditoriaSEO', [LandingsController::class, 'auditoriaSEO'])->name('landings.auditoriaSEO');
Route::get('landings/soporteWeb', [LandingsController::class, 'soporteWeb'])->name('landings.soporteWeb');
Route::get('landings/auditoriaWeb', [LandingsController::class, 'auditoriaWeb'])->name('landings.auditoriaWeb');
Route::get('landings/consultoriaWeb', [LandingsController::class, 'consultoriaWeb'])->name('landings.consultoriaWeb');
