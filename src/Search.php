<?php

namespace NotPerfect\Search;


class Search
{
    public static function search($arrayOfModelsWithFieldsToSearch, $searchTerm)
    {

            $fakeArray = [
                'Recipe' => ['name', 'instructions'],
                'recipe_categories' => ['name', 'metaDescription']
            ];

            dd($fakeArray);

            $recipes = Recipe::where('name', 'like', '%' . $searchTerm . '%')->paginate(4)->withQueryString();
            return $recipes;

    }
}
