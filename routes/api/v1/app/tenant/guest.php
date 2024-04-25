<?php

use App\Http\Controllers\Api\V1\App\Tenant\GuestController;

Route::group([
    'prefix' => 'guest',
], function () {
    Route::post('/login', [GuestController::class, 'login']);
});
