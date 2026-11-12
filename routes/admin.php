<?php

use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendFormController;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


//Route::post('login', [AuthController::class,'login']);
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    Route::post('logout', [AuthController::class,'logout']);
//    Route::post('refresh', [AuthController::class,'refresh']);
//    Route::post('me', [AuthController::class,'me']);
//});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');
Route::group(['middleware' => ['auth:sanctum', 'verified'],'prefix' => 'admin','as'=>'admin.'], function () {

    Route::resource('reviews',ReviewController::class);
    Route::get('seo', [SeoController::class, 'index'])->name('seo.index');
    Route::put('seo', [SeoController::class, 'update'])->name('seo.update');
});
