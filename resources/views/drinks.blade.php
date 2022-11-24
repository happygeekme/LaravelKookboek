<x-layout>
    @include('_drinks-header');
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        @if (count($drinks) > 0)
            <div class="lg:grid lg:grid-cols-3">
                @foreach($drinks as $drink)
                    <x-drink-card :drink="$drink"/>
                @endforeach
            </div>

        @else
            <p>Er zijn geen drankjes beschikbaar, we zien je graag later terug.</p>

        @endif

    </main>
</x-layout>
