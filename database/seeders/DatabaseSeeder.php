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
            'name' => 'Luuk',
            'image' => '/images/userPics/Luuk.jpg'
        ]);

        $manon = User::create([
            'name' => 'Manon',
            'image' => '/images/userPics/Manon(1).jpg'
        ]);

        $jitske = User::create([
            'name' => 'Jitske',
            'image' => '/images/userPics/Jitske(1).jpg'
        ]);

        $martijnH = User::create([
            'name' => 'Martijn H',
            'image' => '/images/userPics/Martijn.jpg'
        ]);

        $simoneP = User::create([
            'name' => 'Simone P',
            'image' => '/images/userPics/SimoneP2.jpg'
        ]);

        $jorik = User::create([
            'name' => 'Jorik',
            'image' => '/images/userPics/Jorik.jpg'
        ]);

        $ilseB = User::create([
            'name' => 'Ilse B',
            'image' => '/images/userPics/IlseB2.jpg'
        ]);

        $pascal = User::create([
            'name' => 'Pascal',
            'image' => '/images/userPics/Pascal.jpg'
        ]);

        $casper = User::create([
            'name' => 'Casper',
            'image' => '/images/userPics/CasperV.jpg'
        ]);

        $geranda = User::create([
            'name' => 'Geranda',
            'image' => '/images/userPics/Geranda.jpg'
        ]);

        $annemieke = User::create([
            'name' => 'Annemieke',
            'image' => '/images/userPics/Annemieke.jpg'
        ]);

        $jordy = User::create([
            'name' => 'Jordy',
            'image' => '/images/userPics/JordyII.jpg'
        ]);

        $quinn = User::create([
            'name' => 'Quinn',
            'image' => '/images/userPics/Quinn(1).jpg'
        ]);

        $paulD = User::create([
            'name' => 'Paul D',
            'image' => '/images/userPics/Paul.jpg'
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
            'measurement' => 'gram',
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

        $recipe = Recipe::create([
            'user_id' => $simoneP->id,
            'title' => 'Plaatgroenten met *',
            'instructions' =>
                '<p>
                    Stap 1: Kies 3 of 4 van je favoriete groenten.
                    Stap 1: Kies 3 of 4 van je favoriete groenten.
                    Bijvoorbeeld:
                    Aardappelen (piepers, krieltjes, kruimelig, zoet maakt allemaal niet uit)
                    Paprika (Alle kleuren mogen, 2 of 3 ook, punt paprika, whatever)
                    Courgette
                    Aubergine
                    Tomaat
                    Ui
                    Wortels (ook alle kleuren mogen)

                    & kies * = Iets extra’s naar keuze.
                    Bijvoorbeeld:
                    Feta
                    Haloumi
                    Tofu
                    Salami
                    Hamblokjes
                    Kipreepjes

                    Ook nodig:
                    1 a 2 tenen knoflook (meer mag ook, maar graag dan thuis werken dan de dag erna)
                    4 eetl (olijf)olie
                    Kruiden die je hebt, italiaanse kruiden mix bijvoorbeeld

                    De hoeveelheid groente en extra’s kun je zelf inschatten hoeveel je op kan.

                    Bereiden
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

        Ingredient::create([
            'name' => 'favoriete groenten naar keuze',
            'recipe_id' => $recipe->id,
            'quantity' => 4
        ]);

        Ingredient::create([
            'name' => 'Iets extra\'s naar keuze',
            'recipe_id' => $recipe->id,
        ]);

        $recipe = Recipe::create([
            'user_id' => $ilseB->id,
            'title' => 'Kip met naanbrood, hummus en mangosalsa',
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

        Ingredient::create([
            'name' => 'kipfilets',
            'recipe_id' => $recipe->id,
            'quantity' => 4
        ]);

        Ingredient::create([
            'name' => 'beschuiten',
            'recipe_id' => $recipe->id,
            'quantity' => 2
        ]);

        Ingredient::create([
            'name' => 'eieren',
            'recipe_id' => $recipe->id,
            'quantity' => 2
        ]);

        Ingredient::create([
            'name' => 'olijfolie',
            'recipe_id' => $recipe->id,
            'measurement' => 'eetlepels',
            'quantity' => 4
        ]);

        Ingredient::create([
            'name' => 'naanbroden',
            'recipe_id' => $recipe->id,
            'quantity' => 2
        ]);

        Ingredient::create([
            'name' => 'rode peper',
            'recipe_id' => $recipe->id,
            'quantity' => 0.5
        ]);

        Ingredient::create([
            'name' => 'mango, eetrijp',
            'recipe_id' => $recipe->id,
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'rucola',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 75
        ]);

        Ingredient::create([
            'name' => 'koriander, vers',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 15
        ]);

        Ingredient::create([
            'name' => 'hummus',
            'recipe_id' => $recipe->id,
            'measurement' => 'eetlepels',
            'quantity' => 6
        ]);

        $recipe = Recipe::create([
            'user_id' => $pascal->id,
            'title' => 'Nacho\'s met groenten en kaas',
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

        Ingredient::create([
            'name' => 'nacho chips',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 200
        ]);

        Ingredient::create([
            'name' => 'vlees',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' =>200
        ]);

        Ingredient::create([
            'name' => 'ui',
            'recipe_id' => $recipe->id,
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'knoflook',
            'recipe_id' => $recipe->id,
            'measurement' => 'tenen',
            'quantity' => 2
        ]);

        Ingredient::create([
            'name' => 'paprika, rood',
            'recipe_id' => $recipe->id,
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'paprika, geel of groen',
            'recipe_id' => $recipe->id,
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'prei',
            'recipe_id' => $recipe->id,
            'quantity' => 0.5
        ]);

        Ingredient::create([
            'name' => 'tomaat',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 100
        ]);

        Ingredient::create([
            'name' => 'kaas, geraspt of cheddar',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 100
        ]);

        Ingredient::create([
            'name' => 'oregano',
            'recipe_id' => $recipe->id,
            'measurement' => 'theelepels',
            'quantity' => 2
        ]);

        Ingredient::create([
            'name' => 'komijn',
            'recipe_id' => $recipe->id,
            'measurement' => 'theelepels',
            'quantity' => 2
        ]);

        Ingredient::create([
            'name' => 'creme fraiche',
            'recipe_id' => $recipe->id,
            'measurement' => 'ml',
            'quantity' => 50
        ]);


        $recipe = Recipe::create([
            'user_id' => $casper->id,
            'title' => 'Hartige taart met spinazie en feta',
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

        Ingredient::create([
            'name' => 'bladspinazie',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 600
        ]);

        Ingredient::create([
            'name' => 'feta',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 200
        ]);

        Ingredient::create([
            'name' => 'eieren',
            'recipe_id' => $recipe->id,
            'quantity' => 6
        ]);

        Ingredient::create([
            'name' => 'kaas, geraspt (bijvoorkeur oud)',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'citroen',
            'recipe_id' => $recipe->id,
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'knoflook',
            'recipe_id' => $recipe->id,
            'measurement' => 'tenen',
            'quantity' => 2
        ]);

        Ingredient::create([
            'name' => 'ui',
            'recipe_id' => $recipe->id,
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'peper',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'zout',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'chili vlokken',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'cashew noten',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'zalm OF panchetta (optioneel)',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'bladerdeeg',
            'recipe_id' => $recipe->id,
        ]);

        $recipe = Recipe::create([
            'user_id' => $geranda->id,
            'title' => 'Gnocchi met doperwtenpesto en burrata',
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

        Ingredient::create([
            'name' => 'doperwten, vers',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 100
        ]);

        Ingredient::create([
            'name' => 'pesto, vers',
            'recipe_id' => $recipe->id,
            'measurement' => 'eetlepel',
            'quantity' => 1.5
        ]);

        Ingredient::create([
            'name' => 'citroensap',
            'recipe_id' => $recipe->id,
            'measurement' => 'theelepel',
            'quantity' => 0.5
        ]);

        Ingredient::create([
            'name' => 'citroenrasp',
            'recipe_id' => $recipe->id,
            'measurement' => 'theelepel',
            'quantity' => 0.5
        ]);

        Ingredient::create([
            'name' => 'gnocchi, vers',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 200
        ]);

        Ingredient::create([
            'name' => 'rucola',
            'recipe_id' => $recipe->id,
            'measurement' => 'handje',
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'burratini of 1/2 burrata, 30 minuten uit de koelkast',
            'recipe_id' => $recipe->id,
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'olijfolie, extra vierge',
            'recipe_id' => $recipe->id,
            'measurement' => 'eetlepel',
            'quantity' => 1
        ]);

        $recipe = Recipe::create([
            'user_id' => $annemieke->id,
            'title' => 'Spinazietaart met feta',
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

        Ingredient::create([
            'name' => 'filodeeg',
            'recipe_id' => $recipe->id,
            'measurement' => 'grote vellen',
            'quantity' => 4
        ]);

        Ingredient::create([
            'name' => 'spinazie',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 600
        ]);

        Ingredient::create([
            'name' => 'ui',
            'recipe_id' => $recipe->id,
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'knoflook',
            'recipe_id' => $recipe->id,
            'measurement' => 'tenen',
            'quantity' => 2
        ]);

        Ingredient::create([
            'name' => 'eieren',
            'recipe_id' => $recipe->id,
            'quantity' => 4
        ]);

        Ingredient::create([
            'name' => 'kwark',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 125
        ]);

        Ingredient::create([
            'name' => 'feta',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 150
        ]);

        Ingredient::create([
            'name' => 'peterselie, vers',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 15
        ]);

        Ingredient::create([
            'name' => 'dille, vers',
            'recipe_id' => $recipe->id,
            'measurement' => 'takjes',
            'quantity' => 2
        ]);

        Ingredient::create([
            'name' => 'sesamzaad',
            'recipe_id' => $recipe->id,
            'measurement' => 'eetlepel',
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'peper',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'zout',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'olijfolie',
            'recipe_id' => $recipe->id,
        ]);

        $recipe = Recipe::create([
            'user_id' => $jordy->id,
            'title' => 'Sushibowl met zalmsnippers en gembermayonaise',
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

        Ingredient::create([
            'name' => 'radijs',
            'recipe_id' => $recipe->id,
            'measurement' => 'bos',
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'risottorijs',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 150
        ]);

        Ingredient::create([
            'name' => 'gember, vers',
            'recipe_id' => $recipe->id,
            'measurement' => 'cm',
            'quantity' => 3
        ]);

        Ingredient::create([
            'name' => 'zalmsnippers',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 160
        ]);

        Ingredient::create([
            'name' => 'komkommer',
            'recipe_id' => $recipe->id,
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'avocado',
            'recipe_id' => $recipe->id,
            'quantity' => 0.5
        ]);

        Ingredient::create([
            'name' => 'mayonaise',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 50
        ]);

        Ingredient::create([
            'name' => 'sojasaus',
            'recipe_id' => $recipe->id,
            'measurement' => 'ml',
            'quantity' => 20
        ]);

        Ingredient::create([
            'name' => 'gomasio',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 5
        ]);

        Ingredient::create([
            'name' => 'groentebouillonblokje',
            'recipe_id' => $recipe->id,
            'quantity' => 0.5
        ]);

        Ingredient::create([
            'name' => 'suiker',
            'recipe_id' => $recipe->id,
            'measurement' => 'theelepels',
            'quantity' => 3
        ]);

        Ingredient::create([
            'name' => 'wittewijnazijn',
            'recipe_id' => $recipe->id,
            'measurement' => 'eetlepels',
            'quantity' => 4
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
            'user_id' => $quinn->id,
            'title' => 'Japanse golden curry',
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

        Ingredient::create([
            'name' => 'Golden Curry Mix (https://amazingoriental.com/product/golden-curry-sausmix-mild-2/)',
            'recipe_id' => $recipe->id,
            'measurement' => 'pakje',
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'ui',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 350
        ]);

        Ingredient::create([
            'name' => 'wortel',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 100
        ]);

        Ingredient::create([
            'name' => 'aardappelen (niet kruimig)',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 150
        ]);

        Ingredient::create([
            'name' => 'water',
            'recipe_id' => $recipe->id,
            'measurement' => 'ml',
            'quantity' => 500
        ]);

        Ingredient::create([
            'name' => 'kippendijfilet',
            'recipe_id' => $recipe->id,
            'measurement' => 'gram',
            'quantity' => 400
        ]);

        Ingredient::create([
            'name' => 'rijst',
            'recipe_id' => $recipe->id,
            'measurement' => 'personen',
            'quantity' => 4
        ]);

        Ingredient::create([
            'name' => 'olie om in te bakken (voorkeur groentenolie of pindaolie)',
            'recipe_id' => $recipe->id,
        ]);

        $recipe = Recipe::create([
            'user_id' => $paulD->id,
            'title' => 'Chili sin carne',
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

        Ingredient::create([
            'name' => 'Jalapeño burgers (van Garden Gourmet, AH)',
            'recipe_id' => $recipe->id,
            'quantity' => 4
        ]);

        Ingredient::create([
            'name' => 'Koriander naar smaak, eventueel als garnering',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'bruine bonen',
            'recipe_id' => $recipe->id,
            'measurement' => 'pot',
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'kidney bonen (niet in chilisaus)',
            'recipe_id' => $recipe->id,
            'measurement' => 'blik',
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'mais',
            'recipe_id' => $recipe->id,
            'measurement' => 'blikje',
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'kapucijners',
            'recipe_id' => $recipe->id,
            'measurement' => 'blikje',
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'prei',
            'recipe_id' => $recipe->id,
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'uien, rood',
            'recipe_id' => $recipe->id,
            'quantity' => 3
        ]);

        Ingredient::create([
            'name' => 'knoflook',
            'recipe_id' => $recipe->id,
            'measurement' => 'tenen',
            'quantity' => 5
        ]);

        Ingredient::create([
            'name' => 'rode peper, Habanero\'s zijn top',
            'recipe_id' => $recipe->id,
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'chipotlé (saus)',
            'recipe_id' => $recipe->id,
            'measurement' => 'theelepels',
            'quantity' => 3
        ]);

        Ingredient::create([
            'name' => 'oregano (Mexicaanse oregano geniet dde voorkeur, even naar de toko)',
            'recipe_id' => $recipe->id,
            'measurement' => 'theelepel',
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'komijn',
            'recipe_id' => $recipe->id,
            'measurement' => 'theelepels',
            'quantity' => 2
        ]);

        Ingredient::create([
            'name' => 'paprikapoeder',
            'recipe_id' => $recipe->id,
            'measurement' => 'theelepels',
            'quantity' => 2
        ]);

        Ingredient::create([
            'name' => 'tomatenpuree',
            'recipe_id' => $recipe->id,
            'measurement' => 'blikje',
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'gepelde tomaten',
            'recipe_id' => $recipe->id,
            'measurement' => 'blik',
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'tomaten, vers',
            'recipe_id' => $recipe->id,
            'quantity' => 2
        ]);

        Ingredient::create([
            'name' => 'paprika',
            'recipe_id' => $recipe->id,
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'rijst (ik gebruik zelf bruine/volkoren rijst)',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'pompoenpitten',
            'recipe_id' => $recipe->id,
            'measurement' => 'handje',
            'quantity' => 1
        ]);

        Ingredient::create([
            'name' => 'olie',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'zout',
            'recipe_id' => $recipe->id,
        ]);

        Ingredient::create([
            'name' => 'peper',
            'recipe_id' => $recipe->id,
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
