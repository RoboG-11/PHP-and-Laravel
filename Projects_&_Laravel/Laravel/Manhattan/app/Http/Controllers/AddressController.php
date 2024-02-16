<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddressRequest;
use App\Http\Resources\AddressResource;
use App\Models\Address;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResource
    {
        return AddressResource::collection(Address::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddressRequest $request): JsonResponse
    {
        try {

            $data = $request->all();
            $address = Address::create($data);

            return response()->json([
                'success' => true,
                'data' => new JsonResource($address)
            ], 201);
        } catch (\Exception $e) {

            return response()->json([
                'success' => false,
                'message' => 'Error al crear la dirección.'
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResource
    {
        $address = Address::find($id);

        if (!$address) {
            return new JsonResource([]);
        }

        return new AddressResource($address);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AddressRequest $request, string $id): JsonResponse
    {
        try {

            $address = Address::find($id);

            $address->street = $request->street;
            $address->interior_number = $request->interior_number;
            $address->outside_number = $request->outside_number;
            $address->colony = $request->colony;
            $address->city = $request->city;
            $address->zip_code = $request->zip_code;
            $address->save();

            return response()->json([
                'success' => true,
                'data' => new AddressResource($address)
            ], 200);
        } catch (\Exception $e) {
            return response()->json([

                'success' => false,
                'message' => 'Error al actualizar la dirección.'
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $address = Address::find($id);

            if ($address) {
                $address->delete();
                return response()->json([
                    'success' => true
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Dirección no encontrado.'
                ], 404);
            }
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error al eliminar el dirección.'
            ], 500);
        }
    }
}
