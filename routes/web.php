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

Route::get('/', function () {
    return view('welcome');
});

// Добавление нового участника
Route::post('participants', 'API\ParticipantController@store');

// Получение списка всех участников
Route::get('participants', 'API\ParticipantController@index');

// Получение участника по ID
Route::get('participants/{id}', 'API\ParticipantController@show');

// Удаление участника по ID
Route::delete('participants/{id}', 'API\ParticipantController@delete');

// Редактирование участника по ID
Route::put('participants/{id}', 'API\ParticipantController@update');
