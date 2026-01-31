<?php

use App\Http\Controllers\SendFormController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {


});

Route::post('/send/worm',[SendFormController::class,'sendWorm'])->name('send.worm');
