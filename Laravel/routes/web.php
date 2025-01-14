<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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


Route::get('/home', function () {
    return view('home');
});

Route::get('/getName/{name}',[UserController::class,'getName']);
Route::post('submit',[UserController::class,'userForm']);

Route::prefix('student')->group(function()
{
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/user',[UserController::class,'userHome']);

});