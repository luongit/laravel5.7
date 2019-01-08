<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/media-file/{folder?}','ApiController@mediaFile');
Route::get('/media-folder','ApiController@mediaFolder');
Route::get('/make-folder/{path?}','ApiController@makeFolder');
Route::get('/empty-folder/{path?}','ApiController@emptyFolder');
Route::get('/del-folder/{path?}','ApiController@delFolder');
Route::get('/del-file/{id}','ApiController@delFile');
Route::get('/clear-path','ApiController@clear_path');
