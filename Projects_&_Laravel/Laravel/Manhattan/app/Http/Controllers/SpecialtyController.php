<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpecialtyRequest;
use App\Http\Resources\SpecialtyResource;
use App\Models\DoctorSpecialty;
use App\Models\Specialty;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        return SpecialtyResource::collection(Specialty::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SpecialtyRequest $request): JsonResponse
    {
        try {
            $data = $request->all();
            $specialty = Specialty::create($data);

            return response()->json([
                'success' => true,
                'data' => new JsonResource($specialty)
            ], 201);
        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => 'Error al crear la especialidad.'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResource
    {
        $specialty = Specialty::find($id);

        if (!$specialty) {
            return new JsonResource([]);
        }

        return new SpecialtyResource($specialty);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SpecialtyRequest $request, string $id): JsonResponse
    {
        try {

            $specialty = Specialty::find($id);

            $specialty->speciality_name = $request->speciality_name;
            $specialty->description = $request->description;
            $specialty->save();

            return response()->json([
                'success' => true,
                'data' => new SpecialtyResource($specialty)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([

                'success' => false,
                'message' => 'Error al actualizar la especialidad.'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        try {
            $specialty = Specialty::find($id);

            if ($specialty) {
                $specialty->delete();
                return response()->json([
                    'success' => true
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Especialidad no encontrado.'
                ], 404);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar la especialidad.'
            ], 500);
        }
    }

    public function doctorsOfSpecialty($idSpecialty)
    {
        $doctorSpecialties = DoctorSpecialty::where('specialty_id', $idSpecialty)->with(['doctor.user', 'doctor.specialties'])->get();

        $formattedData = $doctorSpecialties->map(function ($doctorSpecialty) {
            $doctor = $doctorSpecialty->doctor;
            return [
                'user_id' => $doctor->user_id,
                'professional_license' => $doctor->professional_license,
                'education' => $doctor->education,
                'personal_information' => $doctor->user,
                'especialidades' => $doctor->specialties,
                'establishments' => $doctor->establishments,
            ];
        });

        return response()->json([
            'data' => $formattedData,
        ]);
    }
}
