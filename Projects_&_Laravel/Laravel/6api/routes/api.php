<?php

use App\Http\Controllers\NoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// NOTE: El auth:anctum sirve para proteger las rutas para que el usuario solo puda acceder
// si el usuario se ha autentiado previamente
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// WARNING: Si las rutas van a estar a hacer el control del proyecto en el CRUD, se puede hacer:
Route::resource('/note', NoteController::class);
// Permite asociar una ruta a un controlador
