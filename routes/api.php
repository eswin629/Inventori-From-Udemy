<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EmployeeController;
 
Route::group([
 
    'middleware' => 'api',
    'prefix' => 'auth'
 
], function ($router) {
 
    Route::post('login', [AuthController::class, 'login']);
    Route::post('signup', [AuthController::class, 'signup']);    
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
 
});

 Route::apiResource('/api/employee', [EmployeeController::class, 'employee']);
 // Route::apiResource('/employee', [EmployeeController::class, 'employee']);
// Route::apiResource('/employee', 'App\Http\Controllers\Api\EmployeeController');
// Route::apiResource('/api/employee', 'App\Http\Controllers\Api\EmployeeController');


 // Route::ApiResource('/subject','App\Http\Controllers\Api\SubjectController');

//  Route::ApiResource('/subject','App\Http\Controllers\Api\SubjectController');
// Route::ApiResource('/section','App\Http\Controllers\Api\SectionController');
// Route::ApiResource('/student','App\Http\Controllers\Api\StudentController');
