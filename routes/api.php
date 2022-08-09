<?php

use App\Http\Controllers\User\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('user')->name('user.')->group(function(){
  
    Route::middleware(['guest:api'])->group(function(){
          Route::post('/login',[LoginController::class,'login'])->name('check');
    });

    Route::middleware(['auth:api'])->group(function(){
          Route::post('/logout',[LoginController::class,'logout'])->name('logout');
          Route::get('/dashboard', function (Request $request) {
            return $request->user();
        });
    });

});