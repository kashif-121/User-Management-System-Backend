<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/allUser', [UserController::class, 'index'])->name('allUsers');
Route::get('/countUser', [UserController::class, 'countUser'])->name('allUsers');
Route::post('/addUser', [UserController::class, 'addUser'])->name('addUser');
Route::post('/updateUser', [UserController::class, 'updateUser'])->name('updateUser');
Route::post('/deleteUser', [UserController::class, 'deleteUser'])->name('deleteUser');