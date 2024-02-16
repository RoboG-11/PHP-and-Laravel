<?php

namespace App\Http\Controllers;

use App\Http\Requests\EstablishmentRequest;
use App\Http\Resources\EstablishmentResource;
use App\Models\Establishment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EstablishmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        return EstablishmentResource::collection(Establishment::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EstablishmentRequest $request): JsonResponse
    {
        try {

            $data = $request->all();
            $establishment = Establishment::create($data);

            return response()->json([
                'success' => true,
                'data' => new JsonResource($establishment)
            ], 201);
        } catch (\Exception $e) {
            dd($e);

            return response()->json([
                'success' => false,
                'message' => 'Error al crear el establecimiento.'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResource
    {

        $establishment = Establishment::find($id);

        if (!$establishment) {
            return new JsonResource([]);
        }

        return new EstablishmentResource($establishment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        try {

            $establishment = Establishment::find($id);

            $establishment->establishment_name = $request->establishment_name;
            $establishment->address_id = $request->address_id;
            $establishment->save();

            return response()->json([
                'success' => true,
                'data' => new EstablishmentResource($establishment)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([

                'success' => false,
                'message' => 'Error al actualizar la cita.'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $establishment = Establishment::find($id);

            if ($establishment) {
                $establishment->delete();
                return response()->json([
                    'success' => true
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Establecimiento no encontrado.'
                ], 404);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar el establecimiento.'
            ], 500);
        }
    }
}
