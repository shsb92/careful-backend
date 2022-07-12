<?php

use App\Http\Controllers\AuthApiController;
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
Route::post('login', [AuthApiController::class,'login']);

Route::middleware('auth:sanctum')->group(function () {
    // Auction Center Routes
    Route::post('/centers/add', 'App\Http\Controllers\AuctionCentersController@store')->name('center.add');
    Route::get('/centers', 'App\Http\Controllers\AuctionCentersController@index')->name('center.index');
    Route::get('/centers/{id}', 'App\Http\Controllers\AuctionCentersController@show')->name('center.show');
    Route::put('/center/{id}/update', 'App\Http\Controllers\AuctionCentersController@update')->name('center.update');
    Route::delete('/centers/{id}/delete', 'App\Http\Controllers\AuctionCentersController@delete')->name('center.delete');
    // User Routes
    Route::post('/users/add', 'App\Http\Controllers\UsersController@store')->name('user.add');
    Route::get('/users', 'App\Http\Controllers\UsersController@index')->name('user.index');
    Route::get('/users/{id}', 'App\Http\Controllers\UsersController@show')->name('user.show');
    Route::put('/users/{id}/update', 'App\Http\Controllers\UsersController@update')->name('user.update');
    Route::delete('/users/{id}/delete', 'App\Http\Controllers\UsersController@delete')->name('user.delete');
});
