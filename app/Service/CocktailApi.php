<?php

namespace App\Service;

use Illuminate\Support\Facades\Http;

class CocktailApi
{
    protected $url = 'http://www.thecocktaildb.com/api/json/v1/1/';

    public function getByName($name)
    {
        Http::get($this->url . 'search.php', [
            's' => $name
        ])->json($key = null);
    }

    public function getById($id)
    {
        Http::get($this->url . 'lookup.php', [
            'i' => $id
        ])->json($key = null);
    }

    public function getRandom()
    {
        return Http::get($this->url . 'random.php')->json($key = null);
    }

    public function searchByIngredient($ingredient)
    {
        return Http::get($this->url . 'filter.php', [
            'i' => $ingredient
        ])->json($key = null);
    }

    public function alcoholicOrNonAlcoholic($choice)
    {
        return Http::get($this->url . 'filter.php', [
            'a' => $choice
        ])->json($key = null);
    }

}
