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

use App\Http\Controllers\AddSkillController;


use App\Http\Controllers\SkillsValuesController;





Route::middleware("auth")->group ( function()
{

Route::get('/admin', 'AdminController@admin')
           ->middleware('is_admin')
           ->name('admin');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/skills', 'SkillsController@update') ->name("skills");


});

Auth::routes();

Route::resource("userlist", "UserlistController");

Route::get("/generate/password", function(){return bcrypt("adminpassu");});

Route::resource("modify", "SkillsValuesController");


Route::resource("skills", "SkillsController");

Route::resource("addskill", "AddSkillController");

Route::get("/register","AddController@register")->middleware('is_admin')->name('register');

Route::get('/home', 'HomeController@index')->name('home');
