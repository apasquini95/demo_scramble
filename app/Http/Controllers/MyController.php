<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MyController extends Controller
{
    public function __construct(private UserService $userService)
    {
    }
    public function myHandler(Request $request): ResourceCollection
    {
        return UserResource::collection(
            $this->userService->getByName('Test', true)
                ->orderBy('name')
                ->orderBy('id')
                ->paginate(
                    perPage: 4,
                    page: $request->integer('page')
                )
        );
    }
}
