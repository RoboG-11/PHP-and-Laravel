<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorEstablishmentRequest;
use App\Http\Resources\DoctorEstablishmentResource;
use App\Models\DoctorEstablishment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DoctorEstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        return DoctorEstablishmentResource::collection(DoctorEstablishment::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorEstablishmentRequest $request): JsonResponse
    {
        try {
            $data = $request->all();
            $doctorEstablishment = DoctorEstablishment::create($data);

            return response()->json([
                'success' => true,
                'data' => new DoctorEstablishmentResource($doctorEstablishment)
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
        $doctorEstablishment = DoctorEstablishment::find($id);

        if (!$doctorEstablishment) {
            return new JsonResource([]);
        }

        return new DoctorEstablishmentResource($doctorEstablishment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DoctorEstablishmentRequest $request, string $id): JsonResponse
    {
        try {

            $doctorEstablishment = DoctorEstablishment::find($id);

            $doctorEstablishment->establishment_id = $request->establishment_id;
            $doctorEstablishment->doctor_user_id = $request->doctor_user_id;
            $doctorEstablishment->save();

            return response()->json([
                'success' => true,
                'data' => new DoctorEstablishmentResource($doctorEstablishment)
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
            $doctorEstablishment = DoctorEstablishment::find($id);

            if ($doctorEstablishment) {
                $doctorEstablishment->delete();
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
