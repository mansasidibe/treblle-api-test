<?php

use App\Http\Controllers\SampleController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware(['treblle'])->group(function () {
    // YOUR API ROUTES GO HERE
    Route::prefix('samples')->group(function () {
        Route::get('{uuid}', [SampleController::class, 'view']);
        Route::post('store', [SampleController::class, 'store']);
    });
});
