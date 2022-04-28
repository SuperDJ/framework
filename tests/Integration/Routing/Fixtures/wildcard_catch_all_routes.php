<?php

use Illuminate\Support\Facades\Route;

Route::get('/foo', static function () {
    return 'Regular route';
});

Route::get('{slug}', static function () {
    return 'Wildcard route';
});
