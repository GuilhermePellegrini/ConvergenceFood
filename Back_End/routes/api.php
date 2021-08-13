<?php

use App\Http\Controllers\Api\AuthController as ApiAuthController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::groupe(['prefix' => '/auth', function(){
    Route::post('/register', [ApiAuthController::class, 'register']);
    Route::post('/register/admin', [ApiAuthController::class, 'registerAdmin']);
    Route::post('/login', [ApiAuthController::class, 'login']);
}]);

Route::group(['middleware' => 'auth:sanctum'], function (){
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::post('/auth/logout', [ApiAuthController::class, 'logout']);
});