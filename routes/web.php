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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');
Route::get('/job', 'HomeController@Jobs')->name('job');
Route::get('/job/contact', 'HomeController@JobContent')->name('job.contact');
Route::post('/job/contact', 'HomeController@JobContentStore')->name('job.JobContentStore');
Route::get('/complaints', 'HomeController@Complaints')->name('complaints');
Route::post('/complaints', 'HomeController@ComplaintsStore')->name('complaints.store');
Route::get('/contact-us/{page}', 'HomeController@ContactUs')->name('ContactUs');
Route::get('/about', 'HomeController@About')->name('about');

// Route::get('/{lang}', function ($lang) {
//     App::setLocale($lang);
//     'locale' => 'ar'
// });

// Route::prefix('ar')->group(function()
// {
//     App::setLocale('ar');
//     Route::get('/', 'HomeController@index')->name('home');

//     // Route::get('{slug}', 'PageController@show');
//     // Route::get('posts/{slug}', 'PostsController@show');
//     //and so on
// });



Route::get('lang/{lang}', function($lang){
    
    App::setLocale($lang);
    session()->put('lang', $lang);
    return redirect()->back();
})->name('lang');

// Route::prefix('en')->group(function()
// {
//     App::setLocale('');
//     Route::get('/', 'HomeController@index')->name('home');
//     // Route::get('{slug}', 'PageController@show');
//     // Route::get('posts/{slug}', 'PostsController@show');
//     //and so on
// });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
