<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::post('test', [MyController::class, 'myHandler'])->name('test');