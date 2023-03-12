<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');

Route::middleware(['web','auth'])->prefix('dashboard')->group(function() {

    //Users-web-route

    Route::get('users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::post('users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('users/{user}', [\App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::get('users/{user}/edit', [\App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::put('users/{user}', [\App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('users/{user}', [\App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');

    //Categories-web-route

    Route::get('categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('categories.index');
    Route::get('categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('categories.create');
    Route::post('categories', [App\Http\Controllers\CategoryController::class, 'store'])->name('categories.store');
    Route::get('categories/{category}', [\App\Http\Controllers\CategoryController::class, 'show'])->name('categories.show');
    Route::get('categories/{category}/edit', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('categories/{category}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('categories.update');
    Route::delete('categories/{category}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('categories.destroy');

    //Products-web-route

    Route::get('products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
    Route::get('products/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
    Route::post('products', [\App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
    Route::get('products/{product}', [\App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
    Route::get('products/{product}/edit', [\App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
    Route::put('products/{product}', [\App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
    Route::delete('products/{product}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');

    //Settings-web-route

    Route::get('settings', [\App\Http\Controllers\SettingsControler::class, 'index'])->name('settings.index');
    Route::get('settings/create', [\App\Http\Controllers\SettingsControler::class, 'create'])->name('settings.create');
    Route::post('settings', [\App\Http\Controllers\SettingsControler::class, 'store'])->name('settings.store');
    Route::get('settings/{settings}/edit', [\App\Http\Controllers\SettingsControler::class, 'edit'])->name('settings.edit');
    Route::put('settings/{settings}', [\App\Http\Controllers\SettingsControler::class, 'update'])->name('settings.update');

    //Referents-web-route

    Route::get('referents', [App\Http\Controllers\ReferentsController::class, 'index'])->name('referents.index');
    Route::get('referents/create', [App\Http\Controllers\ReferentsController::class, 'create'])->name('referents.create');
    Route::post('referents', [App\Http\Controllers\ReferentsController::class, 'store'])->name('referents.store');
    Route::get('referents/{referent}', [\App\Http\Controllers\ReferentsController::class, 'show'])->name('referents.show');
    Route::get('referents/{referents}/edit', [\App\Http\Controllers\ReferentsController::class, 'edit'])->name('referents.edit');
    Route::put('referents/{referents}', [\App\Http\Controllers\ReferentsController::class, 'update'])->name('referents.update');
    Route::delete('referents/{referent}', [\App\Http\Controllers\ReferentsController::class, 'destroy'])->name('referents.destroy');

    //Uslugi-web-route

    Route::get('services', [App\Http\Controllers\ServicesController::class, 'index'])->name('services.index');
    Route::get('services/create', [App\Http\Controllers\ServicesController::class, 'create'])->name('services.create');
    Route::post('services', [App\Http\Controllers\ServicesController::class, 'store'])->name('services.store');
    Route::get('services/{service}', [\App\Http\Controllers\ServicesController::class, 'show'])->name('services.show');
    Route::get('services/{services}/edit', [\App\Http\Controllers\ServicesController::class, 'edit'])->name('services.edit');
    Route::put('services/{services}', [\App\Http\Controllers\ServicesController::class, 'update'])->name('services.update');
    Route::delete('services/{service}', [\App\Http\Controllers\ServicesController::class, 'destroy'])->name('services.destroy');

    //StaticPages-web-route

    Route::get('stats', [App\Http\Controllers\StaticPagesController::class, 'index'])->name('stats.index');
    Route::get('stats/create', [App\Http\Controllers\StaticPagesController::class, 'create'])->name('stats.create');
    Route::post('stats', [App\Http\Controllers\StaticPagesController::class, 'store'])->name('stats.store');
    Route::get('stats/{stat}', [\App\Http\Controllers\StaticPagesController::class, 'show'])->name('stats.show');
    Route::get('stats/{stats}/edit', [\App\Http\Controllers\StaticPagesController::class, 'edit'])->name('stats.edit');
    Route::put('stats/{stats}', [\App\Http\Controllers\StaticPagesController::class, 'update'])->name('stats.update');
    Route::delete('stats/{stat}', [\App\Http\Controllers\StaticPagesController::class, 'destroy'])->name('stats.destroy');

    //Slyder-web-route

    Route::get('sliders', [App\Http\Controllers\SliderController::class, 'index'])->name('sliders.index');
    Route::get('sliders/create', [App\Http\Controllers\SliderController::class, 'create'])->name('sliders.create');
    Route::post('sliders', [App\Http\Controllers\SliderController::class, 'store'])->name('sliders.store');
    Route::get('sliders/{slider}', [\App\Http\Controllers\SliderController::class, 'show'])->name('sliders.show');
    Route::get('sliders/{sliders}/edit', [\App\Http\Controllers\SliderController::class, 'edit'])->name('sliders.edit');
    Route::put('sliders/{sliders}', [\App\Http\Controllers\SliderController::class, 'update'])->name('sliders.update');
    Route::delete('sliders/{slider}', [\App\Http\Controllers\SliderController::class, 'destroy'])->name('sliders.destroy');

    Route::get('mail', [\App\Http\Controllers\UserController::class, 'mail'])->name('send.mail');
});
