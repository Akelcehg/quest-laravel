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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/quests', 'QuestsController@index');
Route::get('/quest/{name}', 'QuestController@index');
Route::get('/about',
    'AboutController@index');
Route::get('/franchise', 'FranchiseController@index');
Route::get('/contact', 'ContactController@index');


//Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
/*Route::group(['prefix' => 'admin'], function () {

    Route::get('/', 'Admin\HomeController@index');

    Route::resource('users', 'Admin\UsersController');
    Route::resource('quests', 'Admin\QuestsController');

    Route::get('calendar', 'Admin\CalendarController@index')->name('calendar.index');
    Route::get('messages', 'Admin\MessagesController@index')->name('messages.index');
});*/
Route::get('/messages/grid', 'MessagesController@grid');
Route::resource('/messages', 'MessagesController');
Auth::routes();

Route::get('/home', 'HomeController@index');
