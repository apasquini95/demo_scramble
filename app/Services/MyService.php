<?php
namespace App\Services;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class MyService
{
    public function isRequestOk(Request $request): bool
    {
        $bool = $request->boolean('test_param');

        $this->checkParam($bool);

        return true;
    }

    private function checkParam(bool $param)
    {
       if (!$param) {
            throw new NotFoundHttpException();
        } 
    }
}