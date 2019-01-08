<?php 
Route::get('/','HomeController@index')->name('home');
Route::get('/flush-cache','Controller@flush_cache')->name('flush_cache');
?>