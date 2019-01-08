<?php 
Route::group(['prefix' =>'banner'],function(){
    Route::get('/all','BannerController@all')->name('admin.banner_all');
    Route::get('/edit{id}','BannerController@edit')->name('admin.banner_edit');
    Route::post('/edit{id}','BannerController@edit')->name('admin.banner_edit');
    Route::get('/delete{id}','BannerController@delete')->name('admin.banner_delete');
    Route::get('/add','BannerController@add')->name('admin.banner_add');
    Route::post('/add','BannerController@add')->name('admin.banner_add');
});
?>