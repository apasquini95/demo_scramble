<?php

namespace App\Http\Controllers;

use App\Http\Requests\MyEnumRequest;

class MyController extends Controller
{
    public function myHandler(MyEnumRequest $request): int
    {
        return 1;
    }
}
