<?php

Route::group([
        'prefix'    => '',
        'namespace' => 'Client',
        'as'        => 'client.'
    ], 
    function () {

    /**
     * Home Route
     * Type: Single Route
     */
    Route::get('/', 'HomeController@index')->name('home');

});