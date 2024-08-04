<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


#  Route for Auth middleware
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function (){
    # TASKS ROUTES
    Route::apiResource('tasks', TaskController::class);
    # PROJECTS ROUTES
    Route::apiResource('projects', ProjectController::class);
});

# AUTH ROUTES
Route::post('/login', [AuthController::class, 'login']);
Route::post('/signup', [AuthController::class, 'signup']);


