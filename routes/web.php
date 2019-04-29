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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//This Route is for Clc/Schedule
	Route::get('/clc', 'ClcsController@index')
			->name('clc');
	Route::get('/clcs', 'ClcsController@index')
			->name('clcs');
	Route::get('/clcs/search','ClcsController@find')
			->name('clc.find');
	Route::post('clc/new','ClcsController@add')
			->name('clc.add');
	Route::get('clcs/clc/', 'ClcsController@new_post')
	    	->name('clcs.clc');
	Route::put('clcs/{id}/update','ClcsController@update')
			->name('clcs.update');
	Route::get('clcs/{id}/edit','ClcsController@edit')
	  		->name('clc.edit');
	Route::get('/clcs/{id}/clcs/{title}','ClcsController@view_details')
    		->name('clc.details');
//This Route is for Enrolees
	Route::get('/enrollees', 'EnrolleesController@index')
			->name('enrollee');
	Route::get('/enrollees/search','EnrolleesController@find')
			->name('enrollee.find');
	Route::get('/enrollees', 'EnrolleesController@index')
			->name('enrollees');
	Route::post('enrollees/new','EnrolleesController@add')
			->name('enrollee.add');
	Route::get('enrollees/enrollee/', 'EnrolleesController@new_post')
	    	->name('enrollees.enrollee');
	 Route::get('enrollees/{id}/edit','EnrolleesController@edit')
	  		->name('enrollee.edit');
	Route::put('enrollees/{id}/update','EnrolleesController@update')
			->name('enrollee.update');
	Route::get('/enrollees/{id}/enrollees/{title}', 
  'EnrolleesController@view')
    ->name('enrollee.details');
			Route::get('/ListOfEnrollees','EnrolleesController@excel')->name('ListOfEnrollees');

//this Route is for AF2
	Route::get('/AF2', 'Af2Controller@index')
			->name('af2');
	Route::get('/AF2/search','Af2Controller@find')
			->name('af2.find');
	Route::get('/AF2', 'Af2Controller@index')
			->name('af2s');
	Route::post('AF2/new','Af2Controller@add')
			->name('af2.add');
	Route::get('AF2/enrollee/', 'Af2Controller@new_post')
	    	->name('af2s.af2');
	 Route::get('AF2/{id}/edit','Af2Controller@edit')
	  		->name('af2.edit');
	Route::put('AF2/{id}/update','Af2Controller@update')
			->name('af2.update');
	Route::get('/af2s/{id}/af2s/{title}','Af2Controller@view_details')
    		->name('af2.details');

//this Route is for AF2
	Route::get('/AF23', 'Af3Controller@index')
			->name('af3');
	Route::get('/AF3/search','Af3Controller@find')
			->name('af3.find');
	Route::get('/AF3', 'Af3Controller@index')
			->name('af3s');
	Route::post('AF3/new','Af3Controller@add')
			->name('af3.add');
	Route::get('AF3/af3/', 'Af3Controller@new_post')
	    	->name('af3s.af3');
	 Route::get('AF3/{id}/edit','Af3Controller@edit')
	  		->name('af3.edit');
	Route::put('AF3/{id}/update','Af3Controller@update')
			->name('af3.update');
	Route::get('/af3s/{id}/af3s/{title}','Af3Controller@view_details')
    		->name('af3.details');
		

//This Route is for Graduates/Passer
	 
	Route::get('/graduates', 'GradRatingController@index')
			->name('graduates');
	Route::get('/graduates/search','GradRatingController@find')
			->name('graduate.find');
	Route::post('graduates/new','GradRatingController@add')
			->name('graduate.add');
	Route::get('graduates/graduate/', 'GradRatingController@new_post')
	    	->name('graduates.graduate');
	 Route::get('graduates/{id}/edit','GradRatingController@edit')
	  		->name('graduate.edit');
	Route::put('graduates/{id}/update','GradRatingController@update')
			->name('graduate.update');
	Route::get('/Passer','GradRatingController@getPDF')->name('Passer');
	Route::get('/graduates/{id}/graduates/{firstname}', 
  'GradRatingController@view_details')
    ->name('graduates.details');



// This Route is For PDF/Module

	Route::get('module/upload','ModuleController@index')
	 			->name('module');
	Route::post('module/upload','ModuleController@upload')
	       		->name('module.upload');
	Route::get('/modules/search','ModuleController@find')
	  			->name('module.find');
	Route::get('modules/{id}/edit','ModuleController@edit')
		  		->name('module.edit');
	Route::put('modules/{id}/update','ModuleController@update')
				->name('module.update');
	Route::get('modules/{id}/delete', 'ModuleController@delete')
	    		->name('module.delete');
	Route::get('modules/module/', 'ModuleController@new_post')
	    		->name('modules.module');
	Route::get('modules/{id}/restore/','ModuleController@restore')
	    		->name('module.restore');
	Route::get('/module', 'ModuleController@module')
	  			->name('module');
	Route::get('/module/als_elementary_module', 'ModuleController@als_elementary_module1')
				->name('als_elementary_module');
	Route::get('/module/als_secondary_module', 'ModuleController@als_secondary_module')
				->name('als_secondary_module');


//This Route is For AboutUs
  	Route::get('/aboutus', 'AboutusController@index')
  			->name('aboutus');

