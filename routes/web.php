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
//獲得用
Route::get('app1', function () {
    return view('yt.check'); //提出用
    // return redirect('https://a-trade.jp/redirect/berry?media=G16531'); //ベリー - Aトレード
});

//確認用
Route::get('cccheck', function () {
    return redirect('https://a-trade.jp/redirect/berry?media=G16531'); //ベリー - Aトレード
});