<?php

namespace App\Http\Resources;

use App\Dto\MyDto;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\MissingValue;

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
            /** @var bool */
            'conditional_prop' => $this->when(
                array_key_exists('prop_2', $props),
                function () use ($props) {
                    return (bool) $props['prop_2'];
                }
            ),
            
            /** @var MissingValue|bool */
            'conditional_prop_but_required' => $this->when(
                array_key_exists('prop_2', $props),
                function () use ($props) {
                    return $props['prop_2'];
                }
            ),

            /** @var bool */
            'fake_bool_prop'   => $this->when(
                array_key_exists('prop_1', $props),
                function () use ($props) {
                    return strlen((string) $props['prop_1']);
                }
            ),
        ];
    }
}
