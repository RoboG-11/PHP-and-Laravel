<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SummaryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'date_id' => $this->date_id,
            'medical_prescription_id' => $this->medical_prescription_id,
            'diagnostic' => $this->diagnostic,
            'date' => $this->date,
            'medical_prescription' => $this->medical_prescription
        ];
    }
}
