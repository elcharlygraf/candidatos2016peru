<?php
Route::group(['prefix' => '/', 'as' => 'votacion::'], function() {

    Route::get('/', 'VotacionesController@index')->name('index');
    Route::post('/create', 'VotacionesController@store')->name('store');

    Route::get('/result', 'VotacionesController@result')->name('result');
});