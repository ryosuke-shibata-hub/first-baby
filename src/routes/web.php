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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('User')->group(function() {
    //メイントップ画面
        Route::get('/first-baby/top','TopController@index')->name('main.top');
    });

Route::group(['middleware' => ['guest']], function() {
    Route::namespace('Auth')->group(function() {
        //ホーム画面
        Route::get('/', 'LoginController@home')->name('home.top');
        //ログイン画面、処理
        Route::get('/login', 'LoginController@login_form')->name('login.form');
        Route::post('/login/post', 'LoginController@login')->name('login.post');
        //会員登録画面
        Route::get('/register','RegisterController@register_form')->name('register.form');
        Route::post('/register/post','RegisterController@register_store')->name('register.post');
        //会員登録完了画面
        Route::get('/register/add','RegisterController@register_add')->name('register.add');
    });
});

Route::group(['middleware' => ['auth']], function() {
    Route::namespace('Auth')->group(function() {
        Route::post('/logout','LoginController@logout')->name('logout');
    });

});