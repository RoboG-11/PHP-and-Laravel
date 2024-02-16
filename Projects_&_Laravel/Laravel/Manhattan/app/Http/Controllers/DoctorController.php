<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorRequest;
use App\Http\Resources\DoctorResource;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\JsonResponse;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        return DoctorResource::collection(Doctor::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorRequest $doctorRequest, UserRequest $userRequest): JsonResponse
    {
        DB::beginTransaction();

        try {
            // Crear el usuario utilizando la función createUser del UserController
            $password = $userRequest->input('password');
            $rol = 2;
            $user = app(UserController::class)->createUser($userRequest, $password, $rol);

            // Validar los datos del doctor
            $doctorData = $doctorRequest->all();
            $doctorData['user_id'] = $user->id;
            $doctor = Doctor::create($doctorData);

            DB::commit();

            return response()->json([
                'success' => true,
                'data' => [
                    'user' => $user,
                    'doctor' => $doctor
                ]
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Error al crear el usuario y el doctor.'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResource
    {
        $doctor = Doctor::find($id);

        if (!$doctor) {
            return new JsonResource([]);
        }

        return new DoctorResource($doctor);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        try {

            $doctor = Doctor::find($id);

            $doctor->professional_license = $request->professional_license;
            $doctor->education = $request->education;
            $doctor->save();

            return response()->json([
                'success' => true,
                'data' => new DoctorResource($doctor)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([

                'success' => false,
                'message' => 'Error al actualizar el usuario.'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        try {
            // Llama a la función destroy del UserController para eliminar el usuario
            app(UserController::class)->destroy($id);

            // Elimina el registro de doctor
            $doctor = Doctor::find($id);

            if ($doctor) {
                $doctor->delete();
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Doctor no encontrado.'
                ], 404);
            }

            return response()->json([
                'success' => true
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar el doctor y su usuario.'
            ], 500);
        }
    }
}
