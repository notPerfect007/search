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

            dd($arrayOfModelsWithFieldsToSearch);

            $recipes = Recipe::where('name', 'like', '%' . $searchTerm . '%')->paginate(4)->withQueryString();
            return $recipes;

    }
}
