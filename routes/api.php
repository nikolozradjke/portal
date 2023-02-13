<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\AuthController;
use \App\Http\Controllers\Api\MenuController;

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
    მარშრუტის პრეფიქსები უნდა ემთხვეოდეს menus ცხრილში არსებულ route_prefix-ს

    დაშვებების მუშაობის პრინციპი:

    ადმინისტრატორის დაშვება - admin

    პარამეტრები (როლები)

    მაგ: ['middleware' => ['admin:1, 2, 3, 4']

*/
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware(['auth:sanctum']);

Route::group(['middleware' => ['auth:sanctum'],], function () {
    Route::get('/get-menu', [MenuController::class, 'index']);
});
