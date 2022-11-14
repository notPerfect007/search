<?php

use Illuminate\Support\Facades\Route;


Route::get('/packages', function () {
    return \NotPerfect\Search\Search::test();
});
