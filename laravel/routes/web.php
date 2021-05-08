<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('main'); // 'welcome'
// });

Route::get('/', [BoardController::class, 'index']);
Route::get('/read', [BoardController::class, 'show']);
Route::get('/write', [BoardController::class, 'create']);
Route::get('/update', [BoardController::class, 'edit']);
Route::get('/delete', [BoardController::class, 'delete']);

Route::post('/', [BoardController::class, 'store']);
Route::post('/update', [BoardController::class, 'update']);

