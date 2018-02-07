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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//for the datatables
Route::get('/home/datatable/data', 'HomeController@getData')->name('home.data');
Route::get('/client/activity/{client_id}', 'HomeController@showClientActivity')->name('client.activity');

Route::get('/all-emails', 'HomeController@showAllClientEmails')->name('all.emails');
Route::get('/all-emails/datatable/data', 'HomeController@allClientEmails')->name('all.emails.data');

Route::get('/all-digits', 'HomeController@showAllClientDigits')->name('all.digits');
Route::get('/all-digits/datatable/data', 'HomeController@allClientDigits')->name('all.digits.data');
