<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
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
            'street' => $this->street,
            'interior_number' => $this->interior_number,
            'outside_number' => $this->outside_number,
            'colony' => $this->colony,
            'city' => $this->city,
            'zip_code' => $this->zip_code,
            'establecimiento' => $this->establishment
        ];
    }
}
