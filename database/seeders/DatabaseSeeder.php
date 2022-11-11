<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Recipe;
use App\Models\Ingredient;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $luuk = User::create([
            'name' => 'Luuk'
        ]);

        $manon = User::create([
            'name' => 'Manon'
        ]);

        $jitske = User::create([
            'name' => 'Jitske'
        ]);

        $martijnH = User::create([
            'name' => 'Martijn H'
        ]);

        $simoneP = User::create([
            'name' => 'Simone P'
        ]);

        $jorik = User::create([
            'name' => 'Jorik'
        ]);

        $ilseB = User::create([
            'name' => 'Ilse B'
        ]);

        $pascal = User::create([
            'name' => 'Pascal'
        ]);

        $casper = User::create([
            'name' => 'Casper'
        ]);

        $geranda = User::create([
            'name' => 'Geranda'
        ]);

        $annemieke = User::create([
            'name' => 'Annemieke'
        ]);

        $jordy = User::create([
            'name' => 'Jordy'
        ]);

        $quinn = User::create([
            'name' => 'Quinn'
        ]);

        $paulD = User::create([
            'name' => 'Paul D'
        ]);

        $recipe = Recipe::create([
            'user_id' => $luuk->id,
            'title' => '<h1>Pasta met kipfilet en kruidenkaas</h1>',
            'instructions' =>
                 '<p>Snijd de kipfilet in stukjes en kruid deze met cajunkruiden.
                    Ontdooi de spinazie op laag vuur in een steelpannetje en kook
                    ondertussen de penne beetgaar. Bak de kipfilet bruin en als de
                    spinazie ontdooit is, voeg dan het kuipje kruidenkaas toe en
                    roer goed door elkaar heen. Als de kip gaar is, voeg het spinazie
                    mengsel toe, en daarna de penne. Rooster de pijnboompitjes. Serveer
                    de pasta met wat pijnboompitjes er op.</p>',
            'note' => '<p>Eet smakelijk! Super lekker en gezond!</p>',
            'number_of_servings' => 2,
        ]);

        Ingredient::create([
            'name' => 'kipfilet',
            'recipe_id' => $recipe->id,
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'cajunkruiden',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'penne',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'kruidenkaas',
            'recipe_id' => $recipe->id,
            'measurement' => 'kuipje',
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'spinazie (niet a la creme)',
            'recipe_id' => $recipe->id,
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'pijnboompitjes',
            'recipe_id' => $recipe->id,
        ]);

        $recipe = Recipe::create([
            'user_id' => $manon->id,
            'title' => '<h1>Pasta met spinazie roomsaus</h1>',
            'instructions' =>
                '<p>
                    1. Kook de pasta volgens de gebruiksaanwijzing op de verpakking.
                    2. Ondertussen snij je de uien fijn en pers je de knoflook.
                    3. Verhit de olijfolie (niet te heet) in de pan.
                    4. Fruit de uien en de knoflook en schep de spinazie al omscheppend er in
                        gedeeltes bij. Als de spinazie is geslonken, schep je de mascarpone er
                        doorheen. Breng op smaak met zout en peper.
                    5. Pureer de saus met een staafmixer of blender mooi glad.
                    6. Schep de pasta op de borden en verdeel de saus er overheen.
                    7. Garneer met de walnoten en de basilicum en strooi er lekker veel geraspte
                    (Parmezaanse) kaas overheen.
                </p>',
            'note' =>
                '<p>
                    TIP(S):
                    Als je niet van spinazie houdt, kun je het recept ook met bijvoorbeeld
                    broccoli maken.
                    I.p.v. walnoten, zijn pijnboompitten ook erg lekker in dit recept.
                    Voor de pasta kun je kiezen welke je het lekkerst vindt, dat maakt niet
                    zo veel uit.

                    Wees vooral lekker creatief en eet smakelijk!
                </p>',
            'number_of_servings' => 4,
        ]);

        Ingredient::create([
            'name' => 'Pasta (of ravioli of iets anders wat je lekker vindt)',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 500
        ]);

        Ingredient::create([
            'name' => 'spinazie',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'penne',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 800
        ]);

        Ingredient::create([
            'name' => 'uien',
            'recipe_id' => $recipe->id,
            'quantity' => 2
        ]);

        Ingredient::create([
            'name' => 'knoflook',
            'recipe_id' => $recipe->id,
            'measurement' => 'teentjes',
            'quantity' => 2
        ]);

        Ingredient::create([
            'name' => 'walnoten',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 30
        ]);

        Ingredient::create([
            'name' => 'mascarpone',
            'recipe_id' => $recipe->id,
            'measurement' => 'eetlepels',
            'quantity' => 4
        ]);

        Ingredient::create([
            'name' => 'basilicum',
            'recipe_id' => $recipe->id,
            'measurement' => 'takjes',
            'quantity' => 2
        ]);

        Ingredient::create([
            'name' => 'geraspte kaas',
            'recipe_id' => $recipe->id,
            'measurement' => 'naar smaak',
        ]);

        Ingredient::create([
            'name' => 'olijfolie',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'peper',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'zout',
            'recipe_id' => $recipe->id,
        ]);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
