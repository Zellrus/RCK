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

Route::group(['namespace'=>'\App\Http\Controllers\Product' ,'prefix' => 'products'],function (){
    Route::get('/', "ProductController@api")->name('api.products.index');
    Route::get('/{product}', "ShowController");
    Route::group(['middleware'=>'auth'],function (){

//        Route::post('/', function (){
//            dd(1);
//        })->name('product.store');
//        Route::patch('/{product}', "UpdateController")->name('product.update');
       // Route::delete('/{product}', "DeleteController");
    });
});
