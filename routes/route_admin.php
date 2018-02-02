<?php 
//Route::resource('/taq','TaqController');
Route::get('/tag','TaqController@index')->name('taq.index');
Route::get('/taq/buat','TaqController@buat')->name('taq.buat');
Route::post('/taq/buat','TaqController@simpan')->name('taq.simpan');
Route::get('/taq/{id}/edit','TaqController@edit')->name('taq.edit');
Route::patch('/taq/{id}/edit','TaqController@update')->name('taq.update');
Route::get('/taq_hapus/{id}','TaqController@hapus')->name('taq_hapus');
/**
 * albums
 */
Route::Resource('/album','AlbumController');
Route::Resource('/posthitam','PostController');
//Route::get('/post','Postcontroller@buat')->name('post.buat');
Route::get('resizeImage', 'ImageController@resizeImage');
Route::post('resizeImagePost','ImageController@resizeImagePost')->name('resizeImagePost');

Route::get('galeri_upload/{album_id}','ImageController@uploadGaleri')->name('galeri_upload');
Route::post('post_Galeri','ImageController@postGaleri')->name('post_Galeri');


