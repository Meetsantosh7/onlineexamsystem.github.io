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

if(!defined('STATIC_DIR')) define('STATIC_DIR','/public/');
Route::get('/', function () {
   return redirect('/');
});



Route::post('logout', 'Auth\LoginController@logout');
Route::get('about-us', 'Frontend\PageController@about_us')->name('about-us');


Auth::routes();

Route::group(['middleware' => 'auth'], function () {

Route::get('/', 'HomeController@index')->name('/');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/student', 'Frontend\MatchController@index')->name('/student');

Route::get('/admin', 'HomeController@index')->name('admin');

Route::get('/admin/schedule_exam', 'Admin\ScheduleExamController@index')->name('admin/schedule_exam');
Route::post('/admin/add_schedule_exam', 'Admin\ScheduleExamController@add_schedule_exam')->name('admin/add_schedule_exam');
Route::get('/admin/delete_exam/{exam_id}', 'Admin\ScheduleExamController@delete_exam')->name('admin/delete_exam');


Route::get('/admin/schedule/add', 'Admin\ScheduleController@add')->name('admin/schedule/add');
Route::get('/admin/schedule/edit/{id}', 'Admin\ScheduleController@edit')->name('admin/schedule/edit');
Route::post('/admin/schedule/update/{id}', 'Admin\ScheduleController@update')->name('admin/schedule/update');





Route::get('/admin/question_management', 'Admin\QuestionController@index')->name('admin/question_management');
Route::get('/admin/question/question_form', 'Admin\QuestionController@question_form')->name('admin/question/question_form');
Route::post('/admin/question/add_question', 'Admin\QuestionController@add_question')->name('admin/question/add_question');
Route::get('/admin/question/delete_question/{ques_id}', 'Admin\QuestionController@delete_question')->name('admin/question/delete_question');

Route::post('/admin/question/user_answers', 'Admin\QuestionController@user_answers')->name('admin/question/user_answers');
Route::get('/admin/question/user_result/{exam_id}', 'Admin\QuestionController@user_result')->name('admin/question/user_result');
Route::post('/admin/feedbackform', 'Admin\QuestionController@feedbackform')->name('admin/feedbackform');



Route::get('/admin/question_module', 'Admin\QuestionModuleController@index')->name('admin/question_module');
Route::post('/admin/question_search', 'Admin\QuestionModuleController@question_search')->name('admin/question_search');
Route::post('/admin/module_add', 'Admin\QuestionModuleController@module_add')->name('admin/module_add');
Route::get('/admin/user_management',"Admin\UserController@index")->name('admin/user_management');
Route::get('/admin/user_status/{user_staus}/{user_id}',"Admin\UserController@user_status")->name('admin/user_status');

});








