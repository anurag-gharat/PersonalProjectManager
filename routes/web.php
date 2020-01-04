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
//to get to home page
Route::get('/', 'PageController@home');
//all the crud tasks
Route::resource('projects','ProjectsController');
Route::patch('/tasks/{task}','ProjectTasksController@update');
Route::post('/projects/{project}/tasks','ProjectTasksController@store');

// //to view the projects
// Route::get('/projects','Projectscontroller@index');

// //to create the project
// Route::get('/projects/create','Projectscontroller@create');

// //store the project
// Route::post('/projects','Projectscontroller@store');

// //to view a individual project
// Route::get('/projects/{project}','Projectscontroller@show');
// //{} is used for wild card entry

// //to edit a project
// Route::get('projects/{project}/edit','Projectscontroller@edit');

// //to update the edited project
// Route::patch('projects/{project}','Projectscontroller@update');

// //to delete the project
// Route::delete('projects/{project}','Projectscontroller@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
