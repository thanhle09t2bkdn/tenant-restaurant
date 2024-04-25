<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::group(['namespace' => 'Api\\V1', 'prefix' => 'v1', 'as' => 'api.v1', 'middleware' => ['api']], function () {
    Route::group(['namespace' => 'App', 'prefix' => 'app', 'as' => '.app'], function () {
        require 'api/v1/app/guest.php';
        Route::group(['middleware' => ['auth:sanctum', 'roles:' . \App\Models\User::USER_ROLE]], function () {
            require 'api/v1/app/account.php';
        });
        Route::group(['namespace' => 'Tenant', 'prefix' => 'tenant', 'middleware' => ['tenant.header']], function () {
            require 'api/v1/app/tenant/table.php';
            Route::group(['middleware' => ['auth:sanctum', 'roles:' . \App\Models\User::RESTAURANT_ADMIN_ROLE]], function () {
                require 'api/v1/app/tenant/account.php';
            });
            require 'api/v1/app/tenant/guest.php';
        });
    });
});
