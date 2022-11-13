<?php

namespace NotPerfect\Search\Facades;

use Illuminate\Support\Facades\Facade;

class Search extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'search';
    }
}
