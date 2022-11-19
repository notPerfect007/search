<?php

use Illuminate\Support\Facades\Route;


Route::get('/search', function () {

    if (request('search')) {

        $searchTerm = request('search');

        return \NotPerfect\Search\Search::search($searchTerm);
    } else {
        return 'nothing searched';
    }
});
