<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property \App\Models\MyModel $resource
 */
class MyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'          => $this->resource->id,
            'name'        => $this->resource->name,
            'nickname'    => $this->whenNotNull($this->resource->nickname),
            'dateOfBirth' => $this->whenNotNull($this->resource->dob),
        ];
    }
}
