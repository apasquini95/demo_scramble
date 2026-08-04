<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('my-model/{myModel}', [MyController::class, 'myHandler'])
    ->name('myModel');