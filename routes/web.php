<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('index');
//});
//Route::get('/', App\Http\Controllers\Post\IndexController::class);

Route::group(['middleware'=>'authStop',"prefix"=>"admin"],function (){
  //  Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
   // Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create']);

    Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

});
Route::group(['middleware'=>'auth',"prefix"=>"admin"],function (){
Route::get('/logout', App\Http\Controllers\Auth\LogoutController::class)->name('logout');
Route::get('/panel',App\Http\Controllers\Admin\AdminPanelController::class)->name('admin.panel');
});



Route::get('{any?}', \App\Http\Controllers\IndexController::class)->where('any','.*')->name('index');

