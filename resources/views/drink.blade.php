<x-layout>

    <section class="px-6 py-8">

        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">

            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">

                <div class="col-span-12">
                    <img src="{{ $drink['strDrinkThumb'] }}" alt="Recipe Image" class="rounded-xl">
                </div>

                <div class="col-span-12">
                    <div class="hidden lg:flex justify-between mb-6">

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

                        <div class="space-x-2">
                            <a href="#"
                               class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                               style="font-size: 10px">{{ $drink['strCategory'] }}</a>
                            <a href="#"
                               class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
                               style="font-size: 10px">{{ $drink['strAlcoholic'] }}</a>
                        </div>
                    </div>
                    <div class="lg:grid-cols-12">
                        <div class="col-span-10">
                            <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                                {{ $drink['strDrink'] }}
                            </h1>
                        </div>
                        </div>
                    </div>

                    <div class="col-span-4 lg:text-center lg:pt-14 mb-10">


{{--                        <div class="ml-3 mt-4">--}}
{{--                            <h5 class="font-bold">Ingredienten:</h5>--}}
{{--                            <ul>--}}
{{--                                @for($recipe->ingredients as $ingredient)--}}
{{--                                    <li>--}}
{{--                                        - {{ $ingredient->pivot->amount }} {{ $ingredient->pivot->measurement }} {{ $ingredient->name }} {{$ingredient->pivot->note_user}}--}}
{{--                                    </li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}



                    <div class="space-y-4 lg:text-lg leading-loose col-span-8">

                        <h2 class="font-bold text-lg">Bereidingswijze:</h2>

                        <p>{!! $drink['strInstructions'] !!}</p>

{{--                        <p>{!! $recipe->note !!}</p>--}}

                    </div>
                </div>
            </article>
        </main>


    </section>


</x-layout>
