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
    // Employee Routes
    Route::post('/employees/add', 'App\Http\Controllers\EmployeesController@store')->name('employee.add');
    Route::get('/employees', 'App\Http\Controllers\EmployeesController@index')->name('employee.index');
    Route::get('/employees/{id}', 'App\Http\Controllers\EmployeesController@show')->name('employee.show');
    Route::put('/employees/{id}/update', 'App\Http\Controllers\EmployeesController@update')->name('employee.update');
    Route::delete('/employees/{id}/delete', 'App\Http\Controllers\EmployeesController@delete')->name('employee.delete');
});
