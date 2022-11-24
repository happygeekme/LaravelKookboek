<x-layout>
    @include('home._home-header');
{{--    @dd($recipe)--}}

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if ($recipe->count() || $drink->count())

            <div class="lg:grid lg:grid-cols-2">

                <x-recipe-featured-card :recipe="$recipe"/>
                <x-drink-featured-card :drink="$drink"/>

            </div>

        @else
            <p>Er zijn nog geen recepten beschikbaar, we zien je graag later terug.</p>
        @endif

    </main>

</x-layout>
