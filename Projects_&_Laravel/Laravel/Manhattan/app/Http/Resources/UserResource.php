<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        if ($this->doctor) {
            $roleSpecificData = $this->doctor;
        } elseif ($this->patient) {
            $roleSpecificData = $this->patient;
        } else {
            $roleSpecificData = null;
        }

        return [
            'id' => $this->id,
            'rol' => $this->rol,
            'name' => $this->name,
            'first_last_name' => $this->first_last_name,
            'second_last_name' => $this->second_last_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'sex' => $this->sex,
            'age' => $this->age,
            'date_of_birth' => $this->date_of_birth,
            'link_photo' => $this->link_photo,
            'rol_information' => $roleSpecificData,
        ];
    }
}
