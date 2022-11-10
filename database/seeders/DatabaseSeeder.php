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
            'title' => 'Pasta met kipfilet en kruidenkaas',
            'instructions' =>
                 '<p>Snijd de kipfilet in stukjes en kruid deze met cajunkruiden.
                    Ontdooi de spinazie op laag vuur in een steelpannetje en kook
                    ondertussen de penne beetgaar. Bak de kipfilet bruin en als de
                    spinazie ontdooit is, voeg dan het kuipje kruidenkaas toe en
                    roer goed door elkaar heen. Als de kip gaar is, voeg het spinazie
                    mengsel toe, en daarna de penne. Rooster de pijnboompitjes. Serveer
                    de pasta met wat pijnboompitjes er op.</P>',
            'note' => 'Eet smakelijk! Super lekker en gezond!',
            'number_of_servings' => 2,
            'image' => '/images/recipePics/pastaKipfiletKruidenkaas.jpg'
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
            'title' => 'Pasta met spinazie roomsaus',
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
            'image' => '/images/recipePics/pastaSpinazieRoomsaus.jpg'
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

        $recipe = Recipe::create([
            'user_id' => $jitske->id,
            'title' => 'Khao Soi Noedelsoep',
            'instructions' =>
                '<p>
                    Doe het kipgehakt, lenteuitje, de gember, knoflook en een snuf peper in een kom.
                    Mix goed door elkaar en maak kleine balletjes.

                    Verwarm wat olijfolie een pan met anti aanbaklaag, doe de gehaktballetjes hierin en bak ze tot ze aan alle kanten bruin en zijn (ongeveer 5 minuten) . Doe de gesneden paksoi erbij en bak ongeveer 2 minuten. Haal alles uit de pan en leg op een bord.

                    Kook de noedels volgens de verpakking, je kan ze ook in een bakje heet water zetten tot ze zacht zijn. Laat ze uitlekken in een vergiet.

                    Doe weer wat olijfolie in de (nu lege) pan, bak hierin de currypasta ongeveer 2 minuten, roer dan de kokosmelk, kippenbouillon, vissaus en honing er doorheen tot de currypasta opgelost is. Doe nu de gehaktballetjes en de paksoi weer terug in de pan, kook tot de gehaktballetjes gaar zijn, ongeveer 5 minuten. Roer dan de koriander erdoor.

                    Verdeel de noedels over 2 kommen en verdeel dan de soep er overheen.
                </p>',
            'note' =>
                '<p>
                    Eet Smakelijk!
                </p>',
            'number_of_servings' => 2,
            'image' => '/images/recipePics/khaoSoiNoedelsoep.jpg'
        ]);

        Ingredient::create([
            'name' => 'kipgehakt',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 250
        ]);

        Ingredient::create([
            'name' => 'lenteui of bosui, fijngehakt',
            'recipe_id' => $recipe->id,
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'gember vers, geraspt',
            'recipe_id' => $recipe->id,
            'measurement' => 'cm',
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'knoflook, fijngehakt',
            'recipe_id' => $recipe->id,
            'measurement' => 'teen',
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'zwarte peper',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'olijfolie',
            'recipe_id' => $recipe->id,
            'measurement' => 'eetlepel',
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'penne',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 800
        ]);

        Ingredient::create([
            'name' => 'paksoi, gesneden',
            'recipe_id' => $recipe->id,
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'rode curry pasta (bij Amazing Oriental hebben ze hele lekkere!)',
            'recipe_id' => $recipe->id,
            'measurement' => 'eetlepel',
            'quantity' => 1.5
        ]);

        Ingredient::create([
            'name' => 'kokosmelk (klein pakje)',
            'recipe_id' => $recipe->id,
            'measurement' => 'ml',
            'quantity' => 200
        ]);

        Ingredient::create([
            'name' => 'kippenbouillon',
            'recipe_id' => $recipe->id,
            'measurement' => 'ml',
            'quantity' => 250
        ]);

        Ingredient::create([
            'name' => 'vissaus',
            'recipe_id' => $recipe->id,
            'measurement' => 'eetlepel',
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'honing',
            'recipe_id' => $recipe->id,
            'measurement' => 'theelepel',
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'rijsnoedels',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 75
        ]);

        Ingredient::create([
            'name' => 'korianderblaadjes vers',
            'recipe_id' => $recipe->id,
            'measurement' => 'handje',
            'quantity' => 1
        ]);


        $recipe = Recipe::create([
            'user_id' => $martijnH->id,
            'title' => 'Bonenpuree met paddenstoelensaus',
            'instructions' =>
                '<p>
                    Maak eerst de saus. Doe een flinke hoeveelheid olijfolie(+- 250 ml) in een pan op gemiddeld vuur. Doe hierna alle ingredienten afgezien van de paddestoelen in de pan en bak zachtjes 5 minuutjes tot het begint te geuren.
                    Hierna gooi je de in blokjes gesneden paddestoelen erbij, zet het vuur zacht en deksel erop. Laat dit +- een half uur tot een uur sudderen. Mocht het voor je gevoel te droog worden, mag je altijd extra olijfolie toevoegen.

                    Maak als de saus bijna klaar is de puree. Spoel de bonen uit blik af en doe ze in de keukenmachine, samen met het citroensap, 1/2 theelepel zout, een eetlepel olijfolie en 2 eetlepels koud water. Pureer helemaal glad. Gooi de puree in een pan en kook op hoog vuur in ongeveer 3 minuten goed warm.

                    Schep de puree op en gooi hier de saus met de paddestoelen over. Lekker met bv gebakken sperziebonen of gebakken spruitjes. Ff koken en dan in olie bakken met wat paprika poeder en zout.
                </p>',

            'number_of_servings' => 3,
            'image' => '/images/recipePics/bonenpureeMetPaddenstoelensaus.jpg'
        ]);

        Ingredient::create([
            'name' => 'Portobello\'s en/of kastanjechampignons',
            'recipe_id' => $recipe->id,
            'measurement' => 'gr',
            'quantity' => 650
        ]);

        Ingredient::create([
            'name' => 'knoflook fijngehakt',
            'recipe_id' => $recipe->id,
            'measurement' => 'tenen',
            'quantity' => 5
        ]);

        Ingredient::create([
            'name' => 'ui, gesnipperd',
            'recipe_id' => $recipe->id,
            'quantity' =>1
        ]);

        Ingredient::create([
            'name' => 'chilivlokken',
            'recipe_id' => $recipe->id,
            'measurement' => 'eetlepel',
            'quantity' => 1.5
        ]);

        Ingredient::create([
            'name' => 'komijnzaad, gekneusd in een vijzel',
            'recipe_id' => $recipe->id,
            'measurement' => 'eetlepels',
            'quantity' => 4
        ]);

        Ingredient::create([
            'name' => 'korianderzaad, gekneusd in een vijzel',
            'recipe_id' => $recipe->id,
            'measurement' => 'eetlepel',
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'tomatenpuree',
            'recipe_id' => $recipe->id,
            'measurement' => 'eetlepels',
            'quantity' => 2
        ]);

        Ingredient::create([
            'name' => 'olijfolie',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'limabonen of of mix met cannellinibonen',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 700
        ]);

        Ingredient::create([
            'name' => 'citroensap',
            'recipe_id' => $recipe->id,
            'measurement' => 'eetlepel',
            'quantity' =>1.5
        ]);

        Ingredient::create([
            'name' => 'zeezout',
            'recipe_id' => $recipe->id,
        ]);

        $recipe = Recipe::create([
            'user_id' => $jorik->id,
            'title' => 'wraps met kip',
            'instructions' =>
                '<p>
                    Bak de kip in gaar in de ketjap saus.
                    Snijd de komkommer, ijsbergsla, tomaat.

                    Gooi de hele boel bij elkaar en eten maar.
                </p>',
            'note' =>
                '<p>
                    Hoog uit 10 minuten van kast naar bord
                </p>',
            'number_of_servings' => 2,
            'image' => '/images/recipePics/wrapsMetKip.jpg'
        ]);

        Ingredient::create([
            'name' => 'wraps naar keuze',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'kipblokjes',
            'recipe_id' => $recipe->id,
            'measurement' => 'gr',
            'quantity' => 500
        ]);

        Ingredient::create([
            'name' => 'ketjap saus',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'komkommer',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'ijsbergsla',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'tomaat',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'hummus (zongedroogde tomaat of naar keuze)',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'mais',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'kaas, geraspt',
            'recipe_id' => $recipe->id,
        ]);
//
//        $recipe = Recipe::create([
//            'user_id' => $->id,
//            'title' => '',
//            'instructions' =>
//                '<p>
//
//                </p>',
//            'note' =>
//                '<p>
//
//                </p>',
//            'number_of_servings' => ,
//            'image' => '/images/recipePics/...'
//        ]);
//
//        Ingredient::create([
//            'name' => '',
//            'recipe_id' => $recipe->id,
//            'measurement' => '',
//            'quantity' =>
//        ]);
//
//        $recipe = Recipe::create([
//            'user_id' => $->id,
//            'title' => '',
//            'instructions' =>
//                '<p>
//
//                </p>',
//            'note' =>
//                '<p>
//
//                </p>',
//            'number_of_servings' => ,
//            'image' => '/images/recipePics/...'
//        ]);
//
//        Ingredient::create([
//            'name' => '',
//            'recipe_id' => $recipe->id,
//            'measurement' => '',
//            'quantity' =>
//        ]);
//
//        $recipe = Recipe::create([
//            'user_id' => $->id,
//            'title' => '',
//            'instructions' =>
//                '<p>
//
//                </p>',
//            'note' =>
//                '<p>
//
//                </p>',
//            'number_of_servings' => ,
//            'image' => '/images/recipePics/...'
//        ]);
//
//        Ingredient::create([
//            'name' => '',
//            'recipe_id' => $recipe->id,
//            'measurement' => '',
//            'quantity' =>
//        ]);
//
//        $recipe = Recipe::create([
//            'user_id' => $->id,
//            'title' => '',
//            'instructions' =>
//                '<p>
//
//                </p>',
//            'note' =>
//                '<p>
//
//                </p>',
//            'number_of_servings' => ,
//            'image' => '/images/recipePics/...'
//        ]);
//
//        Ingredient::create([
//            'name' => '',
//            'recipe_id' => $recipe->id,
//            'measurement' => '',
//            'quantity' =>
//        ]);
//
//        $recipe = Recipe::create([
//            'user_id' => $->id,
//            'title' => '',
//            'instructions' =>
//                '<p>
//
//                </p>',
//            'note' =>
//                '<p>
//
//                </p>',
//            'number_of_servings' => ,
//            'image' => '/images/recipePics/...'
//        ]);
//
//        Ingredient::create([
//            'name' => '',
//            'recipe_id' => $recipe->id,
//            'measurement' => '',
//            'quantity' =>
//        ]);
//
//        $recipe = Recipe::create([
//            'user_id' => $->id,
//            'title' => '',
//            'instructions' =>
//                '<p>
//
//                </p>',
//            'note' =>
//                '<p>
//
//                </p>',
//            'number_of_servings' => ,
//            'image' => '/images/recipePics/...'
//        ]);
//
//        Ingredient::create([
//            'name' => '',
//            'recipe_id' => $recipe->id,
//            'measurement' => '',
//            'quantity' =>
//        ]);
//
//        $recipe = Recipe::create([
//            'user_id' => $->id,
//            'title' => '',
//            'instructions' =>
//                '<p>
//
//                </p>',
//            'note' =>
//                '<p>
//
//                </p>',
//            'number_of_servings' => ,
//            'image' => '/images/recipePics/...'
//        ]);
//
//        Ingredient::create([
//            'name' => '',
//            'recipe_id' => $recipe->id,
//            'measurement' => '',
//            'quantity' =>
//        ]);
//
//        $recipe = Recipe::create([
//            'user_id' => $->id,
//            'title' => '',
//            'instructions' =>
//                '<p>
//
//                </p>',
//            'note' =>
//                '<p>
//
//                </p>',
//            'number_of_servings' => ,
//            'image' => '/images/recipePics/...'
//        ]);
//
//        Ingredient::create([
//            'name' => '',
//            'recipe_id' => $recipe->id,
//            'measurement' => '',
//            'quantity' =>
//        ]);
//
//        $recipe = Recipe::create([
//            'user_id' => $->id,
//            'title' => '',
//            'instructions' =>
//                '<p>
//
//                </p>',
//            'note' =>
//                '<p>
//
//                </p>',
//            'number_of_servings' => ,
//            'image' => '/images/recipePics/...'
//        ]);
//
//        Ingredient::create([
//            'name' => '',
//            'recipe_id' => $recipe->id,
//            'measurement' => '',
//            'quantity' =>
//        ]);


        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
