<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function createUser(CreateUserRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return response()->json([
            'status' => true,
            'message' => 'User creatd succesfully',
            'token' => $user->createToken("API TOKEN")->plainTextToken // Esto viene en el auth:sanctum
        ], 200);
    }

    public function loginUser(LoginRequest $request)
    {
        // WARNING: Auth nos va a permitir acceder a los datos y acciones del user autenticado en el sistema
        // WARNING: Auth::user()->x nos permite cceder a la información del usuarioa
        // WARNING: attempt nos va a permitir tratar de logear a un usuario.
        if (!Auth::attempt($request->only(['email', 'password']))) { // Si falla el login
            return response()->json([
                'status' => false,
                'message' => 'email & password do not match with our records'
            ], 401);
        }

        // Se regresa el primer registro del email, ya que es único
        $user = User::where('email', $request->email)->first();

        return response()->json([
            'status' => true,
            'message' => 'User logged in successfully',
            'token' => $user->createToken("API TOKEN")->plainTextToken // Se genera token de la sesión
        ], 200);
    }
}
