<?php

use App\Http\Controllers\Api\ApiCommentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Show comment của sản phẩm 
Route::get('show/{id}',      [ApiCommentController::class,'show']);

// comment sản phẩm
Route::post('comment/{id}',      [ApiCommentController::class,'store']);

//xóa comment
Route::delete('delete/{id}',      [ApiCommentController::class,'destroy']);

