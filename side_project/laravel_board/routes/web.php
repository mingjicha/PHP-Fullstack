<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BoardController;

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
    return view('login');
});

// 유저 관련
Route::get('/user/login', [UserController::class, 'loginget'])->name('user.login.get'); // 로그인 화면 이동
Route::middleware('my.user.validation')->post('/user/login', [UserController::class, 'loginpost'])->name('user.login.post'); // 로그인 처리
Route::get('/user/registration', [UserController::class, 'registrationget'])->name('user.registration.get'); // 회원가입 화면 이동
Route::middleware('my.user.validation')->post('/user/registration', [UserController::class, 'registrationpost'])->name('user.registration.post'); // 회원가입 처리
Route::get('/user/logout', [UserController::class, 'logoutget'])->name('user.logout.get'); // 로그아웃 처리

// 보드 관련
Route::middleware('auth')->resource('/board', BoardController::class);
// GET|HEAD        board ............................................................... board.index › BoardController@index
// POST            board ............................................................... board.store › BoardController@store 글 작성 기능
// GET|HEAD        board/create ...................................................... board.create › BoardController@create 글 작성
// 세그먼트 파라미터는 form에서 보내는 방법이 따로 있음 ex) {board}
// GET|HEAD        board/{board} ......................................................... board.show › BoardController@show 
// PUT|PATCH       board/{board} ..................................................... board.update › BoardController@update 글 수정 기능
// DELETE          board/{board} ................................................... board.destroy › BoardController@destroy 글 삭제
// GET|HEAD        board/{board}/edit .................................................... board.edit › BoardController@edit 글 수정