<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('', [MyController::class, 'myHandler'])
    ->name('test_route');