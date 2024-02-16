<?php

namespace App\Http\Controllers;

use App\Http\Requests\AllergyPacientRequest;
use App\Http\Resources\AllergyPacienResource;
use App\Models\AllergyPacient;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AllergyPacientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        return AllergyPacienResource::collection(AllergyPacient::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AllergyPacientRequest $request): JsonResponse
    {
        try {
            $data = $request->all();
            $allergyPacient = AllergyPacient::create($data);

            return response()->json([
                'success' => true,
                'data' => new AllergyPacienResource($allergyPacient)
            ], 201);
        } catch (\Exception $e) {
            dd($e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Error al crear la relación.'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResource
    {
        $allergyPacient = AllergyPacient::find($id);

        if (!$allergyPacient) {
            return new JsonResource([]);
        }

        return new AllergyPacienResource($allergyPacient);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AllergyPacientRequest $request, string $id): JsonResponse
    {
        try {

            $allergyPacient = AllergyPacient::find($id);

            $allergyPacient->patient_user_id = $request->patient_user_id;
            $allergyPacient->allergy_id = $request->allergy_id;
            $allergyPacient->save();

            return response()->json([
                'success' => true,
                'data' => new AllergyPacienResource($allergyPacient)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([

                'success' => false,
                'message' => 'Error al actualizar la relación.'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        try {
            $allergyPacient = AllergyPacient::find($id);

            if ($allergyPacient) {
                $allergyPacient->delete();
                return response()->json([
                    'success' => true
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Relación no encontrada.'
                ], 404);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar la relación.'
            ], 500);
        }
    }
}
