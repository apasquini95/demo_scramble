<?php

namespace App\Dto;

class MyDto
{
    /**
     * Summary of props
     * @var array<string, mixed>
     */
    public array $props;
    
    /**
     * Create a new class instance.
     */
    public function __construct(
        array $props
    ) {
        $this->props = $props;
    }
}
