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

// Route::get('/', function () {
//     return view('welcome');
// });

/*La clase Route sirve para generar nuevas rutas, esta clase tiene varios métodos estaticos*/
// Nueva route -> Route::

// Del segundo al ultimo sirven para peticiones http
// Route::view(rut, vita) // Pintar una vista. La ruta parte desde resources/views
// Route::get('la/ruta', ControldorDeLaRuta) // Construir ruta de tipo get
// Route::post('la/ruta', ControldorDeLaRuta) // Construir de tipo post
// Route::put('la/ruta', ControldorDeLaRuta) // Construir de tipo put
// Route::delete('la/ruta', ControldorDeLaRuta) // Construir de tipo delete
// Route::patch('la/ruta', ControldorDeLaRuta) // Construir de tipo patch

// Para las rutas de directorio no se ocupa la diagonal, sino el punto
Route::view('/', 'landing.index')->name('index');
Route::view('/about', 'landing.about')->name('about'); // Se le puede dar nombre a las rutas
