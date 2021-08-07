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

//Website Route Start
Route::get('/','WebsiteController@index');
Route::get('about','WebsiteController@about');
Route::get('contact','WebsiteController@contact');
Route::get('blog','WebsiteController@blog');
Route::get('book_demo','WebsiteController@book_demo');
//Website Route End

Auth::routes(['register' => false]);

Route::middleware('auth')->group(function ()
{
    Route::get('/home', 'HomeController@index')->name('home');

    //Profile Update Route Start
    Route::get('/profile_update','UserController@profile_update_view');
    Route::post('/profile_update','UserController@profile_update');
    Route::post('/update_password','UserController@update_password');
    //Profile Update Route Start

    Route::middleware('role:super-admin')->group(function ()
    {
        //Super Admin Route Start
        Route::resource('subjects', 'SubjectController');
        Route::resource('request', 'RequestController', [
            'except' => ['create','show','edit','update']
        ]);
        Route::get('request/status/{status}/{id}','RequestController@change_status');
        //Super Admin Route End
    });
    
  
});
