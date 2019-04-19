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

// Route::get('/', function () {
//     return view('layouts.app');
// });

Route::get('/', function () {
	
	if( auth()->check() == null ) {
		return redirect('/login');
	} else {
		return view('dashboard.overview');
	}
    
});

Route::get('dashboard', function () {
    return view('dashboard.overview');
})->name('dashboard.overview');

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

	Route::get('profile/{id}', [
		'uses'	=> "$c@getApplicantById",
		'as'	=> 'applicants.profile'
	]);

	Route::get('activate/{id}', [
		'uses'	=> "$c@activateApplicant",
		'as'	=> 'applicants.activate'
	]);

	Route::get('archive/{id}', [
		'uses'	=> "$c@archiveApplicant",
		'as'	=> 'applicants.archive'
	]);

	Route::get('archived', [
		'uses'	=> "$c@getArchivedApplicants",
		'as'	=> 'applicants.archived'
	]);

	Route::post('stage', [
		'uses'	=> "$c@updateStage",
		'as'	=> 'applicants.stage'
	]);

	Route::get('filterStage', [
		'uses'	=> "$c@filterStage",
		'as'	=> 'applicants.filterStage'
	]);

	Route::get('filterJob', [
		'uses'	=> "$c@filterJob",
		'as'	=> 'applicants.filterJob'
	]);

});

Route::group(['prefix' => 'billing'], function() {
	$c = 'EmployeeController';

	Route::get('', [
		'uses'	=> "$c@getEmployees",
		'as'	=> 'employees.overview'
	]);

});

Route::group(['prefix' => 'employees'], function() {
	$c = 'EmployeesController';

	Route::get('', [
		'uses'	=> "$c@getEmployees",
		'as'	=> 'employees.overview'
	]);
    
  Route::get('add', [
		'uses'	=> "$c@createEmployee",
		'as'	=> 'employees.create'
	]);
    
  Route::post('add', [
		'uses'	=> "$c@addEmployee",
		'as'	=> 'employees.add'
	]);

	Route::get('edit', [
		'uses'	=> "$c@editEmployee",
		'as'	=> 'employees.edit'
	]);

	Route::get('delete', [
		'uses'	=> "$c@deleteEmployee",
		'as'	=> 'employees.delete'
	]);

	Route::get('archive/{id}', [
		'uses'	=> "$c@archiveEmployee",
		'as'	=> 'employees.archive'
	]);

	Route::get('archived', [
		'uses'	=> "$c@getArchivedEmployees",
		'as'	=> 'employees.archived'
	]);

	Route::get('profile/{id}', [
		'uses'	=> "$c@viewEmployee",
		'as'	=> 'employees.view'
	]);

	Route::get('edit/{id}', [
		'uses'	=> "$c@getEmployeeById",
		'as'	=> 'employees.edit'
	]);
	
	Route::post('edit', [
		'uses'	=> "$c@update", 
		'as'	=> 'employees.update'
	]);

});

Route::group(['prefix' => 'jobs'], function() {
	$c = 'JobsController';

	Route::get('', [
		'uses'	=> "$c@getJobs",
		'as'	=> 'jobs.overview'
	]);

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

	Route::get('activate/{id}', [
		'uses'	=> "$c@activateJob",
		'as'	=> 'jobs.activate'
	]);

	Route::get('archive/{id}', [
		'uses'	=> "$c@archiveJob",
		'as'	=> 'jobs.archive'
	]);

	Route::get('archived', [
		'uses'	=> "$c@getArchivedJobs",
		'as'	=> 'jobs.archived'
	]);

});

Route::group(['prefix' => 'profile'], function() {
	$c = 'Profile';

	Route::get('', [
		'uses'	=> "$c@getProfile",
		'as'	=> 'profile.overview'
	]);

});

Route::group(['prefix' => 'settings'], function() {
	$c = 'SettingController';

	Route::get('embed', [
		'uses'	=> "$c@showEmbed",
		'as'	=> 'settings.embed'
	]);

});

Route::group(['prefix' => 'tickets'], function() {
	$c = 'TicketController';

	Route::get('', [
		'uses'	=> "$c@index",
		'as'	=> 'tickets.overview'
	]);
	
	Route::get('view/{id}', [
		'uses'	=> "$c@show",
		'as'	=> 'tickets.view'
	]);

	Route::get('submit', [
		'uses'	=> "$c@create",
		'as'	=> 'tickets.submit'
	]);

	Route::post('submit', [
		'uses'	=> "$c@store",
		'as'	=> 'tickets.create'
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

Route::group(['prefix' => 'postings'], function() {
	$c = 'JobPortalController';

	Route::get('view/{company_id}/{id}', [
		'uses'	=> "$c@show",
		'as'	=> 'job.view'
	]);

	Route::post('company/applied/success', [
		'uses'	=> "$c@applyToJob",
		'as'	=> 'apply.job'
	]);

});

// MIGHT NEED THIS FOR CORS API
//Route::group(['middleware' => ['cors']], function () {

  //  Route::resource('/api/jobs/', [
	//	'uses'	=> "Api@getJobByCompanyId"
	//]);

//});

Auth::routes();

//Route::get('/', 'HomeController@index')->name('dashboard.overview');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');