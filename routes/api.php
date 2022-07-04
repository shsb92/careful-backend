<?php

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

// Auction Center Routes
Route::post('/addcenter', 'App\Http\Controllers\AuctionCentersController@auctionCenterAdd')->name('center.add');
Route::get('/indexcenters', 'App\Http\Controllers\AuctionCentersController@auctionCenterIndex')->name('center.index');
Route::get('/showcenter/{id}', 'App\Http\Controllers\AuctionCentersController@auctionCenterShow')->name('center.show');
Route::delete('/deletecenter/{id}', 'App\Http\Controllers\AuctionCentersController@auctionCenterDelete')->name('center.delete');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
