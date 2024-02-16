<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
  public function index()
  {
    // ORM para obtener datos
    // $users = User::where('age', 21)->orwhere('email', "brian@gmail.com")->get(); // Sirve para poner condiciones
    // $users = User::orderBy('age', 'asc')->get(); // Sirve para ordenar los datos
    $users = User::orderBy('age', 'desc')->get(); // Sirve para ordenar los datos
    // $users = User::where('age', 21)->orwhere('email', "brian@gmail.com")->limit(1)->get(); // Límite de datos. (limite, saltos)
    // $users = User::where('age', 21)->first(); // Traer solo el primero // BUG: No sé bien qué pex
    // $users = User::find(1); // Buscar // BUG: No sé bien qué pex

    // $users = User::all(); // Todos los datos

    // consultas sin ORM
    // Sabemos cómo se hace la consulta y podemos ver la eficiencia...
    // $users = DB::select(DB::raw("SELECT * FROM users"));
    // $users = DB::select("SELECT * FROM users"); // BUG: CUIDADO

    // return view('user.index', [
    //   'users' => $users
    // ]);
    return view('user.index', compact('users'));
  }


  public function create()
  {
    // CREACIÓN DE USUARIOS - DE DIFERENTES MABERAS

    // $user = new User;
    // $user->name = "Jorge";
    // $user->email = 'jorge@gamil.com';
    // $user->password = Hash::make('12345');
    // $user->age = 20;
    // $user->address = "Lomas de Cocoyoc";
    // $user->zip-code = 32478; // BUG: CUIDADO CON LOS GIONES AL PONERLES NOMBRES
    // $user->save(); // Con esto se guarad el elemento

    User::create([
      "name" => "Brian",
      "email" => "brian@gmail.com",
      "password" => Hash::make('Brian'),
      "age" => 21,
      "address" => 'Lomas de memetla',
      "zip-code" => 20048
    ]);

    User::create([
      "name" => "Jorge",
      "email" => "jorge@gamil.com",
      "password" => Hash::make('12345'),
      "age" => 20,
      "address" => 'Lomas de Cocoyoc',
      "zip-code" => 19831
    ]);

    // Cada controlador debe de regresar algo. En este caso nos redirige a la 
    // rut raiz, pero NO SE DEBE DE PONER LA RUTA DIRECTAMENTE, SE DEBE DE PONER EL ALIAS
    return redirect()->route('user.index');
  }
}
