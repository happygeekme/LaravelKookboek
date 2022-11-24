<?php

namespace App\Service;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;

class CocktailApi
{
   protected const URL = 'http://www.thecocktaildb.com/api/json/v1/1/';

   public function createSlug($title)
   {
       return strtolower(str_replace(' ', '-', $title));
   }

   public function addSlug($drinks)
   {
       $drinksWithSlug = [];

       foreach($drinks as $drink) {
           $slug = $this->createSlug($drink['strDrink']);
           $drink['slug'] = $slug;
           array_push($drinksWithSlug, $drink);
        }

       return $drinksWithSlug;
   }

    public function getByName($name)
    {
        $result = Http::get(self::URL . 'search.php', [
            's' => $name
        ])->json($key = null);
        if (count($result['drinks'] ) > 1) {
            return $this->addSlug($result['drinks']);

        }else{
            $drink = $result['drinks'][0];
            $slug = $this->createSlug($drink['strDrink']);
            $drink['slug'] = $slug;
            return $drink;
        }
    }


    public function getRandom()
    {
        $result = Http::get(self::URL . 'random.php')->json($key = null);
        return $this->addSlug($result['drinks']);
    }

    // NOG NIET GEBRUIKT -> TODO
    public function searchByIngredient($ingredient)
    {
        $result = Http::get(self::URL . 'filter.php', [
            'i' => $ingredient
        ])->json($key = null);

        return $this->addSlug($result['drinks']);
    }

    public function alcoholicOrNonAlcoholic($choice)
    {
        $result = Http::get(self::URL . 'filter.php', [
            'a' => $choice
        ])->json($key = null);
        return $this->addSlug($result['drinks']);
    }

}
