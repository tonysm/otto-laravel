<?php

Route::get('/', function () {
    $count = Redis::incr('count');
    return view('welcome', ['count' => $count]);
});
