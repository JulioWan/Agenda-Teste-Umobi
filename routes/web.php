<?php

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

use App\Http\Controllers\AgendaController;

Route::get('/',[AgendaController::class, 'index'] );

Route::get('/cadastro', [AgendaController::class, 'create']);
Route::post('/cadastro', [AgendaController::class, 'store']);
Route::delete('/{id}', [AgendaController::class, 'destroy']);
Route::get('/edit/{id}', [AgendaController::class, 'edit']);
Route::put('/update/{id}', [AgendaController::class, 'update']);

Route::get('/{id}', [AgendaController::class, 'show']);
