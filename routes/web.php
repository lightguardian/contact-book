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
    return view('contacts');
})->name('contacts');

Route::get('/pessoa/criar','PersonController@create')->name('form_person');
Route::get('/pessoa/{id}','PersonController@show')->name('show_person');
Route::post('/pessoa/criar','PersonController@store')->name('new_person');

Route::get('/endereco/criar','AddressController@create')->name('form_address');
Route::post('/endereco/criar','AddressController@store')->name('new_address');

Route::get('/telefone/criar','PhoneController@create')->name('form_phone');
Route::post('/telefone/criar','PhoneController@store')->name('new_address');

Route::get('/contato/criar', 'ContactController@showForm')->name('form_contact');




