<?php

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
// //獲得用
// Route::get('o1', function () {
//     return view('yt.check'); //提出用
//     //リダイレクトLPへ切り替え - cccheckを変更
    
//     // return view('yt.chatl'); //チャットレディーLINE@誘導
    
//     // return view('yt.pp'); //パパ活LINE@
//     // return view('yt.job'); //チャットレディー
//     // return redirect('https://a-trade.jp/redirect/berry?media=G16531'); //ベリー - Aトレード
// });

// OS識別x遷移 for チャトレ
Route::get('o1', 'AdController@info');

// //確認用
// Route::get('cccheck', function () {
//     return view('yt.chatl'); //チャットレディーLINE@誘導
    
//     // return view('yt.pp'); //パパ活LINE
//     // return view('yt.job'); //チャットレディー
//     // return redirect('https://a-trade.jp/redirect/berry?media=G16531'); //ベリー - Aトレード
// });

// m訴求 - OS識別x遷移 for チャトレ
Route::get('info', 'AdController@info');