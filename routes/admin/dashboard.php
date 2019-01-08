<?php 
Route::get('/','DashboardController@index')->name('admin');
Route::get('/banner','DashboardController@banner')->name('admin.banner');
Route::get('/media','DashboardController@media')->name('admin.media');
Route::post('/media-upload','DashboardController@media_pload')->name('admin.upload');
Route::get('/flush-cache','\App\Http\Controllers\Controller@flush_cache')->name('admin.flush_cache');

Route::get('/test','DashboardController@test');


?>