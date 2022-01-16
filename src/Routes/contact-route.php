<?php

use Koraycicekciogullari\HydroContact\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum', 'api'])->prefix('api/admin')->group(function(){
    Route::apiResource('contact', ContactController::class)->only('index', 'show', 'destroy');
});
