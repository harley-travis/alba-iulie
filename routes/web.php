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
    return view('layouts.master');
});


Route::group(['prefix' => 'applicants'], function() {

	Route::get('', [
		'uses'	=> 'ApplicantsController@getApplicants',
		'as'	=> 'applicants.overview'
	]);
    
    Route::get('add', [
		'uses'	=> 'ApplicantsController@addApplicant',
		'as'	=> 'applicants.create'
	]);

	Route::get('edit', [
		'uses'	=> 'ApplicantsController@editApplicant',
		'as'	=> 'applicants.edit'
	]);

	Route::get('delete', [
		'uses'	=> 'ApplicantsController@deleteApplicant',
		'as'	=> 'applicants.delete'
	]);

});


Route::group(['prefix' => 'billing'], function() {

	Route::get('', [
		'uses'	=> 'EmployeeController@getEmployees',
		'as'	=> 'employees.overview'
	]);

});

Route::get('dashboard', function () {
    return view('dashboard.overview');
})->name('dashboard.overview');


Route::group(['prefix' => 'employees'], function() {

	Route::get('', [
		'uses'	=> 'EmployeesController@getEmployees',
		'as'	=> 'employees.overview'
	]);
    
    Route::get('add', [
		'uses'	=> 'EmployeesController@addEmployee',
		'as'	=> 'employees.create'
	]);

	Route::get('edit', [
		'uses'	=> 'EmployeesController@editEmployee',
		'as'	=> 'employees.edit'
	]);

	Route::get('delete', [
		'uses'	=> 'EmployeesController@deleteEmployee',
		'as'	=> 'employees.delete'
	]);

});


Route::group(['prefix' => 'jobs'], function() {

	Route::get('', [
		'uses'	=> 'JobsController@getJobs',
		'as'	=> 'jobs.overview'
	]);
    
    Route::get('add', [
		'uses'	=> 'Job@addJob',
		'as'	=> 'jobs.create'
	]);

	Route::get('edit', [
		'uses'	=> 'Job@editJob',
		'as'	=> 'jobs.edit'
	]);

	Route::get('delete', [
		'uses'	=> 'Job@deleteJob',
		'as'	=> 'jobs.delete'
	]);

});


Route::group(['prefix' => 'reports'], function() {

	Route::get('', [
		'uses'	=> 'ReportsController@getReports',
		'as'	=> 'reports.overview'
	]);

});


Route::group(['prefix' => 'users'], function() {

	Route::get('create', [
		'uses'	=> 'UsersController@createUser',
		'as'	=> 'users.create'
	]);

	Route::get('edit', [
		'uses'	=> 'UsersController@editUser',
		'as'	=> 'users.edit'
	]);

	Route::get('overview', [
		'uses'	=> 'UsersController@getUser',
		'as'	=> 'users.overview'
	]);

});


