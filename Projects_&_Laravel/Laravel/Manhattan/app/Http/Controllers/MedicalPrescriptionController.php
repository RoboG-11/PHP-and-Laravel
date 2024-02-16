<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicalPrescriptionRequest;
use App\Http\Resources\MedicalPrescriptionResource;
use App\Models\MedicalPrescription;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MedicalPrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        return MedicalPrescriptionResource::collection(MedicalPrescription::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MedicalPrescriptionRequest $request)
    {
        try {
            $data = $request->all();
            $medical_prescription = MedicalPrescription::create($data);

            return response()->json([
                'success' => true,
                'data' => new JsonResource($medical_prescription)
            ], 201);
        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => 'Error al crear la receta médica.'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResource
    {
        $medical_prescription = MedicalPrescription::find($id);

        if (!$medical_prescription) {
            return new JsonResource([]);
        }

        return new MedicalPrescriptionResource($medical_prescription);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MedicalPrescriptionRequest $request, string $id)
    {
        try {

            $medical_prescription = MedicalPrescription::find($id);

            $medical_prescription->instructions = $request->instructions;
            $medical_prescription->save();

            return response()->json([
                'success' => true,
                'data' => new MedicalPrescriptionResource($medical_prescription)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([

                'success' => false,
                'message' => 'Error al actualizar la receta médica.'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $medical_prescription = MedicalPrescription::find($id);

            if ($medical_prescription) {
                $medical_prescription->delete();
                return response()->json([
                    'success' => true
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Receta médica no encontrado.'
                ], 404);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar la receta médica.'
            ], 500);
        }
    }
}
