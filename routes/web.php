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
/*
//Route::get('/', function () {
//    return view('home/home');
//});
Route::get('wins', 'GraphController@index');

Route::get('welcome', 'RevenueController@index');

//api
Route::group(['prefix' => 'api/v1'], function () {
    Route::get('lessons/{id}/tags', 'TagController@index');
    Route::resource('lessons', 'LessonController');
    Route::resource('tags', 'TagController', ['only' => ['index', 'show']]);

});
Route::get('stock/add', 'StockController@create');
Route::post('stock/add', 'StockController@store');

Route::get('stocks', 'StockController@index');
Route::get('stock/chart', 'StockController@chart');

Route::get('chartjs', 'HomeController@chartjs');
Route::get('car', function () {
    return view('drop');
});
Route::get('api/dropdown', 'DropController@api');

Route::get('add', 'AddController@index');
Route::post('add/save', 'AddController@store');
Route::get('add/get', 'AddController@get');

Route::get('st',function(){
    return view('jquery/index');
});
*/

Route::get('/','WelcomeController@index');