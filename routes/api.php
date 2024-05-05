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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Use App\News;

Route::get('news', 'App\Http\Controllers\NewsController@index');
Route::get('news/{id}', 'App\Http\Controllers\NewsController@show');
Route::post('news', 'App\Http\Controllers\NewsController@store');
Route::put('news/{id}', 'App\Http\Controllers\NewsController@update');
Route::delete('news/{id}', 'App\Http\Controllers\NewsController@delete');