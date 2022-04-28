<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/foo/1', '/foo/1/bar');

Route::get('/foo/1/bar', static function () {
    return 'Redirect response';
});

Route::get('/foo/1', static function () {
    return 'GET response';
});
