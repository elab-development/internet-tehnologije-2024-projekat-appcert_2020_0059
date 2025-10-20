<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CredentialController;
use App\Http\Controllers\TypeController;
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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/types', [TypeController::class, 'index']);
Route::get('/types/{id}', [TypeController::class, 'show']);

Route::get('/credentials', [CredentialController::class, 'index']);
Route::get('/credentials/user', [CredentialController::class, 'credentialsByUser']);
Route::get('/credentials/page/{page}', [CredentialController::class, 'paginateCredentials']);
Route::get('/credentials/filter', [CredentialController::class, 'filterCredentials']);
Route::get('/credentials/{id}', [CredentialController::class, 'show']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::resource('types', TypeController::class)
        ->only(['store', 'update', 'destroy']);
    Route::resource('credentials', CredentialController::class)
        ->only(['store', 'update', 'destroy']);

    Route::post('/logout', [AuthController::class, 'logout']);
});
