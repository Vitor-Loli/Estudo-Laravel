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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/eventos', [EventController::class, 'eventos']);
Route::get('/eventos/create', [EventController::class, 'criarEvento']);
Route::post('/eventos/create/novo', [EventController::class, 'store']);
Route::get('/eventos/evento/{id}', [EventController::class, 'show']);
Route::get('/registrar', [EventController::class, 'telaRegistrar']);
Route::post('/registrar/usuario', [EventController::class, 'registrarUsuario']);
Route::get('/login', [EventController::class, 'telaLogin']);
Route::post('/login/usuario', [EventController::class, 'logarUsuario']);
