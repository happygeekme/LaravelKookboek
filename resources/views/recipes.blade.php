<x-layout>
    @include('_recipes-header');

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($recipes->count())

            <div class="lg:grid lg:grid-cols-2">

                <x-recipe-featured-card :recipe="$recipes[0]"/>
                <x-cocktail-featured-card />

            </div>

            @if ($recipes->count() > 1)
                <div class="lg:grid lg:grid-cols-3">
                    @foreach($recipes->skip(1) as $recipe)
                        <x-recipe-card :recipe="$recipe"/>
                    @endforeach
                </div>
            @endif

        @else
            <p>Er zijn nog geen recepten beschikbaar, we zien je graag later terug.</p>
        @endif

    </main>
</x-layout>


