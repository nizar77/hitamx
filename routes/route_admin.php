<?php 
//Route::resource('/taq','TaqController');
Route::get('/taq/buat','TaqController@buat')->name('taq.buat');
Route::post('/taq/buat','TaqController@simpan')->name('taq.simpan');



