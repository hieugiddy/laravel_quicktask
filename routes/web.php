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

Route::get('/',[Controllers\TaskController::class,'Index'])->name('home');
Route::group(['prefix'=>'task','as'=>'task.'],function(){
	Route::get('them',[Controllers\TaskController::class,'ThemTask'])->name('them');
	Route::post('them',[Controllers\TaskController::class,'ThemTask']);

	Route::get('sua/{id?}',[Controllers\TaskController::class,'SuaTask'])->name('sua');
	Route::put('sua/{id?}',[Controllers\TaskController::class,'SuaTask']);

	Route::delete('xoa/{id?}',[Controllers\TaskController::class,'XoaTask'])->name('xoa');
});
