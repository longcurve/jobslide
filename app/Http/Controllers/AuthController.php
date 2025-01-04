<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    Route::middleware('auth.sanctum')->group(function() {
        Route::apiResource('applications', ApplicationController::class)
    });
}
