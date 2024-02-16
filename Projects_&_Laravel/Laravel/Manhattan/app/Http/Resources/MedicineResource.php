<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MedicineResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'medicine_id' => $this->id,
            'medication_name' => $this->medication_name,
            'description' => $this->description,
            'quantity' => $this->quantity,
            'stock' => $this->stock,
            'price' => $this->price
        ];
    }
}
