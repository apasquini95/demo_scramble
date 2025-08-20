<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

// This endpoint's specification has the 'user' and the 'test_param' declaration, but the user's type is 'string' 
// instead of 'int' (the ID should be the default binding column).
Route::get('endpoint-with-optional-path-param/{user?}', [MyController::class, 'myHandler'])
    ->name('optional_path_param');

// These 2 endpoints are derived from the first one
Route::prefix('splitted-endpoint')->controller(MyController::class)->group(function () {
    
    // This endpoint's specification has 'user' and 'test_param'. User's type is still string.
    Route::get('{user}', 'myHandler')
        ->name('required_path_param');
        
        // This endpoint's specification has no user (and that's expected), but has no 'test_param'
    Route::get('', 'myHandler')
        ->name('only_test_param');

});