<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorSpecialtyRequest;
use App\Http\Resources\DoctorSpecialtyResource;
use App\Models\DoctorSpecialty;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DoctorSpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        return DoctorSpecialtyResource::collection(DoctorSpecialty::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorSpecialtyRequest $request): JsonResponse
    {
        try {
            $data = $request->all();
            $doctorSpecialty = DoctorSpecialty::create($data);

            return response()->json([
                'success' => true,
                'data' => new DoctorSpecialtyResource($doctorSpecialty)
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
        $doctorSpecialty = DoctorSpecialty::find($id);

        if (!$doctorSpecialty) {
            return new JsonResource([]);
        }

        return new DoctorSpecialtyResource($doctorSpecialty);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DoctorSpecialtyRequest $request, string $id): JsonResponse
    {
        try {

            $doctorSpecialty = DoctorSpecialty::find($id);

            $doctorSpecialty->doctor_user_id = $request->doctor_user_id;
            $doctorSpecialty->specialty_id = $request->specialty_id;
            $doctorSpecialty->save();

            return response()->json([
                'success' => true,
                'data' => new DoctorSpecialtyResource($doctorSpecialty)
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
    public function destroy(string $id)
    {
        try {
            $doctorSpecialty = DoctorSpecialty::find($id);

            if ($doctorSpecialty) {
                $doctorSpecialty->delete();
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
