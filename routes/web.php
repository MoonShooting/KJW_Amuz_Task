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

Route::get('/', function () { //최초 접속
    return view('main');
});
// url/create가 된다. postController class의 create 메소드 실행 후 응답 돌려줌.
Route::get('/creat',[PostController::class, 'create']);
Route::post('/creat',[PostController::class, 'store']);
Route::get('/show/{id}',[PostController::class, 'show'])->name('show.show');
Route::get('/list',[PostController::class, 'list']);
// Route::fullback(function () {
//     '현재 페이지 오류로 인하여 준비중입니다.';
//     return view('main');
// });