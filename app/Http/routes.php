<?php


Route::get('/', function () {
    $people = ['Taylor', 'Matt', 'Jeffrey'];

    return view('welcome', compact('people'));
});

Route::get('about', function () {
    return view('pages.about');
});
