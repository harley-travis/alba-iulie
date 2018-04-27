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
    return view('layouts.app');
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

	Route::get('edit/{id}', [
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

	// send data to the db & redirect to the overview page
    Route::post('add', [
		'uses' => 'JobsController@addJob',
		'as'   => 'jobs.add'
	]);
    
    Route::get('add', [
		'uses'	=> 'JobsController@createJob',
		'as'	=> 'jobs.create'
	]);

	Route::get('edit/{id}', [
		'uses'	=> 'JobsController@getJobId',
		'as'	=> 'jobs.edit'
	]);
	
	Route::post('edit', [
		'uses'	=> 'JobsController@updateJob', 
		'as'	=> 'jobs.update'
	]);

	Route::get('delete', [
		'uses'	=> 'JobsController@deleteJob',
		'as'	=> 'jobs.delete'
	]);

	// learn basics WORKING WITH ROUTES -> CREATING AND USING POST ROUTES

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


Route::get('humans.txt', function () {
    return view('humans');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
