<?php

namespace App\Http\Controllers;

use App\Http\Requests\MyRequest;

class MyController extends Controller
{
    public function myHandler(MyRequest $request): int
    {
        return 0;
    }
}
