<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Recipe;
use App\Models\Ingredient;
use App\Models\Measurement;
use App\Models\Ingredientrecipe;
use Illuminate\Validation\Rules\In;

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

//MEASUREMENTS
        $kuipje = Measurement::create([
            'name' => 'kuipje'
        ]);

        $gram = Measurement::create([
            'name' => 'gram'
        ]);

        $ml = Measurement::create([
            'name' => 'ml'
        ]);

        $cm = Measurement::create([
            'name' => 'cm'
        ]);

        $theelepel = Measurement::create([
            'name' => 'theelepel(s)'
        ]);

        $eetlepel = Measurement::create([
            'name' => 'eetlepel(s)'
        ]);

        $teentjes = Measurement::create([
            'name' => 'teentje(s)'
        ]);

        $takjes = Measurement::create([
            'name' => 'takje(s)'
        ]);

        $handje = Measurement::create([
            'name' => 'handje(s)'
        ]);

        $bakje = Measurement::create([
            'name' => 'bakje'
        ]);

        $vellen = Measurement::create([
            'name' => 'vel(len)'
        ]);

        $bos = Measurement::create([
            'name' => 'bos(sen)'
        ]);

        $blokje = Measurement::create([
            'name' => 'blokje'
        ]);

        $pakje = Measurement::create([
            'name' => 'pakje'
         ]);

        $pot = Measurement::create([
            'name' => 'pot(ten)'
        ]);

        $blikje = Measurement::create([
            'name' => 'blikje(s)'
        ]);

        $blik = Measurement::create([
            'name' => 'blik(ken)'
        ]);

//INGREDIENTS
        $kipfilet = Ingredient::create([
            'name' => 'kipfilet',
        ]);

        $cajunkruiden = Ingredient::create([
            'name' => 'cajunkruiden',
        ]);

        $penne = Ingredient::create([
            'name' => 'penne',
        ]);

        $kruidenkaas = Ingredient::create([
            'name' => 'kruidenkaas',
        ]);

        $spinazie = Ingredient::create([
            'name' => 'spinazie'
        ]);

        $pijnboompitten = Ingredient::create([
            'name' => 'pijnboompitjes',
        ]);

        $pasta = Ingredient::create([
            'name' => 'Pasta'
        ]);

        $uien = Ingredient::create([
            'name' => 'ui(en)',
        ]);

        $knoflook = Ingredient::create([
            'name' => 'knoflook',
        ]);

        $walnoten = Ingredient::create([
            'name' => 'walnoten',
        ]);

        $mascarpone = Ingredient::create([
            'name' => 'mascarpone',
        ]);

        $basilicum = Ingredient::create([
            'name' => 'basilicum',
        ]);

        $kaas = Ingredient::create([
            'name' => 'kaas',
        ]);

        $olijfolie = Ingredient::create([
            'name' => 'olijfolie',
        ]);

        $peper = Ingredient::create([
            'name' => 'peper'
        ]);

        $zout = Ingredient::create([
            'name' => 'zout'
        ]);

        $kipgehakt = Ingredient::create([
            'name' => 'kipgehakt',
        ]);

        $lenteui = Ingredient::create([
            'name' => 'lenteui(tjes)',
        ]);

        $paksoi = Ingredient::create([
            'name' => 'paksoi',
        ]);

        $rodeCurryPasta = Ingredient::create([
            'name' => 'rode curry pasta',
        ]);

        $gember = Ingredient::create([
            'name' => 'gember'
        ]);

        $kokosmelk = Ingredient::create([
            'name' => 'kokosmelk'
        ]);

        $kippenbouillon = Ingredient::create([
            'name' => 'kippenbouillon'
        ]);

        $groentenbouillon = Ingredient::create([
            'name' => 'groetenbouillon'
        ]);

        $vissaus = Ingredient::create([
            'name' => 'vissaus'
        ]);

        $honing = Ingredient::create([
            'name' => 'honing'
        ]);

        $noedels = Ingredient::create([
            'name' => 'noedels'
        ]);

        $koriander = Ingredient::create([
            'name' => 'koriander'
        ]);

        $portobellos = Ingredient::create([
            'name' => 'portobello\'s'
        ]);

        $kastanjeChampignons = Ingredient::create([
            'name' => 'kastanje champignons'
        ]);

        $chilivlokken = Ingredient::create([
            'name' => 'chilivlokken'
        ]);

        $komijnzaad = Ingredient::create([
            'name' => 'komijnzaad'
        ]);

        $korianderzaad = Ingredient::create([
            'name' => 'korianderzaad'
        ]);

        $tomatenpuree = Ingredient::create([
            'name' => 'tomatenpuree'
        ]);

        $limaBonen = Ingredient::create([
            'name' => 'limabonen'
        ]);

        $citroensap = Ingredient::create([
            'name' => 'citroensap'
        ]);

        $wraps = Ingredient::create([
            'name' => 'wraps'
        ]);

        $ketjap = Ingredient::create([
            'name' => 'ketjap'
        ]);

        $sojasaus = Ingredient::create([
            'name' => 'sojasaus'
        ]);

        $komkommer = Ingredient::create([
            'name' => 'komkommer'
        ]);

        $ijsbergsla = Ingredient::create([
            'name' => 'ijsbergsla'
        ]);

        $tomaat = Ingredient::create([
            'name' => 'toma(a)t(en)'
        ]);

        $hummus = Ingredient::create([
            'name' => 'hummus'
        ]);

        $mais = Ingredient::create([
            'name' => 'mais'
        ]);

        $paprika = Ingredient::create([
            'name' => 'paprika(s)'
        ]);

        $aardappels = Ingredient::create([
            'name' => 'aardappel(s)'
        ]);

        $courgette = Ingredient::create([
            'name' => 'courgette'
        ]);

        $aubergine = Ingredient::create([
           'name' => 'aubergine(s)'
        ]);

        $wortel = Ingredient::create([
            'name' => 'wortel(s)'
        ]);

        $feta = Ingredient::create([
            'name' => 'feta'
        ]);

        $haloumi = Ingredient::create([
            'name' => 'haloumi'
        ]);

        $tofu = Ingredient::create([
            'name' => 'tofu'
        ]);

        $salami = Ingredient::create([
            'name' => 'salami'
        ]);

        $ham = Ingredient::create([
            'name' => 'ham'
        ]);

        $italiaanseKruiden = Ingredient::create([
            'name' => 'italiaanse kruiden'
        ]);

        $yoghurt = Ingredient::create([
            'name' => 'yoghurt'
        ]);

        $beschuit = Ingredient::create([
            'name' => 'beschuit(en)'
        ]);

        $ei = Ingredient::create([
            'name' => 'ei(eren)'
        ]);

        $naanbrood = Ingredient::create([
            'name' => 'naanbrood'
        ]);

        $rodePeper = Ingredient::create([
            'name' => 'rode peper'
        ]);

        $mango = Ingredient::create([
            'name' => 'mango'
        ]);

        $rucola = Ingredient::create([
            'name' => 'rucola'
        ]);

        $cherryTomaatjes = Ingredient::create([
            'name' => 'cherrytomaatjes'
        ]);

        $nachoChips = Ingredient::create([
            'name' => 'nacho chips'
        ]);

        $vlees = Ingredient::create([
            'name' => 'vlees'
        ]);

        $prei = Ingredient::create([
            'name' => 'prei'
        ]);

        $cremeFraiche = Ingredient::create([
            'name' =>  'creme fraiche'
        ]);

        $oregano = Ingredient::create([
            'name' => 'oregano'
        ]);

        $komijn = Ingredient::create([
            'name' => 'komijn'
        ]);

        $citroen = Ingredient::create([
            'name' => 'citroen(en)'
        ]);

        $cashewnoten = Ingredient::create([
            'name' => 'cashewnoten'
        ]);

        $zalm = Ingredient::create([
            'name' => 'zalm'
        ]);

        $bladerdeeg = Ingredient::create([
            'name' => 'bladerdeeg'
        ]);

        $doperwten = Ingredient::create([
            'name' => 'doperwten'
        ]);

        $pesto = Ingredient::create([
            'name' => 'pesto'
        ]);

        $citroenrasp = Ingredient::create([
            'name' => 'citroen rasp'
        ]);

        $gnocchi = Ingredient::create([
            'name' => 'gnochhi'
        ]);

        $burratini = Ingredient::create([
            'name' => 'burratini'
        ]);

        $filodeeg = Ingredient::create([
            'name' => 'filodeeg'
        ]);

        $kwark = Ingredient::create([
            'name' => 'kwark'
        ]);

        $peterselie = Ingredient::create([
        'name' => 'peterselie'
        ]);

        $dille = Ingredient::create([
            'name' => 'dille'
        ]);

        $sesamzaad = Ingredient::create([
            'name' => 'sesamzaad'
        ]);

        $radijs = Ingredient::create([
        'name' => 'radijs'
        ]);

        $risottorijst = Ingredient::create([
            'name' => 'risottorijst'
        ]);

        $zalmsnippers = Ingredient::create([
            'name' => 'zalmsnippers'
        ]);

        $avocado = Ingredient::create([
            'name' => 'avocado'
        ]);

        $mayonaise = Ingredient::create([
            'name' => 'mayonaise'
        ]);

        $wittewijnazijn = Ingredient::create([
            'name' => 'wittewijnazijn'
        ]);

        $suiker = Ingredient::create([
            'name' => 'suiker'
        ]);

        $gomasio = Ingredient::create([
            'name' => 'gomasio'
        ]);

        $goldenCurryMix = Ingredient::create([
            'name' => 'golden curry mix'
        ]);

        $water = Ingredient::create([
            'name' => 'water'
        ]);

        $kippendijfilet = Ingredient::create([
            'name' => 'kippendijfilet'
        ]);

        $rijst = Ingredient::create([
            'name' => 'rijst'
        ]);

        $olie = Ingredient::create([
            'name' => 'olie'
        ]);

        $jalapenoBurgers = Ingredient::create([
            'name' => 'jalapeno burgers'
        ]);

        $bruineBonen = Ingredient::create([
            'name' => 'bruine bonen'
        ]);

        $kidneyBonen = Ingredient::create([
            'name' => 'kidney bonen'
        ]);

        $kapucijners = Ingredient::create([
            'name' => 'kapucijners'
        ]);

        $chipotleSaus = Ingredient::create([
            'name' => 'chipotle saus'
        ]);

        $paprikaPoeder = Ingredient::create([
            'name' => 'paprika poeder'
        ]);

        $gepeldeTomaten = Ingredient::create([
            'name' => 'gepelde tomaten'
        ]);

        $pompoenpitten = Ingredient::create([
            'name' => 'pompoenpitten'
        ]);

        $recipe = Recipe::create([
            'user_id' => $luuk->id,
            'title' => 'Pasta met kipfilet en kruidenkaas',
            'slug' => 'pasta-met-kipfilet-en-kruidenkaas',
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


        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $kipfilet->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $cajunkruiden->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $penne->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $kruidenkaas->id,
            'measurement_id' => $kuipje->id,
            'amount' => 1,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $spinazie->id,
            'note_user' => 'Geen a la creme'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $pijnboompitten->id,
        ]);


        $recipe = Recipe::create([
            'user_id' => $manon->id,
            'title' => 'Pasta met spinazie roomsaus',
            'slug' => 'pasta-met-spinazie_roomsaus',
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

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $pasta->id,
            'measurement_id' => $gram->id,
            'amount' => 500,
            'note_user' => 'Of ravioli of iets anders at je lekker vindt'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $spinazie->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $uien->id,
            'amount' => 2,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $knoflook->id,
            'measurement_id' => $teentjes->id,
            'amount' => 2
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $walnoten->id,
            'measurement_id' => $gram->id,
            'amount' => 30
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $mascarpone->id,
            'measurement_id' => $eetlepel->id,
            'amount' => 4,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $basilicum->id,
            'measurement_id' => $takjes->id,
            'amount' => 2,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $kaas->id,
            'note_user' => 'geraspt, naar smaak'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $olijfolie->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $peper->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $zout->id,
        ]);


        $recipe = Recipe::create([
            'user_id' => $jitske->id,
            'title' => 'Khao Soi Noedelsoep',
            'slug' => 'khao-soi-noedelsoep',
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


        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $kipgehakt->id,
            'measurement_id' => $gram->id,
            'amount' => 250,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $lenteui->id,
            'amount' => 1,
            'note_user' => 'of bosui, fijngehakt'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $gember->id,
            'measurement_id' => $cm->id,
            'amount' => 1,
            'note_user' => 'vers, geraspt'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $knoflook->id,
            'measurement_id' => $teentjes->id,
            'amount' => 1,
            'note_user' => 'fijngehakt'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $peper->id,
            'note_user' => 'zwart'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $olijfolie->id,
            'measurement_id' => $eetlepel->id,
            'amount' => 1,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $paksoi->id,
            'amount' => 1,
            'note_user' => 'gesneden'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $rodeCurryPasta->id,
            'measurement_id' => $eetlepel->id,
            'amount' => 1.5,
            'note_user' => 'bij Amazing Oriental hebben ze hele lekkere!'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $kokosmelk->id,
            'measurement_id' => $ml->id,
            'amount' => 200,
            'note_user' => 'klein pakje'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $kippenbouillon->id,
            'measurement_id' => $ml->id,
            'amount' => 250,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $vissaus->id,
            'measurement_id' => $eetlepel->id,
            'amount' => 1,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $honing->id,
            'measurement_id' => $theelepel->id,
            'amount' => 1,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $noedels->id,
            'measurement_id' => $gram->id,
            'amount' => 75,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $koriander->id,
            'measurement_id' => $handje->id,
            'amount' => 1,
            'note_user' => 'vers, de blaadjes'
        ]);


        $recipe = Recipe::create([
            'user_id' => $martijnH->id,
            'title' => 'Bonenpuree met paddenstoelensaus',
            'slug' => 'bonenpuree-met-paddenstoelensaus',
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

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $portobellos->id,
            'amount' => 2,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $kastanjeChampignons->id,
            'measurement_id' => $gram->id,
            'amount' => 650,
            'note_user' => 'Kan je weglaten als je 4 portobello\'s gebruikt'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $knoflook->id,
            'measurement_id' => $teentjes->id,
            'amount' => 5,
            'note_user' => 'fijngehakt'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $uien->id,
            'amount' => 1,
            'note_user' => 'gesnipperd'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $chilivlokken->id,
            'measurement_id' => $eetlepel->id,
            'amount' => 1.5,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $komijnzaad->id,
            'measurement_id' => $theelepel->id,
            'amount' => 4,
            'note_user' => 'gekneusd in een vijzel'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $korianderzaad->id,
            'measurement_id' => $eetlepel->id,
            'amount' => 1,
            'note_user' => 'gekneusd in een vijzel'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $tomatenpuree->id,
            'measurement_id' => $eetlepel->id,
            'amount' => 2
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $olijfolie->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $limaBonen->id,
            'measurement_id' => $gram->id,
            'amount' => 700,
            'note_user' => 'of mix met cannellinibonen'
        ]);


        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $citroensap->id,
            'measurement_id' => $eetlepel->id,
            'amount' => 1.5,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $zout->id,
            'note_user' => 'zeezout'
        ]);

        $recipe = Recipe::create([
            'user_id' => $jorik->id,
            'title' => 'wraps met kip',
            'slug' => 'wraps-met-kip',
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

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $wraps->id,
            'note_user' => 'naar keuze'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $kipfilet->id,
            'measurement_id' => $gram->id,
            'amount' => 500,
            'note_user' => 'in blokjes'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $ketjap->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $komkommer->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $ijsbergsla->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $tomaat->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $hummus->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $mais->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $kaas->id,
            'note_user' => 'geraspt'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $yoghurt->id,
            'note_user' => 'Griekse of Turkse'
        ]);


        $recipe = Recipe::create([
            'user_id' => $simoneP->id,
            'title' => 'Plaatgroenten met *',
            'slug' => 'plaatgroenten-met-*',
            'instructions' =>
                '<p>
                    Stap 1: Kies 3 of 4 van je favoriete groenten.

                    & kies * = Iets extra’s naar keuze.


                    De hoeveelheid groente en extra’s kun je zelf inschatten hoeveel je op kan.

                    Alle groenten snijden in stukken van ongeveer 2cm
                    De * snijden
                    Knoflook in de knoflookpers of klein snijden
                    Alles in een grote schaal gooien en mengen met de olijfolie en kruiden
                    Op de bakplaat en in de oven

                    Je kent je eigen oven het best. Ik doe altijd 200 graden – Afhankelijk van welke groenten je hebt, tussen 30 en 40 minuten. Meer zachte groenten (paprika, tomaat, aubergine etc.) hebben korter nodig dan de hardere groenten (aardappels, wortels etc.). Tussendoor even checken of er niks zwart is geworden kan nooit kwaad. En als het dan als het nog bleekjes oogt, een paar minuten extra bakken.

                    Bonus receptje/ Lekker voor erbij: Yoghurt dip

                    Griekse of turkse Yoghurt
                    Kruiden (weer die italiaanse kruidenmix of munt of oregano of wat je hebt)
                    De kruiden eerst even laten weken in 2 of 3 theelepels (olijf)olie
                    Evt ook hierin 1 teentje knoflook fijngeperst/gehakt

                    Roeren en klaar om te eten!
                </p>',
            'note' =>
                '<p>
                    Voorbereiding: 15/ 20 minuten, bereiding: 30 - 40 minuten,

                    Super makkelijk recept.
                </p>',
            'image' => '/images/recipePics/plaatgroentenMet.jpg'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $aardappels->id,
            'note_user' => 'piepers, krieltjes, kruimelig, zoet maakt allemaal niet uit'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $paprika->id,
            'note_user' => 'Alle kleuren mogen, 2 of 3 ook, punt paprika, whatever'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $courgette->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $aubergine->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $tomaat->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $uien->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $wortel->id,
            'note_user' => 'ook alle kleuren mogen'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $feta->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $haloumi->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $tofu->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $salami->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $ham->id,
            'note_user' => 'blokjes'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $kipfilet->id,
            'note_user' => 'reepjes'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $knoflook->id,
            'note_user' => '1 a 2 tenen (meer mag ook, maar graag dan thuis werken dan de dag erna)'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $italiaanseKruiden->id,
            'note_user' => 'Of kruiden die je hebt'
        ]);

        $recipe = Recipe::create([
            'user_id' => $ilseB->id,
            'title' => 'Kip met naanbrood, hummus en mangosalsa',
            'slug' => 'kip-met-naanbrood-hummus-en-mangosalsa',
            'instructions' =>
                '<p>

                </p>',
            'note' =>
                '<p>
                    Eén van mijn favoriete recepten is kip met naanbrood, hummus en mangosalsa.
                    Zelf voeg ik er nog wat extra groenten aan toe om het nog iets gezonder te maken.

                    Ik voeg nog toe:
                    - Bakje cherrytomaatjes in halfjes (eet je er bij)
                    - Halve komkommer in schijfjes (eet je er bij)
                    - 1 rode paprika in dunne repen, die bak ik mee met de kip

                    Vega optie: in plaats van kip kun je ook kiezen voor 4 vega schnitzels.

                    Het voelt een beetje als cheaten, maar wel best gezond cheaten ;)
                </p>',
            'number_of_servings' => 4,
            'image' => '/images/recipePics/kipMetNaanbroodHummusEnMangosalsa.jpg',
            'link' => 'https://www.ah.nl/allerhande/recept/R-R549840/kip-met-hummus-naanbrood-en-mangosalsa'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $kipfilet->id,
            'amount' => 4,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $beschuit->id,
            'amount' => 2
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $ei->id,
            'amount' => 2,
            'note_user' => 'middelgrote'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $olijfolie->id,
            'measurement_id' => $eetlepel->id,
            'amount' => 4
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $naanbrood->id,
            'amount' => 2,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $rodePeper->id,
            'amount' => 0.5,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $mango->id,
            'amount' => 1,
            'note_user' => 'eetrijp'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $koriander->id,
            'measurement_id' => $gram->id,
            'amount' => 15,
            'note_user' => 'vers'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $hummus->id,
            'measurement_id' => $eetlepel->id,
            'amount' => 6
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $rucola->id,
            'measurement_id' => $gram->id,
            'amount' => 75
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $cherryTomaatjes->id,
            'measurement_id' => $bakje->id,
            'amount' => 1
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $komkommer->id,
            'amount' => 0.5
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $paprika->id,
            'amount' => 1,
            'note_user' => 'rood'
        ]);


        $recipe = Recipe::create([
            'user_id' => $pascal->id,
            'title' => 'Nacho\'s met groenten en kaas',
            'slug' => 'nachos-met-groenten-en-kaas',
            'instructions' =>
                '<p>
                    Snijd en kruid de kipfilet

                    Verwarm de oven voor op 180 graden
                    Bak de kipfilet aan in een wok
                    Voeg de groenten toe en bak beiden gaar
                    Vet ondertussen een ovenschaal
                    Schep de mix van kipfilet en groenten in de ovenschaal en dek af met nacho’s
                    Voeg de creme fraish en kaas toe
                    Plaats het gerecht in de oven tot de kaas gesmolten is (+=/- 15 minuten)
                </p>',
            'note' =>
                '<p>
                    Je kunt dit ingrediënt maken met kipgehakt, rundergehakt, kipfilet of rundstukjes.

                    In plaats van losse groenten kun je voor de snelle variant ook een zak voorgesneden groentemix gebruiken.
                </p>',
            'number_of_servings' => 2,
            'image' => '/images/recipePics/nachosMetGroentenEnKaas.jpg',
            'link' => 'http://recepten.lindascal.nl/nachos-met-groenten-een-kaas/'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $nachoChips->id,
            'measurement_id' => $gram->id,
            'amount' => 200,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $vlees->id,
            'measurement_id' => $gram->id,
            'amount' => 200,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $uien->id,
            'amount' => 1,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $knoflook->id,
            'measurement_id' => $teentjes->id,
            'amount' => 2,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $paprika->id,
            'amount' => 1,
            'note_user' => 'rood'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $paprika->id,
            'amount' => 1,
            'note_user' => 'geel of groen'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $prei->id,
            'amount' => 0.5
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $tomaat->id,
            'measurement_id' => $gram->id,
            'amount' => 100,
            'note_user' => 'rood'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $cremeFraiche->id,
            'measurement_id' => $ml->id,
            'amount' => 50
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $kaas->id,
            'measurement_id' => $gram->id,
            'amount' => 100,
            'note_user' => 'geraspt of cheddar'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $oregano->id,
            'measurement_id' => $theelepel->id,
            'amount' => 2
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $komijn->id,
            'measurement_id' => $theelepel->id,
            'amount' => 2
        ]);


        $recipe = Recipe::create([
            'user_id' => $casper->id,
            'title' => 'Hartige taart met spinazie en feta',
            'slug' => 'hartige-taart-met-spinazie-en-feta',
            'instructions' =>
                '<p>
                    Verder benodigd:
                    Grote kom
                    Springvorm (centimetertje of 26 doorsnee)
                    Garde
                    Oven (160 C)


                    Zet de oven aan op 160 graden.

                    Verhit een scheutje olie in de pan en fruit de knoflook en ui aan (uiteraard eerst snipperen). Voeg beetje bij beetje de spinazie toe en bak net zo lang totdat het geslonken en (BELANGRIJK) redelijk droog is. Laat daarna iets afkoelen.

                    Pak een kom en doe hier de eieren in. Klop een beetje los. Voeg de feta (of witte kaas) toe, dit doe je door te verkruimelen in je hand. Voeg ook peper, zout en chili vlokken naar smaak toe en kluts weer door. Hierna een handje oude kaas (geraspt), citroen rasp en sap van halve citroen.

                    Mix nu de spinazie door het ei / kaas beslag en spatel goed door met een pannenlikker oid.

                    Vet de springvorm in en bekleed met bladerdeeg. Prik gaatjes in het deeg.

                    Verdeel de eieren met spinazie over de springvorm en voeg wat cashewnoten toe. Eventueel de gerookte zal OF gebakken panchetta doe in kleine delen.

                    Doe als laatste kaas over de taart heen en bestrijk de rand van he tdeeg met ei (voor een mooi kleurtje).

                    doe het minimaal 1 uur in de oven en kijk of hij stevig genoeg is. Indien ja, haal uit de oven en laat 10 minuutjes staan met een (schone) theedoek erover (of aluminium folie maar dat is niet duurzaam).
                </p>',
            'image' => '/images/recipePics/hartigeTaartMetSpinazieEnFeta.jpg'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $spinazie->id,
            'measurement_id' => $gram->id,
            'amount' => 600,
            'note_user' => 'blad spinazie'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $feta->id,
            'measurement_id' => $gram->id,
            'amount' => 200
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $ei->id,
            'amount' => 6,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $kaas->id,
            'note_user' => 'geraspt, bij voorkeur oud'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $citroen->id,
            'amount' => 1
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $knoflook->id,
            'measurement_id' => $teentjes->id,
            'amount' => 2,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $uien->id,
            'amount' => 1,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $peper->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $zout->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $chilivlokken->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $zalm->id,
            'note_user' => 'gerookt, OF panchetta'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $bladerdeeg->id,
        ]);

        $recipe = Recipe::create([
            'user_id' => $geranda->id,
            'title' => 'Gnocchi met doperwtenpesto en burrata',
            'slug' => 'gnocchi-met-doperwtenpesto-en-burrata',
            'instructions' =>
                '<p>
                    Breng een ruime pan met gezouten water aan de kook. Kook hierin de doperwten 2 minuten zodat ze net gaar zijn.
                    Haal de doperwten met een schuimspaan uit het water en doe ze in een schaaltje. Prak de doperwten grof en meng met de pesto, het citroensap en de citroenrasp. Zet apart.
                    Kook de gnocchi in de pan met water tot ze boven beginnen te drijven. Dat is het teken dat ze gaar zijn. Bewaar een beetje van het kookvocht en giet de gnocchi af.
                    Doe de doperwtenpesto in de gnocchipan en voeg een scheutje kookvocht toe. Voeg de gnocchi toe, meng goed en breng op smaak met zwarte peper.
                    Verdeel de rucola over een diep bord en leg hierop de gnocchi en burratini. Besprenkel met de olijfolie, zeezout en zwarte peper.
                </p>',
            'number_of_servings' => 1,
            'image' => '/images/recipePics/gnocchiMetDoperwtenpestoEnBurrata.jpg',
            'link' => 'https://www.liselottelegebeke.nl/eten/vegetarische-gnocchi-doperwten-pesto-burrata/'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $doperwten->id,
            'measurement_id' => $gram->id,
            'amount' => 100,
            'note_user' => 'verse'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $pesto->id,
            'measurement_id' => $eetlepel->id,
            'amount' => 1.5,
            'note_user' => 'verse'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $citroensap->id,
            'measurement_id' => $theelepel->id,
            'amount' => 0.5,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $citroenrasp->id,
            'measurement_id' => $theelepel->id,
            'amount' => 0.5,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $gnocchi->id,
            'measurement_id' => $gram->id,
            'amount' => 150,
            'note_user' => 'verse (150 tot 200 gram)'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $rucola->id,
            'measurement_id' => $handje->id,
            'amount' => 1,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $burratini->id,
            'amount' => 1,
            'note_user' => 'of 0.5 burrata, ten minste 30 minuten uit de koelkast'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $olijfolie->id,
            'measurement_id' => $eetlepel->id,
            'amount' => 1,
            'note_user' => 'extra vierge'
        ]);



        $recipe = Recipe::create([
            'user_id' => $annemieke->id,
            'title' => 'Spinazietaart met feta',
            'slug' => 'spinazietaart-met-feta',
            'instructions' =>
                '<p>
                    Pel en snipper de ui en hak de knoflook fijn. Fruit dit aan in iets olijfolie. Voeg beetje bij beetje de spinazie toe. Totdat deze volledig geslonken is. Breng de spinazie op smaak met peper en zout. Druk het meeste vocht eruit.
                    Klop in een kom de eieren met de kwark luchtig. Breng dit op smaak met peper en zout. Hak de peterselie en de dille fijn en meng dit door de vulling.
                    Neem een vel filodeeg en bestrijk deze met olijfolie (gesmolten boter kan ook). Plak een tweede vel er bovenop. Herhaal deze stappen totdat je 4 lagen hebt. Het is niet erg als het iets scheurt. Verdeel het filodeeg over een ingevette springvorm.
                    Verdeel de spinazie over de bodem van de filodeegtaart. Giet de vulling op de spinazie. Verkruimel tenslotte de feta over de spinazietaart. Vouw alle punten van het filodeeg naar binnen en bestrijk de bovenkant lichtjes met olijfolie. Verdeel het sesamzaad over de taart.
                    Bak de spinazietaart in ongeveer 30 minuten goudbruin. Wordt hij tussentijds te donker? dek de bovenkant dan af met wat aluminiumfolie.
                    Serveer de hartige taart meteen of eet hem koud. Vers is de spinazietaart het lekkerste, maar je kunt hem max. 2 dagen in de koelkast bewaren. Invriezen gaat helaas niet.
                </p>',
            'number_of_servings' => 4,
            'image' => '/images/recipePics/spinazietaartMetFeta.jpg'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $filodeeg->id,
            'measurement_id' => $vellen->id,
            'amount' => 4,
            'note_user' => 'groot'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $spinazie->id,
            'measurement_id' => $gram->id,
            'amount' => 600,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $uien->id,
            'amount' => 1,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $knoflook->id,
            'measurement_id' => $teentjes->id,
            'amount' => 2
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $ei->id,
            'amount' => 4,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $kwark->id,
            'measurement_id' => $gram->id,
            'amount' => 125,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $feta->id,
            'measurement_id' => $gram->id,
            'amount' => 150,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $peterselie->id,
            'measurement_id' => $gram->id,
            'amount' => 15,
            'note_user' => 'vers'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $dille->id,
            'measurement_id' => $takjes->id,
            'amount' => 2,
            'note_user' => 'vers'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $sesamzaad->id,
            'measurement_id' => $eetlepel->id,
            'amount' => 1,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $peper->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $zout->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $olijfolie->id,
        ]);

        $recipe = Recipe::create([
            'user_id' => $jordy->id,
            'title' => 'Sushibowl met zalmsnippers en gembermayonaise',
            'slug' => 'sushibowl-met-zalmsnippers-en-gembermayonaise',
            'instructions' =>
                '<p>
                     Breng ruim water aan de kook in een pan met deksel voor de rijst en verkruimel er 1/4 bouillonblokje per persoon boven.Verwijder ondertussen het loof van de radijsjes en snijd ze in kwarten. Snijd de komkommer in kleine blokjes.

                     Meng in een saladekom per persoon 2 el wittewijnazijn en 1 1/2 tl suiker met een snuf zout. Meng de komkommer en radijs erdoor. Zet opzij en schep regelmatig om.Voeg de risottorijst toe aan de pan met deksel en kook, afgedekt, in 12 – 15 minuten gaar. Giet daarna af in een vergiet en spoel af met lauw water. Laat daarna uitlekken.

                     Snijd ondertussen de avocado doormidden, verwijder de pit en schil en snijd het vruchtvlees in dunne plakjes.Rasp de gember fijn.Meng in een kleine kom de mayonaise met de geraspte gember.

                     Verdeel de rijst over grote kommen en garneer deze met de gomasio.Leg hiernaast de zoetzure radijsjes en komkommer, de zalmsnippers en de plakjes avocado.Schep een lepel gembermayonaise in het midden en serveer de sojasaus erbij.
                </p>',
            'number_of_servings' => 2,
            'image' => '/images/recipePics/sushibowlMetZalmsnippersEnGembermayonaise.jpg',
            'link' => 'https://www.hellofresh.nl/recipes/sushibowl-met-zalmsnippers-en-gembermayonaise-5f4fadd6b1b7906d6244ff55'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $radijs->id,
            'measurement_id' => $bos->id,
            'amount' => 1,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $risottorijst->id,
            'measurement_id' => $gram->id,
            'amount' => 150,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $gember->id,
            'measurement_id' => $cm->id,
            'amount' => 3,
            'note_user' => 'vers'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $zalmsnippers->id,
            'measurement_id' => $gram->id,
            'amount' => 160,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $sojasaus->id,
            'measurement_id' => $ml->id,
            'amount' => 20,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $komkommer->id,
            'amount' => 1,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $avocado->id,
            'amount' => 0.5,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $mayonaise->id,
            'measurement_id' => $gram->id,
            'amount' => 50,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $gomasio->id,
            'measurement_id' => $gomasio->id,
            'amount' => 5,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $groentenbouillon->id,
            'measurement_id' => $blokje->id,
            'amount' => 0.5,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $suiker->id,
            'measurement_id' => $theelepel->id,
            'amount' => 3,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $wittewijnazijn->id,
            'measurement_id' => $eetlepel->id,
            'amount' => 4,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $peper->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $zout->id,
        ]);

        $recipe = Recipe::create([
            'user_id' => $quinn->id,
            'title' => 'Japanse golden curry',
            'slug' => 'japanse-golden-curry',
            'instructions' =>
                '<p>
                    Bereid de rijst zoals je gewend bent.
                    Snipper de ui, snijd de wortel aardappel en kip in kleine blokjes (3 a 4cm)
                    Verhit olie in een wok, wanneer deze goed warm is voeg dan de kip toe en bak deze tot goudbruin.
                    Voeg dan de ui, wortel en aardappel toe en bak deze ongeveer 3 a 4 minuten mee op middelhoog vuur.
                    Voeg het water toe, en laat de ingredienten voor ongeveer 15 minuten koken op middel vuur.
                    Voeg de curry mix toe, roer deze goed door en laat dit op laag vuur meekoken voor 5 minuten.
                    Serveer in een kom met de rijst die in stap 1 gekookt is.
                </p>',

            'number_of_servings' => 4,
            'image' => '/images/recipePics/japanseGoldenCurry.jpg'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $goldenCurryMix->id,
            'measurement_id' => $pakje->id,
            'amount' => 1,
            'note_user' => 'https://amazingoriental.com/product/golden-curry-sausmix-mild-2/'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $uien->id,
            'measurement_id' => $gram->id,
            'amount' => 350,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $wortel->id,
            'measurement_id' => $gram->id,
            'amount' => 100,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $aardappels->id,
            'measurement_id' => $gram->id,
            'amount' => 150,
            'note_user' => 'geen kruimige'
        ]);


        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $water->id,
            'measurement_id' => $ml->id,
            'amount' => 500,
        ]);


        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $kippendijfilet->id,
            'measurement_id' => $gram->id,
            'amount' => 400,
        ]);


        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $rijst->id,
            'note_user' => 'voor 3 a 4 personen (liefst japanse short grain)'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $olie->id,
            'note_user' => 'om in te bakken (voorkeur voor groentenolie of pindaolie)'
        ]);


        $recipe = Recipe::create([
            'user_id' => $paulD->id,
            'title' => 'Chili sin carne',
            'slug' => 'chili-sin-carne',
            'instructions' =>
                '<p>
                    1. Bak je Jalapeño burgers volgens de verpakking. Haal deze uit de pan en snijd ze vervolgens in kleine stukken. Indien je ongekruide vleesvervangers gebruikt, breng ze een beetje op smaak met wat zout en zwarte peper. Zet het ‘vlees’ apart voor later.

                    2. Kook ondertussen je rijst volgens de verpakking.

                    3. Verwarm een (braad)pan met olie/bakvet naar keuze. Versnipper de rode uien en doe deze samen met de tomatenpuree in de pan. Terwijl deze liggen te fruiten snijd je ook de knoflook en het pepertje en voeg je deze toe aan de pan, beter haal je de zaadjes er niet uit =)

                    4. Snij de prei en voeg deze toe aan de pan, doe ook de oregano, komijn en paprikapoeder bij het mengsel. Voeg de twee blikken gepelde tomaten toe, even roeren tot een geheel.

                    5. Snijdt je paprika’s en tomaten in blokjes en voeg deze toe aan de pan, voeg na een minuutje ook de kidneybonen, bruine bonen, mais en kapucijners toe. Roer het geheel goed door en laat dit 10 minuutjes pruttelen.

                    6. Voeg het ‘vlees’ toe aan het geheel, roer dit goed door. Voeg naar smaak zout en de chipotle saus toe. Garneer eventueel met wat blaadjes koriander.
                </p>',
            'note' =>
                '<p>
                    Variatie tips:

                    Je kunt de chili ook met rundergehakt maken. Dit hoef je tussendoor niet uit de pan te halen.
                    Wie meer zin heeft in comfortfood kan de rijst vervangen met nacho chips, dan kun je de chili lekker scheppen. Als je het helemaal af wilt maken doe je er nog wat Crème fraîche erbij ook.
                    Je kunt de Chili Sin Carne (zonder rijst) ook in een wrap eten, eventueel met avocado en wat kaas.
                </p>',
            'number_of_servings' => 4,
            'image' => '/images/recipePics/chiliSinCarne.jpg'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $jalapenoBurgers->id,
            'amount' => 4,
            'note_user' => 'van Garden Gourmet, AH'
        ]);


        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $koriander->id,
            'note_user' => 'naar smaak, eventueel als garnering'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $bruineBonen->id,
            'measurement_id' => $pot->id,
            'amount' => 1,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $kidneyBonen->id,
            'measurement_id' => $blik->id,
            'amount' => 1,
            'note_user' => 'niet in chilisaus'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $mais->id,
            'measurement_id' => $blikje->id,
            'amount' => 1,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $kapucijners->id,
            'measurement_id' => $blikje->id,
            'amount' => 1,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $prei->id,
            'amount' => 1,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $uien->id,
            'amount' => 3,
            'note_user' => 'rood'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $knoflook->id,
            'measurement_id' => $teentjes->id,
            'amount' => 5,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $rodePeper->id,
            'amount' => 1,
            'note_user' => 'Habanero\'s zijn top'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $chipotleSaus->id,
            'measurement_id' => $theelepel->id,
            'amount' => 3,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $oregano->id,
            'measurement_id' => $theelepel->id,
            'amount' => 1,
            'note_user' => 'Mexicaanse oregano geniet de voorkeur, even naar de Toko'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $komijn->id,
            'measurement_id' => $theelepel->id,
            'amount' => 2,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $paprikaPoeder->id,
            'measurement_id' => $theelepel->id,
            'amount' => 2,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $tomatenpuree->id,
            'measurement_id' => $blikje->id,
            'amount' => 1,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $gepeldeTomaten->id,
            'measurement_id' => $blik->id,
            'amount' => 1,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $tomaat->id,
            'amount' => 2,
            'note_user' => 'vers'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $paprika->id,
            'amount' => 1,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $rijst->id,
            'note_user' => 'ik gebruik zelf bruine/volkoren rijst'
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $pompoenpitten->id,
            'measurement_id' => $handje->id,
            'amount' => 1,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $peper->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $zout->id,
        ]);

        $recipe->ingredients()->attach($recipe->id, [
            'ingredient_id' => $olie->id,
        ]);


    }
}
