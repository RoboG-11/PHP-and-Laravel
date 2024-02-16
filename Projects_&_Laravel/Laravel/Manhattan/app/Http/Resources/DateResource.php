<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DateResource extends JsonResource
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
            'doctor_user_id' => $this->doctor_user_id,
            'patient_user_id' => $this->patient_user_id,
            'date' => $this->date,
            'time' => $this->time,
            'link' => $this->link,
            'status' => $this->status,
            'motive' => $this->motive,
            'doctor_information' => $this->doctor ? [
                'doctor' => array_merge($this->doctor->toArray(), [
                    'personal_information' => $this->doctor->user,
                ]),
            ] : null,
            'patient_information' => $this->patient ? [
                'patient' => array_merge($this->patient->toArray(), [
                    'personal_information' => $this->patient->user,
                ]),
            ] : null,
            'summary' => $this->summary
        ];
    }
}
