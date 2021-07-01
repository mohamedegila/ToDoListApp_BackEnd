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
    Route::get('', [ToDoListController::class,'index'])->name('item.index');
});
Route::group(['prefix'=>'v1/item'], function () {
    Route::post('/store', [ToDoListController::class,'store'])->name('item.store');
    Route::get('/{item}', [ToDoListController::class,'edit'])->name('item.edit');
    Route::put('/{id}', [ToDoListController::class,'update'])->name('item.update');
    Route::delete('/{item}', [ToDoListController::class,'destroy'])->name('item.destroy');
    Route::get('{id}/change-state', [ToDoListController::class,'toggleCompleted'])->name('item.change-state');
});
