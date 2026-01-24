<?php

namespace App\Http\Controllers;

use App\Services\MyService;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class MyController extends Controller
{
    public function __construct(private MyService $myService)
    {
    }

    /**
     * Summary of myHandler
     * @param Request $request
     * @return bool
     * @throws NotFoundHttpException
     */
    public function myHandler(Request $request): bool
    {
        return $this->myService->isRequestOk($request);
    }
}
