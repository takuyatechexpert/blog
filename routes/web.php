<?php

use App\Http\Controllers\MathController;
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
    return view('welcome');
});

// ルーティングを設定している
// railsで言うresourcesではなくhttpを指定して設定している
Route::get('/archives/', function() {
    return view('archives/index');
    // パスは/ではなく.でもいける
    // 古いバージョンでは.でなければいけない?
});

Route::get('/archives/{category}/', function($category) {
    return view('archives/category', ['category' => $category]);
    // パラメーターを2つ受け取ることができる
});

// ルーティングは記述する順番が重要
// プログラムは上から読み込まれる為、
Route::post('/join/', function () {
    return '入会申込完了';
});

// 意図しないアクセスを防ぐためにredirectでルートに遷移させている
Route::get('/join/', function () {
    return redirect() ->to('/');
});

Route::get('/{id}/', function($id) {
    return $id.'のページ';
});

Route::get('/sum/{x}/{y}/', 'MathController@sum');