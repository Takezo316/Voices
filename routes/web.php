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

Route::get('/home', 'HomeController@index');


Route::get('/companies', 'CompaniesController@index');
Route::get('/companies/create', 'CompaniesController@create');
Route::post('/companies', 'CompaniesController@store');
Route::get('/companies/{slug}', array('as' => 'company', 'uses' => 'CompaniesController@show'));


Route::get('/companies/{company}/contests', array('as' => 'contests_list','uses'=>'ContestsController@index'));
Route::get('/companies/{company}/contests/create', array('as' => 'contest_create', function($companyId){return $companyId;}, 'uses'=>'ContestsController@create'));
Route::post('/contests', 'ContestsController@store');
Route::get('/companies/{company}/contests/{contest}', array('as' => 'contest_view', 'uses' => 'ContestsController@show'));


Route::post('/files', 'FilesController@store');


