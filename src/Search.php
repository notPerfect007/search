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

foreach( $arrayOfModelsWithFieldsToSearch as $model => $value){
    print_r($model) ;
    foreach($value as $field){
        print_r($field) ;
    }
}

            dd($arrayOfModelsWithFieldsToSearch);

            $searchResults = Recipe::where('name', 'like', '%' . $searchTerm . '%')->paginate(4)


            ->withQueryString();
            return $searchResults;

    }
}
