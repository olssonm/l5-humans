<?php

    Route::get('humans.txt', [
        'as' => 'humans.txt',
        'uses' => 'Olssonm\Humans\Http\Controllers\HumansController@humans'
    ]);
