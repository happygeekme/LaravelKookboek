<x-layout>
    <x-slot name="content">
        <img src="{{ $recipe->image }}" width="500" alt="Plate" />
        <h2>{!! $recipe->title !!}</h2>
        <h4>Door: {{ $user->name }}</h4>
        <img src="{{ $user->image }}" width="300" alt="userImage" />

        <div>
            <h3>Ingredienten:</h3>
            @foreach($ingredients as $ingredient)
                {{ $ingredient->quantity }} {{ $ingredient->measurement }} {{ $ingredient->name }}
            @endforeach
        </div>

        <div>
            <h3>Bereidingswijze:</h3>
            {!! $recipe->instructions !!}
        </div>

        <a href="/">Terug</a>
    </x-slot>
</x-layout>
