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
	$c = 'ApplicantsController';

	Route::get('', [
		'uses'	=> "$c@getApplicants",
		'as'	=> 'applicants.overview'
	]);
    
    Route::get('add', [
		'uses'	=> "$c@addApplicant",
		'as'	=> 'applicants.create'
	]);

	Route::get('edit/{id}', [
		'uses'	=> "$c@editApplicant",
		'as'	=> 'applicants.edit'
	]);

	Route::get('delete', [
		'uses'	=> "$c@deleteApplicant",
		'as'	=> 'applicants.delete'
	]);

});


Route::group(['prefix' => 'billing'], function() {
	$c = 'EmployeeController';

	Route::get('', [
		'uses'	=> "$c@getEmployees",
		'as'	=> 'employees.overview'
	]);

});

Route::get('dashboard', function () {
    return view('dashboard.overview');
})->name('dashboard.overview');


Route::group(['prefix' => 'employees'], function() {
	$c = 'EmployeesController';

	Route::get('', [
		'uses'	=> "$c@getEmployees",
		'as'	=> 'employees.overview'
	]);
    
    Route::get('add', [
		'uses'	=> "$c@addEmployee",
		'as'	=> 'employees.create'
	]);

	Route::get('edit', [
		'uses'	=> "$c@editEmployee",
		'as'	=> 'employees.edit'
	]);

	Route::get('delete', [
		'uses'	=> "$c@deleteEmployee",
		'as'	=> 'employees.delete'
	]);

});


Route::group(['prefix' => 'jobs'], function() {
	$c = 'JobsController';

	Route::get('', [
		'uses'	=> "$c@getJobs",
		'as'	=> 'jobs.overview'
	]);

	// send data to the db & redirect to the overview page
    Route::post('add', [
		'uses' => "$c@addJob",
		'as'   => 'jobs.add'
	]);
    
    Route::get('add', [
		'uses'	=> "$c@createJob",
		'as'	=> 'jobs.create'
	]);

	Route::get('edit/{id}', [
		'uses'	=> "$c@getJobId",
		'as'	=> 'jobs.edit'
	]);
	
	Route::post('edit', [
		'uses'	=> "$c@updateJob", 
		'as'	=> 'jobs.update'
	]);

	Route::post('archive', [
		'uses'	=> "$c@archiveJob",
		'as'	=> 'jobs.archive'
	]);

});


Route::group(['prefix' => 'reports'], function() {
	$c = 'ReportsController';

	Route::get('', [
		'uses'	=> "$c@getReports",
		'as'	=> 'reports.overview'
	]);

});


Route::group(['prefix' => 'users'], function() {
	$c = 'UsersController';

	Route::get('create', [
		'uses'	=> "$c@createUser",
		'as'	=> 'users.create'
	]);

	Route::get('edit', [
		'uses'	=> "$c@editUser",
		'as'	=> 'users.edit'
	]);

	Route::get('overview', [
		'uses'	=> "$c@getUser",
		'as'	=> 'users.overview'
	]);

});


Route::get('humans.txt', function () {
    return view('humans');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
