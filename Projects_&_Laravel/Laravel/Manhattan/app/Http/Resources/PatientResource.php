<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'user_id' => $this->user_id,
            'weight' => $this->weight,
            'nss' => $this->nss,
            'personal_information' => $this->user,
            'allergies' => $this->allergies,
            'dates' => $this->dates,
            'diseases' => $this->diseases
        ];
    }
}
