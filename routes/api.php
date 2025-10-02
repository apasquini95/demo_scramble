<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

Route::get('test', [MyController::class, 'myHandler'])->name('test');