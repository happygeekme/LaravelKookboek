<x-layout>
    <secion>
        <main class="max-w-fit mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <a href="/admin/dashboard"
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

                Terug naar dashboard
            </a>
            <h1 class="text-center font-bold text-xl">Edit Recept</h1>

            <form method="POST"
                  action="/admin/recipes/{{ $recipe->id }}"
                  class="mt-10"
                  enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <input type="hidden" id="recipe_id" value="{{ $recipe->id }}" name="recipe_id">
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-s text-black-700"
                           for="ingredients"
                    >
                        Ingredienten
                    </label>
                </div>

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
                           value="{{ $recipe->title }}"
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
                           value="{{ $recipe->number_of_servings }}"
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
                           value="{{ $recipe->note }}"
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

                    <textarea class="border border-gray-400 p-2 w-full h-40"
                              name="instructions"
                              id="instructions"
                              required
                    >{{ $recipe->instructions }}</textarea>

                    @error('instructions')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="image"
                    >
                        Afbeelding
                    </label>
                    <div class="flex mt-6">
                        <input class="border border-gray-400 p-2 w-full"
                               type="file"
                               name="image"
                               id="image"
                               value="{{ $recipe->image }}"
                        >

                        <img src="{{ $recipe->image }}"
                             alt="" class="rounded-xl"
                             width="100">
                    </div>
                    </div>
                        <label class="block mb-2 uppercase font-bold text-s text-black-700"
                               for="ingredients"
                        >
                            Ingredienten
                        </label>

                        @foreach($ingredients as $ingredient)
                            <div class="block">
                                <div class="inline-block">
                                    <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                           for="amountIngredient"
                                    >
                                        Hoeveelheid
                                    </label>

                                    <input class="border border-gray-400 p-2"
                                           type="number"
                                           name="amountIngredient"
                                           id="amountIngredient"
                                           value="{{ $ingredient->pivot->amount }}"
                                    >
                                </div>
                                <div class="inline-block">
                                    <label class="mb-2 uppercase font-bold text-xs text-gray-700"
                                           for="measurementIngredient"
                                    >
                                        Maat
                                    </label>

                                    <input class="border border-gray-400 p-2"
                                           type="text"
                                           name="measurementIngredient"
                                           id="measurementIngredient"
                                           value="{{ $ingredient->pivot->measurement }}"
                                    >
                                </div>

                                <div class="inline-block">
                                    <select name="ingredient"
                                            id="ingredient">
                                        <option id="$ingredient->id"
                                                value="{{ $ingredient->id }}"
                                        >{{ $ingredient->name }}
                                        </option>

                                            @foreach($allIngredients as $ingredient)
                                                <option id="{{$ingredient->id}}"
                                                        value="{{$ingredient->id}}"
                                                >{{ $ingredient->name }}
                                                </option>
                                            @endforeach
                                    </select>
                                </div>

                            </div>
                        @endforeach

                <div class="mb-6">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                    >
                        Update
                    </button>

                </div>
            </form>
        </main>
    </secion>
</x-layout>
