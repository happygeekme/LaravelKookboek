<x-layout>
    <x-slot name="content">
        @foreach($recipes as $recipe)
            <div>
            <a href="/recipes/{{ $recipe->title }}" >{!! $recipe->title !!}</a>
            <img src="{{ $recipe->image }}" alt="Plate" width="200" />
            </div>
        @endforeach
    </x-slot>

</x-layout>
