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
Route::get('/', function () {
    return view('index');
});
//注册
Route::get('/login','LoginController@index');
Route::post('/login','LoginController@create');
//登录
Route::get('/dl','LoginController@dl');
Route::post('/flash','LoginController@flash');
Route::get('/get-flash','LoginController@getFlash');
//设置cookie
Route::get('/cookie','LoginController@set');
//响应
Route::get('/response', 'LoginController@response');
//join的使用
Route::get('/join','DBController@join');
