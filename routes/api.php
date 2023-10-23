<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\V1\BookController as BookV1;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::post('auth/register', [AuthController::class, 'create']);
Route::post('auth/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {

    Route::resource('departments', DepartmentController::class);
    Route::resource('employees', EmployeesController::class);
    Route::get('employeesall', [EmployeesController::class, 'all']);
    Route::get('employeesbydepartment', [EmployeesController::class, 'EmployeesByDepartment']);
    Route::get('auth/logout', [AuthController::class, 'logout']);
});
