<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function myHandler(Request $request, ?User $user = null): int
    {
        $bool = $request->boolean('test_param');
        return $bool ? $user->id : -1;
    }
}
