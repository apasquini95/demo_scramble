<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('endpoint-1', [MyController::class, 'myHandler'])
    ->name('endpoint-1');

Route::get('endpoint-2', [MyController::class, 'myOtherHandler'])
    ->name('endpoint-2');