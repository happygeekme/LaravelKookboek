<?php

namespace App\Service;

use Illuminate\Support\Facades\Http;

class CocktailApi
{
   protected const URL = 'http://www.thecocktaildb.com/api/json/v1/1/';

//   public function createSlug($title)
//   {
//       return strtolower(str_replace(' ', '-', $title));
//   }

    public function getByName($name)
    {
        $result = Http::get(self::URL . 'search.php', [
            's' => $name
        ])->json($key = null);

//        foreach($result as $drink){
//            $slug = $this->createSlug($drink['strDrink']);
//            $drink['slug'] = $slug;
//        }
    }

    public function getById($id)
    {
        return Http::get(self::URL . 'lookup.php', [
            'i' => $id
        ])->json($key = null);
    }

    public function getRandom()
    {
        return Http::get(self::URL . 'random.php')->json($key = null);
    }

    public function searchByIngredient($ingredient)
    {
        return Http::get(self::URL . 'filter.php', [
            'i' => $ingredient
        ])->json($key = null);
    }

    public function alcoholicOrNonAlcoholic($choice)
    {
        return Http::get(self::URL . 'filter.php', [
            'a' => $choice
        ])->json($key = null);

    }

}
