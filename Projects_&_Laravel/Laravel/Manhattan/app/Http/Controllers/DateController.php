<?php

namespace App\Http\Controllers;

use App\Http\Requests\DateRequest;
use App\Http\Resources\DateResource;
use App\Models\Date;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Log;


class DateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        return DateResource::collection(Date::all());
    }

    /**
     * Show the form for creating a new resource.
     * WARNING: Preguntarle a Jorge cómo se van a obtener los ids
     */
    public function store(DateRequest $request): JsonResponse
    {
        try {
            $data = $request->all();
            $date = Date::create($data);

            return response()->json([
                'success' => true,
                'data' => new DateResource($date)
            ], 201);
        } catch (\Exception $e) {
            dd($e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Error al crear la cita.'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResource
    {
        $date = Date::find($id);

        if (!$date) {
            return new JsonResource([]);
        }

        return new DateResource($date);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DateRequest $request, string $id): JsonResponse
    {
        try {

            $date = Date::find($id);

            $date->doctor_id = $request->doctor_id;
            $date->patient_id = $request->patient_id;
            $date->date = $request->date;
            $date->time = $request->time;
            $date->link = $request->link;
            $date->save();

            return response()->json([
                'success' => true,
                'data' => new DateResource($date)
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
    public function destroy(string $id): JsonResponse
    {
        try {
            $date = Date::find($id);

            if ($date) {
                $date->delete();
                return response()->json([
                    'success' => true
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Cita no encontrada.'
                ], 404);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar la cita.'
            ], 500);
        }
    }

    public function updateDate(Request $request, string $id)
    {
        try {

            $date = Date::find($id);

            $date->status = $request->status;
            $date->save();

            return response()->json([
                'success' => true,
                'data' => new DateResource($date)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([

                'success' => false,
                'message' => 'Error al actualizar el status.'
            ], 500);
        }
    }
}
