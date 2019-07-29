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

// Ajax запрос в Controller
Route::post('/mail', 'MailController@mail')->name('mail');

Route::get('/about_us', function () {
   return view('about_us');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/news_page', function () {
    return view('news_page');
});
