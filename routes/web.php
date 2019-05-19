<?php

Route::get('/', 'StaticPagesController@showMainPage');
Route::get('/round_square', 'StaticPagesController@RoundSquare');
Route::get('/circle_length', 'StaticPagesController@LengthOfCircle');
Route::get('/sphere_volume', 'StaticPagesController@VolumeOfSphere');
