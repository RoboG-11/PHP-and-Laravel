<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PostController;

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

// // NOTE: Normalmente las rutas son estáticas, pero pueden necesitarse dinamicas
// Route::get("/", [Controller::class, 'function'])->name('example');

// // NOTE: Rutas dinámicas
// Route::get('/product/{id}', [Controller::class, 'function'])->name('example');

// // NOTE: Rutas dinámicas con segundo parámetro opcional
// Route::get('/product/{id?}', [Controller::class, 'function'])->name('example');

// Route::get("/note/{id}", [NoteController::class, 'index'])->name('note.index');

Route::get('/note', [NoteController::class, 'index'])->name('note.index');
// Se podría poner ::view, pero se pone ::get para que sea escalable en el futuro
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/note/store', [NoteController::class, 'store'])->name('note.store');
Route::get('/note/edit/{note}', [NoteController::class, 'edit'])->name('note.edit');
// NOTE: Por norma general, cuando se actualiza un valor, se ocupa ::put, ya que para esto existe
Route::put('/note/update/{note}', [NoteController::class, 'update'])->name('note.update');
Route::get('/note/show/{note}', [NoteController::class, 'show'])->name('note.show');
// NOTE: 'delete' es una variación del método post, esto quiere decir que va a esperar un form que se enviará...
// Por lo que no se puede acceder a este con un simple link...
Route::delete('/note/destroy/{note}', [NoteController::class, 'destroy'])->name('note.destroy');


// WARNING: Cuando se quiera ahcer un CRUD este se puede extender MUCHÍSIMO, pero Laravel nos facilita con las Routes::resource
Route::resource('/post', PostController::class);
// NOTE: Al ocupar Route::resource no se debe de poner ninguna función, ya que estas son 'atajos' de Laravel
// que lo que hace es crear internamente TODAS LAS ROUTAS NECESARIAS PARA UN CRUD. Estás rutas serán gobernadas
// por el PostController, por so no se poenen funciones, ya que resource no es una única ruta, sino son varias...


// NOTE: php artisan route:list -> enlista TODAS las rutas del proyecto
// NOTE: php artisan make:controller PostController --resource -> es para crear un controlador más rápido y se india que es
// para gobernar un recurso. Esto creará un controller que tendrá la base de gestionar un CRUD!!!!!!!!

// WARNING: Ejemplo en el caso de este CRUD
Route::resource('/post', NoteController::class);
