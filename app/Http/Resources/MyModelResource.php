<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property \App\Models\MyModel $resource
 * @mixin \App\Models\MyModel
 */
class MyModelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->resource->id,
            'related' => $this->whenNotNull($this->resource->relatedModel?->value)
        ];
    }
}
