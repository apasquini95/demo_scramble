<?php

namespace App\Http\Controllers;

use App\Http\Requests\RouteParamRequest;
use App\Models\User;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function myHandler(RouteParamRequest $request): int
    {
        return 1;
    }
}
