<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfilePictureRequest;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(): JsonResource
    {
        return UserResource::collection(User::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(UserRequest $request): JsonResponse
    {
        try {

            $data = $request->all();
            $data['password'] = Hash::make($data['password']);
            $user = User::create($data);

            return response()->json([
                'success' => true,
                'data' => new JsonResource($user)
            ], 201);
        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => 'Error al crear el usuario.'
            ], 500);
        }
    }

    public function createUser(UserRequest $request, $password, $rol)
    {
        try {

            $data = $request->all();
            $data['password'] = Hash::make($password);
            $data['rol'] = $rol;
            $user = User::create($data);
            return $user;
        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => 'Error al crear el usuario.'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResource
    {
        $user = User::find($id);

        if (!$user) {
            return new JsonResource([]);
        }

        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id): JsonResponse
    {
        try {

            $user = User::find($id);

            $user->rol = $request->rol;
            $user->name = $request->name;
            $user->first_last_name = $request->first_last_name;
            $user->second_last_name = $request->second_last_name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->sex = $request->sex;
            $user->age = $request->age;
            $user->date_of_birth = $request->date_of_birth;
            $user->link_photo = $request->link_photo;
            // Verificar si se proporcionó una nueva contraseña
            if ($request->has('password')) {
                $user->password = Hash::make($request->password);
            }
            $user->save();

            return response()->json([
                'success' => true,
                'data' => new UserResource($user)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([

                'success' => false,
                'message' => 'Error al actualizar el usuario.'
            ], 500);
        }
    }

    // public function update(UserRequest $request, string $id): JsonResponse
    // {
    //     try {
    //         $user = User::find($id);

    //         // Añade el dd o var_dump aquí para depurar la solicitud
    //         echo "PRUEBA PA: \n";
    //         var_dump($request->all()); // O var_dump($request->all());
    //         var_dump($request->link_photo);
    //         var_dump($id); // O var_dump($request->all());

    //         // Verificar si se proporcionó una nueva contraseña y actualizarla si es el caso
    //         if ($request->has('password')) {
    //             $user->password = Hash::make($request->password);
    //         }

    //         // Verificar si se proporcionó un nuevo link_photo y actualizarlo si es el caso
    //         if ($request->hasFile('link_photo')) { // Cambio has por hasFile
    //             echo "AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA";
    //             $fileName = time() . '.' . $request->file->extension();
    //             $request->file->storeAs('public/images', $fileName);
    //             $user->link_photo = 'images/' . $fileName;

    //             return response()->json([
    //                 'success' => "Error"
    //             ], 400);
    //         }

    //         // Actualizar los campos si se proporcionan en la solicitud
    //         $fillableFields = ['rol', 'name', 'first_last_name', 'second_last_name', 'email', 'phone', 'sex', 'age', 'date_of_birth'];
    //         foreach ($fillableFields as $field) {
    //             if ($request->has($field)) {
    //                 $user->{$field} = $request->{$field};
    //             }
    //         }

    //         // Guardar el usuario actualizado
    //         $user->save();

    //         return response()->json([
    //             'success' => true,
    //             'data' => new UserResource($user)
    //         ], 200);
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Error al actualizar el usuario.'
    //         ], 500);
    //     }
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        try {
            $user = User::find($id);

            if ($user) {
                $user->delete();
                return response()->json([
                    'success' => true
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Usuario no encontrado.'
                ], 404);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar el usuario.'
            ], 500);
        }
    }

    public function storeProfilePicture(ProfilePictureRequest $request)
    {
        $user = new User;

        $fileName = $user->id . time() . '.' . $request->file->extension();
        // $request->file->move(public_path('images'), $fileName);
        $request->file->storeAs('public/images', $fileName);

        // $user = new User;
        $user->link_photo = $request->link_photo;
        $user->link_photo = 'images/' . $fileName;
        $user->save();

        return response()->json([
            'success' => true,
            'link' => $fileName
        ]);
    }
}
