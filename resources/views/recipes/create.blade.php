<x-layout>
    <secion>
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Stuur hier je recept in</h1>
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
                           type="integer"
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
                           for="ingredients"
                    >
                        Ingredienten
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="ingredients"
                           id="ingredients"
                           value="{{ old('ingredients') }}"
                           required
                    >

                    @error('ingredients')
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
