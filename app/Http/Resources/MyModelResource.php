<?php

namespace App\Http\Resources;

use App\Models\MyModel;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property MyModel $resource
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
            'datetimeProp' => $this->resource->datetime_prop,
            'dateProp'     => $this->resource->date_prop
        ];
    }
}
