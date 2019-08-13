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
    return view('hello');
});

Route::get('/home', function () {
    return view('welcome',['galleries' => \App\Gallery::all(), 'news' => \App\News::first(), 'content' => \App\MainPage::first()]);
});

// Ajax запрос в Controller
Route::post('/mail', 'MailController@mail')->name('mail');

Route::get('/about_us', function () {
   return view('about_us',['content' => \App\About::first()]);
});

Route::get('/gallery', function () {
    return view('gallery',['galleries' => \App\Gallery::all(), 'content' => \App\MainPage::first()]);
});

Route::resource('photo', 'PhotoController')->only(['create', 'store']);

Route::get('/news', function () {
    return view('news',['news' => \App\News::all(), 'content' => \App\MainPage::first()]);
});

//Route::get('/news_page', function () {
//    return view('news_page');
//});

Route::get('/news_page/{id}', 'NewsController@show')->name('news_page');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
