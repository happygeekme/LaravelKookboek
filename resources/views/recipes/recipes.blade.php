<x-layout>
    @include('recipes._recipes-header');
{{--    @dd($recipes)--}}

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($recipes->count())

            @if ($recipes->count() > 1)
                <div class="lg:grid lg:grid-cols-3">
                    @foreach($recipes as $recipe)
                        <x-recipe-card :recipe="$recipe"/>
                    @endforeach
                </div>
            @endif

        @else
            <p>Er zijn nog geen recepten beschikbaar, we zien je graag later terug.</p>
        @endif
    </main>
</x-layout>


