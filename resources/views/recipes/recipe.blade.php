<x-layout>
{{--@dd($recipe)--}}
    <section class="px-6 py-8">

        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">

            <a href="/recipes"
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
                Terug naar recepten
            </a>

            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">

                <div class="col-span-12">
                    <img src="{{ $recipe->image }}" alt="Recipe Image" class="rounded-xl">

                    <p class="mt-4 block text-gray-400 text-xs">
                        Toegevoegd: <time>{{ $recipe->created_at->diffForHumans() }}</time>
                    </p>
                </div>

                <div class="col-span-12 mt-10">

                    <div class="lg:grid-cols-12">

                        <div class="col-span-12">
                            <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                                {{ $recipe->title }}
                            </h1>
                        </div>

                        <div class="col-span-4 inline-block">
                            <div class="flex items-center lg:justify-left text-sm">
                                <img src="{{ $recipe->user->image }}" alt="User Image" width="200px">
                            </div>
                                Recept ontvangen van:<h5 class="font-bold">{{ $recipe->user->name }}</h5>
                        </div>

                        <div class="col-span8 inline-block ml-10">
                                <h5 class="font-bold">Ingredienten:</h5>
                                <ul>
                                    @foreach($recipe->ingredients as $ingredient)
                                        <li>
                                            - {{ $ingredient->pivot->amount }} {{ $ingredient->pivot->measurement }} {{ $ingredient->name }} {{$ingredient->pivot->note_user}}
                                        </li>
                                    @endforeach
                                </ul>
                        </div>
                    </div>

                    <div class="space-y-4 lg:text-lg leading-loose mt-20">

                        <h2 class="font-bold text-lg">Bereidingswijze:</h2>

                        <p>{!! $recipe->instructions !!}</p>

                        <p>{!! $recipe->note !!}</p>

                    </div>
                </div>
            </article>
        </main>


    </section>


</x-layout>
