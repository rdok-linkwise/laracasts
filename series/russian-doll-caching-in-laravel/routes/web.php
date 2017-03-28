<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('cards', 'CardsController@index');
