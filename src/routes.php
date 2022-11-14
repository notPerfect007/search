<?php

use Illuminate\Support\Facades\Route;


Route::get('/search', function () {
    return \NotPerfect\Search\Search::test();
});
