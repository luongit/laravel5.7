<?php  
Route::get('admin/login', 'Auth\LoginController@admin_login')->name('login');
Route::post('admin/login', 'Auth\LoginController@post_admin_login');
Route::get('admin/logout', 'Auth\LoginController@admin_logout')->name('logout');
?>