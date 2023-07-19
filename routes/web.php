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

Route::group(["prefix"=>"admin"],function (){
    Route::group(['middleware'=>'authStop'],function () {
        //  Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
        // Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'create']);
        Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
        Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
    });
    Route::group(['middleware'=>'auth'],function (){
        Route::get('/logout', App\Http\Controllers\Auth\LogoutController::class)->name('logout');
        Route::get('/panel',App\Http\Controllers\Admin\AdminPanelController::class)->name('admin.panel');

        Route::group(['prefix'=>"products"],function (){
            Route::get('/create', [\App\Http\Controllers\Product\CreateController::class,'createProduct'])->name('product.create');
            Route::get('/{product}/edit', \App\Http\Controllers\Product\EditController::class)->name('product.edit');
            Route::get('/', [App\Http\Controllers\Product\ProductController::class,'index'])->name('products.index');
            Route::post('/', \App\Http\Controllers\Product\StoreController::class)->name('product.store');
            Route::patch('/{product}', \App\Http\Controllers\Product\UpdateController::class)->name('product.update');
            Route::delete('/{product}', \App\Http\Controllers\Product\DeleteController::class)->name('product.delete');

            Route::get('/category/create', [\App\Http\Controllers\Product\CreateController::class,'createCategory'])->name('product.category.create');
            Route::post('/', \App\Http\Controllers\Product\Category\StoreController::class)->name('product.category.store');
            Route::get('/category/{category}/edit', \App\Http\Controllers\Product\Category\EditController::class)->name('product.category.edit');
            Route::patch('/category/{category}', \App\Http\Controllers\Product\Category\UpdateController::class)->name('product.category.update');
            Route::delete('/category/{category}', \App\Http\Controllers\Product\Category\DeleteController::class)->name('product.category.delete');

        });
        Route::group(['prefix'=>"posts"],function (){
            Route::get('/create', function (){return view('admin.post.create');})->name('post.create');
            Route::get('/{post}/edit', \App\Http\Controllers\Post\EditController::class)->name('post.edit');
            Route::get('/', [App\Http\Controllers\Post\PostController::class,'index'])->name('posts.index');
            Route::post('/', \App\Http\Controllers\Post\StoreController::class)->name('post.store');
            Route::patch('/{post}', \App\Http\Controllers\Post\UpdateController::class)->name('post.update');
            Route::delete('/{post}', \App\Http\Controllers\Post\DeleteController::class)->name('post.delete');
        });
    });
});




Route::get('{any?}', \App\Http\Controllers\IndexController::class)->where('any','.*')->name('index');

