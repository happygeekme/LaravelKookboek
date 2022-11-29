<x-layout>
{{--    @dd(session());--}}
    <secion>
        <main class="max-w-fit mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Stuur hier je recept in</h1>
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                       for="ingredients"
                >
                    Ingredienten
                </label>
                @if(session()->has('ingredientsSelected'))
                    <div>
                        @foreach(session()->get('ingredientsSelected') as $ingredient)
                            Hoeveelheid: {{ $ingredient->amount }} Maat: {{ $ingredient->measurement }} Ingredient: {{ $ingredient->name }}
                        @endforeach
                    </div>
                @endisset
                <div>

                    <form method="POST" action="form-add-ingredient">
                        @csrf
                        Hoeveelheid: <input id="amount" type="integer"/>

                        Eventueel maat (gram, theelepel, etc): <input id="measurement" type="text"/>

                        <select name="ingredients" id="ingredient-select">
                            <option>Selecteer Ingredient</option>
                            @foreach($ingredients as $ingredient) {
                                <option id="{{$ingredient->id}}" value="{{$ingredient->id}}">{{ $ingredient->name }}</option>
                            @endforeach
                            <option id="newIngredient" value="new_ingredient">ander ingredient</option>
                            <input type="submit" value="+">
                        </select>

                    </form>
                </div>
            </div>
            <form method="POST" action="/send-recipe" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="title"
                    >
                        Titel
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="title"
                           id="title"
                           value="{{ old('title') }}"
                           required
                    >

                    @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="number_of_servings"
                    >
                        Aantal personen
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="number"
                           name="number_of_servings"
                           id="number_of_servings"
                           required
                    >

                    @error('number_of_servings')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="note"
                    >
                        opmerkingen of tips
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="note"
                           id="note"
                           value="{{ old('note_user') }}"
                           required
                    >

                    @error('note')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="instructions"
                    >
                        Instructies
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="instructions"
                           id="instructions"
                           value="{{ old('instructions') }}"
                           required
                    >

                    @error('instructions')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    >
                        verzend
                    </button>

                </div>
            </form>
        </main>
    </secion>
</x-layout>
