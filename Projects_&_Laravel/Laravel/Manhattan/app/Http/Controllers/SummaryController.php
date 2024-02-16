<?php

namespace App\Http\Controllers;

use App\Http\Requests\SummaryRequest;
use App\Http\Resources\SummaryResource;
use App\Models\Summary;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SummaryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        return SummaryResource::collection(Summary::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SummaryRequest $request): JsonResponse
    {
        try {
            $data = $request->all();
            $summary = Summary::create($data);

            return response()->json([
                'success' => true,
                'data' => new SummaryResource($summary)
            ], 201);
        } catch (\Exception $e) {
            dd($e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Error al crear el resumen.'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResource
    {
        $summary = Summary::find($id);

        if (!$summary) {
            return new JsonResource([]);
        }

        return new SummaryResource($summary);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SummaryRequest $request, string $id)
    {
        try {

            $summary = Summary::find($id);

            $summary->date_id = $request->date_id;
            $summary->medical_prescription_id = $request->medical_prescription_id;
            $summary->diagnostic = $request->diagnostic;
            $summary->save();

            return response()->json([
                'success' => true,
                'data' => new SummaryResource($summary)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([

                'success' => false,
                'message' => 'Error al actualizar el resumen.'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $summary = Summary::find($id);

            if ($summary) {
                $summary->delete();
                return response()->json([
                    'success' => true
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Resumen no encontrado.'
                ], 404);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar el resumen.'
            ], 500);
        }
    }
}
