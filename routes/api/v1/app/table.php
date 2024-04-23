<?php

use App\Http\Controllers\Api\V1\App\Tenant\TableController;

Route::group([
    'prefix' => 'tables',
], function () {
    Route::get('', [TableController::class, 'index']);
});
