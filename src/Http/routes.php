<?php

Route::group(
    [
        'prefix' => 'transleite',
        'namespace' => 'ANavallaSuiza\Transleite\Http\Controllers'
    ],
    function () {
        Route::get('/', [
            'as'   => 'transleite.home',
            'uses' => 'HomeController@index'
        ]);

        // Model CRUD routes
        Route::get('{param}/{param2?}', [
            'as'   => 'transleite.file.edit',
            'uses' => 'FileController@edit'
        ]);
    }
);
