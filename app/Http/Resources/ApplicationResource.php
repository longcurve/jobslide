<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' =>$this->id,
            'date' => $this->date,
            'position' => $this->position,
            'company' => $this->company,
            'location' => $this->location,
            'contact_email' => $this->contact_email,
            'contact_phone' => $this->contact_phone,
            'calls' => $this->calls,
            'interviews' => $this->interviews
        ];
    }
}