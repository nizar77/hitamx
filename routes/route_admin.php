<?php 
//Route::resource('/taq','TaqController');
Route::get('/taq','TaqController@index')->name('taq.index');
Route::get('/taq/buat','TaqController@buat')->name('taq.buat');
Route::post('/taq/buat','TaqController@simpan')->name('taq.simpan');
Route::get('/taq/{id}/edit','TaqController@edit')->name('taq.edit');
Route::patch('/taq/{id}/edit','TaqController@update')->name('taq.update');
Route::get('/taq_hapus/{id}','TaqController@hapus')->name('taq_hapus');
/**
 * albums
 */
Route::Resource('/album','AlbumController');



