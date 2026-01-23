<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('endpoint-with-enum', [MyController::class, 'myHandler'])
    ->name('endpoint_with_enum');