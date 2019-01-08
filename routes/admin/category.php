<?php 
Route::group(['prefix' =>'category'],function(){
    Route::get('/all','CategoryController@all')->name('admin.category_all');
    Route::get('/edit{id}','CategoryController@edit')->name('admin.category_edit');
    Route::post('/edit{id}','CategoryController@post_edit');
    Route::get('/delete{id}','CategoryController@delete')->name('admin.category_delete');
    Route::get('/add','CategoryController@add')->name('admin.category_add');
    Route::post('/add','CategoryController@post_add');
});
?>