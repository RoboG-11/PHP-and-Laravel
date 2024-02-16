<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExampleController;
use App\Models\Role;
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

// NOTE: Verificar a travez del middleware que el usuario que solicita la info
// contiene un token de verificación valido...
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// // WARNING: Middleware individual
// // NOTE: Se está protegiendo la ruta con el middleware que se creó
// Route::middleware('example')->get('/', [ExampleController::class, 'index']);

// // NOTE: No se está protegiendo...
// Route::get('/no-access', [ExampleController::class, 'noAccess'])->name("no-access");


// WARNING: Middlewae en grupo con varios middlewares
// Route::middleware(['example', 'auth', 'admin'])->group(function () {
//     Route::get('/', [ExampleController::class, 'index']);
//     // Route::get('/', [ExampleController::class, 'index']);
//     // Route::get('/', [ExampleController::class, 'index'])->withoutMiddleware('admin'); // No admin...
// });

// WARNING: Protegerlas desde el controller
// Route::get('/no-access', [ExampleController::class, 'noAccess'])->name("no-access");
// Route::get('/', [ExampleController::class, 'index']);

Route::post('/create', [AuthController::class, 'createUser']);
Route::post('/login', [AuthController::class, 'loginUser']);
// WARNING: el auth:sanctum se va a encargar de que las peticiones que se hagan a esta ruta
//          vengan autenticadas indicando el token de autenticación
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
