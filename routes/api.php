<?php

use Illuminate\Http\Request;

Route::get('/data', 'DataController@index')->name('path.index');
Route::post('/data', 'DataController@store')->name('path.store');
Route::get('/data/{id}', 'DataController@show')->name('path.show');
Route::put('/data/{data}', 'DataController@update')->name('path.update');
Route::delete('/data/{data}', 'DataController@destroy')->name('path.destroy');
Route::get('/ok','ResidentController@all_residents')->name('ok');




	Route::prefix('residents')->group(function(){
	Route::get('/', 'ResidentController@all_residents')->name('all_residents');
	Route::get('/{id}', 'ResidentController@show')->name('single_resident');
	Route::post('/','ResidentController@store')->name('add_resident');
	});

	//Route::prefix('residents')->group(function(){
	//route::get('/residents','ResidentController@all_residents')->name('all_residents');
	//Route::get('/ok',function(){
		//return ['status'=>true];
	//});
	//});
	






?>