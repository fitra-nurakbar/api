<?php

use App\Http\Controllers\ApiPublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/movies',[ApiPublicController::class, 'show']);

// Route::controller(Controller::class)->group(function(){
//     Route::get('users/{id}', function ($id) {
        
//     });
// });

// Route::resource('test', ApiPublicController::class);