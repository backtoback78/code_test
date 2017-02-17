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


Route::get('/', 'FrontController@index')->name('home');
Route::get('/category/{id}/{slug?}', 'FrontController@showQuestionsByCat');
Route::get('/question/{id}', 'FrontController@showQuestion');
Route::any('login', 'LoginController@showLogin')->name('login');
Route::get('logout', 'LoginController@showLogout')->name('logout');
Route::get('/contact', 'FrontController@showContact')->name('contact');
Route::get('/mention', 'FrontController@showMention')->name('mention');
Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function(){
    
    Route::resource('question', 'Admin\QuestionController'); // routes du RESTfull qui permettrons de faire le CRUD de la ressource robots en base de données   
});