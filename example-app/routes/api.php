<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyUserController;
use App\Http\Controllers\PostController;

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

Route::get('allUsers', [MyUserController::class, 'index'])->middleware('checkAge');

Route::get('getUser/{id}', [MyUserController::class, 'show']);

Route::post('createUser', [MyUserController::class, 'store']);

Route::put('updateUser/{id}', [MyUserController::class, 'update']);

Route::delete('deleteUser/{id}', [MyUserController::class, 'destroy']);

Route::resource('posts', PostController::class);
