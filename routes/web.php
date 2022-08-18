<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MemberController;

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
    return view('welcome');
});

//Route::get('/users', [UserController::class,'index']);
Route::get('/list', [MemberController::class,'show']);
Route::get('/add', [MemberController::class,'adddata']);
Route::post('/add/member', [MemberController::class,'storeData'])->name('member.addMember');
route::get('/delete/{id}', [MemberController::class,'deleteData']);
