<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CON_login;
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



Auth::routes();


Route::get('/index', function () {
    return 'loginhome';
});
Route::get('/', [App\Http\Controllers\CON_login::class,'index']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/userhome', [App\Http\Controllers\CON_userhome::class, 'index']);
Route::get('/dash_sup', [App\Http\Controllers\CON_dash_sup::class, 'index']);
Route::get('/dash_manager', [App\Http\Controllers\CON_dash_manager::class,'index']);
Route::get('/repair_manager', [App\Http\Controllers\CON_table_repair_manager::class, 'index']);
Route::get('/repair_sup', [App\Http\Controllers\CON_table_repair_sup::class,'index']);
Route::get('/requsition_manager', [App\Http\Controllers\CON_table_requsition_manager::class, 'index'])->name('requsition_manage');
Route::get('/requsition_sup', [App\Http\Controllers\CON_table_requsition_sup::class,'index']);



