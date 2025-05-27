<?php

use Illuminate\Support\Facades\Route;
use App\Http\Modules\ControllersIndex;

Route::prefix('index')->group(function () {
    Route::controller(ControllersIndex::class)->group(function () {
        Route::get('/','index');
    });
});
