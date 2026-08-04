<?php

namespace App\Http\Controllers;

use App\Http\Resources\MyModelResource;
use App\Models\MyModel;

class MyController extends Controller
{
    public function myHandler(MyModel $myModel): MyModelResource
    {
        return new MyModelResource($myModel);
    }
}
