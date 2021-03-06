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
//     $people = ['Taylor', 'Matt', 'Jeffrey'];
    
//     return view('welcome', compact('people'));
// });

Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');

Route::get('organs', 'OrgansController@index');
Route::get('organs/{organ}', 'OrgansController@show');
Route::post('organs', 'OrgansController@store');

Route::post('organs/{organ}/notes', 'NotesController@store');

Route::get('notes/{note}/edit', 'NotesController@edit');
// Use 'patch' for updating
Route::patch('notes/{note}', 'NotesController@update');