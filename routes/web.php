<?php

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
// 一覧画面
Route::get('/', '\App\Http\Controllers\MemberController@index')->name('index');
// 新規登録画面
Route::get('/create', [App\Http\Controllers\MemberController::class, 'create'])->name('create');
// 新規保存処理
Route::post('/store', [App\Http\Controllers\MemberController::class, 'store'])->name('store');
// 詳細表示画面
Route::get('/show/{id}', [App\Http\Controllers\MemberController::class, 'show'])->name('show');
// 編集画面
Route::get('/edit/{id}', [App\Http\Controllers\MemberController::class, 'edit'])->name('edit');
// 更新処理
Route::post('update/{id}', [App\Http\Controllers\MemberController::class, 'update'])->name('update');
// 削除処理
Route::post('destroy/{id}', [App\Http\Controllers\MemberController::class, 'destroy'])->name('destroy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
