<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/events', [EventController::class, 'index']);
Route::get('/create-event', [EventController::class, 'create']);
Route::post('/store-event', [EventController::class, 'store']);