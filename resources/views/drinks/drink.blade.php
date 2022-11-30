<x-layout>
    <section class="px-6 py-8">

        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">

            <a href="/drinks"
               class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                    <g fill="none" fill-rule="evenodd">
                        <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                        </path>
                        <path class="fill-current"
                              d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                        </path>
                    </g>
                </svg>
                Terug overzicht drankjes
            </a>

            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">

                <div class="inline col-span-4">
                    <img src="{{ $drink['strDrinkThumb'] }}" alt="Recipe Image" class="rounded-xl object-cover h-100 w-100">
                </div>

                <div class="col-span-6">
                    <div class="hidden lg:flex justify-between mb-6">

                        <div class="space-x-2">
                            <a href="#"
                               class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                               style="font-size: 10px">{{ $drink['strCategory'] }}</a>
                            <a href="#"
                               class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                               style="font-size: 10px">{{ $drink['strAlcoholic'] }}</a>
                        </div>
                    </div>
                    <div>
                        <h1 class="font-bold text-3xl lg:text-4xl">
                            {{ $drink['strDrink'] }}
                        </h1>
                    </div>
                    <div class="col-span-4 lg:pt-14 mb-10">


                        <div class="ml-3">
                            <div>
                                <h5 class="font-bold">Type glas:</h5>
                                {{ $drink['strGlass'] }}
                            </div>

                            <h5 class="font-bold">Ingredienten:</h5>
                            <ul>
                                @for($i = 1; $i <= 15; $i ++)
                                    @if($drink['strIngredient' . str($i)])
                                        <li>
                                            - {{ $drink['strMeasure' . str($i)] }} {{ $drink['strIngredient' . str($i)] }}
                                        </li>
                                    @endif
                                @endfor

                            </ul>
                        </div>
                    </div>
                </div>




                    <div class="space-y-4 lg:text-lg leading-loose col-span-8">

                        <h2 class="font-bold text-lg">Bereidingswijze:</h2>

                        <p>{!! $drink['strInstructions'] !!}</p>


                    </div>
            </article>
        </main>
    </section>

</x-layout>
