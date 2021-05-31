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

Auth::routes();

Route::get('/', 'WebsiteController@index')->name('index');
Route::get('courses/{slug}', 'WebsiteController@courses')->name('courses');
Route::get('news/{slug}', 'WebsiteController@news')->name('news');
Route::get('posts/{slug}', 'WebsiteController@posts')->name('posts');
Route::get('page/{slug}', 'WebsiteController@pages')->name('page');
Route::get('contact', 'WebsiteController@showContactForm')->name('contact.show');
Route::post('contact', 'WebsiteController@submitContactForm')->name('contact.submit');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::resource('courses', 'coursesController');
    Route::resource('news', 'newsController');
    Route::resource('posts', 'postsController');
    Route::resource('pages', 'pageController');
})
