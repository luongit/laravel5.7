<?php 
Route::group(['prefix' =>'post'],function(){
    Route::get('/all','PostController@all')->name('admin.post_all');
    Route::get('/edit{id}','PostController@edit')->name('admin.post_edit');
    Route::post('/edit{id}','PostController@edit')->name('admin.post_edit');
    Route::get('/delete{id}','PostController@delete')->name('admin.post_delete');
    Route::get('/add','PostController@add')->name('admin.post_add');
    Route::post('/add','PostController@add')->name('admin.post_add');
});
?>