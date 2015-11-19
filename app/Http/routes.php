<?php

Route::get('/', function () {
    return view('welcome', ['counts' => Redis::incr('counts')]);
});

Route::post('/', function () {
	return view('user', ['name' => Input::get('name')]);
});
