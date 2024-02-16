<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Http\Requests\UserRequest;
use App\Http\Resources\PatientResource;
use App\Models\Patient;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        return PatientResource::collection(Patient::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PatientRequest $patientRequest, UserRequest $userRequest): JsonResponse
    {
        DB::beginTransaction();

        try {
            // Crear el usuario utilizando la función createUser del UserController
            $password = $userRequest->input('password');
            $rol = 3;
            $user = app(UserController::class)->createUser($userRequest, $password, $rol);

            // Validar los datos del paciente
            $pacientData = $patientRequest->all();
            $pacientData['user_id'] = $user->id;
            $pacient = Patient::create($pacientData);

            DB::commit();

            return response()->json([
                'success' => true,
                'data' => [
                    'user' => $user,
                    'pacient' => $pacient
                ]
            ], 201);
        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Error al crear el usuario y el paciente.'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResource
    {
        $patient = Patient::find($id);

        if (!$patient) {
            return new JsonResource([]);
        }

        return new PatientResource($patient);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PatientRequest $request, string $id): JsonResponse
    {
        try {

            $patient = Patient::find($id);

            $patient->weight = $request->weight;
            $patient->nss = $request->nss;
            $patient->save();

            return response()->json([
                'success' => true,
                'data' => new PatientResource($patient)
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

            // Elimina el registro de paciente 
            $patinet = Patient::find($id);

            if ($patinet) {
                $patinet->delete();
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Paciente no encontrado.'
                ], 404);
            }

            return response()->json([
                'success' => true
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar el paciente y su usuario.'
            ], 500);
        }
    }
}
