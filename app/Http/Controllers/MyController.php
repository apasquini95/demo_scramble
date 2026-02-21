<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class MyController extends Controller
{
    /**
     * Summary of myHandler
     * @param Request $request
     * @param mixed $user
     * @return int
     * @throws NotFoundHttpException
     * @throws BadRequestHttpException
     */
    public function myHandler(Request $request): int
    {
        $bool = $request->boolean('test_param');
        $this->doSomething($bool);

        return 1;
    }

    /**
     * Summary of myOtherHandler
     * @param Request $request
     * @return int
     * @throws NotFoundHttpException
     * @throws BadRequestHttpException
     */
    public function myOtherHandler(Request $request): int
    {
        $bool = $request->boolean('test_param');
        $this->doSomething($bool);

        return 2;
    }

    private function doSomething(bool $param): void
    {
        if ($param) {
            throw new BadRequestHttpException();
        }

        throw new NotFoundHttpException();
    }
}
