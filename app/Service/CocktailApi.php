<?php

namespace App\Service;

use Illuminate\Support\Facades\Http;

class CocktailApi
{
    public function getByName($name)
    {
        Http::get('http://www.thecocktaildb.com/api/json/v1/1/search.php', [
            's' => $name
        ])->json($key = null);
    }

    public function getById($id)
    {
        Http::get('http://www.thecocktaildb.com/api/json/v1/1/lookup.php', [
            'i' => $id
        ])->json($key = null);
    }

    public function getRandom()
    {
        return Http::get('http://www.thecocktaildb.com/api/json/v1/1/random.php')->json($key = null);
    }

    public function searchByIngredient($ingredient)
    {
        return Http::get('http://www.thecocktaildb.com/api/json/v1/1/filter.php', [
            'i' => $ingredient
        ])->json($key = null);
    }

    public function alcoholicOrNonAlcoholic($choice)
    {
        return Http::get('http://www.thecocktaildb.com/api/json/v1/1/filter.php', [
            'a' => $choice
        ])->json($key = null);
    }

}
