<?php

use Illuminate\Support\Facades\Route;


Route::get('/search', function () {

    if (request('search')) {

        return \NotPerfect\Search\Search::search();
    } else {
        return 'nothing searched';
    }

});
