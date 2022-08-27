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
    return view('home');
})->name('home');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::post('/contact/all/{id}/update', 'ContactController@updateMessageSubmit')->name('contact-update-submit'); //Сохранение отредактированной записи

Route::get('/contact/all/{id}/update', 'ContactController@updateMessage')->name('contact-update'); //Редактирование записи

Route::get('/contact/all/{id}/delete', 'ContactController@deleteMessage')->name('contact-delete'); //Редактирование записи

Route::get('/contact/all', 'ContactController@allData')->name('contact-data'); //Вывод всех записей

Route::post('/contact/submit', 'ContactController@submit')->name('contact-form'); //Создание новой записи при нажатии на кнопку

Route::get('/contact/all/{id}', 'ContactController@showOneMessage')->name('contact-data-one'); // Вывод подробной информации у конкретной записи
