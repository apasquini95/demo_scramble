<?php

namespace App\Http\Resources;

use App\Dto\MyDto;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Summary of MyResource.
 * @property MyDto $resource
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
        /**
         * @var array {
         *      prop_1: int,
         *      prop_2?: bool
         *  } $props
         */
        $props = $this->resource->props;

        return [
            /** @var int */
            'required_prop'    => $props['prop_1'],
            /** @var bool */
            'conditional_prop' => $this->when(
                array_key_exists('prop_2', $props),
                function () use ($props) {
                    return $props['prop_2'];
                }
            )
        ];
    }
}
