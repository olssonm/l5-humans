<?php

    Route::get('humans.txt', function () {
        return response()
            ->view('humans::humans')
            ->header('Content-Type', 'text/plain');
    });
