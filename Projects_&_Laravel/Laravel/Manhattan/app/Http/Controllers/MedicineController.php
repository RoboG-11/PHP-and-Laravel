<?php

namespace App\Http\Controllers;

use App\Http\Requests\MedicineRequest;
use App\Http\Resources\MedicineResource;
use App\Models\Medicine;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        return MedicineResource::collection(Medicine::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MedicineRequest $request): JsonResponse
    {
        try {

            $data = $request->all();
            $medicine = Medicine::create($data);

            return response()->json([
                'success' => true,
                'data' => new JsonResource($medicine)
            ], 201);
        } catch (\Exception $e) {
            dd($e);

            return response()->json([
                'success' => false,
                'message' => 'Error al crear el medicamento.'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResource
    {
        $medicine = Medicine::find($id);

        if (!$medicine) {
            return new JsonResource([]);
        }

        return new MedicineResource($medicine);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MedicineRequest $request, string $id): JsonResponse
    {
        try {

            $medicine = Medicine::find($id);

            $medicine->medication_name = $request->medication_name;
            $medicine->description = $request->description;
            $medicine->quantity = $request->quantity;
            $medicine->stock = $request->stock;
            $medicine->save();

            return response()->json([
                'success' => true,
                'data' => new MedicineResource($medicine)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([

                'success' => false,
                'message' => 'Error al actualizar el medicamento.'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        try {
            $medicine = Medicine::find($id);

            if ($medicine) {
                $medicine->delete();
                return response()->json([
                    'success' => true
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Medicamento no encontrado.'
                ], 404);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar el medicamento.'
            ], 500);
        }
    }
}
