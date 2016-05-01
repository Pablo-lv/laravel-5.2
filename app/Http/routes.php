<?php


Route::get('/', function () {
    return 'Hi there';
});

Route::get('about', function () {
    return view('pages.about');
});
