<?php


Route::get('/','HoaTuoiController@Index');
Route::get('Hoatheochude/{id}','HoaTuoiController@Hoatheochude');
Route::get('Hoatheoxuatxu/{id}','HoaTuoiController@Hoatheoxuatxu');
Route::get('Chitietsanpham/{id}','HoaTuoiController@Chitietsanpham');