<?php

namespace NotPerfect\Search;


class Search
{
    public static function search($searchTerm)
    {

            $arrayOfModelsWithFieldsToSearch = [
                'Recipe' => ['name', 'instructions'],
                'recipe_categories' => ['name', 'metaDescription']
            ];

            $searchResults = [];

foreach( $arrayOfModelsWithFieldsToSearch as $model => $value){

    foreach($value as $field){

     array_push($searchResults, $model::where($field , 'like', '%' . $searchTerm . '%') )   ;
    }
}
            dd($searchResults);

        //    ->paginate(4)->withQueryString();

            return $searchResults;

    }
}
