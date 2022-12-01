<x-layout>
    <secion>
        <main class="max-w-fit mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Edit Recept</h1>

            <form method="POST" action="/admin/recipes/{{ $recipe->id }}" class="mt-10" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

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

                        <img src="{{ 'public/storage/recipePics' . $recipe->image }}" alt="" class="reounded-xl" width="100">
                    </div>
                </div>

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
