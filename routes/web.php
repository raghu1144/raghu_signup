<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignupController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', 'SignupController@create');

Route::get('/', [SignupController::class, 'create']);

Route::post('/signup', [SignupController::class, 'insert']);

Route::get('/view', [SignupController::class, 'show']);

Route::get('/deleteUsers/{id}', [SignupController::class, 'delete']);

Route::get('/updateUsers/{id}', [SignupController::class, 'updated']);

// Route::get('/editUsers/{id}', [SignupController::class, 'edit']);

Route::post('/getUserDetails', [SignupController::class, 'getUserDetails']);

Route::post('/change', [SignupController::class, 'change']);