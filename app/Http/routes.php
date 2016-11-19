<?php


Route::get('/','HoaTuoiController@Index');
Route::get('Hoatheochude/{id}','HoaTuoiController@Hoatheochude');
Route::get('Hoatheoxuatxu/{id}','HoaTuoiController@Hoatheoxuatxu');
Route::get('Chitietsanpham/{id}','HoaTuoiController@Chitietsanpham');

Route::get('Dangnhap','HoaTuoiController@getDangnhap');
Route::post('Dangnhap','HoaTuoiController@postDangnhap');

Route::get('Dangky','HoaTuoiController@getDangky');
Route::post('Dangky','HoaTuoiController@postDangky');