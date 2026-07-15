<?php

namespace App\Http\Controllers;

use App\Dto\MyDto;
use App\Http\Resources\MyResource;

class MyController extends Controller
{
    public function myHandler(): MyResource
    {
        return new MyResource(new MyDto(['prop_1' => 0]));
    }
}
