<?php

namespace App\Http\Controllers;

use App\Http\Requests\DiseasePacientRequest;
use App\Http\Resources\DiseasePacientResource;
use App\Models\DiseasePacient;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

use function Sabre\Event\Promise\all;

class DiseasePacientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        return DiseasePacientResource::collection(DiseasePacient::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DiseasePacientRequest $request): JsonResponse
    {
        try {
            $data = $request->all();
            $diseasePacient = DiseasePacient::create($data);

            return response()->json([
                'success' => true,
                'data' => new DiseasePacientResource($diseasePacient)
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
        $diseasePacient = DiseasePacient::find($id);

        if (!$diseasePacient) {
            return new JsonResource([]);
        }

        return new DiseasePacientResource($diseasePacient);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DiseasePacientRequest $request, string $id): JsonResponse
    {
        try {

            $diseasePacient = DiseasePacient::find($id);

            $diseasePacient->patient_user_id = $request->patient_user_id;
            $diseasePacient->disease_id = $request->disease_id;
            $diseasePacient->save();

            return response()->json([
                'success' => true,
                'data' => new DiseasePacientResource($diseasePacient)
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
            $diseasePacient = DiseasePacient::find($id);

            if ($diseasePacient) {
                $diseasePacient->delete();
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
