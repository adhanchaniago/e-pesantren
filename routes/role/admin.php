<?php

Route::group([
        'prefix'    => 'admin',
        'namespace' => 'Admin',
        'as'        => 'admin,.'
    ], 
    function () {

    /**
     * Home Route
     * Type: Single Route
     */
    Route::get('/', 'HomeController@index')->name('home');

    /**
     * User Manager
     * Type: Group Route
     */
    Route::group([
        'prefix' => 'user-manager'
    ], 
    function () {
        
        /**
         * Home User Manager
         * Type: Single Route
         */
        Route::get('/', 'UserManagerController@index');
    });

    
    
});