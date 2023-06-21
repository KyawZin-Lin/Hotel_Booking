<?php

use App\Http\Controllers\Hotel\RoomTypeController;
use App\Models\RoomTypes;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view("UI.home");
    })->name('dashboard');
    // Route::get('/hotels',function (){
    //     dd('you are entering');
    // })->middleware('admin');
    Route::middleware('admin')->prefix('hotels')->group(function(){
        Route::get('/home',function(){
            return view('hotel.layouts.master');
        });
        Route::resource('room-types', RoomTypeController::class);
    });
});
