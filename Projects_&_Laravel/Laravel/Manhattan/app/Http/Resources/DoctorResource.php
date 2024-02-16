<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DoctorResource extends JsonResource
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
            'professional_license' => $this->professional_license,
            'education' => $this->education,
            'personal_information' => $this->user,
            'dates' => $this->dates,
            'especialidades' => $this->specialties,
            'establishments' => $this->establishments
        ];
    }
}
