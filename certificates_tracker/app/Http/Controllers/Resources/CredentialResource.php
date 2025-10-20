<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CredentialResource extends JsonResource
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
            'title' => $this->title,
            'issued_date' => $this->issued_date,
            'expiry_date' => $this->expiry_date,
            'issuer' => $this->issuer,
            'user' => new UserResource($this->user),
            'type' => new TypeResource($this->type),
        ];
    }
}
