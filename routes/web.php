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
Route::get('/', 'MainController@index')->name('home');

Route::get('/home', function () {
    return redirect()->route('home');
});

Route::get('/build/images', 'BuildController@imagesAjax')->name('build.images');

Route::resource('image', 'ImageController')->only(['create', 'store']);
Route::resource('plan', 'PlanController');
Route::resource('build', 'BuildController');
Route::resource('dot', 'DotController');

// Ajax запрос в Controller
Route::post('/mail', 'MailController@mail')->name('mail');
Route::get('/photo', function () {
    return view('map');
});

Route::get('/about_us', function () {
   return view('about_us',['about' => \App\About::first(), 'content' => \App\MainPage::first()]);
});

Route::get('/gallery', 'MainController@gallery')->name('gallery');

Route::resource('photo', 'PhotoController')->only(['create', 'store']);

Route::get('/news', function () {
    return view('news',['news' => \App\News::all(), 'content' => \App\MainPage::first()]);
});

//Route::get('/news_page', function () {
//    return view('news_page');
//});
Route::get('/set-language/{lang}', 'LanguagesController@set')->name('set.language');
Route::get('/news_page/{id}', 'NewsController@show')->name('news_page');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
