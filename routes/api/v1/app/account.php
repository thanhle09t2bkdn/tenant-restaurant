<?php

use App\Http\Controllers\Api\V1\App\AccountController;

Route::group([
    'prefix' => 'account',
], function () {
    Route::get('/profile', [AccountController::class, 'profile']);
    Route::delete('/logout', [AccountController::class, 'logout']);
});
