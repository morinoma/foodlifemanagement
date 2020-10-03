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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//eventページを表示させる
Route::get('/event', 'EventController@index')->name('event'); 

//topページを表示させる
Route::get('/', 'TopController@top')->name('top'); 


//  /foodtopを表示する
Route::get('/foodtop','FoodtopController@foodtop')->name('foodtop');


//同じルーティングファイル内で、ログイン前のページは制限なし、ログイン後のページで認証あり制限をしたい場合 
//    Route::middleware('auth:api', 'throttle:60,1')->group(function () {
//    // この中に書いたルーティング全てに適用される
Route::group(['middleware' => 'auth'], function() {
// });
    
    
//  /mypage/food/new を表示させる
Route::get('/mypage/food/new','Mypage\FoodController@new')->name('mypage.food.new');
Route::post('/mypage/food/register','Mypage\FoodController@foodnew')->name('mypage.food.register');

//  /mypage/food/editを表示させる
Route::get('/mypage/food/edit/{id}', 'Mypage\FoodController@edit')->name('mypage.food.edit');
Route::post('/mypage/food/update', 'Mypage\FoodController@update')->name('mypage.food.update');

//  /mypage/food/deleteを表示させる 削除処理
Route::get('/mypage/food/delete/{id}', 'Mypage\FoodController@delete')->name('mypage.food.delete');
Route::post('/mypage/food/remove', 'Mypage\FoodController@remove')->name('mypage.food.remove');


Route::get('/mypage/food/index', 'Mypage\FoodController@index')->name('mypage.food.index'); 

Route::get('/mypage/food/calender', 'Mypage\FoodController@calender')->name('mypage.food.calender'); 


});
