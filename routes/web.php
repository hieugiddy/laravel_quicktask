<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/',[Controllers\TaskController::class,'index'])->name('home');
Route::group(['prefix'=>'task','as'=>'task.'],function(){
	Route::get('them',[Controllers\TaskController::class,'viewThemTask'])->name('them');
	Route::post('them',[Controllers\TaskController::class,'new']);

	Route::get('sua/{id?}',[Controllers\TaskController::class,'viewSuaTask'])->name('sua');
	Route::put('sua/{id?}',[Controllers\TaskController::class,'update']);

	Route::delete('xoa/{id?}',[Controllers\TaskController::class,'delete'])->name('xoa');
});
