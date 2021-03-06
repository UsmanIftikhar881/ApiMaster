<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/searchProduct','SearchProductController');
Route::apiResource('/products','ProductController');
Route::apiResource('/trendingProducts','TrendingProductController');
Route::apiResource('/productCategories','ProductCategoryController');

Route::group(['prefix' => 'products'],function(){
    Route::apiResource('/{product}/reviews','ReviewController');
    Route::apiResource('/{product}/stock','StockController');
});
