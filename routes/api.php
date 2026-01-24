<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('endpoint-with-not-found', [MyController::class, 'myHandler'])
    ->name('not-found-api');