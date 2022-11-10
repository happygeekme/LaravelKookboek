<x-layout>
    <x-slot name="content">
        <img src="{{ $recipe->image }}" width="500" alt="Plate" />
        <h2>{!! $recipe->title !!}</h2>

        <div>
            <h3>Ingredienten:</h3>
        </div>

        <div>
            <h3>Bereidingswijze:</h3>
            {!! $recipe->instructions !!}
        </div>

        <a href="/">Terug</a>

    </x-slot>
</x-layout>
