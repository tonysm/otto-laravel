<?php

Route::get('/', function () {
    return view('welcome');
});

Route::post('/', function () {
	return view('user', ['name' => Input::get('name')]);
});