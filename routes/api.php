<?php

use App\Http\Controllers\API\ToDoListController;
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

Route::group(['prefix'=>'v1/items'], function () {
    Route::get('', [ToDoListController::class,'index']);
    Route::post('', [ToDoListController::class,'store']);
    Route::get('/{item}', [ToDoListController::class,'edit']);
    Route::put('/{id}', [ToDoListController::class,'update']);
    Route::delete('/{item}', [ToDoListController::class,'destroy']);
});
