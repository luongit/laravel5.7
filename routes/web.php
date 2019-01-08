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
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function(){
    include 'admin/dashboard.php';
    include 'admin/category.php';
    include 'admin/post.php';
    include 'admin/banner.php';
    include 'admin/resource.php';
});

include 'auth.php';
include 'home.php';